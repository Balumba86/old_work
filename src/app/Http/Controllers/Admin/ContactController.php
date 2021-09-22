<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\ContactService;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    private $contactService;

    public function __construct(
        ContactService $contactService
    )
    {
        $this->contactService = $contactService;
    }

    public function index()
    {
        return view('admin.contacts.index', [
            'contacts' => $this->contactService->adminIndex()
        ]);
    }

    public function add()
    {
        return view('admin.contacts.add');
    }

    public function create(Request $request)
    {
        $this->contactService->adminCreate($request);

        return redirect()->route('admin-contacts');
    }

    public function edit(int $id)
    {
        return view('admin.contacts.edit', [
            'contact' => $this->contactService->adminGetById($id)
        ]);
    }

    public function update(Request $request, int $id)
    {
        $this->contactService->adminUpdate($request, $id);

        return redirect()->route('admin-contacts');
    }

    public function delete(int $id)
    {
        $this->contactService->adminDelete($id);

        return redirect()->route('admin-contacts');
    }
}
