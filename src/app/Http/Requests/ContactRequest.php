<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'last_name' => 'required',
            'first_name' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'area_code' => 'required|digits:5',
            'local_code' => 'required|digits:4',
            'phone_number' => 'required|digits:4',
            'address' => 'required',
            'inquiry_type' => 'required',
            'inquiry_content' => 'required|max:120',
        ];
    }
    public function messages()
    {
        return [
            'last_name.required' => '姓を入力してください',
            'first_name.required' => '名を入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            'area_code.required' => '電話番号を入力してください',
            'area_code.digits' => '電話番号は5桁までの数字で入力してください',
            'local_code.required' => '電話番号を入力してください',
            'local_code.digits' => '電話番号は4桁までの数字で入力してください',
            'phone_number.required' => '電話番号を入力してください',
            'phone_number.digits' => '電話番号は4桁までの数字で入力してください',
            'address.required' => '住所を入力してください',
            'inquiry_type.required' => 'お問い合わせの種類を選択してください',
            'inquiry_content.required' => 'お問い合わせ内容を入力してください',
            'inquiry_content.max' => 'お問合せ内容は120文字以内で入力してください',
        ];
    }
}
