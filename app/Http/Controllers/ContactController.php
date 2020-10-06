<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['create', 'store', 'thankyou']]);
    }

    public function index()
    {
        $contacts = Contact::all();
        return view('contact.index', compact('contacts'));
    }

    public function create()
    {
        $contact = new Contact();
        return view('contact.create', compact('contact'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:10'
        ]);

        Contact::create($data);

        return redirect('/contact/thankyou');
    }

    public function edit(Contact $contact)
    {
        return view('contact.edit', compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:10'
        ]);

        $contact->update($data);

        return redirect('/contact');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect('/contact');
    }

    public function thankyou()
    {
        return view('contact.thankyou');
    }
}
