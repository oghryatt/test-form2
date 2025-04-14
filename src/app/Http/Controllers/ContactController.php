<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
   public function index()
{
    $contacts = Contact::paginate(10); 
    return view('products.index', compact('contacts'));
}

public function show($id)
{
    $contact = Contact::findOrFail($id);
    return view('contacts.show', compact('contact'));
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string',
        'message' => 'required|string',
    ]);

    Contact::create([
        'name' => $request->name,
        'message' => $request->message,
    ]);

    return redirect()->route('contacts.index')->with('success', 'お問い合わせが登録されました！');
}

}
