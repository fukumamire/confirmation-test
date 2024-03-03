<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function form()
    {
        return view('contact.contact');
    }

    public function confirm(Request $request)
    {
        $data = $request->all();
        return view('contact.confirm', compact('data'));
    }

    public function thanks()
    {
        return view('contact.thanks');
    }
}
