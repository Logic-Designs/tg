<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePartnerRequest;
use App\Http\Requests\UpdatePartnerRequest;
use App\Models\Partner;
use App\Services\ImageService;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::all();

        return view('admin.partner.index', compact('partners'));
    }

    public function store(Request $request)
    {
        $data = $request->validate(['photo'=> 'required|image']);

        if($request->hasFile('photo')){
            $data['photo'] = (new ImageService())->store($request->photo, 'partner');
        }

        Partner::create($data);

        return back()->with('success', __('admin.Data created successfully'));
    }

    public function edit(Partner $partner)
    {
        return view('admin.partner.edit', compact('partner'));
    }

    public function update(Request $request, Partner $partner)
    {
        $data =$request->validate(['photo'=> 'nullable|image']);


        if($request->hasFile('photo')){
            $data['photo'] = (new ImageService())->store($request->photo, 'partner');
        }
        $partner->update($data);

        return back()->with('success', __('admin.Data updated successfully'));
    }

    public function destroy(Partner $partner)
    {
        $partner->delete();

        return back()->with('success', __('admin.Data deleted successfully'));
    }
}
