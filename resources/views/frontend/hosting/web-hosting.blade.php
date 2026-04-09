@extends('layouts.frontend.master')

@section('meta')

@endsection

@section('css')

@endsection

@section('content')

 <main class="main-area fix">

     @include('frontend.hosting.partials.dynamic-plans')

        <!-- hosting-area -->
        <section class="hosting__top-area">
            <div class="container">
                <div class="row align-items-end justify-content-center">
                    <div class="col-lg-6">
                        <div class="hosting__top-content">
                            <h6 class="sub-title">Web Hosting — Starting From <span>$4.50/mo</span></h6>
                            <h2 class="title">Reliable <span>Web Hosting</span> for everyone</h2>
                            <p>Discover unique domains, secure hosting, and professional email services all in one place.</p>
                            <ul class="list-wrap">
                                <li>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.80597 1.50233C9.15263 1.23777 9.53363 1.04102 10.0013 1.04102C10.469 1.04102 10.85 1.23777 11.1966 1.50233C11.5214 1.75009 11.8795 2.10831 12.2986 2.52742L12.3281 2.55688C12.7569 2.98569 13.1307 3.15457 13.7079 3.15457C13.7801 3.15457 13.8715 3.15197 13.9748 3.14905C14.2371 3.14162 14.5763 3.13201 14.8726 3.15702C15.3073 3.19372 15.8517 3.31051 16.2669 3.72224C16.6852 4.13712 16.8049 4.68376 16.8427 5.12114C16.8685 5.42015 16.859 5.76191 16.8516 6.0261C16.8486 6.12907 16.846 6.22046 16.846 6.29273C16.846 6.66841 16.8878 6.87825 16.9602 7.04396C17.0345 7.21417 17.1657 7.39448 17.4438 7.67255L17.4733 7.70203C17.8924 8.12107 18.2505 8.47926 18.4983 8.80393C18.7629 9.15068 18.9596 9.53168 18.9596 9.99935C18.9596 10.4669 18.7629 10.8479 18.4983 11.1947C18.2505 11.5195 17.8922 11.8778 17.473 12.2969L17.4437 12.3262C17.1657 12.6042 17.0345 12.7845 16.9602 12.9547C16.8878 13.1204 16.846 13.3303 16.846 13.7059C16.846 13.7782 16.8486 13.8693 16.8516 13.9723C16.859 14.2365 16.8685 14.5785 16.8427 14.8776C16.8049 15.3149 16.6852 15.8616 16.2668 16.2765C15.8516 16.6882 15.3072 16.8049 14.8726 16.8416C14.5763 16.8667 14.2371 16.857 13.9748 16.8496C13.8715 16.8467 13.7801 16.8441 13.7079 16.8441C13.3402 16.8441 13.1336 16.8811 12.9709 16.9482C12.8084 17.0153 12.6346 17.1353 12.3728 17.3971C12.3169 17.4531 12.2431 17.532 12.1581 17.6232C11.9665 17.8286 11.7174 18.0956 11.4847 18.299C11.1315 18.6077 10.6251 18.9577 10.0013 18.9577C9.37763 18.9577 8.87105 18.6077 8.51797 18.299C8.28523 18.0956 8.0361 17.8286 7.84447 17.6232C7.75947 17.532 7.68575 17.4531 7.62983 17.3972C7.36802 17.1353 7.19419 17.0153 7.03168 16.9482C6.86902 16.8811 6.66237 16.8441 6.29468 16.8441C6.22255 16.8441 6.13114 16.8467 6.02779 16.8496C5.76549 16.857 5.42628 16.8667 5.12999 16.8416C4.69536 16.8049 4.15098 16.6882 3.73579 16.2765C3.31741 15.8616 3.19771 15.3149 3.15988 14.8776C3.13402 14.5785 3.14364 14.2368 3.15107 13.9726C3.15397 13.8695 3.15653 13.7783 3.15653 13.7059C3.15653 13.3303 3.11479 13.1204 3.0424 12.9547C2.96806 12.7845 2.8369 12.6042 2.55885 12.3262L2.52959 12.2969C2.11039 11.8778 1.75209 11.5195 1.50429 11.1947C1.23974 10.8479 1.04298 10.4669 1.04297 9.99935C1.04298 9.53168 1.23974 9.15068 1.50429 8.80393C1.75204 8.47926 2.11026 8.12106 2.52936 7.70201L2.55882 7.67255C2.98773 7.24364 3.15653 6.86975 3.15653 6.29273C3.15653 6.22059 3.15394 6.12919 3.15102 6.02586C3.14359 5.76355 3.13399 5.42431 3.15899 5.12801C3.19569 4.69336 3.31247 4.14897 3.72418 3.7338C4.13907 3.31542 4.6857 3.19573 5.12309 3.15791C5.42211 3.13205 5.76388 3.14167 6.02807 3.1491C6.13113 3.152 6.22238 3.15457 6.2947 3.15457C6.87171 3.15457 7.2456 2.98577 7.67448 2.55688L7.70396 2.52741C8.12302 2.10831 8.48122 1.75009 8.80597 1.50233Z" fill="currentColor" />
                                        <path d="M13.2405 7.53254C13.4531 7.94074 13.2946 8.44399 12.8863 8.65657C12.0763 9.07849 11.2971 9.97532 10.6886 10.8627C10.3943 11.292 10.158 11.692 9.99539 11.9844C9.90347 12.1467 9.7953 12.3589 9.75264 12.4447C9.6213 12.7182 9.35147 12.899 9.04855 12.9162C8.74555 12.9333 8.45714 12.7844 8.2957 12.5274C8.12387 12.2537 7.84061 11.991 7.56263 11.7817C7.48294 11.7199 7.22344 11.5529 7.10364 11.4772C6.69943 11.2574 6.54949 10.7515 6.76911 10.3472C6.98879 9.94265 7.49472 9.7929 7.89915 10.0126L7.90049 10.0133L8.10655 10.1352C8.22439 10.2087 8.38572 10.3152 8.56514 10.4502C8.64914 10.5135 8.74014 10.5852 8.83447 10.6651C8.97264 10.4367 9.13339 10.1838 9.31414 9.92015C9.95564 8.98465 10.9265 7.79817 12.1165 7.17839C12.5246 6.96579 13.0279 7.12435 13.2405 7.53254Z" fill="white" />
                                    </svg>
                                    Free Website Migration & SSL Certificate
                                </li>
                                <li>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.80597 1.50233C9.15263 1.23777 9.53363 1.04102 10.0013 1.04102C10.469 1.04102 10.85 1.23777 11.1966 1.50233C11.5214 1.75009 11.8795 2.10831 12.2986 2.52742L12.3281 2.55688C12.7569 2.98569 13.1307 3.15457 13.7079 3.15457C13.7801 3.15457 13.8715 3.15197 13.9748 3.14905C14.2371 3.14162 14.5763 3.13201 14.8726 3.15702C15.3073 3.19372 15.8517 3.31051 16.2669 3.72224C16.6852 4.13712 16.8049 4.68376 16.8427 5.12114C16.8685 5.42015 16.859 5.76191 16.8516 6.0261C16.8486 6.12907 16.846 6.22046 16.846 6.29273C16.846 6.66841 16.8878 6.87825 16.9602 7.04396C17.0345 7.21417 17.1657 7.39448 17.4438 7.67255L17.4733 7.70203C17.8924 8.12107 18.2505 8.47926 18.4983 8.80393C18.7629 9.15068 18.9596 9.53168 18.9596 9.99935C18.9596 10.4669 18.7629 10.8479 18.4983 11.1947C18.2505 11.5195 17.8922 11.8778 17.473 12.2969L17.4437 12.3262C17.1657 12.6042 17.0345 12.7845 16.9602 12.9547C16.8878 13.1204 16.846 13.3303 16.846 13.7059C16.846 13.7782 16.8486 13.8693 16.8516 13.9723C16.859 14.2365 16.8685 14.5785 16.8427 14.8776C16.8049 15.3149 16.6852 15.8616 16.2668 16.2765C15.8516 16.6882 15.3072 16.8049 14.8726 16.8416C14.5763 16.8667 14.2371 16.857 13.9748 16.8496C13.8715 16.8467 13.7801 16.8441 13.7079 16.8441C13.3402 16.8441 13.1336 16.8811 12.9709 16.9482C12.8084 17.0153 12.6346 17.1353 12.3728 17.3971C12.3169 17.4531 12.2431 17.532 12.1581 17.6232C11.9665 17.8286 11.7174 18.0956 11.4847 18.299C11.1315 18.6077 10.6251 18.9577 10.0013 18.9577C9.37763 18.9577 8.87105 18.6077 8.51797 18.299C8.28523 18.0956 8.0361 17.8286 7.84447 17.6232C7.75947 17.532 7.68575 17.4531 7.62983 17.3972C7.36802 17.1353 7.19419 17.0153 7.03168 16.9482C6.86902 16.8811 6.66237 16.8441 6.29468 16.8441C6.22255 16.8441 6.13114 16.8467 6.02779 16.8496C5.76549 16.857 5.42628 16.8667 5.12999 16.8416C4.69536 16.8049 4.15098 16.6882 3.73579 16.2765C3.31741 15.8616 3.19771 15.3149 3.15988 14.8776C3.13402 14.5785 3.14364 14.2368 3.15107 13.9726C3.15397 13.8695 3.15653 13.7783 3.15653 13.7059C3.15653 13.3303 3.11479 13.1204 3.0424 12.9547C2.96806 12.7845 2.8369 12.6042 2.55885 12.3262L2.52959 12.2969C2.11039 11.8778 1.75209 11.5195 1.50429 11.1947C1.23974 10.8479 1.04298 10.4669 1.04297 9.99935C1.04298 9.53168 1.23974 9.15068 1.50429 8.80393C1.75204 8.47926 2.11026 8.12106 2.52936 7.70201L2.55882 7.67255C2.98773 7.24364 3.15653 6.86975 3.15653 6.29273C3.15653 6.22059 3.15394 6.12919 3.15102 6.02586C3.14359 5.76355 3.13399 5.42431 3.15899 5.12801C3.19569 4.69336 3.31247 4.14897 3.72418 3.7338C4.13907 3.31542 4.6857 3.19573 5.12309 3.15791C5.42211 3.13205 5.76388 3.14167 6.02807 3.1491C6.13113 3.152 6.22238 3.15457 6.2947 3.15457C6.87171 3.15457 7.2456 2.98577 7.67448 2.55688L7.70396 2.52741C8.12302 2.10831 8.48122 1.75009 8.80597 1.50233Z" fill="currentColor" />
                                        <path d="M13.2405 7.53254C13.4531 7.94074 13.2946 8.44399 12.8863 8.65657C12.0763 9.07849 11.2971 9.97532 10.6886 10.8627C10.3943 11.292 10.158 11.692 9.99539 11.9844C9.90347 12.1467 9.7953 12.3589 9.75264 12.4447C9.6213 12.7182 9.35147 12.899 9.04855 12.9162C8.74555 12.9333 8.45714 12.7844 8.2957 12.5274C8.12387 12.2537 7.84061 11.991 7.56263 11.7817C7.48294 11.7199 7.22344 11.5529 7.10364 11.4772C6.69943 11.2574 6.54949 10.7515 6.76911 10.3472C6.98879 9.94265 7.49472 9.7929 7.89915 10.0126L7.90049 10.0133L8.10655 10.1352C8.22439 10.2087 8.38572 10.3152 8.56514 10.4502C8.64914 10.5135 8.74014 10.5852 8.83447 10.6651C8.97264 10.4367 9.13339 10.1838 9.31414 9.92015C9.95564 8.98465 10.9265 7.79817 12.1165 7.17839C12.5246 6.96579 13.0279 7.12435 13.2405 7.53254Z" fill="white" />
                                    </svg>
                                    Free Domain Registration
                                </li>
                            </ul>
                            <a href="#!" class="tg-btn tg-black-btn-two">View Hosting Plan</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-9">
                        <div class="hosting__top-images">
                            <img src="{{ asset('FrontendAssets/img/images/hosting_top-img01.png')}}" alt="img" data-aos="fade-up" data-aos-delay="200">
                            <div class="shape">
                                <img src="{{ asset('FrontendAssets/img/images/hosting_top_shape01.svg')}}" alt="shape" data-aos="fade-right" data-aos-delay="200">
                                <img src="{{ asset('FrontendAssets/img/images/hosting_top_shape02.svg')}}" alt="shape" data-parallax='{"x" : 50 }'>
                                <img src="{{ asset('FrontendAssets/img/images/hosting_top_shape03.svg')}}" alt="shape" data-aos="fade-left" data-aos-delay="200">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- hosting-area-end -->

        <!-- pricing-area -->
        <section class="pricing__area section-pt-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__title text-center mb-40">
                            <h2 class="title">Web Hosting Plans That Fit Your Budget</h2>
                            <p>Experience ultra-fast loading speeds globally for seamless performance and reliability anywhere in the world.</p>
                        </div>
                    </div>
                </div>
                <div class="pricing-tab pricing-tab-two">
                    <span class="tab-btn monthly_tab_title">Monthly</span>
                    <span class="pricing-tab-switcher"></span>
                    <span class="tab-btn annual_tab_title">Yearly <strong>(save 30%)</strong></span>
                </div>
                <div class="pricing__item-wrap">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="pricing__box pricing__box-two">
                                <div class="pricing__plan">
                                    <h4 class="title">Starter Plan</h4>
                                    <p>Everything you need to your wbsite</p>
                                </div>
                                <div class="pricing__price">
                                    <h2 class="price monthly_price">$4.50 <span>/month</span></h2>
                                    <h2 class="price annual_price">$45.50 <span>/year</span></h2>
                                    <p>$ 5.99 when you renew this plan</p>
                                    <span class="price-off">50% OFF</span>
                                </div>
                                <div class="pricing__btn">
                                    <a href="#!" class="tg-btn tg-border-btn">
                                        <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.66797 7.5L12.168 10L9.66797 12.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M3 10C3 10.9849 3.19399 11.9602 3.5709 12.8701C3.94781 13.7801 4.50026 14.6069 5.1967 15.3033C5.89314 15.9997 6.71993 16.5522 7.62987 16.9291C8.53982 17.306 9.51509 17.5 10.5 17.5C11.4849 17.5 12.4602 17.306 13.3701 16.9291C14.2801 16.5522 15.1069 15.9997 15.8033 15.3033C16.4997 14.6069 17.0522 13.7801 17.4291 12.8701C17.806 11.9602 18 10.9849 18 10C18 8.01088 17.2098 6.10322 15.8033 4.6967C14.3968 3.29018 12.4891 2.5 10.5 2.5C8.51088 2.5 6.60322 3.29018 5.1967 4.6967C3.79018 6.10322 3 8.01088 3 10Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                        Get Started
                                    </a>
                                </div>
                                <div class="pricing__list">
                                    <ul class="list-wrap">
                                        <li>
                                            <div class="icon">
                                                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.16797 6.00016L5.33464 10.1668L13.668 1.8335" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                  </svg>
                                            </div>
                                            <div class="content">
                                                <span>Up to 10 Website</span>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 8C2 8.78793 2.15519 9.56815 2.45672 10.2961C2.75825 11.0241 3.20021 11.6855 3.75736 12.2426C4.31451 12.7998 4.97595 13.2417 5.7039 13.5433C6.43185 13.8448 7.21207 14 8 14C8.78793 14 9.56815 13.8448 10.2961 13.5433C11.0241 13.2417 11.6855 12.7998 12.2426 12.2426C12.7998 11.6855 13.2417 11.0241 13.5433 10.2961C13.8448 9.56815 14 8.78793 14 8C14 6.4087 13.3679 4.88258 12.2426 3.75736C11.1174 2.63214 9.5913 2 8 2C6.4087 2 4.88258 2.63214 3.75736 3.75736C2.63214 4.88258 2 6.4087 2 8Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M8 6H8.00833" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M7.33203 8H7.9987V10.6667H8.66536" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.16797 6.00016L5.33464 10.1668L13.668 1.8335" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                  </svg>
                                            </div>
                                            <div class="content">
                                                <span>Stander Performance</span>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 8C2 8.78793 2.15519 9.56815 2.45672 10.2961C2.75825 11.0241 3.20021 11.6855 3.75736 12.2426C4.31451 12.7998 4.97595 13.2417 5.7039 13.5433C6.43185 13.8448 7.21207 14 8 14C8.78793 14 9.56815 13.8448 10.2961 13.5433C11.0241 13.2417 11.6855 12.7998 12.2426 12.2426C12.7998 11.6855 13.2417 11.0241 13.5433 10.2961C13.8448 9.56815 14 8.78793 14 8C14 6.4087 13.3679 4.88258 12.2426 3.75736C11.1174 2.63214 9.5913 2 8 2C6.4087 2 4.88258 2.63214 3.75736 3.75736C2.63214 4.88258 2 6.4087 2 8Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M8 6H8.00833" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M7.33203 8H7.9987V10.6667H8.66536" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.16797 6.00016L5.33464 10.1668L13.668 1.8335" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                  </svg>
                                            </div>
                                            <div class="content">
                                                <span>Up to <strong>30 GB</strong> Data Storage</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.16797 6.00016L5.33464 10.1668L13.668 1.8335" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                  </svg>
                                            </div>
                                            <div class="content">
                                                <span><strong>25 GB</strong> SSD Storage</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.16797 6.00016L5.33464 10.1668L13.668 1.8335" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                  </svg>
                                            </div>
                                            <div class="content">
                                                <span><strong>Free</strong> & Automatic Website Migration</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.16797 6.00016L5.33464 10.1668L13.668 1.8335" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                  </svg>
                                            </div>
                                            <div class="content">
                                                <span>Daily Backup</span>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 8C2 8.78793 2.15519 9.56815 2.45672 10.2961C2.75825 11.0241 3.20021 11.6855 3.75736 12.2426C4.31451 12.7998 4.97595 13.2417 5.7039 13.5433C6.43185 13.8448 7.21207 14 8 14C8.78793 14 9.56815 13.8448 10.2961 13.5433C11.0241 13.2417 11.6855 12.7998 12.2426 12.2426C12.7998 11.6855 13.2417 11.0241 13.5433 10.2961C13.8448 9.56815 14 8.78793 14 8C14 6.4087 13.3679 4.88258 12.2426 3.75736C11.1174 2.63214 9.5913 2 8 2C6.4087 2 4.88258 2.63214 3.75736 3.75736C2.63214 4.88258 2 6.4087 2 8Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M8 6H8.00833" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M7.33203 8H7.9987V10.6667H8.66536" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.16797 6.00016L5.33464 10.1668L13.668 1.8335" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                  </svg>
                                            </div>
                                            <div class="content">
                                                <span><strong>99.99</strong> Uptime Guarantee</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.16797 6.00016L5.33464 10.1668L13.668 1.8335" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                  </svg>
                                            </div>
                                            <div class="content">
                                                <span>Unlimited Free <strong>SSL</strong></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.16797 6.00016L5.33464 10.1668L13.668 1.8335" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                  </svg>
                                            </div>
                                            <div class="content">
                                                <span>24/7 Dedicated <strong>Support</strong></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.16797 6.00016L5.33464 10.1668L13.668 1.8335" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                  </svg>
                                            </div>
                                            <div class="content">
                                                <span>Powerful control panel</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.16797 6.00016L5.33464 10.1668L13.668 1.8335" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                  </svg>
                                            </div>
                                            <div class="content">
                                                <span>Cache manager</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.16797 6.00016L5.33464 10.1668L13.668 1.8335" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                  </svg>
                                            </div>
                                            <div class="content">
                                                <span><strong>Unlimited</strong> cronjobs</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.16797 6.00016L5.33464 10.1668L13.668 1.8335" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                  </svg>
                                            </div>
                                            <div class="content">
                                                <span><strong>Unlimited</strong> FTP accounts</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pricing__select">
                                    <span class="more-item">More Features</span>
                                    <span class="less-item">Less Features</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="pricing__box pricing__box-two">
                                <div class="pricing__plan">
                                    <h4 class="title">Business Plan <span class="tg-badge">Popular</span></h4>
                                    <p>Everything you need to your wbsite</p>
                                </div>
                                <div class="pricing__price">
                                    <h2 class="price monthly_price">$9.50 <span>/month</span></h2>
                                    <h2 class="price annual_price">$90.50 <span>/year</span></h2>
                                    <p>$ 5.99 when you renew this plan</p>
                                    <span class="price-off">70% OFF</span>
                                </div>
                                <div class="pricing__btn">
                                    <a href="#!" class="tg-btn tg-border-btn active">
                                        <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.66797 7.5L12.168 10L9.66797 12.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M3 10C3 10.9849 3.19399 11.9602 3.5709 12.8701C3.94781 13.7801 4.50026 14.6069 5.1967 15.3033C5.89314 15.9997 6.71993 16.5522 7.62987 16.9291C8.53982 17.306 9.51509 17.5 10.5 17.5C11.4849 17.5 12.4602 17.306 13.3701 16.9291C14.2801 16.5522 15.1069 15.9997 15.8033 15.3033C16.4997 14.6069 17.0522 13.7801 17.4291 12.8701C17.806 11.9602 18 10.9849 18 10C18 8.01088 17.2098 6.10322 15.8033 4.6967C14.3968 3.29018 12.4891 2.5 10.5 2.5C8.51088 2.5 6.60322 3.29018 5.1967 4.6967C3.79018 6.10322 3 8.01088 3 10Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                        Get Started
                                    </a>
                                </div>
                                <div class="pricing__list">
                                    <ul class="list-wrap">
                                        <li>
                                            <div class="icon">
                                                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.16797 6.00016L5.33464 10.1668L13.668 1.8335" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                  </svg>
                                            </div>
                                            <div class="content">
                                                <span>Up to 10 Website</span>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 8C2 8.78793 2.15519 9.56815 2.45672 10.2961C2.75825 11.0241 3.20021 11.6855 3.75736 12.2426C4.31451 12.7998 4.97595 13.2417 5.7039 13.5433C6.43185 13.8448 7.21207 14 8 14C8.78793 14 9.56815 13.8448 10.2961 13.5433C11.0241 13.2417 11.6855 12.7998 12.2426 12.2426C12.7998 11.6855 13.2417 11.0241 13.5433 10.2961C13.8448 9.56815 14 8.78793 14 8C14 6.4087 13.3679 4.88258 12.2426 3.75736C11.1174 2.63214 9.5913 2 8 2C6.4087 2 4.88258 2.63214 3.75736 3.75736C2.63214 4.88258 2 6.4087 2 8Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M8 6H8.00833" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M7.33203 8H7.9987V10.6667H8.66536" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.16797 6.00016L5.33464 10.1668L13.668 1.8335" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                  </svg>
                                            </div>
                                            <div class="content">
                                                <span>Stander Performance</span>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 8C2 8.78793 2.15519 9.56815 2.45672 10.2961C2.75825 11.0241 3.20021 11.6855 3.75736 12.2426C4.31451 12.7998 4.97595 13.2417 5.7039 13.5433C6.43185 13.8448 7.21207 14 8 14C8.78793 14 9.56815 13.8448 10.2961 13.5433C11.0241 13.2417 11.6855 12.7998 12.2426 12.2426C12.7998 11.6855 13.2417 11.0241 13.5433 10.2961C13.8448 9.56815 14 8.78793 14 8C14 6.4087 13.3679 4.88258 12.2426 3.75736C11.1174 2.63214 9.5913 2 8 2C6.4087 2 4.88258 2.63214 3.75736 3.75736C2.63214 4.88258 2 6.4087 2 8Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M8 6H8.00833" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M7.33203 8H7.9987V10.6667H8.66536" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.16797 6.00016L5.33464 10.1668L13.668 1.8335" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                  </svg>
                                            </div>
                                            <div class="content">
                                                <span>Up to <strong>30 GB</strong> Data Storage</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.16797 6.00016L5.33464 10.1668L13.668 1.8335" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                  </svg>
                                            </div>
                                            <div class="content">
                                                <span><strong>25 GB</strong> SSD Storage</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.16797 6.00016L5.33464 10.1668L13.668 1.8335" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                  </svg>
                                            </div>
                                            <div class="content">
                                                <span><strong>Free</strong> & Automatic Website Migration</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.16797 6.00016L5.33464 10.1668L13.668 1.8335" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                  </svg>
                                            </div>
                                            <div class="content">
                                                <span>Daily Backup</span>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 8C2 8.78793 2.15519 9.56815 2.45672 10.2961C2.75825 11.0241 3.20021 11.6855 3.75736 12.2426C4.31451 12.7998 4.97595 13.2417 5.7039 13.5433C6.43185 13.8448 7.21207 14 8 14C8.78793 14 9.56815 13.8448 10.2961 13.5433C11.0241 13.2417 11.6855 12.7998 12.2426 12.2426C12.7998 11.6855 13.2417 11.0241 13.5433 10.2961C13.8448 9.56815 14 8.78793 14 8C14 6.4087 13.3679 4.88258 12.2426 3.75736C11.1174 2.63214 9.5913 2 8 2C6.4087 2 4.88258 2.63214 3.75736 3.75736C2.63214 4.88258 2 6.4087 2 8Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M8 6H8.00833" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M7.33203 8H7.9987V10.6667H8.66536" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.16797 6.00016L5.33464 10.1668L13.668 1.8335" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                  </svg>
                                            </div>
                                            <div class="content">
                                                <span><strong>99.99</strong> Uptime Guarantee</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.16797 6.00016L5.33464 10.1668L13.668 1.8335" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                  </svg>
                                            </div>
                                            <div class="content">
                                                <span>Unlimited Free <strong>SSL</strong></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.16797 6.00016L5.33464 10.1668L13.668 1.8335" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                  </svg>
                                            </div>
                                            <div class="content">
                                                <span>24/7 Dedicated <strong>Support</strong></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.16797 6.00016L5.33464 10.1668L13.668 1.8335" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                  </svg>
                                            </div>
                                            <div class="content">
                                                <span>Powerful control panel</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.16797 6.00016L5.33464 10.1668L13.668 1.8335" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                  </svg>
                                            </div>
                                            <div class="content">
                                                <span>Cache manager</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.16797 6.00016L5.33464 10.1668L13.668 1.8335" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                  </svg>
                                            </div>
                                            <div class="content">
                                                <span><strong>Unlimited</strong> cronjobs</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.16797 6.00016L5.33464 10.1668L13.668 1.8335" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                  </svg>
                                            </div>
                                            <div class="content">
                                                <span><strong>Unlimited</strong> FTP accounts</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pricing__select">
                                    <span class="more-item">More Features</span>
                                    <span class="less-item">Less Features</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="pricing__box pricing__box-two">
                                <div class="pricing__plan">
                                    <h4 class="title">Enterprise Plan</h4>
                                    <p>Everything you need to your wbsite</p>
                                </div>
                                <div class="pricing__price">
                                    <h2 class="price monthly_price">$20.50 <span>/month</span></h2>
                                    <h2 class="price annual_price">$200.50 <span>/year</span></h2>
                                    <p>$ 5.99 when you renew this plan</p>
                                    <span class="price-off">50% OFF</span>
                                </div>
                                <div class="pricing__btn">
                                    <a href="#!" class="tg-btn tg-border-btn">
                                        <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.66797 7.5L12.168 10L9.66797 12.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M3 10C3 10.9849 3.19399 11.9602 3.5709 12.8701C3.94781 13.7801 4.50026 14.6069 5.1967 15.3033C5.89314 15.9997 6.71993 16.5522 7.62987 16.9291C8.53982 17.306 9.51509 17.5 10.5 17.5C11.4849 17.5 12.4602 17.306 13.3701 16.9291C14.2801 16.5522 15.1069 15.9997 15.8033 15.3033C16.4997 14.6069 17.0522 13.7801 17.4291 12.8701C17.806 11.9602 18 10.9849 18 10C18 8.01088 17.2098 6.10322 15.8033 4.6967C14.3968 3.29018 12.4891 2.5 10.5 2.5C8.51088 2.5 6.60322 3.29018 5.1967 4.6967C3.79018 6.10322 3 8.01088 3 10Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                        Get Started
                                    </a>
                                </div>
                                <div class="pricing__list">
                                    <ul class="list-wrap">
                                        <li>
                                            <div class="icon">
                                                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.16797 6.00016L5.33464 10.1668L13.668 1.8335" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                  </svg>
                                            </div>
                                            <div class="content">
                                                <span>Up to 10 Website</span>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 8C2 8.78793 2.15519 9.56815 2.45672 10.2961C2.75825 11.0241 3.20021 11.6855 3.75736 12.2426C4.31451 12.7998 4.97595 13.2417 5.7039 13.5433C6.43185 13.8448 7.21207 14 8 14C8.78793 14 9.56815 13.8448 10.2961 13.5433C11.0241 13.2417 11.6855 12.7998 12.2426 12.2426C12.7998 11.6855 13.2417 11.0241 13.5433 10.2961C13.8448 9.56815 14 8.78793 14 8C14 6.4087 13.3679 4.88258 12.2426 3.75736C11.1174 2.63214 9.5913 2 8 2C6.4087 2 4.88258 2.63214 3.75736 3.75736C2.63214 4.88258 2 6.4087 2 8Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M8 6H8.00833" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M7.33203 8H7.9987V10.6667H8.66536" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.16797 6.00016L5.33464 10.1668L13.668 1.8335" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                  </svg>
                                            </div>
                                            <div class="content">
                                                <span>Stander Performance</span>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 8C2 8.78793 2.15519 9.56815 2.45672 10.2961C2.75825 11.0241 3.20021 11.6855 3.75736 12.2426C4.31451 12.7998 4.97595 13.2417 5.7039 13.5433C6.43185 13.8448 7.21207 14 8 14C8.78793 14 9.56815 13.8448 10.2961 13.5433C11.0241 13.2417 11.6855 12.7998 12.2426 12.2426C12.7998 11.6855 13.2417 11.0241 13.5433 10.2961C13.8448 9.56815 14 8.78793 14 8C14 6.4087 13.3679 4.88258 12.2426 3.75736C11.1174 2.63214 9.5913 2 8 2C6.4087 2 4.88258 2.63214 3.75736 3.75736C2.63214 4.88258 2 6.4087 2 8Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M8 6H8.00833" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M7.33203 8H7.9987V10.6667H8.66536" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.16797 6.00016L5.33464 10.1668L13.668 1.8335" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                  </svg>
                                            </div>
                                            <div class="content">
                                                <span>Up to <strong>30 GB</strong> Data Storage</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.16797 6.00016L5.33464 10.1668L13.668 1.8335" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                  </svg>
                                            </div>
                                            <div class="content">
                                                <span><strong>25 GB</strong> SSD Storage</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.16797 6.00016L5.33464 10.1668L13.668 1.8335" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                  </svg>
                                            </div>
                                            <div class="content">
                                                <span><strong>Free</strong> & Automatic Website Migration</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.16797 6.00016L5.33464 10.1668L13.668 1.8335" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                  </svg>
                                            </div>
                                            <div class="content">
                                                <span>Daily Backup</span>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 8C2 8.78793 2.15519 9.56815 2.45672 10.2961C2.75825 11.0241 3.20021 11.6855 3.75736 12.2426C4.31451 12.7998 4.97595 13.2417 5.7039 13.5433C6.43185 13.8448 7.21207 14 8 14C8.78793 14 9.56815 13.8448 10.2961 13.5433C11.0241 13.2417 11.6855 12.7998 12.2426 12.2426C12.7998 11.6855 13.2417 11.0241 13.5433 10.2961C13.8448 9.56815 14 8.78793 14 8C14 6.4087 13.3679 4.88258 12.2426 3.75736C11.1174 2.63214 9.5913 2 8 2C6.4087 2 4.88258 2.63214 3.75736 3.75736C2.63214 4.88258 2 6.4087 2 8Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M8 6H8.00833" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M7.33203 8H7.9987V10.6667H8.66536" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.16797 6.00016L5.33464 10.1668L13.668 1.8335" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                  </svg>
                                            </div>
                                            <div class="content">
                                                <span><strong>99.99</strong> Uptime Guarantee</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.16797 6.00016L5.33464 10.1668L13.668 1.8335" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                  </svg>
                                            </div>
                                            <div class="content">
                                                <span>Unlimited Free <strong>SSL</strong></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.16797 6.00016L5.33464 10.1668L13.668 1.8335" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                  </svg>
                                            </div>
                                            <div class="content">
                                                <span>24/7 Dedicated <strong>Support</strong></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.16797 6.00016L5.33464 10.1668L13.668 1.8335" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                  </svg>
                                            </div>
                                            <div class="content">
                                                <span>Powerful control panel</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.16797 6.00016L5.33464 10.1668L13.668 1.8335" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                  </svg>
                                            </div>
                                            <div class="content">
                                                <span>Cache manager</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.16797 6.00016L5.33464 10.1668L13.668 1.8335" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                  </svg>
                                            </div>
                                            <div class="content">
                                                <span><strong>Unlimited</strong> cronjobs</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.16797 6.00016L5.33464 10.1668L13.668 1.8335" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                  </svg>
                                            </div>
                                            <div class="content">
                                                <span><strong>Unlimited</strong> FTP accounts</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pricing__select">
                                    <span class="more-item">More Features</span>
                                    <span class="less-item">Less Features</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- pricing-area-end -->

        <!-- hosting-area -->
        <section class="hosting__area-three">
            <div class="container">
                <div class="hosting__inner-wrap">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__title text-center mb-60">
                                <h2 class="title">What Makes a Web Hosting Platform Stand Out</h2>
                                <p>Experience ultra-fast loading speeds globally for seamless performance and reliability anywhere in the world.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="hosting__item-three">
                                <div class="hosting__icon-three">
                                    <img src="{{ asset('FrontendAssets/img/icon/inner_hosting_icon01.svg')}}" alt="icon">
                                </div>
                                <div class="hosting__content-three">
                                    <h4 class="title">99.9% Uptime Guarantee</h4>
                                    <p>Ensures your website stays online and accessible around the clock.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="hosting__item-three">
                                <div class="hosting__icon-three">
                                    <img src="{{ asset('FrontendAssets/img/icon/inner_hosting_icon02.svg')}}" alt="icon">
                                </div>
                                <div class="hosting__content-three">
                                    <h4 class="title">Free SSL Certificate</h4>
                                    <p>Secures your site with HTTPS for safe browsing and better SEO.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="hosting__item-three">
                                <div class="hosting__icon-three">
                                    <img src="{{ asset('FrontendAssets/img/icon/inner_hosting_icon03.svg')}}" alt="icon">
                                </div>
                                <div class="hosting__content-three">
                                    <h4 class="title">One-Click Installers</h4>
                                    <p>Easily install WordPress, Joomla, and other apps with a single click.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="hosting__item-three">
                                <div class="hosting__icon-three">
                                    <img src="{{ asset('FrontendAssets/img/icon/inner_hosting_icon04.svg')}}" alt="icon">
                                </div>
                                <div class="hosting__content-three">
                                    <h4 class="title">Daily Backups</h4>
                                    <p>Automatically back up your site to protect against data loss.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="hosting__item-three">
                                <div class="hosting__icon-three">
                                    <img src="{{ asset('FrontendAssets/img/icon/inner_hosting_icon05.svg')}}" alt="icon">
                                </div>
                                <div class="hosting__content-three">
                                    <h4 class="title">cPanel Access</h4>
                                    <p>Manage your website, files, and emails with an intuitive control panel.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="hosting__item-three">
                                <div class="hosting__icon-three">
                                    <img src="{{ asset('FrontendAssets/img/icon/inner_hosting_icon06.svg')}}" alt="icon">
                                </div>
                                <div class="hosting__content-three">
                                    <h4 class="title">Unlimited Bandwidth</h4>
                                    <p>Handle more traffic without performance slowdowns</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="hosting__item-three">
                                <div class="hosting__icon-three">
                                    <img src="{{ asset('FrontendAssets/img/icon/inner_hosting_icon07.svg')}}" alt="icon">
                                </div>
                                <div class="hosting__content-three">
                                    <h4 class="title">Malware Protection</h4>
                                    <p>Keep your website secure with built-in scanning and removal tools.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="hosting__item-three">
                                <div class="hosting__icon-three">
                                    <img src="{{ asset('FrontendAssets/img/icon/inner_hosting_icon08.svg')}}" alt="icon">
                                </div>
                                <div class="hosting__content-three">
                                    <h4 class="title">24/7 Customer Support</h4>
                                    <p>Get expert help anytime via chat, phone, or email.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- hosting-area-two -->

        <!-- success-area -->
        <section class="success__area section-py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__title text-center mb-45">
                            <h2 class="title">Kickstart your Online Success Today.</h2>
                            <p>Experience ultra-fast loading speeds globally for seamless performance and reliability anywhere in the world.</p>
                        </div>
                    </div>
                </div>
                <div class="row gutter-y-24">
                    <div class="col-lg-12">
                        <div class="success__item has-animation">
                            <div class="row align-items-end">
                                <div class="col-lg-6">
                                    <div class="success__content">
                                        <svg class="shape" width="158" height="24" viewBox="0 0 158 24" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M69.7142 0.0317909C69.4741 0.0498856 68.6882 0.107126 67.9677 0.158902C53.4981 1.19988 34.1707 5.85317 21.0452 11.4561C9.81998 16.2478 -0.151768 22.0278 0.00174959 23.6538C0.036767 24.0241 0.388425 24.03 1.50042 23.679C2.49951 23.3636 2.43332 23.3196 1.31241 23.5539C0.196222 23.7872 0.154568 23.7417 0.85841 23.0576C3.79498 20.2033 18.3601 13.2228 28.3442 9.8847C44.6053 4.44797 60.6901 1.44434 73.7749 1.40098C78.7808 1.38441 80.0623 1.60549 80.0623 2.48568C80.0623 3.6793 75.0054 7.01195 71.7227 7.98181C61.7857 10.9175 48.8795 15.9927 47.4536 17.5254C46.9788 18.0358 47.2131 18.7167 47.8636 18.7167C49.1436 18.7167 59.1241 14.9004 67.2255 11.3132C70.0471 10.0639 70.4362 9.94553 78.5777 7.86168C90.9303 4.70004 97.3086 3.65879 105.299 3.49943C108.587 3.43395 108.916 3.50606 108.442 4.18855C107.487 5.56411 100.384 9.0906 88.1399 14.2674C85.9769 15.1819 85.4413 15.8101 86.1793 16.5671L86.4457 16.8403L87.38 16.7934C88.0872 16.7579 88.8848 16.6139 90.6589 16.2015C96.6864 14.8001 108.106 12.4839 113.639 11.5406C123.048 9.93639 133.353 8.81649 147.914 7.81564C150.085 7.66649 151.792 7.49818 152.979 7.31651C153.963 7.16584 155.496 6.97191 156.384 6.88565L158 6.7287L156.908 6.6634C156.308 6.62748 155.031 6.48917 154.07 6.35606C149.741 5.75616 142.692 6.14072 127.262 7.8186C117.316 8.90007 105.433 10.9882 94.6183 13.5546C93.9069 13.7235 93.2585 13.8603 93.1775 13.8586C93.0964 13.8569 93.9732 13.4408 95.1259 12.9338C108.252 7.16037 111.235 5.14542 109.991 2.89146C109.489 1.98368 108.637 1.7721 105.474 1.77058C97.8514 1.76682 89.901 3.033 79.0626 5.97688C77.4871 6.40479 77.4915 6.40694 78.5001 5.69838C82.2859 3.03846 82.1052 0.939927 78.0256 0.187026C77.3427 0.0610802 70.9178 -0.0590409 69.7142 0.0317909Z"/>
                                        </svg>
                                        <h2 class="title">Blazing-Fast Loading Website, Speeds Worldwide.</h2>
                                        <p>Experience ultra-fast loading speeds globally for seamless performance</p>
                                        <ul class="list-wrap success__list">
                                            <li>
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2.5 10C2.5 10.9849 2.69399 11.9602 3.0709 12.8701C3.44781 13.7801 4.00026 14.6069 4.6967 15.3033C5.39314 15.9997 6.21993 16.5522 7.12987 16.9291C8.03982 17.306 9.01509 17.5 10 17.5C10.9849 17.5 11.9602 17.306 12.8701 16.9291C13.7801 16.5522 14.6069 15.9997 15.3033 15.3033C15.9997 14.6069 16.5522 13.7801 16.9291 12.8701C17.306 11.9602 17.5 10.9849 17.5 10C17.5 9.01509 17.306 8.03982 16.9291 7.12987C16.5522 6.21993 15.9997 5.39314 15.3033 4.6967C14.6069 4.00026 13.7801 3.44781 12.8701 3.0709C11.9602 2.69399 10.9849 2.5 10 2.5C9.01509 2.5 8.03982 2.69399 7.12987 3.0709C6.21993 3.44781 5.39314 4.00026 4.6967 4.6967C4.00026 5.39314 3.44781 6.21993 3.0709 7.12987C2.69399 8.03982 2.5 9.01509 2.5 10Z" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M7.5 9.99967L9.16667 11.6663L12.5 8.33301" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <p><span>Optimized Servers:</span> High-performance infrastructure for minimal latency.</p>
                                            </li>
                                            <li>
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2.5 10C2.5 10.9849 2.69399 11.9602 3.0709 12.8701C3.44781 13.7801 4.00026 14.6069 4.6967 15.3033C5.39314 15.9997 6.21993 16.5522 7.12987 16.9291C8.03982 17.306 9.01509 17.5 10 17.5C10.9849 17.5 11.9602 17.306 12.8701 16.9291C13.7801 16.5522 14.6069 15.9997 15.3033 15.3033C15.9997 14.6069 16.5522 13.7801 16.9291 12.8701C17.306 11.9602 17.5 10.9849 17.5 10C17.5 9.01509 17.306 8.03982 16.9291 7.12987C16.5522 6.21993 15.9997 5.39314 15.3033 4.6967C14.6069 4.00026 13.7801 3.44781 12.8701 3.0709C11.9602 2.69399 10.9849 2.5 10 2.5C9.01509 2.5 8.03982 2.69399 7.12987 3.0709C6.21993 3.44781 5.39314 4.00026 4.6967 4.6967C4.00026 5.39314 3.44781 6.21993 3.0709 7.12987C2.69399 8.03982 2.5 9.01509 2.5 10Z" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M7.5 9.99967L9.16667 11.6663L12.5 8.33301" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <p><span>Advanced Caching:</span> Reduces load times with smart caching technology.</p>
                                            </li>
                                            <li>
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2.5 10C2.5 10.9849 2.69399 11.9602 3.0709 12.8701C3.44781 13.7801 4.00026 14.6069 4.6967 15.3033C5.39314 15.9997 6.21993 16.5522 7.12987 16.9291C8.03982 17.306 9.01509 17.5 10 17.5C10.9849 17.5 11.9602 17.306 12.8701 16.9291C13.7801 16.5522 14.6069 15.9997 15.3033 15.3033C15.9997 14.6069 16.5522 13.7801 16.9291 12.8701C17.306 11.9602 17.5 10.9849 17.5 10C17.5 9.01509 17.306 8.03982 16.9291 7.12987C16.5522 6.21993 15.9997 5.39314 15.3033 4.6967C14.6069 4.00026 13.7801 3.44781 12.8701 3.0709C11.9602 2.69399 10.9849 2.5 10 2.5C9.01509 2.5 8.03982 2.69399 7.12987 3.0709C6.21993 3.44781 5.39314 4.00026 4.6967 4.6967C4.00026 5.39314 3.44781 6.21993 3.0709 7.12987C2.69399 8.03982 2.5 9.01509 2.5 10Z" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M7.5 9.99967L9.16667 11.6663L12.5 8.33301" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <p><span>SSD Storage:</span> Faster data retrieval compared to traditional HDDs.</p>
                                            </li>
                                            <li>
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2.5 10C2.5 10.9849 2.69399 11.9602 3.0709 12.8701C3.44781 13.7801 4.00026 14.6069 4.6967 15.3033C5.39314 15.9997 6.21993 16.5522 7.12987 16.9291C8.03982 17.306 9.01509 17.5 10 17.5C10.9849 17.5 11.9602 17.306 12.8701 16.9291C13.7801 16.5522 14.6069 15.9997 15.3033 15.3033C15.9997 14.6069 16.5522 13.7801 16.9291 12.8701C17.306 11.9602 17.5 10.9849 17.5 10C17.5 9.01509 17.306 8.03982 16.9291 7.12987C16.5522 6.21993 15.9997 5.39314 15.3033 4.6967C14.6069 4.00026 13.7801 3.44781 12.8701 3.0709C11.9602 2.69399 10.9849 2.5 10 2.5C9.01509 2.5 8.03982 2.69399 7.12987 3.0709C6.21993 3.44781 5.39314 4.00026 4.6967 4.6967C4.00026 5.39314 3.44781 6.21993 3.0709 7.12987C2.69399 8.03982 2.5 9.01509 2.5 10Z" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M7.5 9.99967L9.16667 11.6663L12.5 8.33301" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <p><span>24/7 Monitoring:</span> Ensures optimal server performance and uptime.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="success__img">
                                        <img src="{{ asset('FrontendAssets/img/images/success_img01.jpg')}}" alt="img" data-aos="fade-left" data-aos-delay="200">
                                        <img src="{{ asset('FrontendAssets/img/images/success-shape01.svg')}}" alt="shape" data-parallax='{"x" : 50 }'>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="success__item-two">
                            <div class="success__content-two">
                                <h2 class="title">Global CDN Integration</h2>
                                <p>Ensures fast content delivery across all regions.</p>
                            </div>
                            <div class="success__img-two">
                                <img src="{{ asset('FrontendAssets/img/images/success_img02.jpg')}}" alt="img" data-aos="fade-up" data-aos-delay="200">
                                <img src="{{ asset('FrontendAssets/img/images/success-shape02.svg')}}" alt="shape" data-parallax='{"y" : 50 }'>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="success__item-three has-animation">
                            <div class="success__content-three">
                                <svg class="shape" width="158" height="24" viewBox="0 0 158 24" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M69.7142 0.0317909C69.4741 0.0498856 68.6882 0.107126 67.9677 0.158902C53.4981 1.19988 34.1707 5.85317 21.0452 11.4561C9.81998 16.2478 -0.151768 22.0278 0.00174959 23.6538C0.036767 24.0241 0.388425 24.03 1.50042 23.679C2.49951 23.3636 2.43332 23.3196 1.31241 23.5539C0.196222 23.7872 0.154568 23.7417 0.85841 23.0576C3.79498 20.2033 18.3601 13.2228 28.3442 9.8847C44.6053 4.44797 60.6901 1.44434 73.7749 1.40098C78.7808 1.38441 80.0623 1.60549 80.0623 2.48568C80.0623 3.6793 75.0054 7.01195 71.7227 7.98181C61.7857 10.9175 48.8795 15.9927 47.4536 17.5254C46.9788 18.0358 47.2131 18.7167 47.8636 18.7167C49.1436 18.7167 59.1241 14.9004 67.2255 11.3132C70.0471 10.0639 70.4362 9.94553 78.5777 7.86168C90.9303 4.70004 97.3086 3.65879 105.299 3.49943C108.587 3.43395 108.916 3.50606 108.442 4.18855C107.487 5.56411 100.384 9.0906 88.1399 14.2674C85.9769 15.1819 85.4413 15.8101 86.1793 16.5671L86.4457 16.8403L87.38 16.7934C88.0872 16.7579 88.8848 16.6139 90.6589 16.2015C96.6864 14.8001 108.106 12.4839 113.639 11.5406C123.048 9.93639 133.353 8.81649 147.914 7.81564C150.085 7.66649 151.792 7.49818 152.979 7.31651C153.963 7.16584 155.496 6.97191 156.384 6.88565L158 6.7287L156.908 6.6634C156.308 6.62748 155.031 6.48917 154.07 6.35606C149.741 5.75616 142.692 6.14072 127.262 7.8186C117.316 8.90007 105.433 10.9882 94.6183 13.5546C93.9069 13.7235 93.2585 13.8603 93.1775 13.8586C93.0964 13.8569 93.9732 13.4408 95.1259 12.9338C108.252 7.16037 111.235 5.14542 109.991 2.89146C109.489 1.98368 108.637 1.7721 105.474 1.77058C97.8514 1.76682 89.901 3.033 79.0626 5.97688C77.4871 6.40479 77.4915 6.40694 78.5001 5.69838C82.2859 3.03846 82.1052 0.939927 78.0256 0.187026C77.3427 0.0610802 70.9178 -0.0590409 69.7142 0.0317909Z"/>
                                </svg>
                                <h2 class="title">Choose a <span>Hosting plan</span> that best matches your business need</h2>
                                <p>Consider factors like website traffic, storage, security, and scalability. Here are some common options</p>
                            </div>
                            <div class="success__img-three">
                                <img src="{{ asset('FrontendAssets/img/images/success_img03.jpg')}}" alt="img" data-aos="fade-left" data-aos-delay="200">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- success-area-end -->

        <!-- features-area -->
        <section class="features__area-six">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__title white-title text-center mb-60">
                            <h2 class="title">Seamless website migration with ease.</h2>
                            <p class="white-content">Switch to a better host today! Migrate your website effortlessly with our expert support. Get started now!</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="features__item-twelve">
                            <div class="number">
                                <svg width="12" height="34" viewBox="0 0 12 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 33V1L1 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="features__content-eight">
                                <h2 class="title">Backup & Prepare</h2>
                                <p>Secure all files, databases, and settings from your current host.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="features__item-twelve">
                            <div class="number">
                                <svg width="18" height="34" viewBox="0 0 18 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 9C1 6.87827 1.84285 4.84344 3.34315 3.34315C4.84344 1.84285 6.87827 1 9 1C11.1217 1 13.1566 1.84285 14.6569 3.34315C16.1571 4.84344 17 6.87827 17 9C17 11.196 15.872 13.05 14.682 14.63L1 33H17" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                  </svg>
                            </div>
                            <div class="features__content-eight">
                                <h2 class="title">Transfer & Configure</h2>
                                <p>Move your website to the new host and adjust necessary settings.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="features__item-twelve">
                            <div class="number">
                                <svg width="18" height="34" viewBox="0 0 18 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 17C10.5823 17 12.129 16.5308 13.4446 15.6518C14.7602 14.7727 15.7855 13.5233 16.391 12.0615C16.9965 10.5997 17.155 8.99113 16.8463 7.43928C16.5376 5.88743 15.7757 4.46197 14.6569 3.34315C13.538 2.22433 12.1126 1.4624 10.5607 1.15372C9.00887 0.84504 7.40034 1.00347 5.93853 1.60897C4.47672 2.21447 3.22729 3.23985 2.34824 4.55544C1.46919 5.87103 1 7.41775 1 9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M1 25C1 26.5823 1.46919 28.129 2.34824 29.4446C3.22729 30.7602 4.47672 31.7855 5.93853 32.391C7.40034 32.9965 9.00887 33.155 10.5607 32.8463C12.1126 32.5376 13.538 31.7757 14.6569 30.6569C15.7757 29.538 16.5376 28.1126 16.8463 26.5607C17.155 25.0089 16.9965 23.4003 16.391 21.9385C15.7855 20.4767 14.7602 19.2273 13.4446 18.3482C12.129 17.4692 10.5823 17 9 17" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                  </svg>
                            </div>
                            <div class="features__content-eight">
                                <h2 class="title">Test & Launch</h2>
                                <p>Verify functionality, fix issues, and go live smoothly.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- features-area-end -->

        <!-- testimonial-area -->
        <section class="testimonial__area-three section-py-120">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-md-8">
                        <div class="section__title mb-50">
                            <h2 class="title">Feedback from Real Users on Trustpilot</h2>
                            <p>Register today and save big on your next domain name!</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="testimonial__nav-two mb-50">
                            <button class="testimonial-button-prev">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.16797 10H15.8346" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M4.16797 10L7.5013 13.3333" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M4.16797 9.99984L7.5013 6.6665" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                  </svg>
                            </button>
                            <button class="testimonial-button-next">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.16797 10H15.8346" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M12.5 13.3333L15.8333 10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M12.5 6.66669L15.8333 10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                  </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="swiper-container fix testimonial-active-two">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial__item testimonial__item-three">
                                <div class="rating">
                                    <img src="{{ asset('FrontendAssets/img/icon/rating.png')}}" alt="">
                                </div>
                                <div class="testimonial__content">
                                    <p>Reliable, fast, and always supportive — this hosting company has been a game-changer for my business. Their uptime is excellent, and customer service is top-notch. Managing my domains has never been easier. I highly recommend them to anyone looking for trustworthy hosting solutions.</p>
                                </div>
                                <div class="testimonial__author">
                                    <div class="content">
                                        <h2 class="title">Cameron Williamson</h2>
                                        <span>Founder & CEO DeveonHost</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial__item testimonial__item-three">
                                <div class="rating">
                                    <img src="{{ asset('FrontendAssets/img/icon/rating.png')}}" alt="">
                                </div>
                                <div class="testimonial__content">
                                    <p>Excellent uptime and unbeatable customer service. I highly recommend them for any hosting needs. Affordable, secure, and easy to manage. Perfect for both beginners and pros</p>
                                </div>
                                <div class="testimonial__author">
                                    <div class="content">
                                        <h2 class="title">Courtney Henry</h2>
                                        <span>Product Manager at DeveonHost</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial__item testimonial__item-three">
                                <div class="rating">
                                    <img src="{{ asset('FrontendAssets/img/icon/rating.png')}}" alt="">
                                </div>
                                <div class="testimonial__content">
                                    <p>Affordable, secure, and easy to manage. Perfect for both beginners and pros excellent uptime and unbeatable customer service. I highly recommend them for any hosting needs. witching to this host was the best decision for my business. Fast setup and no downtime</p>
                                </div>
                                <div class="testimonial__author">
                                    <div class="content">
                                        <h2 class="title">Emma Watson</h2>
                                        <span>Lead Product Designer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial__item testimonial__item-three">
                                <div class="rating">
                                    <img src="{{ asset('FrontendAssets/img/icon/rating.png')}}" alt="">
                                </div>
                                <div class="testimonial__content">
                                    <p>Reliable, fast, and always supportive — this hosting company has been a game-changer for my business. Their uptime is excellent, and customer service is top-notch. Managing my domains has never been easier. I highly recommend them to anyone looking for trustworthy hosting solutions.</p>
                                </div>
                                <div class="testimonial__author">
                                    <div class="content">
                                        <h2 class="title">Ralph Edwards</h2>
                                        <span>Founder & CEO DeveonHost</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial__item testimonial__item-three">
                                <div class="rating">
                                    <img src="{{ asset('FrontendAssets/img/icon/rating.png')}}" alt="">
                                </div>
                                <div class="testimonial__content">
                                    <p>Reliable, fast, and always supportive — this hosting company has been a game-changer for my business. Their uptime is excellent, and customer service is top-notch. Managing my domains has never been easier.</p>
                                </div>
                                <div class="testimonial__author">
                                    <div class="content">
                                        <h2 class="title">Cameron Williamson</h2>
                                        <span>Founder & CEO DeveonHost</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial__bottom-content">
                    <img src="{{ asset('FrontendAssets/img/images/testi_rating.png')}}" alt="">
                    <p>4.6 out of 5 stars based on 120,456 <span>reviews</span></p>
                </div>
            </div>
        </section>
        <!-- testimonial-area-end -->

        <!-- support-area -->
        <section class="support__area support__area-two">
            <div class="container">
                <div class="support__inner-wrap-two has-animation">
                    <div class="row align-items-center">
                        <div class="col-lg-5 order-0 order-lg-2">
                            <div class="support__thumb support__thumb-two">
                                <img src="{{ asset('FrontendAssets/img/images/suport_img02.jpg')}}" alt="img" data-aos="fade-left" data-aos-delay="200">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="support__content support__content-two">
                                <div class="section__title mb-40">
                                    <h2 class="title">Award-Winning Supports by an Outstanding Team</h2>
                                </div>
                                <div class="support__list-wrap">
                                    <div class="support__list-item support__list-item-two">
                                        <div class="icon">
                                            <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M26.2033 25.2907L21.9329 22.8254C21.1031 22.3463 20.0323 22.6317 19.5535 23.4623L19.385 23.7547C18.9583 24.4948 18.3019 24.9665 17.4651 25.138C16.6316 25.3087 15.8367 25.13 15.1562 24.6195C13.7594 23.5716 12.4399 22.4146 11.2054 21.1801C9.97118 19.9458 8.81418 18.6265 7.76662 17.2299C7.25605 16.5492 7.07674 15.7543 7.24749 14.9205C7.41887 14.0838 7.89162 13.4284 8.6313 13.0015L8.92337 12.833C9.32843 12.5992 9.61199 12.2253 9.73312 11.774C9.85368 11.3247 9.7938 10.8567 9.56112 10.4537L7.09549 6.18328C6.65768 5.42497 5.75424 5.12403 4.94143 5.43597L4.88837 5.45634C4.05062 5.77772 1.74168 6.62109 1.12118 7.24159C-0.713759 9.07659 0.0713659 12.3962 0.889991 14.5087C2.32368 18.2083 5.04324 21.7692 7.83024 24.5558C10.6169 27.3421 14.1776 30.0625 17.8768 31.4961C19.1603 31.9935 20.6046 32.3861 21.9902 32.3861C23.1498 32.3861 24.3041 32.1053 25.1445 31.2649C25.736 30.6734 26.6133 28.2922 26.9348 27.4835L26.9555 27.4315C27.2764 26.6242 26.9533 25.7237 26.2033 25.2907ZM24.8879 8.53859C25.2917 8.68328 25.5609 9.06634 25.5609 9.49503V14.3576H25.7502C26.3109 14.3576 26.7662 14.8129 26.7662 15.3736C26.7662 15.9349 26.3116 16.3896 25.7502 16.3896H25.5609V17.5143C25.5609 18.0757 25.1057 18.53 24.5449 18.53C23.9839 18.53 23.5292 18.0757 23.5292 17.5143V16.3896H19.7069C19.3139 16.3896 18.956 16.1628 18.7882 15.8079C18.6205 15.4523 18.6726 15.0321 18.9221 14.7287L23.7602 8.84916C24.0324 8.51828 24.4841 8.39397 24.8879 8.53859ZM23.5292 14.3577H21.8591L23.5292 12.3283V14.3577ZM16.6433 12.3517C16.8299 11.6678 16.7203 11.1586 16.3156 10.8384C15.8451 10.4664 15.0615 10.4005 14.5313 10.6892C14.1497 10.8971 13.9882 11.2475 14.0371 11.7612C14.0912 12.3198 13.6821 12.8165 13.1235 12.8698C12.5646 12.924 12.0689 12.5142 12.0149 11.9562C11.8864 10.6212 12.4492 9.50872 13.559 8.90428C14.8101 8.22378 16.4624 8.36334 17.5766 9.24547C18.6327 10.0808 19.0072 11.4087 18.6034 12.8868C18.3285 13.8942 17.3771 14.6358 16.371 15.4218C15.9415 15.7567 15.485 16.1128 15.0711 16.4983H18.0232C18.5843 16.4983 19.039 16.9536 19.039 17.5143C19.039 18.0757 18.5843 18.53 18.0232 18.53H13.0028C12.6529 18.53 12.3274 18.3503 12.1417 18.0538C11.9557 17.7575 11.9362 17.3858 12.0887 17.071C12.78 15.6468 14.0779 14.6337 15.1206 13.8199C15.7555 13.324 16.5459 12.7072 16.6433 12.3517ZM32 13.8454C32 17.3796 30.6234 20.702 28.1244 23.2013C27.9257 23.3993 27.6661 23.499 27.4058 23.499C27.1461 23.499 26.8856 23.3993 26.6876 23.2013C26.2907 22.8044 26.2907 22.161 26.6876 21.7642C28.8026 19.6492 29.968 16.8365 29.968 13.8454C29.968 7.66934 24.9439 2.64528 18.7679 2.64528C15.7764 2.64528 12.9641 3.81047 10.8489 5.92547C10.452 6.32234 9.80887 6.32234 9.41199 5.92547C9.01511 5.52859 9.01511 4.88547 9.41199 4.48859C11.9113 1.98991 15.2337 0.613281 18.7679 0.613281C26.0639 0.613344 32 6.54916 32 13.8454Z" fill="currentColor" />
                                            </svg>
                                        </div>
                                        <div class="content">
                                            <h5 class="title">24/7 Expert Support</h5>
                                            <p>Get round-the-clock assistance whenever you need it.</p>
                                        </div>
                                    </div>
                                    <div class="support__list-item support__list-item-two">
                                        <div class="icon">
                                            <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M29.8821 14.691L28.4999 14.0002C28.4999 7.09575 22.903 1.5 16 1.5C9.09625 1.5 3.49975 7.09575 3.49975 14.0002L2.11825 14.691C1.50325 14.9985 1 15.813 1 16.5V19.0001C1 19.6871 1.50325 20.5016 2.11825 20.8091L3.49975 21.4999H5.37475V14.0002C5.37475 8.14087 10.1414 3.375 16 3.375C21.8582 3.375 26.6249 8.14087 26.6249 14.0002V24C26.6249 27.1065 24.1068 29.625 20.9999 29.625H17.2499V27.75H14.7498V31.5H20.9999C25.1418 31.5 28.4999 28.1419 28.4999 24V21.4999L29.8821 20.8091C30.4971 20.5016 31 19.6871 31 19.0001V16.5C31 15.813 30.4971 14.9985 29.8821 14.691Z" fill="currentColor" />
                                                <path d="M21.1429 10.9545H16.9645V8.37855C17.7228 8.13491 18.25 7.61855 18.25 7.01491C18.25 6.17818 17.2433 5.5 16.0002 5.5C14.757 5.5 13.75 6.17818 13.75 7.01491C13.75 7.61855 14.2772 8.13636 15.0359 8.37855V10.9545H10.8571C8.72799 10.9545 7 12.5833 7 14.5909V19.4393C7 22.7844 9.88088 25.5 13.429 25.5H18.5717C22.1199 25.5 25 22.7844 25 19.4393V14.5909C25 12.5833 23.2724 10.9545 21.1429 10.9545ZM11.5005 17.0153V15.8033C11.5005 15.1327 12.0767 14.5909 12.7857 14.5909C13.4954 14.5909 14.0716 15.1327 14.0716 15.8033V17.0153C14.0716 17.6865 13.4954 18.2273 12.7857 18.2273C12.0767 18.2273 11.5005 17.6865 11.5005 17.0153ZM19.2143 21.8636L16.6432 22.4698H15.3576L12.7857 21.8636V20.6516H19.2143V21.8636ZM20.5003 17.0153C20.5003 17.6865 19.924 18.2273 19.2143 18.2273C18.505 18.2273 17.9288 17.6865 17.9288 17.0153V15.8033C17.9288 15.1327 18.505 14.5909 19.2143 14.5909C19.924 14.5909 20.5003 15.1327 20.5003 15.8033V17.0153Z" fill="currentColor" />
                                            </svg>
                                        </div>
                                        <div class="content">
                                            <h5 class="title">Instant AI Assistant Support</h5>
                                            <p>Get round-the-clock assistance whenever you need it.</p>
                                        </div>
                                    </div>
                                    <div class="support__list-item support__list-item-two">
                                        <div class="icon">
                                            <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 19.5H7.98347C6.89256 19.5 6 20.371 6 21.4355V29.5645C6 30.6398 6.89256 31.5 7.98347 31.5H10V19.5Z" fill="currentColor" />
                                                <path d="M25.8879 22.4916L23.9619 29.3279C23.6022 30.6083 22.4304 31.5 21.0729 31.5H12V18.7419L15.8287 13.4031C16.2348 12.843 16.8961 12.5 17.6039 12.5C18.8337 12.5 19.7735 13.4946 19.7735 14.6378C19.7735 14.8321 19.7503 15.0265 19.6923 15.2208L18.6829 18.7419H22.9989C24.9829 18.7419 26.4216 20.6053 25.8879 22.4916Z" fill="currentColor" />
                                                <path d="M5.03674 5.81011L5.96338 7.55225C6.05098 7.71604 6.21879 7.83058 6.41497 7.85693L8.48665 8.1364C8.97773 8.20284 9.17392 8.76293 8.81856 9.08479L7.3194 10.4409C7.17874 10.5692 7.11335 10.7525 7.14666 10.9334L7.50078 12.8485C7.58469 13.3033 7.0714 13.6492 6.6309 13.435L4.77762 12.5313C4.60365 12.4465 4.39512 12.4465 4.21991 12.5313L2.36663 13.435C1.92737 13.6492 1.41284 13.3033 1.49675 12.8485L1.85087 10.9334C1.88418 10.7525 1.82002 10.5692 1.67813 10.4409L0.181437 9.08479C-0.173919 8.76293 0.0222665 8.20284 0.513349 8.1364L2.58503 7.85693C2.77998 7.83058 2.94902 7.71604 3.03662 7.55225L3.96326 5.81011C4.18289 5.39663 4.81711 5.39663 5.03674 5.81011Z" fill="currentColor" />
                                                <path d="M16.4771 1.81011L17.3008 3.55225C17.3787 3.71604 17.5278 3.83058 17.7022 3.85693L19.5437 4.1364C19.9802 4.20284 20.1546 4.76293 19.8387 5.08479L18.5061 6.44093C18.3811 6.56921 18.323 6.75248 18.3526 6.93345L18.6674 8.84854C18.7419 9.30326 18.2857 9.64917 17.8941 9.43498L16.2468 8.53127C16.0921 8.44651 15.9068 8.44651 15.751 8.53127L14.1037 9.43498C13.7132 9.64917 13.2559 9.30326 13.3304 8.84854L13.6452 6.93345C13.6748 6.75248 13.6178 6.56921 13.4917 6.44093L12.1613 5.08479C11.8454 4.76293 12.0198 4.20284 12.4563 4.1364L14.2978 3.85693C14.4711 3.83058 14.6213 3.71719 14.6992 3.55225L15.5229 1.81011C15.7181 1.39663 16.2819 1.39663 16.4771 1.81011Z" fill="currentColor" />
                                                <path d="M28.0378 5.81011L28.9642 7.55225C29.0518 7.71604 29.2196 7.83058 29.4157 7.85693L31.4868 8.1364C31.9777 8.20284 32.1739 8.76293 31.8186 9.08479L30.3199 10.4409C30.1792 10.5692 30.1139 10.7525 30.1472 10.9334L30.5012 12.8485C30.5851 13.3033 30.0719 13.6492 29.6316 13.435L27.7788 12.5313C27.6048 12.4465 27.3964 12.4465 27.2212 12.5313L25.3684 13.435C24.9293 13.6492 24.4149 13.3033 24.4988 12.8485L24.8528 10.9334C24.8861 10.7525 24.822 10.5692 24.6801 10.4409L23.1814 9.08479C22.8261 8.76293 23.0223 8.20284 23.5132 8.1364L25.5843 7.85693C25.7792 7.83058 25.9482 7.71719 26.0358 7.55225L26.9622 5.81011C27.1842 5.39663 27.8183 5.39663 28.0378 5.81011Z" fill="currentColor" />
                                              </svg>
                                        </div>
                                        <div class="content">
                                            <h5 class="title">99% Customer Satisfactions</h5>
                                            <p>Get round-the-clock assistance whenever you need it.</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="contact.html" class="tg-link-btn">
                                    <span class="link-effect">
                                        <span class="effect-1">Explore Our Support</span>
                                        <span class="effect-1">Explore Our Support</span>
                                    </span>
                                    <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.75 5.75L5.25 13.25" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M6 5.75H12.75V12.5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <svg class="shape" width="158" height="24" viewBox="0 0 158 24" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M69.7142 0.0317909C69.4741 0.0498856 68.6882 0.107126 67.9677 0.158902C53.4981 1.19988 34.1707 5.85317 21.0452 11.4561C9.81998 16.2478 -0.151768 22.0278 0.00174959 23.6538C0.036767 24.0241 0.388425 24.03 1.50042 23.679C2.49951 23.3636 2.43332 23.3196 1.31241 23.5539C0.196222 23.7872 0.154568 23.7417 0.85841 23.0576C3.79498 20.2033 18.3601 13.2228 28.3442 9.8847C44.6053 4.44797 60.6901 1.44434 73.7749 1.40098C78.7808 1.38441 80.0623 1.60549 80.0623 2.48568C80.0623 3.6793 75.0054 7.01195 71.7227 7.98181C61.7857 10.9175 48.8795 15.9927 47.4536 17.5254C46.9788 18.0358 47.2131 18.7167 47.8636 18.7167C49.1436 18.7167 59.1241 14.9004 67.2255 11.3132C70.0471 10.0639 70.4362 9.94553 78.5777 7.86168C90.9303 4.70004 97.3086 3.65879 105.299 3.49943C108.587 3.43395 108.916 3.50606 108.442 4.18855C107.487 5.56411 100.384 9.0906 88.1399 14.2674C85.9769 15.1819 85.4413 15.8101 86.1793 16.5671L86.4457 16.8403L87.38 16.7934C88.0872 16.7579 88.8848 16.6139 90.6589 16.2015C96.6864 14.8001 108.106 12.4839 113.639 11.5406C123.048 9.93639 133.353 8.81649 147.914 7.81564C150.085 7.66649 151.792 7.49818 152.979 7.31651C153.963 7.16584 155.496 6.97191 156.384 6.88565L158 6.7287L156.908 6.6634C156.308 6.62748 155.031 6.48917 154.07 6.35606C149.741 5.75616 142.692 6.14072 127.262 7.8186C117.316 8.90007 105.433 10.9882 94.6183 13.5546C93.9069 13.7235 93.2585 13.8603 93.1775 13.8586C93.0964 13.8569 93.9732 13.4408 95.1259 12.9338C108.252 7.16037 111.235 5.14542 109.991 2.89146C109.489 1.98368 108.637 1.7721 105.474 1.77058C97.8514 1.76682 89.901 3.033 79.0626 5.97688C77.4871 6.40479 77.4915 6.40694 78.5001 5.69838C82.2859 3.03846 82.1052 0.939927 78.0256 0.187026C77.3427 0.0610802 70.9178 -0.0590409 69.7142 0.0317909Z"/>
                    </svg>
                </div>
            </div>
        </section>
        <!-- support-area-end -->

        <!-- faq-area -->
        <section class="faq__area-two section-py-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="faq__inner-wrap-two">
                            <div class="section__title text-center mb-60">
                                <h2 class="title">Help Center – Hosting FAQs</h2>
                                <p>Switch to a better host today! Migrate your website effortlessly with our expert support. Get started now!</p>
                            </div>
                            <div class="faq__wrap faq__wrap-two">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item active">
                                      <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                          <span>1.</span> What is domain hosting
                                        </button>
                                      </h2>
                                      <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>I'm here to help if you're searching for a product designer to bring your idea to life or a design partner to help take your business to the next level.</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="accordion-item">
                                      <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <span>2.</span> Can I transfer my existing domain to your hosting service?
                                        </button>
                                      </h2>
                                      <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>I'm here to help if you're searching for a product designer to bring your idea to life or a design partner to help take your business to the next level.</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="accordion-item">
                                      <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <span>3.</span> Do you offer email hosting with domain hosting?
                                        </button>
                                      </h2>
                                      <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>I'm here to help if you're searching for a product designer to bring your idea to life or a design partner to help take your business to the next level.</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="accordion-item">
                                      <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            <span>4.</span> Is technical support available if I need help?
                                        </button>
                                      </h2>
                                      <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>I'm here to help if you're searching for a product designer to bring your idea to life or a design partner to help take your business to the next level.</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="accordion-item">
                                      <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            <span>5.</span> How secure is my domain with your service?
                                        </button>
                                      </h2>
                                      <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                          <p>I'm here to help if you're searching for a product designer to bring your idea to life or a design partner to help take your business to the next level.</p>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="faq__bottom-content">
                                <p>Didn’t find your Desiree answer? please feel free to
                                    <a href="contact.html" class="tg-link-btn">
                                        <span class="link-effect">
                                            <span class="effect-1">Contact us</span>
                                            <span class="effect-1">Contact us</span>
                                        </span>
                                        <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.75 5.75L5.25 13.25" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M6 5.75H12.75V12.5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq-area-end -->

        <!-- features-area -->
        <section class="features__area-three">
            <div class="container">
                <div class="features__inner-wrap-two" data-background="assets/img/bg/features_bg.jpg')}}">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__title text-center mb-50">
                                <h2 class="title">The Right Hosting Plan for Every Need</h2>
                                <p>Switch to a better host today! Migrate your website effortlessly with our expert support. Get started now!</p>
                            </div>
                        </div>
                    </div>
                    <div class="row gutter-y-24">
                        <div class="col-md-6">
                            <div class="features__item-five">
                                <div class="features__content-five">
                                    <h3 class="title">Effortless Managed WordPress Hosting</h3>
                                    <p>Get fast, secure, and hassle-free WordPress hosting with automatic updates, daily backups, and expert support.</p>
                                    <a href="hosting.html" class="tg-btn tg-border-btn-three">See Pricing
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.25 6.75L10.5 9L8.25 11.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M2.25 9C2.25 9.88642 2.42459 10.7642 2.76381 11.5831C3.10303 12.4021 3.60023 13.1462 4.22703 13.773C4.85382 14.3998 5.59794 14.897 6.41689 15.2362C7.23583 15.5754 8.11358 15.75 9 15.75C9.88642 15.75 10.7642 15.5754 11.5831 15.2362C12.4021 14.897 13.1462 14.3998 13.773 13.773C14.3998 13.1462 14.897 12.4021 15.2362 11.5831C15.5754 10.7642 15.75 9.88642 15.75 9C15.75 7.20979 15.0388 5.4929 13.773 4.22703C12.5071 2.96116 10.7902 2.25 9 2.25C7.20979 2.25 5.4929 2.96116 4.22703 4.22703C2.96116 5.4929 2.25 7.20979 2.25 9Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="features__shape-three">
                                    <img src="{{ asset('FrontendAssets/img/images/features_shape_icon01.svg')}}" alt="shape">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="features__item-five features__item-six">
                                <div class="features__content-five">
                                    <h3 class="title">Powerful & Scalable Cloud Hosting</h3>
                                    <p>Get fast, secure, and hassle-free WordPress hosting with automatic updates, daily backups, and expert support.</p>
                                    <a href="hosting.html" class="tg-btn tg-border-btn-three">See Pricing
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.25 6.75L10.5 9L8.25 11.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M2.25 9C2.25 9.88642 2.42459 10.7642 2.76381 11.5831C3.10303 12.4021 3.60023 13.1462 4.22703 13.773C4.85382 14.3998 5.59794 14.897 6.41689 15.2362C7.23583 15.5754 8.11358 15.75 9 15.75C9.88642 15.75 10.7642 15.5754 11.5831 15.2362C12.4021 14.897 13.1462 14.3998 13.773 13.773C14.3998 13.1462 14.897 12.4021 15.2362 11.5831C15.5754 10.7642 15.75 9.88642 15.75 9C15.75 7.20979 15.0388 5.4929 13.773 4.22703C12.5071 2.96116 10.7902 2.25 9 2.25C7.20979 2.25 5.4929 2.96116 4.22703 4.22703C2.96116 5.4929 2.25 7.20979 2.25 9Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="features__shape-three">
                                    <img src="{{ asset('FrontendAssets/img/images/features_shape_icon02.svg')}}" alt="shape">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- features-area-end -->

        <!-- brand-area -->
        <div class="brand__area-two section-pt-120">
            <div class="container">
                <div class="brand__title">Trusted By Top Brands Worldwide</div>
                <div class="brand__item-wrap">
                    <div class="swiper-container brand-active fix">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="brand__item">
                                    <img src="{{ asset('FrontendAssets/img/brand/brand_img01.png')}}" alt="img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__item">
                                    <img src="{{ asset('FrontendAssets/img/brand/brand_img02.png')}}" alt="img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__item">
                                    <img src="{{ asset('FrontendAssets/img/brand/brand_img03.png')}}" alt="img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__item">
                                    <img src="{{ asset('FrontendAssets/img/brand/brand_img04.png')}}" alt="img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__item">
                                    <img src="{{ asset('FrontendAssets/img/brand/brand_img05.png')}}" alt="img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__item">
                                    <img src="{{ asset('FrontendAssets/img/brand/brand_img06.png')}}" alt="img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__item">
                                    <img src="{{ asset('FrontendAssets/img/brand/brand_img03.png')}}" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand-area-end -->

    </main>

@endsection

@section('script')

@endsection