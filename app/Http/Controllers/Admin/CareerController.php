<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        $careers = Career::all();

        return view('admin.career.index', compact('careers'));
    }

    public function destroy(Career $career)
    {
        $career->delete();

        return back()->with('success', __('admin.Data deleted successfully'));
    }
}
