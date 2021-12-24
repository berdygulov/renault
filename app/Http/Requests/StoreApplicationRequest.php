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
            'client_surname'       => 'required|alpha',
            'client_name'          => 'required|alpha',
            'client_patronymic'    => 'nullable|alpha',
            'client_phone'         => 'required',
            'additional_phone'     => 'nullable',
            'car_brand'            => 'required',
            'car_model'            => 'required',
            'car_production_year'  => 'nullable|numeric',
            'car_vin_number'       => 'nullable',
            'date_time'            => 'required|date:Y-m-d H:i:s',
            'approximate_duration' => 'nullable|numeric',
            'description'          => 'nullable',
            'services'             => 'required',
            'master_id'            => 'required',
        ];
    }
}
