<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePageRequest;
use App\Http\Requests\UpdatePageRequest;
use App\Models\Page;
use App\Services\ImageService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pages = Page::query();

        if($request->key){
            $key = $request->key;
            $pages->where(function ($query) use ($key) {
                $query->where('title', 'like', '%'.$key.'%')
                    ->orWhere('description', 'like', '%'.$key.'%');
            });
        }

        $pages = $pages->paginate(10);

        $can_update_pages = 0;

        return view('admin.page.index', compact('pages', 'can_update_pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePageRequest $request)
    {
        $data = $request->validated();

        $data['slug'] = Str::slug($data['title']);

        if($request->hasFile('banner')){
            $data['banner'] = (new ImageService())->store($request->banner, 'pages');
        }

        Page::create($data);

        return back()->with('success', 'page created successfualy');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        return view('admin.page.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePageRequest $request, Page $page)
    {
        $data = $request->validated();

        if($request->hasFile('banner')){
            $data['banner'] = (new ImageService())->store($request->banner, 'pages');
        }

        $page->update($data);

        return back()->with('success', 'page updated successfualy');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        $page->delete();

        return back()->with('success', 'page deleted successfualy');
    }
}
