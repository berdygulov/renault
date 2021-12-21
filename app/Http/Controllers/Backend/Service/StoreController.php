<?php

namespace App\Http\Controllers\Backend\Service;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'name'                => 'required|min:5',
            'service_category_id' => 'required'
        ]);

        $service = Service::create([
            'name'                => $request->input('name'),
            'service_category_id' => $request->input('service_category_id'),
            'description'         => $request->input('description'),
        ]);

        return redirect()
            ->route('backend.services.index')
            ->with('crud_success', 'Новая услуга успешно добавлена!');

    }
}
