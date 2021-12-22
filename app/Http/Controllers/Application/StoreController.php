<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreApplicationRequest;
use App\Models\Application;

class StoreController extends Controller
{
    public function __invoke(StoreApplicationRequest $request)
    {
//        foreach ($request->services as $service) {
//            dump($service);
//        }

//        dd($request->services);

        $application = Application::create([
            'client_surname' => $request->input('client_surname'),
            'client_name' => $request->input('client_name'),
            'client_patronymic' => $request->input('client_patronymic'),
            'client_phone' => $request->input('client_phone'),
            'additional_phone' => $request->input('additional_phone'),
            'car_brand' => $request->input('car_brand'),
            'car_model' => $request->input('car_model'),
            'car_production_year' => $request->input('car_production_year'),
            'car_vin_number' => $request->input('car_vin_number'),
            'date_time' => $request->input('date_time'),
            'approximate_duration' => $request->input('approximate_duration'),
            'description' => $request->input('description'),
            'master_id' => $request->input('master_id'),
            'status' => 'waiting',
            'user_id' => auth()->id(),
        ]);

        $application->services()->attach($request->services);

        dump($application);

        dd($application->services);
    }
}
