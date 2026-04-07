<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hosting;
use App\Models\HostingPlan;
use Illuminate\Http\Request;

class HostingPlanController extends Controller
{
    public function index(Hosting $hosting)
    {
        $plans = $hosting->plans()->latest()->paginate(10);

        return view('admin.hosting-plans.index', compact('hosting', 'plans'));
    }

    public function create(Hosting $hosting)
    {
        return view('admin.hosting-plans.create', compact('hosting'));
    }

    public function store(Request $request, Hosting $hosting)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'badge' => ['nullable', 'string', 'max:100'],
            'description' => ['required', 'string'],
            'amount_per_month' => ['required', 'numeric', 'min:0'],
            'discount_percentage_annual' => ['nullable', 'numeric', 'min:0', 'max:100'],
            'features' => ['required', 'array', 'min:1'],
            'features.*' => ['required', 'string', 'max:255'],
        ]);

        $hosting->plans()->create($validated);

        return redirect()->route('admin.hostings.plans.index', $hosting)->with('success', 'Hosting plan created successfully.');
    }

    public function edit(Hosting $hosting, HostingPlan $plan)
    {
        abort_if($plan->hosting_id !== $hosting->id, 404);

        return view('admin.hosting-plans.edit', compact('hosting', 'plan'));
    }

    public function update(Request $request, Hosting $hosting, HostingPlan $plan)
    {
        abort_if($plan->hosting_id !== $hosting->id, 404);

        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'badge' => ['nullable', 'string', 'max:100'],
            'description' => ['required', 'string'],
            'amount_per_month' => ['required', 'numeric', 'min:0'],
            'discount_percentage_annual' => ['nullable', 'numeric', 'min:0', 'max:100'],
            'features' => ['required', 'array', 'min:1'],
            'features.*' => ['required', 'string', 'max:255'],
        ]);

        $plan->update($validated);

        return redirect()->route('admin.hostings.plans.index', $hosting)->with('success', 'Hosting plan updated successfully.');
    }

    public function destroy(Hosting $hosting, HostingPlan $plan)
    {
        abort_if($plan->hosting_id !== $hosting->id, 404);

        $plan->delete();

        return redirect()->route('admin.hostings.plans.index', $hosting)->with('success', 'Hosting plan deleted successfully.');
    }
}
