@extends('layouts.app')

@section('head')
<link rel="stylesheet" href="{{ asset('contact_css/confirm.css') }}">

@endsection

@section('content')
<div class="confirm-form__content">
    <h2>Confirm</h2>
    <form action="/thanks" method="post">
        @csrf
        <table>
            <tr>
                <th>お名前</th>
                <td>{{ $contact['last_name'] ?? '' }} {{ $contact['first_name'] ?? '' }}</td>
            </tr>
            <tr>
                <th>性別</th>
                <td>{{ $contact['gender'] ?? '' }}</td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td>{{ $contact['email'] ?? '' }}</td>
            </tr>
            <tr>
                <th>電話番号</th>
                <td>{{ $contact['area_code'] ?? '' }}-{{ $contact['local_code'] ?? '' }}-{{ $contact['phone_number'] ?? '' }}</td>
            </tr>
            <tr>
                <th>住所</th>
                <td>{{ $contact['address'] ?? '' }}</td>
            </tr>
            <tr>
                <th>建物名</th>
                <td>{{ $contact['building_name'] ?? '' }}</td>
            </tr>
            <tr>
                <th>お問い合わせの種類</th>
                <td>{{ $contact['inquiry_type'] ?? '' }}</td>
            </tr>
            <tr>
                <th>お問い合わせ内容</th>
                <td>{{ $contact['inquiry_content'] ?? '' }}</td>
            </tr>
        </table>
        <div class="buttons">
            <button type="submit">送信</button>
            <a href="/">修正</a>
        </div>
    </form>
</div>
@endsection
        
