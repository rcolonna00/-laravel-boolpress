<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewContactUserAutoreplay;
use App\Mail\NewContactAdminNotification;

class HomeController extends Controller
{  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('guest.home');
    }

    public function contacts() {
        return view('guest.contacts');
    }

    public function handleNewContact(Request $request) {
        $form_data = $request->all();
        
        Mail::to($form_data['email'])->send(new NewContactUserAutoreplay());
        // Mando mail all'amministratore
        Mail::to('colonna@gmail.com')->send(new NewContactAdminNotification($form_data));

        return redirect()->route('contacts-thankyou');
    }

    public function contactsThankYou() {
        return view('guest.contacts-thankyou');
    }
}

