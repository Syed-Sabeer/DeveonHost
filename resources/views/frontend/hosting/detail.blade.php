@extends('layouts.frontend.master')

@section('content')
<main class="main-area fix">
    <section class="hosting__top-area">
        <div class="container">
            <div class="row align-items-end justify-content-center">
                <div class="col-lg-6">
                    <div class="hosting__top-content">
                        <h6 class="sub-title">{{ $hosting->title }} - Starting From <span>${{ number_format((float) optional($dynamicPlans->first())->amount_per_month, 2) }}/mo</span></h6>
                        <h2 class="title">{{ $hosting->title }}</h2>
                        <p>{{ $hosting->description }}</p>
                        <ul class="list-wrap">
                            <li>Optimized performance and uptime for modern workloads</li>
                            <li>Human support whenever you need migration help</li>
                        </ul>
                        <a href="#plans" class="tg-btn tg-black-btn-two">View Hosting Plan</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-9">
                    <div class="hosting__top-images">
                        <img src="{{ asset('storage/' . $hosting->icon) }}" alt="{{ $hosting->title }} icon" style="max-height:320px; object-fit:contain;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="plans">
        @include('frontend.hosting.partials.dynamic-plans')
    </div>
</main>
@endsection
