<?php

namespace App\Utilities;

class ValidationRules{

    public static function rules(): array
    {
        return [
            'account_code' => 'required|unique:users,account_code',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
        ];
    }

    public static function messages(): array
    {
        return [
            'account_code.required' => 'Mã tài khoản là bắt buộc.',
            'account_code.unique' => 'Mã tài khoản đã tồn tại.',
            'email.required' => 'Email là bắt buộc.',
            'email.email' => 'Email không đúng định dạng.',
            'email.unique' => 'Email đã được sử dụng.',
            'password.required' => 'Mật khẩu là bắt buộc.',
            'password.confirmed' => 'Mật khẩu xác nhận không khớp.',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự.',
        ];
    }
    
}