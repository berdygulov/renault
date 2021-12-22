<?php

namespace App\Http\Controllers\Backend\ServiceCategory;

use App\Http\Controllers\Controller;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(Request $request, $service_category_id)
    {
        $service_category = ServiceCategory::findOrFail($service_category_id);
        $service_category->delete();

        return redirect()
            ->route('backend.service_categories.index')
            ->with('crud_success', 'Категория услуг успешно удалена.');
    }
}
