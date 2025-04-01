<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function contact(Request $request) {
    $validated = $request->validate([
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ]);

    Mail::to('alex.goofymoments@gmail.com')->send(new ContactMail($validated));
    return back()->with('success', 'Email elküldve!');
}   
}
