<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreApplicationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'client_surname' => 'required|alpha',
            'client_name' => 'required|alpha',
            'client_patronymic' => 'nullable|alpha',
            'client_phone' => 'required|numeric',
            'additional_phone' => 'nullable|numeric',
            'car_brand' => 'required',
            'car_model' => 'required',
            'car_production_year' => 'nullable|numeric',
            'car_vin_number' => 'nullable|numeric',
            'date_time ' => 'date:Y-m-d H:i:s',
            'approximate_duration' => 'nullable|numeric',
            'description' => 'nullable',
            'user_id' => 'required',
            'master_id' => 'required',
        ];
    }
}
