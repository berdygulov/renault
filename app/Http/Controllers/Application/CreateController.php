<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $services = Service::all();

        return view('backend.applications.create', compact('services'));
    }
}
