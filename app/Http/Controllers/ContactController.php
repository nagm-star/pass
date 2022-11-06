<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::orderBy('created_at' ,'DESC')->get();
        return view('backend.contacts.index', compact('contacts'));
    }

    public function show(Contact $contact)
    {
        return view('backend.contacts.view', compact('contact'));
    }

}
