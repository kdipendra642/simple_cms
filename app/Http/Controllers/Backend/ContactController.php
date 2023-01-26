<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Contact;

class ContactController extends BaseController
{
    public function index()
    {
        $all_contact = Contact::all();
        return view('backend.contact.index', compact('all_contact'));
    }

    public function detail_preview($id)
    {
        $detail_preview = Contact::find($id);
        return view('backend.contact.detail_preview', compact('detail_preview'));
    }
}
