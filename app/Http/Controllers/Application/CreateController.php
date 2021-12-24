<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Models\Master;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $service_categories = ServiceCategory::with('services')->get();
        $masters = Master::all();

        return view('backend.applications.create', compact('service_categories', 'masters'));
    }
}
