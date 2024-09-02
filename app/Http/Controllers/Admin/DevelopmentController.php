<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDevelopmentRequest; // Custom request class for validation
use App\Http\Requests\UpdateDevelopmentRequest; // Custom request class for validation
use App\Models\Development;
use App\Models\Photo;
use App\Services\ImageService; // Assuming you have an ImageService to handle image uploads
use Illuminate\Http\Request;

class DevelopmentController extends Controller
{
    /**
     * Display a listing of the developments.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $developments = Development::with('photos')->get();

        return view('admin.development.index', compact('developments'));
    }

    /**
     * Store a newly created development in storage.
     *
     * @param  \App\Http\Requests\StoreDevelopmentRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreDevelopmentRequest $request)
    {
        $data = $request->validated();

        // Handle the image upload
        if ($request->hasFile('image')) {
            $data['image'] = (new ImageService())->store($request->image, 'development');
        }

        // Create the Development entry
        $development = Development::create($data);

        // Handle gallery photos upload
        if ($request->hasFile('gallery_photos')) {
            foreach ($request->file('gallery_photos') as $photo) {
                $photoPath = (new ImageService())->store($photo, 'development/gallery');

                $development->photos()->create([
                    'photo' => $photoPath,
                    'title' => $photo->getClientOriginalName(),
                ]);
            }
        }

        return back()->with('success', __('admin.Data created successfully'));
    }

    /**
     * Show the form for editing the specified development.
     *
     * @param  \App\Models\Development  $development
     * @return \Illuminate\View\View
     */
    public function edit(Development $development)
    {
        return view('admin.development.edit', compact('development'));
    }

    /**
     * Update the specified development in storage.
     *
     * @param  \App\Http\Requests\UpdateDevelopmentRequest  $request
     * @param  \App\Models\Development  $development
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateDevelopmentRequest $request, Development $development)
    {
        $data = $request->validated();

        // Handle the image upload
        if ($request->hasFile('image')) {
            $data['image'] = (new ImageService())->store($request->image, 'development');
        }

        $development->update($data);

        // Handle gallery photos upload
        if ($request->hasFile('gallery_photos')) {
            foreach ($request->file('gallery_photos') as $photo) {
                $photoPath = (new ImageService())->store($photo, 'development/gallery');

                $development->photos()->create([
                    'photo' => $photoPath,
                    'title' => $photo->getClientOriginalName(),
                ]);
            }
        }

        return back()->with('success', __('admin.Data updated successfully'));
    }

    /**
     * Remove the specified development from storage.
     *
     * @param  \App\Models\Development  $development
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Development $development)
    {
        // Delete associated photos
        foreach ($development->photos as $photo) {
            $photo->delete();
        }

        $development->delete();

        return back()->with('success', __('admin.Data deleted successfully'));
    }

    public function destroyPhoto($photoId)
    {
        // Find the photo by its ID
        $photo = Photo::findOrFail($photoId);

        // Delete the photo file from storage
        if (file_exists(public_path($photo->photo))) {
            unlink(public_path($photo->photo));
        }

        // Delete the photo record from the database
        $photo->delete();

        // Redirect back with a success message
        return back()->with('success', 'Photo deleted successfully.');
    }
}
