<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactSubmission;
use App\Models\Hosting;
use App\Models\HostingPlan;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $topPlan = Transaction::query()
            ->select('hosting_plan_id', DB::raw('COUNT(*) as sold_count'))
            ->where('status', 'active')
            ->groupBy('hosting_plan_id')
            ->orderByDesc('sold_count')
            ->with('hostingPlan')
            ->first();

        $topHostingType = Transaction::query()
            ->select('hosting_id', DB::raw('COUNT(*) as sold_count'))
            ->where('status', 'active')
            ->whereNotNull('hosting_id')
            ->groupBy('hosting_id')
            ->orderByDesc('sold_count')
            ->with('hosting')
            ->first();

        $planSalesBreakdown = Transaction::query()
            ->select('hosting_plan_id', DB::raw('COUNT(*) as sold_count'))
            ->where('status', 'active')
            ->groupBy('hosting_plan_id')
            ->orderByDesc('sold_count')
            ->with('hostingPlan')
            ->take(8)
            ->get();

        return view('admin.index', [
            'hostingCount' => Hosting::count(),
            'planCount' => HostingPlan::count(),
            'contactSubmissionCount' => ContactSubmission::count(),
            'userCount' => User::count(),
            'transactionCount' => Transaction::count(),
            'revenueTotal' => Transaction::where('status', 'active')->sum('amount'),
            'topPlanName' => optional(optional($topPlan)->hostingPlan)->title,
            'topPlanSoldCount' => (int) ($topPlan->sold_count ?? 0),
            'topHostingTypeName' => optional(optional($topHostingType)->hosting)->title,
            'topHostingTypeSoldCount' => (int) ($topHostingType->sold_count ?? 0),
            'planSalesBreakdown' => $planSalesBreakdown,
        ]);
    }
}
