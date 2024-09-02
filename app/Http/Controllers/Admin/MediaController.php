<?php

namespace App\Http\Controllers\Admin;

use App\Models\Media;
use App\Models\Photo;
use App\Models\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\ImageService;

class MediaController extends Controller
{
    /**
     * Display a listing of the media.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medias = Media::all();
        return view('admin.media.index', compact('medias'));
    }

    /**
     * Show the form for creating a new media.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.media.create');
    }

    /**
     * Store a newly created media in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'photos.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'videos.*.youtube_url' => 'nullable|string|url',
            'videos.*.title' => 'nullable|string|max:255',
            'videos.*.description' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = (new ImageService())->store($request->image, 'media');
        }

        $media = Media::create($data);

        // Handle gallery photos upload
        // if ($request->hasFile('photos')) {
        //     foreach ($request->file('photos') as $photo) {
        //         $photoPath = (new ImageService())->store($photo, 'media/photos');

        //         $media->photos()->create([
        //             'photo' => $photoPath,
        //             'title' => $request->input('photo_titles')[$loop->index] ?? '',
        //             'description' => $request->input('photo_descriptions')[$loop->index] ?? '',
        //         ]);
        //     }
        // }

        // Handle videos upload
        if ($request->has('videos')) {
            foreach ($request->input('videos') as $videoData) {
                if (!empty($videoData['youtube_url'])) {
                    $media->videos()->create([
                        'youtube_url' => $videoData['youtube_url'],
                        'title' => $videoData['title'] ?? '',
                        'description' => $videoData['description'] ?? '',
                    ]);
                }
            }
        }

        return redirect()->route('admin.media.index')->with('success', 'Media created successfully.');
    }

    /**
     * Show the form for editing the specified media.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $media = Media::findOrFail($id);
        return view('admin.media.edit', compact('media'));
    }

    /**
     * Update the specified media in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $media = Media::findOrFail($id);

        $data = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = (new ImageService())->store($request->image, 'media');
        }


        $media->update($data);

      //   // Handle gallery photos upload
      //   if ($request->hasFile('photos')) {
      //       foreach ($request->file('photos') as $photo) {
      //           $photoPath = (new ImageService())->store($photo, 'media/photos');

      //           $media->photos()->create([
      //               'photo' => $photoPath,
      //               'title' => $request->input('photo_titles')[$loop->index] ?? '',
      //               'description' => $request->input('photo_descriptions')[$loop->index] ?? '',
      //           ]);
      //       }
      //   }

      //   // Handle videos upload
      //   if ($request->has('videos')) {
      //       foreach ($request->input('videos') as $videoData) {
      //           if (!empty($videoData['youtube_url'])) {
      //               $media->videos()->updateOrCreate(
      //                   ['id' => $videoData['id'] ?? null],
      //                   [
      //                       'youtube_url' => $videoData['youtube_url'],
      //                       'title' => $videoData['title'] ?? '',
      //                       'description' => $videoData['description'] ?? '',
      //                   ]
      //               );
      //           }
      //       }
      //   }

        return redirect()->route('admin.media.index')->with('success', 'Media updated successfully.');
    }

    /**
     * Remove the specified media from storage.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $media = Media::findOrFail($id);

        $media->delete();
        return back()->with('success', 'Media deleted successfully.');
    }
}
