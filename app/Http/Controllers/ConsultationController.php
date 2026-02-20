<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultation;

class ConsultationController extends Controller
{
    public function index()
    {
        return view('pages.book');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'date'=>'required',
            'service'=>'required'
        ]);

        Consultation::create($request->all());

        return back()->with('success','Consultation Booked!');
    }
}
