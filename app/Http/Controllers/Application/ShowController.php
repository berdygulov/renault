<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke($application_id)
    {
        $application = Application::with(['master', 'user'])->find($application_id);
        return view('backend.applications.show', compact('application'));
    }
}
