<?php

namespace App\Http\Controllers\frontend;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function create()
    {
        return view('frontend.contact');
    }


     public function store(Request $request,Contact $contact)
    {
        $validatedData = $request->validate([
        'fname' => 'required|string|max:255',
        'lname' => 'required|string|max:255',
        'phone' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string|max:1000',
        'subject' => 'required|string|max:1000',
    ]);
        $contact->create($request->all());
        return redirect()->route('frontend.contacts.create')->with('success','Successfully created');
    }
}
   