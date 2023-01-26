<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Pages;
use App\Model\Content;
use App\Model\Contact;

class FrontendController extends Controller
{
    public function pages($slug)
    {
        $page = Pages::where('slug', $slug)->first();
        $detailed_page = Content::where('pages_id', $page->id)->first();
        return view('frontend.pages.index', compact('detailed_page'));
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function messagestore(Request $request)
    {
        if (!empty($_SERVER["HTTP_CLIENT_IP"])) {
            $IP = $_SERVER["HTTP_CLIENT_IP"];
        } else if (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])) {
            $IP = $_SERVER["HTTP_X_FORWARDED_FOR"];
        } else {
            $IP = $_SERVER["REMOTE_ADDR"];
        }

        $contact = new Contact();

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->ip_address = $IP;

        $contact->save();

        return redirect()->back();
    }
}
