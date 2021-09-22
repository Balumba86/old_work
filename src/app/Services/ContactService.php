<?php

namespace App\Services;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactService
{
    public function adminIndex()
    {
        $contacts = Contact::orderBy('id', 'desc')->paginate(10);

        return $contacts;
    }

    public function adminCreate(Request $request)
    {
        $data = $request->all();

        return Contact::create($data);
    }

    public function adminGetById(int $id)
    {
        $contact = Contact::where('id', $id)->get()->first();

        return $contact;
    }

    public function adminUpdate(Request $request, int $id)
    {
        $contact = Contact::where('id', $id)->get()->first();

        $data = $request->all();

        return $contact->update($data);
    }

    public function adminDelete(int $id)
    {
        $contact = Contact::where('id', $id)->get()->first();

        return $contact->delete();
    }

    // API

    public function getAll()
    {
        return Contact::all('department_name', 'email', 'phone', 'contact_name');
    }
}
