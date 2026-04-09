   <header>
    @php
            $hostingMenuItems = \App\Models\Hosting::where('is_active', true)->orderBy('title')->get();
    @endphp
        <div id="header-fixed-height"></div>
        <div id="sticky-header" class="tg-header__area tg-header__area-three">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tgmenu__wrap">
                            <nav class="tgmenu__nav">
                                <div class="logo">
                                    <a href="{{ route('home') }}"><img src="{{ asset('FrontendAssets/img/logo/dark-logo.png')}}" alt="Logo"></a>
                                </div>
                                <div class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-lg-flex">
                                    <ul class="navigation">
                                      <li><a href="{{ route('home') }}">Home</a></li>

                                        <li class="menu-item-has-children tg-mega-menu-has-children"><a href="{{ route('pricing') }}">Hosting</a>
                                            <div class="tg-mega-menu-wrap tg-mega-menu-wrap-two">
                                                <div class="tg-mega-menu-left-side">
                                                    <h5 class="mega-menu-title mega-menu-title-two">RELIABLE HOSTING PLAN</h5>
                                                    <div class="row gutter-y-24">
                                                        @forelse($hostingMenuItems as $hostingItem)
                                                            <div class="col-lg-6">
                                                                <div class="mega-menu-item-two">
                                                                    <a href="{{ url('/hosting/' . $hostingItem->slug) }}">
                                                                        <div class="icon">
                                                                            <img src="{{ asset('storage/' . $hostingItem->icon) }}" alt="{{ $hostingItem->title }} icon">
                                                                        </div>
                                                                        <div class="content">
                                                                            <strong class="title">{{ $hostingItem->title }}</strong>
                                                                            <span>{{ \Illuminate\Support\Str::limit($hostingItem->description, 95) }}</span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        @empty
                                                            <div class="col-12">
                                                                <p class="mb-0">No hosting entries available yet.</p>
                                                            </div>
                                                        @endforelse
                                                    </div>
                                                </div>
                                                <div class="tg-mega-menu-right-side">
                                                    <img src="{{ asset('FrontendAssets/img/menu-images/mega_menu-img.jpg')}}" alt="img">
                                                    <h2 class="title"><span>70% Off</span> for your first Domain</h2>
                                                </div>
                                            </div>
                                        </li>
                                      
                                      <li><a href="{{ route('pricing') }}">Pricing</a></li>
                                        <li><a href="{{ route('contact') }}">Contact</a></li>
                                    </ul>
                                </div>
                                <div class="tgmenu__action">
                                    <ul class="list-wrap">
                                        <li class="header-dropdown-wrap dropdown">
                                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Help
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_464_4901)">
                                                        <path d="M4 7L8 11L12 7" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_464_4901">
                                                            <rect width="16" height="16" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu">
                                                <h3 class="title">Get In Touch</h3>
                                                <p>Discover unique domains, secure hosting services all in one place.</p>
                                                <div class="header-dropdown-questions">
                                                    <span>Have any questions?</span>
                                                    <div class="header-dropdown-questions-inner">
                                                        <a href="tel:0123456789" class="phone">+2 344 455 4455</a>
                                                        <a href="mailto:sayhello@DeveonHost.com" class="mail">sayhello@DeveonHost.com</a>
                                                    </div>
                                                </div>
                                                <a href="#!" class="tg-btn tg-btn-two">
                                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.8667 12.0282C11.8667 12.0282 11.918 11.9916 12 11.9289C13.2287 10.9789 14 9.60222 14 8.06955C14 5.21222 11.3133 2.89355 8 2.89355C4.68667 2.89355 2 5.21222 2 8.06955C2 10.9282 4.68667 13.1669 8 13.1669C8.28267 13.1669 8.74667 13.1482 9.392 13.1109C10.2333 13.6576 11.4613 14.1062 12.536 14.1062C12.8687 14.1062 13.0253 13.8329 12.812 13.5542C12.488 13.1569 12.0413 12.5202 11.868 12.0276L11.8667 12.0282Z" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M5 9.5C6.66667 11.1667 9.33333 11.1667 11 9.5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    Live Chat
                                                </a>
                                                <div class="header-dropdown-contact">
                                                    <span class="title">Feel free to contact with us</span>
                                                    <a href="{{ route('contact') }}">Contact us
                                                        <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12.75 5.75L5.25 13.25" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M6 5.75H12.75V12.5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </a>
                                                </div>
                                                <div class="header-dropdown-social">
                                                    <span class="title">Get Connected</span>
                                                    <ul class="list-wrap">
                                                        <li>
                                                            <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="https://www.pinterest.com/" target="_blank"><i class="fab fa-pinterest"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="https://github.com/" target="_blank"><i class="fab fa-github"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        @guest
                                            <li class="header-btn">
                                                <a href="{{ route('user.login') }}" class="tg-btn tg-btn-two">Login</a>
                                            </li>
                                            <li class="header-btn">
                                                <a href="{{ route('register') }}" class="tg-btn tg-btn-two">Register</a>
                                            </li>
                                        @endguest

                                        @auth
                                            <li class="header-btn">
                                                <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    <button type="submit" class="tg-btn tg-btn-two">Logout</button>
                                                </form>
                                            </li>
                                        @endauth
                                    </ul>
                                </div>
                                <div class="mobile-nav-toggler"><i class="tg-flaticon-menu-1"></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Menu  -->
        <div class="tgmobile__menu">
            <nav class="tgmobile__menu-box">
                <div class="close-btn"><i class="tg-flaticon-close-1"></i></div>
                <div class="nav-logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('FrontendAssets/img/logo/dark-logo.png')}}" alt="Logo"></a>
                </div>
                <div class="tgmobile__search">
                    <form action="#">
                        <input type="text" placeholder="Search here...">
                        <button><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="tgmobile__menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
                <div class="social-links">
                    <ul class="list-wrap">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="tgmobile__menu-backdrop"></div>
        <!-- End Mobile Menu -->

    </header>