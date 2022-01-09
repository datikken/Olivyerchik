<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:contacts|max:255',
        ]);

        Contact::firstOrCreate([
            'email' => $request->email
        ]);

        return redirect('/#Contact')->with('success', 'Thank you!');
    }
}
