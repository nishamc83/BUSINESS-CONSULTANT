<?php

namespace App\Http\Controllers\Admin;

use App\Models\Consultation;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    public function index(): View
    {
        return view('admin.consultations.index', [
            'consultations' => Consultation::latest()->paginate(15),
        ]);
    }

    public function show(Consultation $consultation): View
    {
        return view('admin.consultations.show', ['consultation' => $consultation]);
    }

    public function destroy(Consultation $consultation): RedirectResponse
    {
        $consultation->delete();

        return redirect()->route('admin.consultations.index')->with('success', 'Consultation deleted successfully!');
    }
}
