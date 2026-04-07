<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hosting;
use App\Models\HostingPlan;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            'hostingCount' => Hosting::count(),
            'planCount' => HostingPlan::count(),
        ]);
    }
}
