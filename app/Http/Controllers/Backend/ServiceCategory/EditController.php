<?php

namespace App\Http\Controllers\Backend\ServiceCategory;

use App\Http\Controllers\Controller;
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
    public function __invoke(Request $request, $service_category_id)
    {
        $service_category = ServiceCategory::findOrFail($service_category_id);

        return view('backend.service_categories.create', compact('service_category'));
    }
}
