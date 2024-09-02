<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSliderRequest;
use App\Http\Requests\UpdateSliderRequest;
use App\Models\Slider;
use App\Services\ImageService;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();

        return view('admin.slider.index', compact('sliders'));
    }

    public function store(StoreSliderRequest $request)
    {
        $data = $request->validated();

        if($request->hasFile('image')){
            $data['image'] = (new ImageService())->store($request->image, 'slider');
        }

        Slider::create($data);

        return back()->with('success', __('admin.Data created successfully'));
    }

    public function edit(Slider $slider)
    {
        return view('admin.slider.edit', compact('slider'));
    }

    public function update(UpdateSliderRequest $request, Slider $slider)
    {
        $data = $request->validated();

        if($request->hasFile('image')){
            $data['image'] = (new ImageService())->store($request->image, 'slider');
        }
        $slider->update($data);

        return back()->with('success', __('admin.Data updated successfully'));
    }

    public function destroy(Slider $slider)
    {
        $slider->delete();

        return back()->with('success', __('admin.Data deleted successfully'));
    }
}
