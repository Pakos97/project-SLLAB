<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{

    
    public function  home() {
        return view('welcome');
    }

  
    public function  submit(Request $request) {
        $email = $request->input('email');
        $name = $request->input('name');
        $content = compact('email', 'name');
        Mail::to('parrellapasquale97@gmail.com')->send(new ContactMail($content));
        return redirect(route('home'))->with('message', 'Grazie per esserti iscritto alla nostra newslettr');
    }
}
