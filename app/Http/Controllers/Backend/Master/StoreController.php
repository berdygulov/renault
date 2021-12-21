<?php

namespace App\Http\Controllers\Backend\Master;

use App\Http\Controllers\Controller;
use App\Http\Requests\MasterRequest;
use App\Models\Master;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(MasterRequest $request)
    {
        $master = Master::create($request->all());

        return redirect()
            ->route('backend.masters.index')
            ->with('master_crud_success', 'Новый мастер успешно добавлен!');
    }
}
