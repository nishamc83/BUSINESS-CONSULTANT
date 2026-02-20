<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    public function index(): View
    {
        return view('admin.contacts.index', [
            'contacts' => Contact::latest()->paginate(15),
        ]);
    }

    public function show(Contact $contact): View
    {
        return view('admin.contacts.show', ['contact' => $contact]);
    }

    public function destroy(Contact $contact): RedirectResponse
    {
        $contact->delete();

        return redirect()->route('admin.contacts.index')->with('success', 'Contact deleted successfully!');
    }
}
