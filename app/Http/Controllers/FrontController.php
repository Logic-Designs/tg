<?php

namespace App\Http\Controllers;

use App\Models\AboutContent;
use App\Models\Career;
use App\Models\Contact;
use App\Models\ContactContent;
use App\Models\Development;
use App\Models\HomeContent;
use App\Models\Media;
use App\Models\Partner;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index() {
        $home_content = HomeContent::first();
        $sliders = Slider::all();
        $developments = Development::latest()->take(4);
        $partners = Partner::all();
        $media = Media::latest()->take(5);
        $contact_content = ContactContent::first();

        return view('front.index', compact('home_content', 'contact_content','sliders', 'developments', 'partners', 'media'));
    }

    public function about(){
        $about_content = AboutContent::first();

        return view('front.about', compact('about_content'));
    }

    public function development(){
        $developments = Development::all();

        return view('front.developments', compact('developments'));
    }

    public function singleDevelopment(Development $development) {
        return view('front.single-development', compact('development'));
    }

    public function media() {
        $media = Media::all();
        return view('front.media', compact('media'));
    }

    public function singleMedia(Media $media) {
        return view('front.single-media', compact('media'));
    }

    public function careers() {
        $about_content = AboutContent::first();

        return view('front.careers', compact('about_content'));
    }

    public function storeCareer(Request $request) {
        $data = $request->validate([
            'first_name'=> 'required|string|max:50',
            'last_name'=> 'required|string|max:50',
            'email'=> 'required|email',
            'phone'=> 'required|string|max:20',
        ]);

        Career::create($data);

        return back()->with('success', 'Your request send successfaully');
    }

    public function contact() {
        $contact_content = ContactContent::first();
        return view('front.contact', compact('contact_content'));
    }

    public function storeContact(Request $request) {
        $data = $request->validate([
            'first_name'=> 'required|string|max:50',
            'last_name'=> 'required|string|max:50',
            'email'=> 'required|email',
            'phone'=> 'required|string|max:20',
        ]);

        Contact::create($data);

        return back()->with('success', 'Your request send successfaully');
    }
}
