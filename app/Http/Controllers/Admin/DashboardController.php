<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Models\Consultation;
use App\Models\Contact;
use App\Models\Testimonial;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('admin.dashboard', [
            'blogsCount' => Blog::count(),
            'consultationsCount' => Consultation::count(),
            'contactsCount' => Contact::count(),
            'testimonials' => Testimonial::latest()->take(5)->get(),
            'recentConsultations' => Consultation::latest()->take(5)->get(),
            'recentContacts' => Contact::latest()->take(5)->get(),
        ]);
    }
}
