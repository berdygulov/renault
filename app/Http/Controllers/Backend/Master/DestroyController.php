<?php

namespace App\Http\Controllers\Backend\Master;

use App\Http\Controllers\Controller;
use App\Models\Master;

class DestroyController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke($master_id)
    {
        $master = Master::findOrFail($master_id);
        $master->delete();

        return redirect()
            ->route('backend.masters.index')
            ->with('crud_success', 'Мастер успешно удален.');
    }
}
