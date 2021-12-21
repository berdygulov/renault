<?php

namespace App\Http\Controllers\Backend\Master;

use App\Http\Controllers\Controller;
use App\Http\Requests\MasterRequest;
use App\Models\Master;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(MasterRequest $request, $master_id)
    {
        $master = Master::findOrFail($master_id);

        $master->update($request->all());

        return back()
            ->with('crud_success', 'Профиль мастера успешно обновлено!');
    }
}
