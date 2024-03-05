<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function form()
    {
        $contact = [
            'last_name' => old('last_name'),
            'first_name' => old('first_name'),
            'gender' => old('gender'),
            'email' => old('email'),
            'area_code' => old('area_code'),
            'local_code' => old('local_code'),
            'phone_number' => old('phone_number'),
            'address' => old('address'),
            'building_name' => old('building_name'),
            'inquiry_type' => old('inquiry_type'),
            'inquiry_content' => old('inquiry_content'),
        ];
        return view('contact.contact', compact('contact'));
    }

    public function confirm(Request $request)
    {
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'area_code', 'local_code', 'phone_number', 'address', 'building_name', 'inquiry_type', 'inquiry_content']);

        return view('contact.confirm', compact('contact'));
    }

    public function thanks()
    {
        return view('contact.thanks');
    }

    public function store(Request $request)
    {
        $contact = $request->only([
            'last_name', 'first_name', 'gender', 'email', 'area_code', 'local_code', 'phone_number',
            'address', 'building_name', 'inquiry_type', 'inquiry_content'
        ]);
        // データのバリデーションを行う
        // データをcontactsテーブルに保存する
        return redirect('/thanks');
    }
}
