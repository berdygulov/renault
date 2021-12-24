<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {

        $applications = Application::with('master')
            ->orderBy('date_time')
            ->where('status', '!=', 'done')
            ->paginate(10);
        return view('backend.applications.index', compact('applications'));
    }
}
