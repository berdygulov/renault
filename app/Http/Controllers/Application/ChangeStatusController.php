<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Http\Request;

class ChangeStatusController extends Controller
{
    public function __invoke($application_id, Request $request)
    {
        Application::where('id', $application_id)
            ->update(['status' => $request->input('status')]);

        return back()->with('application.status_change.success', 'Статус заявки успешно обновлен!');
    }
}
