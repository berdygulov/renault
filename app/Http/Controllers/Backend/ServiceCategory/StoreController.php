<?php

namespace App\Http\Controllers\Backend\ServiceCategory;

use App\Http\Controllers\Controller;
use App\Models\ServiceCategory;
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
            'name' => 'required|min:5',
        ]);

        $service_category = ServiceCategory::create([
            'name'        => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        return redirect()
            ->route('backend.service_categories.index')
            ->with('crud_success', 'Категори успешно добавлена!');
    }
}
