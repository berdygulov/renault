<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $applications = Application::orderBy('date_time', 'desc')->paginate(15);
        return view('backend.index', compact('applications'));
    }
}
