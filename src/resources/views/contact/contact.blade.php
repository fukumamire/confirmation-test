@extends('layouts.app')

@section('head')
<link rel="stylesheet" href="{{ asset('contact_css/contact.css') }}">
@endsection


@section('content')
<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>Contact</h2>
    </div>
    <form action="/confirmation" method="post">
        @csrf
        <div class="form__group">
            <label for="last_name">お名前（姓）※</label>
            <input type="text" id="last_name" name="last_name" required>
        </div>
        <div class="form__group">
            <label for="first_name">お名前（名）※</label>
            <input type="text" id="first_name" name="first_name" required>
        </div>
        <div class="form__group">
            <label for="gender">性別※</label>
            <select id="gender" name="gender" required>
                <option value="">選択してください</option>
                <option value="male" selected>男性</option>
                <option value="female">女性</option>
            </select>
        </div>
        <div class="form__group">
            <label for="email">メールアドレス※</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form__group">
            <label for="phone">電話番号※</label>
            <input type="tel" id="phone" name="phone" required>
        </div>
        <div class="form__group">
            <label for="address">住所※</label>
            <input type="text" id="address" name="address" required>
        </div>
        <div class="form__group">
            <label for="building_name">建物名</label>
            <input type="text" id="building_name" name="building_name">
        </div>
        <div class="form__group">
            <label for="inquiry_type">お問い合わせの種類※</label>
            <select id="inquiry_type" name="inquiry_type" required>
                <option value="">選択してください</option>
                <option value="product_delivery">商品のお届けについて</option>
                <option value="product_exchange">商品の交換について</option>
                <option value="product_trouble">商品トラブル</option>
                <option value="shop_inquiry">ショップへのお問い合わせ</option>
                <option value="other">その他</option>
            </select>
        </div>
        <div class="form__group">
            <label for="inquiry_content">お問い合わせ内容※</label>
            <textarea id="inquiry_content" name="inquiry_content" required></textarea>
        </div>
        <button type="submit">確認画面</button>
    </form>
</div>
@endsection