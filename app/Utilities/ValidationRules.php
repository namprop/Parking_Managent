<?php

namespace App\Utilities;

class ValidationRules
{

    public static function rules(): array
    {
        return [
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
        ];
    }

    public static function messages(): array
    {
        return [
            'email.required' => 'Email là bắt buộc.',
            'email.email' => 'Email không đúng định dạng.',
            'email.unique' => 'Email đã được sử dụng.',
            'password.required' => 'Mật khẩu là bắt buộc.',
            'password.confirmed' => 'Mật khẩu xác nhận không khớp.',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự.',


            'duration_label.required' => 'Thời gian là bắt buộc.',
            'duration_label.unique' => 'Thời gian đã tồn tại.',
            'duration.required' => 'Số giờ là bắt buộc.',
            'duration.unique' => 'Số giờ đã tồn tại.',
            'price.required' => 'Giá là bắt buộc.',
            'price.unique' => 'Giá đã tồn tại.',

        ];
    }

    public static function rulePriceList(): array
    {
        return [
            'vehicle_type_id' => 'required|exists:vehicle_types,id',
            'duration_label' => 'required|unique:price_lists,duration_label',
            'duration' => 'required|unique:price_lists,duration',
            'price' => 'required|unique:price_lists,price',
        ];
    }
}
