<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Hosting;


class HostingController extends Controller
{
    private function renderHostingPage(string $slug, string $view)
    {
        $hosting = Hosting::query()
            ->where('slug', $slug)
            ->where('is_active', true)
            ->with(['plans' => function ($query) {
                $query->where('is_active', true)->orderBy('amount_per_month');
            }])
            ->firstOrFail();

        return view($view, [
            'hosting' => $hosting,
            'dynamicPlans' => $hosting->plans,
        ]);
    }

public function webHosting()
{
    return $this->renderHostingPage('web-hosting', 'frontend.hosting.web-hosting');
}

public function wordpressHosting()
{
    return $this->renderHostingPage('wordpress-hosting', 'frontend.hosting.wordpress-hosting');
}

public function cloudHosting()
{
    return $this->renderHostingPage('cloud-hosting', 'frontend.hosting.cloud-hosting');
}

public function sharedHosting()
{
    return $this->renderHostingPage('shared-hosting', 'frontend.hosting.shared-hosting');
}

public function vpsHosting()
{
    return $this->renderHostingPage('vps-hosting', 'frontend.hosting.vps-hosting');
}

public function dedicatedHosting()
{
    return $this->renderHostingPage('dedicated-hosting', 'frontend.hosting.dedicated-hosting');
}

}