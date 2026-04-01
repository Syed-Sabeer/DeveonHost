<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;


class HostingController extends Controller
{

public function webHosting()
{
    return view('frontend.hosting.web-hosting');
}

public function wordpressHosting()
{
    return view('frontend.hosting.wordpress-hosting');
}

public function cloudHosting()
{
    return view('frontend.hosting.cloud-hosting');
}

public function sharedHosting()
{
    return view('frontend.hosting.shared-hosting');
}

public function vpsHosting()
{
    return view('frontend.hosting.vps-hosting');
}

public function dedicatedHosting()
{
    return view('frontend.hosting.dedicated-hosting');
}

}