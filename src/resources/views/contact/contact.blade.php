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
        <table>
            <tr>
                <th><label for="last_name">お名前<span>※</span></label></th>
                <td>
                    <input type="text" id="last_name" name="last_name" placeholder="例:山田">
                </td>
                <td>
                    <input type="text" id="first_name" name="first_name" placeholder="例:太郎">
                </td>
            </tr>
            <tr>
                <th><label for="gender">性別<span>※</span></label></th>
                <td colspan="2">
                    <div class="radio-group">
                        <input type="radio" id="male" name="gender" value="male" required checked>
                        <label for="male">男性</label>
                    </div>
                    <div class="radio-group">
                        <input type="radio" id="female" name="gender" value="female">
                        <label for="female">女性</label>
                    </div>
                    <div class="radio-group">
                    <input type="radio" id="other" name="gender" value="other">
                    <label for="other">その他</label>
                    </div>
                </td>
            </tr>
            <tr>
                <th><label for="email">メールアドレス<span>※</span></label></th>
                <td colspan="2">
                    <input type="email" id="email" name="email" placeholder="例:test@example.com">
                </td>
            </tr>
            <tr>
                <tr>
                    <th><label for="phone">電話番号<span>※</span></label></th>
                    <td><input type="tel" class="phone-input"  id="area_code" name="area_code" placeholder="例:080" required></td>
                    <td>ー</td>
                    <td><input type="tel" class="phone-input"  id="local_code" name="local_code" placeholder="例:1234" required></td>
                    <td>ー</td>
                    <td><input type="tel" class="phone-input"  id="phone_number" name="phone_number" placeholder="例:5678" required></td>
                </tr>
            </tr>
            <tr>
                <th><label for="address">住所<span>※</span></label></th>
                <td colspan="2">
                    <input type="text" id="address" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3">
                </td>
            </tr>
            <tr>
                <th><label for="building_name">建物名</label></th>
                <td colspan="2">
                    <input type="text" id="building_name" name="building_name" placeholder="例:千駄ヶ谷ハイツ101">
                </td>
            </tr>
            <tr>
                <th><label for="inquiry_type">お問い合わせの種類<span>※</span></label></th>
                <td colspan="2">
                    <select id="inquiry_type" name="inquiry_type" required>
                        <option value="" selected>選択してください</option>
                        <option value="product_delivery">商品のお届けについて</option>
                        <option value="product_exchange">商品の交換について</option>
                        <option value="product_trouble">商品トラブル</option>
                        <option value="shop_inquiry">ショップへのお問い合わせ</option>
                        <option value="other">その他</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th><label for="inquiry_content">お問い合わせ内容<span>※</span></label></th>
                <td colspan="2">
                    <textarea id="inquiry_content" name="inquiry_content" placeholder="お問い合わせ内容をご確認ください"  rows="10" required></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <button type="submit">確認画面</button>
                </td>
            </tr>
        </table>
    </form>
@endsection