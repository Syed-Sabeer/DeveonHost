@extends('layouts.frontend.master')

@section('content')
<main class="main-area fix">
    <section class="breadcrumb__area breadcrumb__area-three">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <nav class="breadcrumb">
                            <span property="itemListElement" typeof="ListItem">
                                <a href="{{ route('home') }}">Home</a>
                            </span>
                            <span class="breadcrumb-separator">//</span>
                            <span property="itemListElement" typeof="ListItem">Pricing</span>
                        </nav>
                        <h2 class="title">Start Hosting Today Pick a Plan That Fits</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape">
            <img src="{{ asset('FrontendAssets/img/images/breadcrumb_shape.png') }}" alt="shape">
        </div>
    </section>

    <section class="pricing__area section-pb-120">
        <div class="container">
            @forelse($hostings as $hosting)
                <div class="row mb-4" id="{{ $hosting->slug }}">
                    <div class="col-lg-12">
                        <div class="section__title section__title-two text-center mb-40">
                            <h2 class="title"><span>{{ $hosting->title }}</span> Plans That Fit Your Budget</h2>
                            <p>{{ $hosting->description }}</p>
                        </div>
                    </div>
                </div>

                @if($hosting->plans->isEmpty())
                    <div class="row justify-content-center mb-5">
                        <div class="col-lg-8">
                            <div class="alert alert-info text-center">No active plans are available right now for {{ $hosting->title }}.</div>
                        </div>
                    </div>
                @else
                    <div class="row justify-content-center mb-5">
                        @foreach($hosting->plans as $plan)
                            @php
                                $annualDiscount = (float) ($plan->discount_percentage_annual ?? 0);
                                $annualPrice = ((float) $plan->amount_per_month) * 12;
                                $annualDiscountedPrice = $annualDiscount > 0
                                    ? $annualPrice * ((100 - $annualDiscount) / 100)
                                    : $annualPrice;
                            @endphp
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="pricing__box pricing__box-two h-100">
                                    <div class="pricing__plan">
                                        <h4 class="title">
                                            {{ $plan->title }}
                                            @if($plan->badge)
                                                <span class="tg-badge">{{ $plan->badge }}</span>
                                            @endif
                                        </h4>
                                        <p>{{ $plan->description }}</p>
                                    </div>
                                    <div class="pricing__price">
                                        <h2 class="price">${{ number_format((float) $plan->amount_per_month, 2) }} <span>/month</span></h2>
                                        @if($annualDiscount > 0)
                                            <p>${{ number_format($annualDiscountedPrice, 2) }} yearly ({{ number_format($annualDiscount, 0) }}% off)</p>
                                        @endif
                                    </div>
                                    <div class="pricing__btn mb-4">
                                        <a href="{{ route('checkout.show', $plan) }}" class="tg-btn tg-border-btn">Get Started</a>
                                    </div>
                                    <div class="pricing__list">
                                        <ul class="list-wrap">
                                            @foreach(($plan->features ?? []) as $feature)
                                                <li>
                                                    <div class="icon">
                                                        <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1.16797 6.00016L5.33464 10.1668L13.668 1.8335" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </div>
                                                    <div class="content">
                                                        <span>{{ $feature }}</span>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            @empty
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="alert alert-info text-center">No active hosting categories are available at the moment.</div>
                    </div>
                </div>
            @endforelse
        </div>
    </section>
</main>
@endsection
