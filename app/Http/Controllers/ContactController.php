<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
 

    
    public function sendMail(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);
    
        $details = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ];
    
        // Send email
        Mail::to('senevirathneravidu@gmail.com')->send(new ContactMail($details));
    
        return back()->with('success', 'Your message has been sent!');
    }
    
}
