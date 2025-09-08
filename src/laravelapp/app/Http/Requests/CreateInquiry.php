<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateInquiry extends FormRequest
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
            'name' => 'required|string|max:30',
            'email' => 'required|string|email:strict,dns,spoof|max:255',
            'sex' => 'required|string|max:10',
            'category' => 'required|string|max:50',
            'area' => 'required|string|max10',
            'massege' => 'required|string|max300',
            'image' => 'string',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'お名前',
            'email' => 'メールアドレス',
            'sex' => '性別',
            'category' => 'お問合せ内容',
            'area' => 'お住まい',
            'massege' => 'メッセージ',
        ];
    }
}
