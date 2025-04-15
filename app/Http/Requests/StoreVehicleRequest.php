<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVehicleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'license_plate' => 'nullable|unique:vehicles,license_plate', 
            'vehicle_type_id' => 'required|exists:vehicle_types,id',  
            'account_code' => 'nullable|exists:users,account_code',
            'time' => ['required', 'date_format:H:i'],
        ];
    }

    public function messages()
    {
        return [
            'license_plate.unique' => 'Biển số xe đã trùng.',
            'account_code.exists' => 'Mã tài khoản không tồn tại.',
        ];
    }
}
