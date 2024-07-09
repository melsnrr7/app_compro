<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('home.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Contact::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'subject' => $request->subject,
        //     'message' => $request->message,
        // ]);

        // return redirect()->to('home')->with('message', 'Data berhasil ditambah');

        // Validasi data

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        // Simpan data ke database
        // $contact = new Contact();
        // $contact->name = $validatedData['name'];
        // $contact->email = $validatedData['email'];
        // $contact->subject = $validatedData['subject'];
        // $contact->message = $validatedData['message'];
        // $contact->save();

        // Redirect atau tampilkan pesan sukses
        return redirect()->to('/')->with('success', 'Message sent successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
