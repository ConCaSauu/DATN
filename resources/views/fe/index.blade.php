<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=".">
    <meta name="keywords"
        content="Job,IT,Marketing,HR,new,Company">
    <title>Good Job</title>

    <!-- Site Favicon -->
    <link rel="icon" href="{{asset('upload/images')}}/logo3.jpg" type="image/x-icon">

    <!-- Css All Plugins Files -->
    <link rel="stylesheet" href="{{asset('fe/assets')}}/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('fe/assets')}}/css/vendor/remixicon.css">
    <link rel="stylesheet" href="{{asset('fe/assets')}}/css/vendor/aos.css">
    <link rel="stylesheet" href="{{asset('fe/assets')}}/css/vendor/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{asset('fe/assets')}}/css/vendor/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('fe/assets')}}/css/vendor/slick.min.css">
    <link rel="stylesheet" href="{{asset('fe/assets')}}/css/vendor/animate.min.css">
    <link rel="stylesheet" href="{{asset('fe/assets')}}/css/vendor/jquery-range-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    
    <!-- Main Style -->
    <link rel="stylesheet" href="{{asset('fe/assets')}}/css/style.css">
</head>

<body>

    <!-- Loader -->
    <div class="bb-loader">
        <img src="{{asset('upload/images')}}/loader.jpg" alt="loader">
        <span class="loader"></span>
    </div>

    <!-- Header -->
    <header class="bb-header">
        <div class="bottom-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="inner-bottom-header">
                            <div class="cols bb-logo-detail">
                                <!-- Header Logo Start -->
                                <div class="header-logo">
                                    <a href="{{route('home')}}">
                                        <img src="{{asset('upload/images')}}/logo3.jpeg" alt="logo" class="light">
                                        <img src="{{asset('fe/assets')}}/img/logo/logo-dark.png" alt="logo" class="dark">
                                    </a>
                                </div>
                                <!-- Header Logo End -->
                                <a href="javascript:void(0)" class="bb-sidebar-toggle bb-category-toggle">
                                    <svg class="svg-icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M384 928H192a96 96 0 0 1-96-96V640a96 96 0 0 1 96-96h192a96 96 0 0 1 96 96v192a96 96 0 0 1-96 96zM192 608a32 32 0 0 0-32 32v192a32 32 0 0 0 32 32h192a32 32 0 0 0 32-32V640a32 32 0 0 0-32-32H192zM784 928H640a96 96 0 0 1-96-96V640a96 96 0 0 1 96-96h192a96 96 0 0 1 96 96v144a32 32 0 0 1-64 0V640a32 32 0 0 0-32-32H640a32 32 0 0 0-32 32v192a32 32 0 0 0 32 32h144a32 32 0 0 1 0 64zM384 480H192a96 96 0 0 1-96-96V192a96 96 0 0 1 96-96h192a96 96 0 0 1 96 96v192a96 96 0 0 1-96 96zM192 160a32 32 0 0 0-32 32v192a32 32 0 0 0 32 32h192a32 32 0 0 0 32-32V192a32 32 0 0 0-32-32H192zM832 480H640a96 96 0 0 1-96-96V192a96 96 0 0 1 96-96h192a96 96 0 0 1 96 96v192a96 96 0 0 1-96 96zM640 160a32 32 0 0 0-32 32v192a32 32 0 0 0 32 32h192a32 32 0 0 0 32-32V192a32 32 0 0 0-32-32H640z" />
                                    </svg>
                                </a>
                            </div>
                            <div class="cols">
                                <div class="header-search">
                                    <form class="bb-btn-group-form" action="{{route('job_search')}}">
                                        @csrf
                                        {{-- <div class="inner-select">
                                            <div class="custom-select">
                                                <select>
                                                    <option value="option1">Ha Noi</option>
                                                    <option value="option2">Ho Chi Minh</option>
                                                    
                                                </select>
                                            </div>
                                        </div> --}}
                                        <input class="form-control bb-search-bar" placeholder="Search Jobs..."
                                            type="text" name="search">
                                        <button class="submit" type="submit"><i class="ri-search-line"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="cols bb-icons">
                                <div class="bb-flex-justify">
                                    <div class="bb-header-buttons">
                                        <div class="bb-acc-drop">
                                            
                                            @if (Auth::check())
                                            <a href="javascript:void(0)"
                                            class="bb-header-btn bb-header-user dropdown-toggle bb-user-toggle"
                                            title="Account">
                                            <div class="header-icon">
                                                <svg class="svg-icon" viewBox="0 0 1024 1024" version="1.1"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M512.476 648.247c-170.169 0-308.118-136.411-308.118-304.681 0-168.271 137.949-304.681 308.118-304.681 170.169 0 308.119 136.411 308.119 304.681C820.594 511.837 682.645 648.247 512.476 648.247L512.476 648.247zM512.476 100.186c-135.713 0-246.12 109.178-246.12 243.381 0 134.202 110.407 243.381 246.12 243.381 135.719 0 246.126-109.179 246.126-243.381C758.602 209.364 648.195 100.186 512.476 100.186L512.476 100.186zM935.867 985.115l-26.164 0c-9.648 0-17.779-6.941-19.384-16.35-2.646-15.426-6.277-30.52-11.142-44.95-24.769-87.686-81.337-164.13-159.104-214.266-63.232 35.203-134.235 53.64-207.597 53.64-73.555 0-144.73-18.537-208.084-53.922-78 50.131-134.75 126.68-159.564 214.549 0 0-4.893 18.172-11.795 46.4-2.136 8.723-10.035 14.9-19.112 14.9L88.133 985.116c-9.415 0-16.693-8.214-15.47-17.452C91.698 824.084 181.099 702.474 305.51 637.615c58.682 40.472 129.996 64.267 206.966 64.267 76.799 0 147.968-23.684 206.584-63.991 124.123 64.932 213.281 186.403 232.277 329.772C952.56 976.901 945.287 985.115 935.867 985.115L935.867 985.115z" />
                                                </svg>
                                            </div>
                                            <div class="bb-btn-desc">
                                                <span class="bb-btn-title">Account</span>
                                                <span class="bb-btn-stitle">Hello {{Auth::user()->name}}!</span>
                                            </div>
                                            </a>
                                            <ul class="bb-dropdown-menu">
                                                <li><a class="dropdown-item" href="{{route('profile')}}">Profile</a></li>
                                                <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
                                            </ul>

                                            @else
                                            <a href="javascript:void(0)"
                                            class="bb-header-btn bb-header-user dropdown-toggle bb-user-toggle"
                                            title="Account">
                                            <div class="header-icon">
                                                <svg class="svg-icon" viewBox="0 0 1024 1024" version="1.1"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M512.476 648.247c-170.169 0-308.118-136.411-308.118-304.681 0-168.271 137.949-304.681 308.118-304.681 170.169 0 308.119 136.411 308.119 304.681C820.594 511.837 682.645 648.247 512.476 648.247L512.476 648.247zM512.476 100.186c-135.713 0-246.12 109.178-246.12 243.381 0 134.202 110.407 243.381 246.12 243.381 135.719 0 246.126-109.179 246.126-243.381C758.602 209.364 648.195 100.186 512.476 100.186L512.476 100.186zM935.867 985.115l-26.164 0c-9.648 0-17.779-6.941-19.384-16.35-2.646-15.426-6.277-30.52-11.142-44.95-24.769-87.686-81.337-164.13-159.104-214.266-63.232 35.203-134.235 53.64-207.597 53.64-73.555 0-144.73-18.537-208.084-53.922-78 50.131-134.75 126.68-159.564 214.549 0 0-4.893 18.172-11.795 46.4-2.136 8.723-10.035 14.9-19.112 14.9L88.133 985.116c-9.415 0-16.693-8.214-15.47-17.452C91.698 824.084 181.099 702.474 305.51 637.615c58.682 40.472 129.996 64.267 206.966 64.267 76.799 0 147.968-23.684 206.584-63.991 124.123 64.932 213.281 186.403 232.277 329.772C952.56 976.901 945.287 985.115 935.867 985.115L935.867 985.115z" />
                                                </svg>
                                            </div>
                                            <div class="bb-btn-desc">
                                                <span class="bb-btn-title">Account</span>
                                                <span class="bb-btn-stitle">Login</span>
                                            </div>
                                            </a>
                                            <ul class="bb-dropdown-menu">
                                                <li><a class="dropdown-item" href="{{route('Uregister')}}">Register</a></li>
                                                <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
                                            </ul>
                                            @endif        
                                        </div>
                                        {{-- <a href="javascript:void(0)" class="bb-toggle-menu">
                                            <div class="header-icon">
                                                <i class="ri-menu-3-fill"></i>
                                            </div>
                                        </a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bb-main-menu-desk">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bb-inner-menu-desk">
                            <a href="javascript:void(0)" class="bb-header-btn bb-sidebar-toggle bb-category-toggle">
                                <svg class="svg-icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M384 928H192a96 96 0 0 1-96-96V640a96 96 0 0 1 96-96h192a96 96 0 0 1 96 96v192a96 96 0 0 1-96 96zM192 608a32 32 0 0 0-32 32v192a32 32 0 0 0 32 32h192a32 32 0 0 0 32-32V640a32 32 0 0 0-32-32H192zM784 928H640a96 96 0 0 1-96-96V640a96 96 0 0 1 96-96h192a96 96 0 0 1 96 96v144a32 32 0 0 1-64 0V640a32 32 0 0 0-32-32H640a32 32 0 0 0-32 32v192a32 32 0 0 0 32 32h144a32 32 0 0 1 0 64zM384 480H192a96 96 0 0 1-96-96V192a96 96 0 0 1 96-96h192a96 96 0 0 1 96 96v192a96 96 0 0 1-96 96zM192 160a32 32 0 0 0-32 32v192a32 32 0 0 0 32 32h192a32 32 0 0 0 32-32V192a32 32 0 0 0-32-32H192zM832 480H640a96 96 0 0 1-96-96V192a96 96 0 0 1 96-96h192a96 96 0 0 1 96 96v192a96 96 0 0 1-96 96zM640 160a32 32 0 0 0-32 32v192a32 32 0 0 0 32 32h192a32 32 0 0 0 32-32V192a32 32 0 0 0-32-32H640z" />
                                </svg>
                            </a>
                            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <i class="ri-menu-2-line"></i>
                            </button>
                            <div class="bb-main-menu" id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('home')}}">Home</a>
                                    </li>
                                    <li class="nav-item bb-dropdown">
                                        <a class="nav-link bb-dropdown-item" href="{{route('jobIndex')}}">Jobs</a>
                                        <ul class="bb-dropdown-menu">
                                            <li><a class="dropdown-item" href="about-us.html">Information Technology</a></li>
                                            <li><a class="dropdown-item" href="contact-us.html">Human Resources</a></li>
                                            <li><a class="dropdown-item" href="contact-us.html">Marketing</a></li>
                                            <li><a class="dropdown-item" href="cart.html">Business-Sale</a></li>
                                            <li><a class="dropdown-item" href="checkout.html">Science-Technology</a></li>
                                            <li><a class="dropdown-item" href="compare.html">Auditing</a></li>
                                            <li><a class="dropdown-item" href="faq.html">Accounting</a></li>
                                            <li><a class="dropdown-item" href="login.html">Administration-Secretary</a></li>
                                            <li><a class="dropdown-item" href="register.html">Internship</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item bb-dropdown">
                                        <a class="nav-link bb-dropdown-item" href="{{route('newList')}}">News</a>
                                        {{-- <ul class="bb-dropdown-menu">
                                            <li><a class="dropdown-item" href="blog-left-sidebar.html">Left Sidebar</a>
                                            </li>
                                            <li><a class="dropdown-item" href="blog-right-sidebar.html">Right
                                                    Sidebar</a></li>
                                            <li><a class="dropdown-item" href="blog-full-width.html">Full Width</a></li>
                                            <li><a class="dropdown-item" href="blog-detail-left-sidebar.html">Detail
                                                    Left Sidebar</a></li>
                                            <li><a class="dropdown-item" href="blog-detail-right-sidebar.html">Detail
                                                    Right Sidebar</a></li>
                                            <li><a class="dropdown-item" href="blog-detail-full-width.html">Detail Full
                                                    Width</a></li>
                                        </ul> --}}
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="offer.html">
                                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" viewBox="0 0 64 64"
                                                style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                                <g>
                                                    <path
                                                        d="M10 16v22c0 .3.1.6.2.8.3.6 6.5 13.8 21 20h.2c.2 0 .3.1.5.1s.3 0 .5-.1h.2c14.5-6.2 20.8-19.4 21-20 .1-.3.2-.5.2-.8V16c0-.9-.6-1.7-1.5-1.9-7.6-1.9-19.3-9.6-19.4-9.7-.1-.1-.2-.1-.4-.2-.1 0-.1 0-.2-.1h-.9c-.1 0-.2.1-.3.1-.1.1-.2.1-.4.2s-11.8 7.8-19.4 9.7c-.7.2-1.3 1-1.3 1.9zm4 1.5c6.7-2.1 15-7.2 18-9.1 3 1.9 11.3 7 18 9.1v20c-1.1 2.1-6.7 12.1-18 17.3-11.3-5.2-16.9-15.2-18-17.3z"
                                                        fill="#000000" opacity="1" data-original="#000000" class="">
                                                    </path>
                                                    <path
                                                        d="M28.6 38.4c.4.4.9.6 1.4.6s1-.2 1.4-.6l9.9-9.9c.8-.8.8-2 0-2.8s-2-.8-2.8 0L30 34.2l-4.5-4.5c-.8-.8-2-.8-2.8 0s-.8 2 0 2.8z"
                                                        fill="#000000" opacity="1" data-original="#000000" class="">
                                                    </path>
                                                </g>
                                            </svg>
                                            Offers
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            {{-- <div class="bb-dropdown-menu">
                                <div class="inner-select">
                                    <svg class="svg-icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M511.614214 958.708971c-21.76163 0-41.744753-9.781784-54.865586-26.862811L222.50156 626.526383c-3.540639-4.044106-5.872754-7.978718-7.349385-10.461259-41.72838-58.515718-63.959707-127.685078-63.959707-199.699228 0.87288-193.650465 162.903184-351.075891 361.209691-351.075891 198.726064 0 360.40435 157.49194 360.40435 351.075891-0.839111 72.190159-23.070438 140.856052-64.345494 199.053522-1.962701 3.288906-4.312212 7.189749-7.735171 11.098779L566.479799 931.847184c-13.120832 17.080004-33.103956 26.861788-54.865585 26.861787zM273.525654 580.51956a33.707706 33.707706 0 0 1 2.63399 3.037173L511.278569 890.00931 747.068783 583.556733c0.435928-0.569982 0.889253-1.124614 1.358951-1.669013l2.51631-4.102434c0.285502-0.453325 0.587378-0.89744 0.889253-1.325182 33.507138-46.921659 51.577702-102.416578 52.248991-160.487158 0-155.294902-130.839931-281.95565-291.679105-281.95565-160.571069 0-291.780413 126.72931-292.484448 282.501073 0 57.450457 17.802458 112.811322 51.460022 159.933549l2.90312 4.580318c0.418532 0.73678-0.186242 0.032746-0.756223-0.512676z m476.059439 0.100284v0z m0.066515-0.058329c-0.016373 0.016373-0.033769 0.025583-0.033769 0.041956 0.001023-0.016373 0.017396-0.025583 0.033769-0.041956z m0.051166-0.041955a0.227174 0.227174 0 0 0-0.050142 0.041955c0.016373-0.016373 0.032746-0.033769 0.050142-0.041955z"
                                            fill="#444444" />
                                        <path
                                            d="M512 577.206094c-90.000803 0-163.222455-73.221652-163.222455-163.222455s73.221652-163.222455 163.222455-163.222455S675.222455 323.982836 675.222455 413.983639s-73.222675 163.222455-163.222455 163.222455z m0-240.538355c-42.634006 0-77.3159 34.68087-77.3159 77.3159s34.68087 77.3159 77.3159 77.3159 77.3159-34.681894 77.3159-77.3159-34.681894-77.3159-77.3159-77.3159z"
                                            fill="#00D8A0" />
                                    </svg>
                                    <div class="custom-select">
                                        <select>
                                            <option value="option1">Ha Noi</option>
                                            <option value="option2">Ho Chi Minh</option>

                                        </select>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bb-mobile-menu-overlay"></div>
        {{-- <div id="bb-mobile-menu" class="bb-mobile-menu">
            <div class="bb-menu-title">
                <span class="menu_title">My Menu</span>
                <button type="button" class="bb-close-menu">×</button>
            </div>
            <div class="bb-menu-inner">
                <div class="bb-menu-content">
                    <ul>
                        <li>
                            <a href="index-2.html">Home</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Categories</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="javascript:void(0)">Classic</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop-left-sidebar-col-3.html">Left sidebar 3 column</a></li>
                                        <li><a href="shop-left-sidebar-col-4.html">Left sidebar 4 column</a></li>
                                        <li><a href="shop-right-sidebar-col-3.html">Right sidebar 3 column</a></li>
                                        <li><a href="shop-right-sidebar-col-4.html">Right sidebar 4 column</a></li>
                                        <li><a href="shop-full-width.html">Full width 4 column</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Banner</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop-banner-left-sidebar-col-3.html">Left sidebar 3 column</a></li>
                                        <li><a href="shop-banner-left-sidebar-col-4.html">Left sidebar 4 column</a></li>
                                        <li><a href="shop-banner-right-sidebar-col-3.html">Right sidebar 3 column</a>
                                        </li>
                                        <li><a href="shop-banner-right-sidebar-col-4.html">Right sidebar 4 column</a>
                                        </li>
                                        <li><a href="shop-banner-full-width.html">Full width 4 column</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Columns</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop-full-width-col-3.html">3 Columns full width</a></li>
                                        <li><a href="shop-full-width-col-4.html">4 Columns full width</a></li>
                                        <li><a href="shop-full-width-col-5.html">5 Columns full width</a></li>
                                        <li><a href="shop-full-width-col-6.html">6 Columns full width</a></li>
                                        <li><a href="shop-banner-full-width-col-3.html">Banner 3 Columns</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">List</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop-list-left-sidebar.html">Shop left sidebar</a></li>
                                        <li><a href="shop-list-right-sidebar.html">Shop right sidebar</a></li>
                                        <li><a href="shop-list-banner-left-sidebar.html">Banner left sidebar</a></li>
                                        <li><a href="shop-list-banner-right-sidebar.html">Banner right sidebar</a></li>
                                        <li><a href="shop-list-full-col-2.html">Full width 2 columns</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Products</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="javascript:void(0)">Product page</a>
                                    <ul class="sub-menu">
                                        <li><a href="product-left-sidebar.html">Product left sidebar</a></li>
                                        <li><a href="product-right-sidebar.html">Product right sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Product Accordion</a>
                                    <ul class="sub-menu">
                                        <li><a href="product-accordion-left-sidebar.html">left sidebar</a></li>
                                        <li><a href="product-accordion-right-sidebar.html">right sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="product-full-width.html">Product full width</a></li>
                                <li><a href="product-accordion-full-width.html">accordion full width</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="contact-us.html">Contact Us</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="compare.html">Compare</a></li>
                                <li><a href="faq.html">Faq</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="register.html">Register</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
                                <li><a href="blog-full-width.html">Full Width</a></li>
                                <li><a href="blog-detail-left-sidebar.html">Detail Left Sidebar</a></li>
                                <li><a href="blog-detail-right-sidebar.html">Detail Right Sidebar</a></li>
                                <li><a href="blog-detail-full-width.html">Detail Full Width</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="header-res-lan-curr">
                    <!-- Social Start -->
                    <div class="header-res-social">
                        <div class="header-top-social">
                            <ul class="mb-0">
                                <li class="list-inline-item">
                                    <a href="#"><i class="ri-facebook-fill"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><i class="ri-twitter-fill"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><i class="ri-instagram-line"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><i class="ri-linkedin-fill"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Social End -->
                </div>
            </div>
        </div> --}}
    </header>

    @yield('content')

    <!-- Footer -->
    <footer class="bb-footer margin-t-50">
        <div class="footer-directory padding-tb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <div class="directory-title">
                            <h4>Brands Directory</h4>
                        </div>
                        <div class="directory-contact">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="inner-contact">
                                        <ul>
                                            <li>
                                                <span>Categories :</span>
                                            </li>
                                            <li>
                                                <a href="shop-left-sidebar-col-3.html">IT</a>
                                            </li>
                                            <li>
                                                <a href="shop-left-sidebar-col-3.html">Marketing</a>
                                            </li>
                                            <li>
                                                <a href="shop-left-sidebar-col-3.html">Sale</a>
                                            </li>
                                            <li>
                                                <a href="shop-left-sidebar-col-3.html">Human Resource</a>
                                            </li>
                                            <li>
                                                <a href="shop-left-sidebar-col-3.html">Business-Sale</a>
                                            </li>
                                            <li>
                                                <a href="shop-left-sidebar-col-3.html">Accounting</a>
                                            </li>
                                            <li>
                                                <a href="shop-left-sidebar-col-3.html">Internship</a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                    <div class="inner-contact">
                                        <ul>
                                            <li>
                                                <span>Jobs :</span>
                                            </li>
                                            <li>
                                                <a href="shop-left-sidebar-col-3.html">IT</a>
                                            </li>
                                            <li>
                                                <a href="shop-left-sidebar-col-3.html">Marketing</a>
                                            </li>
                                            <li>
                                                <a href="shop-left-sidebar-col-3.html">Sale</a>
                                            </li>
                                            <li>
                                                <a href="shop-left-sidebar-col-3.html">Human Resource</a>
                                            </li>
                                            <li>
                                                <a href="shop-left-sidebar-col-3.html">Business-Sale</a>
                                            </li>
                                            <li>
                                                <a href="shop-left-sidebar-col-3.html">Accounting</a>
                                            </li>
                                            <li>
                                                <a href="shop-left-sidebar-col-3.html">Internship</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="inner-contact">
                                        <ul>
                                            <li>
                                                <span>Company :</span>
                                            </li>
                                            <li>
                                                <a href="shop-left-sidebar-col-3.html">IT</a>
                                            </li>
                                            <li>
                                                <a href="shop-left-sidebar-col-3.html">Marketing</a>
                                            </li>
                                            <li>
                                                <a href="shop-left-sidebar-col-3.html">Sale</a>
                                            </li>
                                            <li>
                                                <a href="shop-left-sidebar-col-3.html">Human Resource</a>
                                            </li>
                                            <li>
                                                <a href="shop-left-sidebar-col-3.html">Business-Sale</a>
                                            </li>
                                            <li>
                                                <a href="shop-left-sidebar-col-3.html">Accounting</a>
                                            </li>
                                            <li>
                                                <a href="shop-left-sidebar-col-3.html">Internship</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="inner-contact">
                                        <ul>
                                            <li>
                                                <span>News :</span>
                                            </li>
                                            <li>
                                                <a href="shop-left-sidebar-col-3.html">IT</a>
                                            </li>
                                            <li>
                                                <a href="shop-left-sidebar-col-3.html">Marketing</a>
                                            </li>
                                            <li>
                                                <a href="shop-left-sidebar-col-3.html">Sale</a>
                                            </li>
                                            <li>
                                                <a href="shop-left-sidebar-col-3.html">Human Resource</a>
                                            </li>
                                            <li>
                                                <a href="shop-left-sidebar-col-3.html">Business-Sale</a>
                                            </li>
                                            <li>
                                                <a href="shop-left-sidebar-col-3.html">Accounting</a>
                                            </li>
                                            <li>
                                                <a href="shop-left-sidebar-col-3.html">Internship</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-container">
            <div class="footer-top padding-tb-50">
                <div class="container">
                    <div class="row m-minus-991" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <div class="col-sm-12 col-lg-3 bb-footer-cat">
                            <div class="bb-footer-widget bb-footer-company">
                                <img src="{{asset('upload/images')}}/logo3.jpeg" class="bb-footer-logo" alt="footer logo">
                                <img src="{{asset('fe/assets')}}/img/logo/logo-dark.png" class="bb-footer-dark-logo" alt="footer logo">
                                <p class="bb-footer-detail">Provide job opportunities and connect everyone </p>
                                <div class="bb-app-store">
                                    <a href="javascript:void(0)" class="app-img">
                                        <img src="{{asset('fe/assets')}}/img/app/android.png" class="adroid" alt="apple">
                                    </a>
                                    <a href="javascript:void(0)" class="app-img">
                                        <img src="{{asset('fe/assets')}}/img/app/apple.png" class="apple" alt="apple">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-2 bb-footer-info">
                            <div class="bb-footer-widget">
                                <h4 class="bb-footer-heading">Category</h4>
                                <div class="bb-footer-links bb-footer-dropdown">
                                    <ul class="align-items-center">
                                        <li class="bb-footer-link">
                                            <a href="shop-left-sidebar-col-3.html">Marketing</a>
                                        </li>
                                        <li class="bb-footer-link">
                                            <a href="shop-banner-left-sidebar-col-3.html">Marketing</a>
                                        </li>
                                        <li class="bb-footer-link">
                                            <a href="shop-full-width-col-5.html">Marketing</a>
                                        </li>
                                        <li class="bb-footer-link">
                                            <a href="shop-list-left-sidebar.html">Marketing</a>
                                        </li>
                                        <li class="bb-footer-link">
                                            <a href="shop-list-full-col-2.html">Marketing</a>
                                        </li>
                                        <li class="bb-footer-link">
                                            <a href="shop-banner-right-sidebar-col-4.html">Marketing</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-2 bb-footer-account">
                            <div class="bb-footer-widget">
                                <h4 class="bb-footer-heading">Company</h4>
                                <div class="bb-footer-links bb-footer-dropdown">
                                    <ul class="align-items-center">
                                        <li class="bb-footer-link">
                                            <a href="about-us.html">Marketing</a>
                                        </li>
                                        <li class="bb-footer-link">
                                            <a href="track-order.html">Marketing</a>
                                        </li>
                                        <li class="bb-footer-link">
                                            <a href="faq.html">Marketing</a>
                                        </li>
                                        <li class="bb-footer-link">
                                            <a href="terms.html">Marketing</a>
                                        </li>
                                        <li class="bb-footer-link">
                                            <a href="checkout.html">Marketing</a>
                                        </li>
                                        <li class="bb-footer-link">
                                            <a href="contact-us.html">Marketing</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-2 bb-footer-service">
                            <div class="bb-footer-widget">
                                <h4 class="bb-footer-heading">Account</h4>
                                <div class="bb-footer-links bb-footer-dropdown">
                                    <ul class="align-items-center">
                                        <li class="bb-footer-link">
                                            <a href="login.html">Marketing</a>
                                        </li>
                                        <li class="bb-footer-link">
                                            <a href="cart.html">Marketing</a>
                                        </li>
                                        <li class="bb-footer-link">
                                            <a href="faq.html">Marketing</a>
                                        </li>
                                        <li class="bb-footer-link">
                                            <a href="shop-left-sidebar-col-3.html">Marketing</a>
                                        </li>
                                        <li class="bb-footer-link">
                                            <a href="product-left-sidebar.html">Marketing</a>
                                        </li>
                                        <li class="bb-footer-link">
                                            <a href="checkout.html">Marketing</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-3 bb-footer-cont-social">
                            <div class="bb-footer-contact">
                                <div class="bb-footer-widget">
                                    <h4 class="bb-footer-heading">Contact</h4>
                                    <div class="bb-footer-links bb-footer-dropdown">
                                        <ul class="align-items-center">
                                            <li class="bb-footer-link bb-foo-location">
                                                <span class="mt-15px">
                                                    <i class="ri-map-pin-line"></i>
                                                </span>
                                                <p>123 Nhan Chinh, Thanh Xuan, Ha Noi.</p>
                                            </li>
                                            <li class="bb-footer-link bb-foo-call">
                                                <span>
                                                    <i class="ri-whatsapp-line"></i>
                                                </span>
                                                <a href="tel:+009876543210">+00 9876543210</a>
                                            </li>
                                            <li class="bb-footer-link bb-foo-mail">
                                                <span>
                                                    <i class="ri-mail-line"></i>
                                                </span>
                                                <a href="mailto:example@email.com">example@email.com</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="bb-footer-social">
                                <div class="bb-footer-widget">
                                    <div class="bb-footer-links bb-footer-dropdown">
                                        <ul class="align-items-center">
                                            <li class="bb-footer-link">
                                                <a href="javascript:void(0)"><i class="ri-facebook-fill"></i></a>
                                            </li>
                                            <li class="bb-footer-link">
                                                <a href="javascript:void(0)"><i class="ri-twitter-fill"></i></a>
                                            </li>
                                            <li class="bb-footer-link">
                                                <a href="javascript:void(0)"><i class="ri-linkedin-fill"></i></a>
                                            </li>
                                            <li class="bb-footer-link">
                                                <a href="javascript:void(0)"><i class="ri-instagram-line"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="bb-bottom-info">
                            <div class="footer-copy">
                                <div class="footer-bottom-copy ">
                                    <div class="bb-copy">Copyright © <span id="copyright_year"></span>
                                        <a class="site-name" href="index-2.html">GoodJob</a> all rights reserved.
                                    </div>
                                </div>
                            </div>
                            <div class="footer-bottom-right">
                                <div class="footer-bottom-payment d-flex justify-content-center">
                                    <div class="payment-link">
                                        <img src="{{asset('fe/assets')}}/img/payment/payment.png" alt="payment">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Plugins -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="{{asset('fe/assets')}}/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="{{asset('fe/assets')}}/js/vendor/jquery.min.js"></script>
    <script src="{{asset('fe/assets')}}/js/vendor/jquery.zoom.min.js"></script>
    <script src="{{asset('fe/assets')}}/js/vendor/aos.js"></script>
    <script src="{{asset('fe/assets')}}/js/vendor/swiper-bundle.min.js"></script>
    {{-- <script src="{{asset('fe/assets')}}/js/vendor/smoothscroll.min.js"></script> --}}
    <script src="{{asset('fe/assets')}}/js/vendor/countdownTimer.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{asset('fe/assets')}}/js/vendor/owl.carousel.min.js"></script>
    <script src="{{asset('fe/assets')}}/js/vendor/slick.min.js"></script>
    <script src="{{asset('fe/assets')}}/js/vendor/jquery-range-ui.min.js"></script>
    <script src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>
    <!-- main-js -->
    <script src="{{asset('fe/assets')}}/js/main.js"></script>
    
</body>

<script type="text/javascript">
    $(document).on('click', '.custom-pagination a', function(event) {
        event.preventDefault();
        var page = $(this).attr('href').split('page=')[1];
        fetch_data(page);
    });

    function fetch_data(page) {
        console.log("Fetching data for page: " + page); // Kiểm tra xem trang được gửi đúng hay không
        $.ajax({
            url: "/home?page=" + page,
            success: function(response) {
                console.log("Data fetched successfully!"); // Kiểm tra nếu dữ liệu đã được lấy thành công
                $('#job-container').html(response.jobList); // Cập nhật nội dung của #job-container
                $('#pagination-container').html(response.paginationLinks);
            },
            error: function(xhr, status, error) {
                console.log("Error: " + error); // Kiểm tra lỗi nếu có
            }
        });
    }

</script>
<script>
    CKEDITOR.replace( 'description');
</script>
</html>