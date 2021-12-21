<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreApplicationRequest;

class StoreController extends Controller
{
    public function __invoke(StoreApplicationRequest $request)
    {
        dd($request->all());
    }
}
