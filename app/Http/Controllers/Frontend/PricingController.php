<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Hosting;


class PricingController extends Controller
{

public function index()
{
    $hostings = Hosting::query()
        ->where('is_active', true)
        ->with(['plans' => function ($query) {
            $query->where('is_active', true)->orderBy('amount_per_month');
        }])
        ->orderBy('title')
        ->get();

    return view('frontend.pricing', [
        'hostings' => $hostings,
    ]);
}


}


