<?php

namespace App\Http\Controllers\Backend\Service;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class EditController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function __invoke(Request $request, $service_id)
    {
        $service = Service::findOrFail($service_id);
        $service_categories = ServiceCategory::all();

        return view('backend.services.create', compact('service', 'service_categories'));
    }
}
