<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|email|max:50',
            'phonenumber' => 'required|numeric|min:0|max:9999999999',
            'message' => 'required|max:1000',
        ]);

        // Remove _token from the data
        $data = $request->except('_token');

        // Save the contact form data to the database
        Contact::create($data);

        // Optionally, you can redirect the user to a thank you page or the contact form again with a success message
        return redirect()->route('contact.create')->with('success', 'Message sent successfully!');
    }
}
