<?php

namespace App\Http\Controllers\Backend\Service;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class DestroyController extends Controller
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
        $service->delete();

        return redirect()
            ->route('backend.services.index')
            ->with('crud_success', 'Услуга успешно удалена.');
    }
}
