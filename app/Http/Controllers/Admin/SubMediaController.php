<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Media;
use App\Models\Photo;
use App\Models\Video;
use App\Services\ImageService;
use Illuminate\Http\Request;

class SubMediaController extends Controller
{
     /**
     * Display a listing of the photos and videos for the specified media.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\View\View
     */
    public function index(Media $media)
    {
        $photos = $media->photos;
        $videos = $media->videos;

        return view('admin.media.sub.index', compact('media', 'photos', 'videos'));
    }

    /**
     * Store a newly created photo or video in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, Media $media)
    {
        $request->validate([
            'type' => 'required|in:photo,video',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'photo' => 'required_if:type,photo|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'youtube_url' => 'required_if:type,video|url',
        ]);

        if ($request->type == 'photo') {
            $photoPath = (new ImageService())->store($request->photo, 'media');

            $media->photos()->create([
                'title' => $request->title,
                'description' => $request->description,
                'photo' => $photoPath,
            ]);
        } else {
            $media->videos()->create([
                'title' => $request->title,
                'description' => $request->description,
                'youtube_url' => $request->youtube_url,
            ]);
        }

        return redirect()->route('admin.media.sub.index', $media->id)->with('success', 'Sub Media added successfully.');
    }

    /**
     * Show the form for editing the specified photo or video.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit(Request $request,$id)
    {
        $type = $request->type;
        if($type == 'photo'){
            $model = Photo::find($id);
        }else{
            $model = Video::find($id);
        }

        return view('admin.media.sub.edit', compact('model', 'type'));
    }

    /**
     * Update the specified photo or video in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'type' => 'required|in:photo,video',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'youtube_url' => 'nullable|url',
        ]);

        if ($request->type == 'photo') {
            $photo = Photo::find($id);
            if ($request->hasFile('photo')) {
                $photoPath = (new ImageService())->store($request->photo, 'media');
                $photo->update([
                    'title' => $request->title,
                    'description' => $request->description,
                    'photo' => $photoPath,
                ]);
            } else {
                $photo->update($request->only(['title', 'description']));
            }
        } else {
            $video = Video::find($id);
            $video->update($request->only(['title', 'description', 'youtube_url']));
        }

        return redirect()->back()->with('success', 'Sub Media updated successfully.');
    }

    /**
     * Remove the specified photo or video from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        if ($photo = Photo::find($id)) {
            $photo->delete();
        } elseif ($video = Video::find($id)) {
            $video->delete();
        }

        return back()->with('success', 'Sub Media deleted successfully.');
    }
}
