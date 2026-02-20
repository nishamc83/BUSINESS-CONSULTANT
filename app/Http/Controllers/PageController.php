<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Testimonial;

class PageController extends Controller
{
    public function home()
    {
        $blogs = Blog::latest()->take(3)->get();
        $testimonials = Testimonial::all();
        return view('pages.home', compact('blogs','testimonials'));
    }

    public function about() { return view('pages.about'); }
    public function services() { return view('pages.services'); }
    public function industries() { return view('pages.industries'); }
    public function testimonials() {
        $testimonials = Testimonial::all();
        return view('pages.testimonials', compact('testimonials'));
    }
}
