@extends('layouts.frontend.master')

@section('meta')

@endsection

@section('css')

@endsection

@section('content')

 <main class="main-area fix">

        <!-- hosting-area -->
        <section class="hosting__top-area hosting__top-bg-two" data-background="assets/img/bg/hosting_top_bg02.jpg')}}">
            <div class="container">
                <div class="row align-items-end justify-content-center">
                    <div class="col-lg-6">
                        <div class="hosting__top-content hosting__top-content-five">
                            <h2 class="title">High-Performance <span>Cloud Infrastructure</span> <br> for Developers</h2>
                            <p>Best for: Growing websites, business sites. Discover unique domains, secure hosting, and professional email services all in one place.</p>
                            <a href="#!" class="tg-btn tg-black-btn-two">View Hosting Plan</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-9">
                        <div class="hosting__top-images hosting__top-images-five">
                            <img src="{{ asset('FrontendAssets/img/images/hosting_top-img04.png')}}" alt="img" data-aos="fade-up" data-aos-delay="200">
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
                <div class="pricing-tab pricing-tab-two pricing-tab-four">
                    <span class="tab-btn monthly_tab_title">12 Months</span>
                    <span class="pricing-tab-switcher"></span>
                    <span class="tab-btn annual_tab_title">36 Months <strong>(save 30%)</strong></span>
                </div>
                <div class="pricing__item-wrap-three">
                    <div class="row gx-0 justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="pricing__box pricing__box-two pricing__box-six">
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
                            <div class="pricing__box pricing__box-two pricing__box-six">
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
                            <div class="pricing__box pricing__box-two pricing__box-six">
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
        <section class="hosting__area-three section-pb-120">
            <div class="container">
                <div class="hosting__inner-wrap hosting__inner-wrap-three hosting__inner-wrap-four">
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
                    </div>
                </div>
            </div>
        </section>
        <!-- hosting-area-two -->

        <!-- features-area -->
        <section class="features__area-ten section-pt-120 section-pb-90">
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
                        <div class="features__item-twelve features__item-seventeen">
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
                        <div class="features__item-twelve features__item-seventeen">
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
                        <div class="features__item-twelve features__item-seventeen">
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
            <div class="shape">
                <img src="{{ asset('FrontendAssets/img/images/features_shape.svg')}}" alt="">
            </div>
        </section>
        <!-- features-area-end -->

        <!-- features-area -->
        <section class="features__area-five section-pt-120">
            <div class="container">
                <div class="features__inner-wrap">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__title text-center mb-60">
                                <h2 class="title">Seamless website migration with ease.</h2>
                                <p>Switch to a better host today! Migrate your website effortlessly with our expert support. Get started now!</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="features__item-four features__item-eleven">
                                <div class="features__icon features__icon-two">
                                    <img src="{{ asset('FrontendAssets/img/icon/h2_features_icon01.svg')}}" alt="icon">
                                </div>
                                <div class="features__content-four features__content-seven">
                                    <h2 class="title">Backup & Prepare</h2>
                                    <p>Secure all files, databases, and settings from your current host.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="features__item-four features__item-eleven">
                                <div class="features__icon features__icon-two">
                                    <img src="{{ asset('FrontendAssets/img/icon/h2_features_icon02.svg')}}" alt="icon">
                                </div>
                                <div class="features__content-four features__content-seven">
                                    <h2 class="title">Transfer & Configure</h2>
                                    <p>Move your website to the new host and adjust necessary settings.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="features__item-four features__item-eleven">
                                <div class="features__icon features__icon-two">
                                    <img src="{{ asset('FrontendAssets/img/icon/h2_features_icon03.svg')}}" alt="icon">
                                </div>
                                <div class="features__content-four features__content-seven">
                                    <h2 class="title">Test & Launch</h2>
                                    <p>Verify functionality, fix issues, and go live smoothly.</p>
                                </div>
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
        <section class="support__area-four">
            <div class="container">
                <div class="support__inner-wrap-four support__bg jarallax" data-background="assets/img/bg/support_bg.jpg')}}">
                    <div class="support__content-four">
                        <div class="support__icon">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.52394 20.5986C7.19851 20.5986 7.84908 20.449 8.39213 20.2005C8.47154 20.1642 8.55791 20.1634 8.63811 20.198C9.28688 20.4781 10.0099 20.6235 10.7293 20.6156C10.8379 20.6144 10.9013 20.4944 10.8491 20.3992C10.5554 19.8642 10.3463 19.2897 10.2206 18.6915C10.205 18.6178 10.2181 18.5411 10.2526 18.4741C10.4869 18.018 10.6192 17.511 10.6192 16.9741C10.6192 14.9756 8.78529 13.3525 6.52394 13.3525C4.26265 13.3525 2.43164 14.9756 2.43164 16.9741C2.43164 17.1907 2.45186 17.4044 2.49516 17.6095C2.83309 19.3076 4.50813 20.5986 6.52394 20.5986Z" fill="currentColor" />
                                <path d="M37.3584 36.9954H36.4827L37.1621 25.6082C37.23 24.4912 36.3395 23.5479 35.2225 23.5479H9.60737C8.4904 23.5479 7.59984 24.4912 7.66779 25.6082L8.34719 36.9954H2.64144C2.22465 36.9954 1.88672 37.3334 1.88672 37.7502C1.88672 38.1669 2.22465 38.5049 2.64144 38.5049H37.3584C37.7752 38.5049 38.1131 38.1669 38.1131 37.7502C38.1131 37.3334 37.7752 36.9954 37.3584 36.9954ZM22.4149 28.2044C23.7885 28.2044 24.9055 29.3214 24.9055 30.695C24.9055 32.0761 23.7885 33.1931 22.4149 33.1931C21.0413 33.1931 19.9244 32.0761 19.9244 30.695C19.9244 29.3214 21.0413 28.2044 22.4149 28.2044Z" fill="currentColor" />
                                <path d="M11.5625 22.0385H33.2682C32.3549 20.4612 30.6568 19.4649 28.8153 19.4649H26.204C27.5172 18.3631 28.5361 16.8008 29.1398 15.2385H31.2757C32.2493 15.2385 33.0418 14.4461 33.0418 13.4725V11.8574C33.0418 11.2612 32.7399 10.7328 32.287 10.4159C31.8116 5.38193 27.555 1.49512 22.4153 1.49512C17.2757 1.49512 13.0267 5.38193 12.5436 10.4159C12.0908 10.7328 11.7889 11.2612 11.7889 11.8574V13.4725C11.7889 14.4461 12.5813 15.2385 13.555 15.2385H15.6908C16.2946 16.8008 17.3134 18.3631 18.6266 19.4649H16.0153C14.1738 19.4649 12.4757 20.4612 11.5625 22.0385ZM15.4191 8.86872V8.87627C15.2832 9.26118 15.1851 9.67627 15.1097 10.0914H14.0908C14.7097 6.06119 18.2191 3.00455 22.4153 3.00455C26.6116 3.00455 30.121 6.06119 30.7398 10.0914H29.7361C29.0719 6.45361 26.038 3.78949 22.4153 3.78949C19.2153 3.78949 16.4757 5.88002 15.4191 8.86872ZM18.4078 17.0649C18.921 17.1857 19.5323 17.2838 20.2417 17.3442C20.5512 18.1442 21.3436 18.7102 22.2795 18.7102C23.487 18.7102 24.4606 17.7744 24.4606 16.6197C24.4606 15.4725 23.487 14.5366 22.2795 14.5366C21.3738 14.5366 20.604 15.065 20.2719 15.8197C18.6191 15.6763 17.6455 15.2914 17.2682 15.1102C17.1474 14.8234 17.0342 14.5366 16.9361 14.2499C16.6267 13.3216 16.4682 12.4234 16.4682 11.5706C16.4682 11.3517 16.4757 11.1404 16.4983 10.9215C16.5361 10.5064 16.6191 10.1065 16.7323 9.714C17.3285 9.53287 18.8153 9.23097 20.7021 10.0461C21.2078 10.2649 21.7285 10.3555 22.2568 10.3555C24.3097 10.3555 26.3852 8.96683 27.4116 8.15928C27.9097 8.96683 28.2342 9.91023 28.3323 10.9291C28.355 11.1404 28.3625 11.3517 28.3625 11.5706C28.3625 12.4234 28.204 13.3216 27.8946 14.2499C27.0568 16.7631 24.9889 19.4649 22.4153 19.4649C20.8304 19.4649 19.4342 18.4385 18.4078 17.0649Z" fill="currentColor" />
                            </svg>
                        </div>
                        <h3 class="title">Award-Winning Supports by an Outstanding Team</h3>
                        <div class="support__list-wrap">
                            <div class="support__list-item support__list-item-four">
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
                            <div class="support__list-item support__list-item-four">
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
                            <div class="support__list-item support__list-item-four">
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
                        <a href="contact.html" class="tg-btn tg-btn-five">Explore Our Support
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.16797 10.5H15.8346" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12.5 13.8333L15.8333 10.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12.5 7.1665L15.8333 10.4998" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                        <div class="shape">
                            <img src="{{ asset('FrontendAssets/img/images/support_shape.png')}}" alt="shape">
                        </div>
                    </div>
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