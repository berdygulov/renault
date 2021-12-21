<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $service_categories = ServiceCategory::all();
        $services = Service::with('category')->get();

        return view('backend.applications.create', compact('service_categories', 'services'));
    }
}
