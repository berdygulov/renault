<?php

namespace App\Http\Controllers\Backend\Service;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(Request $request, $service_id)
    {
        $service = Service::findOrFail($service_id);

        $service->update($request->all());

        return back()
            ->with('crud_success', 'Услуга успешно обновлена!');
    }
}
