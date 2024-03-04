@extends('layouts.app')

@section('head')
<link rel="stylesheet" href="{{ asset('contact_css/confirm.css') }}">

@endsection

@section('content')
<div class="confirm-form__content">
    <h2>Confirm</h2>
    <form action="/thanks" method="post">
        @csrf
        <div>
            <label>お名前</label>
            <p>{{ $contact['last_name'] ?? '' }} {{ $contact['first_name'] ?? '' }}</p>
        </div>
        <div>
            <label>性別</label>
            <p>{{ $contact['gender'] ?? '' }}</p>
        </div>
        <div>
            <label>メールアドレス</label>
            <p>{{ $contact['email'] ?? '' }}</p>
        </div>
        <div>
            <label>電話番号</label>
            <p>{{ $contact['area_code'] ?? '' }}-{{ $contact['local_code'] ?? '' }}-{{ $contact['phone_number'] ?? '' }}</p>
        </div>
        <div>
            <label>住所</label>
            <p>{{ $contact['address'] ?? '' }}</p>
        </div>
        <div>
            <label>建物名</label>
            <p>{{ $contact['building_name'] ?? '' }}</p>
        </div>
        <div>
            <label>お問い合わせの種類</label>
            <p>{{ $contact['inquiry_type'] ?? '' }}</p>
        </div>
        <div>
            <label>お問い合わせ内容</label>
            <p>{{ $contact['inquiry_content'] ?? '' }}</p>
        </div>
        <div>
            <button type="submit">送信</button>
            <a href="/">修正</a>
        </div>
    </form>
</div>
@endsection
