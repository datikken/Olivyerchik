<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Olivyerchik</title>
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    </head>
    <body class="antialiased">

    <!-- Preloader -->
{{--    <div class="preloader">--}}
{{--        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 35.235 35.235" xml:space="preserve">--}}
{{--        <g>--}}
{{--            <g id="b103_soup">--}}
{{--                <path id="cap" d="M26.776,12.687H19.25c0.68,0,1.233-0.553,1.233-1.234s-0.554-1.23-1.233-1.23h-3.078c-0.68,0-1.232,0.549-1.232,1.23--}}
{{--                    s0.553,1.234,1.232,1.234H8.645c-2.094,0-3.828,1.877-4.165,3.875h26.464C30.605,14.563,28.871,12.687,26.776,12.687z"></path>--}}
{{--                <path id="body" d="M31.005,18.677v-0.352H4.479H4.417H0v1.762h4.417v10.918c0,2.338,1.894,4.229,4.228,4.229h18.132--}}
{{--                c2.336,0,4.229-1.891,4.229-4.229V20.439h4.229v-1.762H31.005z"></path>--}}
{{--                <path class="smell" id="elem-1" d="M11.24,4.235c0.123,0.162,0.254,0.318,0.391,0.465l0.341,0.342c0.216,0.217,0.417,0.434,0.577,0.629--}}
{{--                    c0.08,0.098,0.146,0.191,0.195,0.268c0.047,0.076,0.09,0.135,0.1,0.223c0.012,0.094-0.037,0.221-0.133,0.348--}}
{{--                    c-0.096,0.125-0.23,0.246-0.387,0.367c0.186,0.072,0.389,0.096,0.605,0.07c0.215-0.025,0.451-0.121,0.648-0.326--}}
{{--                    c0.195-0.205,0.304-0.508,0.321-0.775c0.019-0.27-0.022-0.514-0.083-0.734c-0.123-0.438-0.327-0.793-0.545-1.119--}}
{{--                    c-0.109-0.16-0.244-0.322-0.34-0.447c-0.096-0.113-0.185-0.229-0.266-0.344c-0.33-0.459-0.561-0.873-0.647-1.359--}}
{{--                    c-0.09-0.492,0.01-1.121,0.307-1.842c-0.771,0.162-1.457,0.807-1.681,1.709c-0.111,0.445-0.087,0.934,0.032,1.363--}}
{{--                    C10.793,3.511,11.002,3.897,11.24,4.235z"></path>--}}
{{--                <path class="smell" id="elem-2" d="M15.809,4.235C15.932,4.397,16.064,4.553,16.2,4.7l0.34,0.342c0.216,0.217,0.416,0.434,0.58,0.629--}}
{{--                    c0.077,0.098,0.143,0.191,0.193,0.268c0.049,0.076,0.09,0.135,0.098,0.223c0.013,0.094-0.035,0.221-0.131,0.348--}}
{{--                    c-0.095,0.125-0.23,0.246-0.389,0.367c0.188,0.072,0.392,0.096,0.607,0.07c0.214-0.025,0.453-0.121,0.648-0.326--}}
{{--                    c0.197-0.205,0.304-0.508,0.322-0.775c0.019-0.27-0.021-0.514-0.082-0.734c-0.125-0.438-0.33-0.793-0.548-1.119--}}
{{--                    c-0.107-0.16-0.243-0.322-0.339-0.447c-0.094-0.113-0.185-0.229-0.264-0.344c-0.331-0.459-0.563-0.873-0.649-1.359--}}
{{--                    c-0.09-0.49,0.008-1.119,0.304-1.84c-0.77,0.162-1.455,0.807-1.678,1.709c-0.111,0.445-0.088,0.934,0.031,1.363--}}
{{--                    C15.363,3.511,15.568,3.897,15.809,4.235z"></path>--}}
{{--                <path class="smell" id="elem-3" d="M19.972,4.235c0.122,0.162,0.253,0.318,0.39,0.465l0.341,0.342c0.216,0.217,0.415,0.434,0.577,0.629--}}
{{--                    c0.08,0.098,0.146,0.191,0.195,0.268c0.047,0.076,0.088,0.135,0.1,0.223c0.013,0.094-0.037,0.221-0.133,0.348--}}
{{--                    c-0.095,0.125-0.23,0.246-0.389,0.367c0.188,0.072,0.392,0.096,0.605,0.07c0.215-0.025,0.453-0.121,0.65-0.326--}}
{{--                    c0.195-0.205,0.303-0.508,0.32-0.775c0.02-0.27-0.021-0.514-0.082-0.734c-0.123-0.438-0.326-0.793-0.545-1.119--}}
{{--                    c-0.109-0.16-0.244-0.322-0.34-0.447c-0.096-0.113-0.186-0.229-0.266-0.344c-0.33-0.459-0.561-0.873-0.646-1.359--}}
{{--                    c-0.091-0.492,0.009-1.121,0.304-1.842c-0.77,0.162-1.457,0.807-1.679,1.709c-0.11,0.445-0.087,0.934,0.032,1.363--}}
{{--                    C19.524,3.511,19.731,3.897,19.972,4.235z"></path>--}}
{{--            </g>--}}
{{--            <g id="Capa_1_128_"></g>--}}
{{--        </g>--}}
{{--    </svg>--}}
{{--    </div>--}}


    <div id="wrap">
        <!-- Page Wrapper -->
        <!-- Start Header -->
        <header class="header" id="myHeader">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="logo">
                            <a href="main.html">
                                <img src="images/logo/logo.png" class="img-fluid" alt="The cafe360 Logo Image">
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-md-8 col-lg-10">
                        <!-- Nav -->
                        <nav class="navbar navbar-expand-lg nabar-own p-0">
                            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">
                            <span class="menu_line_1"></span>
                            <span class="menu_line_2"></span>
                            <span class="menu_line_3"></span>
                            </span>
                            </button>
                            <div class="collapse navbar-collapse tr-nabar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto align-self-center">
                                    <li class="nav-item tr-nav-item"><a class="nav-link" href="#Recipes">Recipes</a>
                                    </li>
                                    <li class="nav-item tr-nav-item"><a class="nav-link" href="#Packages">Packages</a>
                                    </li>
                                    <li class="nav-item tr-nav-item"><a class="nav-link" href="#About">About</a>
                                    </li>
                                    <li class="nav-item tr-nav-item"><a class="nav-link" href="#Contact">Contact</a>
                                    </li>
                                </ul>
                                <div class="header-search"><input type="text" class="form-control header-input" placeholder="Search"><span class="search-icon"><i class="fas fa-search"></i></span><span class='close-icon'><i class='fas fa-times'></i></span></div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header -->
        <!-- start slider section -->
        <section class="home-slider">
            <div class="home-slider-image  wow fadeInRight col-xl-5 col-lg-6 col-md-6 col-12 p-0" data-wow-duration="2s" data-wow-delay=".4s">
                <img src="images/silders/dish.png" class="img-fluid" alt="tasty and healthy food made" data-wow-delay="1s">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-11 col-md-6 col-lg-9 col-xl-10">
                        <div class="slider-content">
                            <span class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".3s">Tasty & Healthy</span>
                            <h1 class="wow fadeInDown" data-wow-duration="1.5s" data-wow-delay=".4s">Food Made With Love!</h1>
                            <p class="mb-0 wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div class="slider-video-section wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".4s">
                            <div class="slider-obutton">
                                <button class="btn">Order Now</button>
                            </div>
                            <div class="slider-pbutton">
                                <div class="play-button" data-toggle="modal" data-target="#exampleModalCenter">
                                    <img src="images/silders/paly-icon.png" alt="the Girl on the beach - best destination Image">
                                </div>
                                <p class="mb-0 ml-4">Watch Our Story</p>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <i class="fas fa-window-close" style=""></i>
                                            </button>
                                            <div class="modal-body">
                                                <!-- video tag  -->
                                                <video controls width="727" height="600">
                                                    <source src="videos/productionID-4068787.mp4" type="video/mp4">
                                                </video>
                                                <!-- iframe video -->
                                                <!-- <iframe class="vid" id="yt" width="727" height="600" src="https://www.youtube.com/embed/7oDb-6kHXZo?autoplay=1" allowfullscreen allow="autoplay"></iframe>  -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Over Modal -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END slider section -->

        <!-- start specialities section -->
        <section class="specialities position-relative" id="Recipes">
            <h2 class="d-none">hidden</h2>
            <div class="shape-image-one">
                <img src="images/background-shape/dottd-squre.png" class="img-fluid" alt="the background decorated dotted square image">
            </div>
            <div class="container">
                <div class="row specialities-top">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="wow fadeInDown" data-wow-duration="2s" data-wow-delay=".4s">
                            <h2 class="mb-0">Our Specialities</h2>
                        </div>
                        <p class="wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                    </div>
                </div>
                <div class="row specialities-section">
                    <div class="col-12 col-md-6 col-lg-5">
                        <div class="specialities-image wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".4s">
                            <img src="images/specialities/specialities1.png" alt="find your best healthy food">
                        </div>
                    </div>
                    <div class="col-12 col-lg-1 d-lg-block d-none p-0"></div>
                    <div class="col-12 col-md-6 col-lg-6 p-lg-0 specialities-column">
                        <div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay=".4s">
                            <h3 class="mb-0">Find the best healthy food<br> from us</h3>
                        </div>
                        <p class="wow fadeIn mb-0" data-wow-duration="2s" data-wow-delay=".4s">
                            Slightly believable here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in top some form, by injected humour, or randomised words which is to don't look even.</p>
                    </div>
                </div>
                <div class="row specialities-section">
                    <div class="col-12 col-md-6 col-lg-6 p-lg-0 specialities-column specialities-middle">
                        <div class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".4s">
                            <h3 class="mb-0"> The most attractive dishes<br> for you</h3>
                        </div>
                        <p class="wow fadeIn mb-0" data-wow-duration="2s" data-wow-delay=".4s">
                            Slightly believable here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in top some form, by injected humour, or randomised words which is to don't look even.</p>
                    </div>
                    <div class="col-12 col-lg-1 d-lg-block d-none p-0"></div>
                    <div class="col-12 col-md-6 col-lg-5">
                        <div class="specialities-image wow fadeInRight" data-wow-duration="2s" data-wow-delay=".4s">
                            <img src="images/specialities/specialities2.png" alt="attractive dish for yoy">
                        </div>
                    </div>
                </div>
                <div class="row specialities-section">
                    <div class="col-12 col-md-6 col-lg-5">
                        <div class="specialities-image wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".4s">
                            <img src="images/specialities/specialities3.png" alt="home delivery dishes">
                        </div>
                    </div>
                    <div class="col-12 col-lg-1 d-lg-block d-none p-0"></div>
                    <div class="col-12 col-md-6 col-lg-6 p-lg-0 specialities-column">
                        <div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay=".4s">
                            <h3 class="mb-0"> Super fast home delivery<br> service
                            </h3>
                        </div>
                        <p class="wow fadeIn mb-0" data-wow-duration="2s" data-wow-delay=".4s">
                            Slightly believable here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in top some form, by injected humour, or randomised words which is to don't look even.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- END specialities section -->

        <!-- start our item section -->
        <section class="our-item-section position-relative" id="Packages">
            <h2 class="d-none">hidden</h2>
            <div class="shape-image-two">
                <img src="images/background-shape/dottd-squre.png" class="img-fluid" alt="the background decorated image">
            </div>
            <div class="container">
                <div class="row specialities-top">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="wow fadeInDown" data-wow-duration="2s" data-wow-delay=".4s">
                            <h2 class="mb-0">Top Item's We Have</h2>
                        </div>
                        <p class="wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                    </div>
                </div>
                <div class="row mx-md-0">
                    <div class="col-12 col-md-4 col-lg-3 p-lg-0">
                        <ul class="our-item-tab nav nav-tabs flex-column pl-0 wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">
                            <li class="nav-item">
                                <a class="nav-link active" href="#Breakfast" data-toggle="tab">Breakfast</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#Launch" data-toggle="tab">Launch</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#Dinner" data-toggle="tab">Dinner</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#Dessert" data-toggle="tab">Dessert</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#Shake" data-toggle="tab">Shake</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-1 d-lg-block d-none p-0"></div>
                    <div class="col-12 col-md-8 col-lg-8 p-lg-0">
                        <div class="tab-content " id="tabs">
                            <div class="tab-pane active" id="Breakfast">
                                <div class="our-item-slider breakfast-slider">
                                    <div class="our-item">
                                        <div class="our-item-inner">
                                            <div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay=".4s">
                                                <h3 class="mb-0"> Bread buuter with zam<br> and milk shake</h3>
                                            </div>
                                            <div class="item_order">
                                                <p class="wow fadeIn mb-0" data-wow-duration="2s" data-wow-delay=".4s">
                                                    Slightly believable here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in top some form, by injected humour, or randomised words which is to don't look even .</p>
                                                <div class="our-item-button wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">
                                                    <button class="btn">Order Now</button>
                                                </div>
                                            </div>
                                            <div class="our-item-image wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">
                                                <img src="images/our-item/breakfast/breakfast-2.png" alt="pasta ieth tomato and chiken source">
                                                <div class="item-price">$20</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="our-item">
                                        <div class="our-item-inner">
                                            <div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay=".4s">
                                                <h3 class="mb-0"> Milk in the fruite and zam <br> Tomato Paniyaram</h3>
                                            </div>
                                            <div class="item_order">
                                                <p class="wow fadeIn mb-0" data-wow-duration="2s" data-wow-delay=".4s">
                                                    Slightly believable here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in top some form, by injected humour, or randomised words which is to don't look even .</p>
                                                <div class="our-item-button wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">
                                                    <button class="btn">Order Now</button>
                                                </div>
                                            </div>
                                            <div class="our-item-image wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">
                                                <img src="images/our-item/breakfast/breakfast-1.png" alt="pasta ieth tomato and chiken source">
                                                <div class="item-price">$20</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="Launch">
                                <div class="our-item-slider launch-slider">
                                    <div class="our-item">
                                        <div class="our-item-inner">
                                            <div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay=".4s">
                                                <h3 class="mb-0">South Indian Chicken <br> and anjir dishes</h3>
                                            </div>
                                            <div class="item_order">
                                                <p class="wow fadeIn mb-0" data-wow-duration="2s" data-wow-delay=".4s">
                                                    Slightly believable here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in top some form, by injected humour, or randomised words which is to don't look even .</p>
                                                <div class="our-item-button wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">
                                                    <button class="btn">Order Now</button>
                                                </div>
                                            </div>
                                            <div class="our-item-image wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">
                                                <img src="images/our-item/launch/launch-1.png" alt="pasta ieth tomato and chiken source">
                                                <div class="item-price">$20</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="our-item">
                                        <div class="our-item-inner">
                                            <div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay=".4s">
                                                <h3 class="mb-0">Schezuan Pepper Spiced South<br> and Indian 'sundal'</h3>
                                            </div>
                                            <div class="item_order">
                                                <p class="wow fadeIn mb-0" data-wow-duration="2s" data-wow-delay=".4s">
                                                    Slightly believable here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in top some form, by injected humour, or randomised words which is to don't look even .</p>
                                                <div class="our-item-button wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">
                                                    <button class="btn">Order Now</button>
                                                </div>
                                            </div>
                                            <div class="our-item-image wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">
                                                <img src="images/our-item/launch/launch-2.png" alt="pasta ieth tomato and chiken source">
                                                <div class="item-price">$20</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="Dinner">
                                <div class="our-item-slider dinner-slider">
                                    <div class="our-item">
                                        <div class="our-item-inner">
                                            <div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay=".4s">
                                                <h3 class="mb-0"> Pasta in the shape of hearts with chicken<br> Guilt-Free Galouti Kebab</h3>
                                            </div>
                                            <div class="item_order">
                                                <p class="wow fadeIn mb-0" data-wow-duration="2s" data-wow-delay=".4s">
                                                    Slightly believable here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in top some form, by injected humour, or randomised words which is to don't look even .</p>
                                                <div class="our-item-button wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">
                                                    <button class="btn">Order Now</button>
                                                </div>
                                            </div>
                                            <div class="our-item-image wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">
                                                <img src="images/our-item/dinner/dinner-1.png" alt="pasta ieth tomato and chiken source">
                                                <div class="item-price">$20</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="our-item">
                                        <div class="our-item-inner">
                                            <div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay=".4s">
                                                <h3 class="mb-0"> Keema Biryani with Makhmali Kofte<br> Ajwaini Paneer Kofta Curry </h3>
                                            </div>
                                            <div class="item_order">
                                                <p class="wow fadeIn mb-0" data-wow-duration="2s" data-wow-delay=".4s">
                                                    Slightly believable here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in top some form, by injected humour, or randomised words which is to don't look even .</p>
                                                <div class="our-item-button wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">
                                                    <button class="btn">Order Now</button>
                                                </div>
                                            </div>
                                            <div class="our-item-image wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">
                                                <img src="images/our-item/dinner/dinner-2.png" alt="pasta ieth tomato and chiken source">
                                                <div class="item-price">$20</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="Dessert">
                                <div class="our-item-slider dessert-slider">
                                    <div class="our-item">
                                        <div class="our-item-inner">
                                            <div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay=".4s">
                                                <h3 class="mb-0"> Butterfinger Cookie Cheesecake Bars<br> and Meyer Lemon Bars</h3>
                                            </div>
                                            <div class="item_order">
                                                <p class="wow fadeIn mb-0" data-wow-duration="2s" data-wow-delay=".4s">
                                                    Slightly believable here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in top some form, by injected humour, or randomised words which is to don't look even .</p>
                                                <div class="our-item-button wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">
                                                    <button class="btn">Order Now</button>
                                                </div>
                                            </div>
                                            <div class="our-item-image wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">
                                                <img src="images/our-item/dessert/dessert-1.png" alt="pasta ieth tomato and chiken source">
                                                <div class="item-price">$20</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="our-item">
                                        <div class="our-item-inner">
                                            <div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay=".4s">
                                                <h3 class="mb-0"> Chocolate Chip Cookies With Nutella<br> and Brown Butter And Sea Salt</h3>
                                            </div>
                                            <div class="item_order">
                                                <p class="wow fadeIn mb-0" data-wow-duration="2s" data-wow-delay=".4s">
                                                    Slightly believable here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in top some form, by injected humour, or randomised words which is to don't look even .</p>
                                                <div class="our-item-button wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">
                                                    <button class="btn">Order Now</button>
                                                </div>
                                            </div>
                                            <div class="our-item-image wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">
                                                <img src="images/our-item/dessert/dessert-2.png" alt="pasta ieth tomato and chiken source">
                                                <div class="item-price">$20</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="Shake">
                                <div class="our-item-slider shake-slider">
                                    <div class="our-item">
                                        <div class="our-item-inner">
                                            <div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay=".4s">
                                                <h3 class="mb-0"> Olive Oil–Almond<br> and Mocha-Hazelnut</h3>
                                            </div>
                                            <div class="item_order">
                                                <p class="wow fadeIn mb-0" data-wow-duration="2s" data-wow-delay=".4s">
                                                    Slightly believable here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in top some form, by injected humour, or randomised words which is to don't look even .</p>
                                                <div class="our-item-button wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">
                                                    <button class="btn">Order Now</button>
                                                </div>
                                            </div>
                                            <div class="our-item-image wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">
                                                <img src="images/our-item/shake/shake-1.png" alt="pasta ieth tomato and chiken source">
                                                <div class="item-price">$20</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="our-item">
                                        <div class="our-item-inner">
                                            <div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay=".4s">
                                                <h3 class="mb-0">Triple Chocolate Stripe<br> with Peach Melba</h3>
                                            </div>
                                            <div class="item_order">
                                                <p class="wow fadeIn mb-0" data-wow-duration="2s" data-wow-delay=".4s">
                                                    Slightly believable here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in top some form, by injected humour, or randomised words which is to don't look even .</p>
                                                <div class="our-item-button wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">
                                                    <button class="btn">Order Now</button>
                                                </div>
                                            </div>
                                            <div class="our-item-image wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">
                                                <img src="images/our-item/shake/shake-1.png" alt="pasta ieth tomato and chiken source">
                                                <div class="item-price">$20</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END our item section -->

        <!-- start testimonials section -->
        <section class="testimonials position-relative">
            <h2 class="d-none">hidden</h2>
            <div class="shape-image-three">
                <img src="images/background-shape/dottd-squre.png" class="img-fluid" alt="dotts background image in testiomonial">
            </div>
            <div class="container">
                <div class="row specialities-top">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="wow fadeInDown" data-wow-duration="2s" data-wow-delay=".4s">
                            <h2 class="mb-0">Our Happy User</h2>
                        </div>
                        <p class="wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-6">
                        <div id="testimonials-slider-pager">
                            <div class="testimonials-slider-pager-one">
                                <a href="#" class="pager-item" data-slide-index="0"><img src="images/testiomonial/t-1.png" class="img-fluid" alt="Sukh Kaur | Client Image"></a>
                                <a href="#" class="pager-item " data-slide-index="1"><img src="images/testiomonial/t-2.png" class="img-fluid" alt="Ricardo Mendes | Client Image"></a>
                                <a href="#" class="pager-item" data-slide-index="2"><img src="images/testiomonial/t-3.png" class="img-fluid" alt="Nick Carney | Client Image"></a>
                            </div>

                            <div class="testimonials-slider-pager-two">
                                <a href="#" class="pager-item " data-slide-index="3"><img src="images/testiomonial/t-4.png" class="img-fluid" alt="Plixail | Client Image"></a>
                                <a href="#" class="pager-item" data-slide-index="4"><img src="images/testiomonial/t-5.png" class="img-fluid" alt="Brandon Mahilios | Client Image"></a>
                                <a href="#" class="pager-item" data-slide-index="5"><img src="images/testiomonial/t-6.png" class="img-fluid" alt="Clara Maria | Client Image"></a>
                            </div>
                            <div class="testimonials-slider-pager-three">
                                <a href="#" class="pager-item" data-slide-index="0"><img src="images/testiomonial/t-1.png" class="img-fluid" alt="Sukh Kaur | Client Image"></a>
                                <a href="#" class="pager-item " data-slide-index="1"><img src="images/testiomonial/t-2.png" class="img-fluid" alt="Ricardo Mendes | Client Image"></a>
                                <a href="#" class="pager-item" data-slide-index="2"><img src="images/testiomonial/t-3.png" class="img-fluid" alt="Nick Carney | Client Image"></a>
                                <a href="#" class="pager-item" data-slide-index="3"><img src="images/testiomonial/t-4.png" class="img-fluid" alt="Plixail | Client Image"></a>
                                <a href="#" class="pager-item" data-slide-index="4"><img src="images/testiomonial/t-5.png" class="img-fluid" alt="Brandon Mahilios | Client Image"></a>
                                <a href="#" class="pager-item" data-slide-index="5"><img src="images/testiomonial/t-6.png" class="img-fluid" alt="Clara Maria | Client Image"></a>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6">
                        <ul class="slider testimonials-slider wow fadeInwow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">
                            <li class="slide-item">
                                <div class="quote-image"><img src="images/testiomonial/quote-left.png" class="img-fluid" alt="testimonials first quotes images"></div>
                                <div class="single-testi-one">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                    </p>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                    <h3 class="mb-0">Shofia Anderson</h3>
                                    <span>CEO, Cafe Dine </span>
                                </div>
                            </li>
                            <li class="slide-item">
                                <div class="quote-image"><img src="images/testiomonial/quote-left.png" class="img-fluid" alt="testimonials second quotes images"></div>
                                <div class="single-testi-one">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                    </p>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                    <h3 class="mb-0">Shofia Anderson</h3>
                                    <span>CEO, Cafe Dine </span>
                                </div>
                            </li>
                            <li class="slide-item">
                                <div class="quote-image"><img src="images/testiomonial/quote-left.png" class="img-fluid" alt="testimonials Third quotes images"></div>
                                <div class="single-testi-one">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                    </p>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                    <h3 class="mb-0">Shofia Anderson</h3>
                                    <span>CEO, Cafe Dine </span>
                                </div>
                            </li>
                            <li class="slide-item">
                                <div class="quote-image"><img src="images/testiomonial/quote-left.png" class="img-fluid" alt="testimonials fourth quotes images"></div>
                                <div class="single-testi-one">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                    </p>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                    <h3 class="mb-0">Shofia Anderson</h3>
                                    <span>CEO, Cafe Dine </span>
                                </div>
                            </li>
                            <li class="slide-item">
                                <div class="quote-image"><img src="images/testiomonial/quote-left.png" class="img-fluid" alt="testimonials five quotes images"></div>
                                <div class="single-testi-one">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                    </p>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                    <h3 class="mb-0">Shofia Anderson</h3>
                                    <span>CEO, Cafe Dine </span>
                                </div>
                            </li>
                            <li class="slide-item">
                                <div class="quote-image"><img src="images/testiomonial/quote-left.png" class="img-fluid" alt="testimonials six quotes images"></div>
                                <div class="single-testi-one">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                    </p>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                    <h3 class="mb-0">Shofia Anderson</h3>
                                    <span>CEO, Cafe Dine </span>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End testimonials section testimonials -->

        <!-- start chef section -->
        <section class="chef-section position-relative" id="About">
            <h2 class="d-none">hidden</h2>
            <div class="shape-image-four">
                <img src="images/background-shape/dottd-squre.png" class="img-fluid" alt="the background decorated dotted chef square image">
            </div>
            <div class="container position-relative">
                <div class="row specialities-top">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="wow fadeInDown" data-wow-duration="2s" data-wow-delay=".4s">
                            <h2 class="mb-0">Meet Our Great Chefs</h2>
                        </div>
                        <p class="wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                    </div>
                </div>
                <div class="chef-slider">
                    <div class="chef-slider-inner">
                        <div class="row mx-lg-0">
                            <div class="col-12 col-md-4 col-lg-4 p-0">
                                <div class="chef-image wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".4s">
                                    <img src="images/chef/chef-1.png" alt="meet our top level great chef">
                                </div>
                            </div>
                            <div class="col-12 col-md-1 col-lg-1 p-lg-0 d-lg-block d-none">
                            </div>
                            <div class="col-12 col-md-8 col-lg-7 p-lg-0">
                                <div class="chef-content wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">
                                    <h3 class="mb-0">Magic chef ready to cook a new dish</h3>
                                    <p class="wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">Slightly believable here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in top some form, by injected humour, or randomised words which is to don't look even.</p>
                                    <p class="wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <div class="chef-name">Jemmy Deniza</div>
                                    <span>Senior Chef, Cafe 360.</span>
                                    <div class="social-share">
                                        <a class="fb-ic">
                                            <i class="fab fa-facebook-f  mr-4"> </i>
                                        </a>
                                        <a class="tw-ic">
                                            <i class="fab fa-twitter  mr-4"> </i>
                                        </a>
                                        <a class="ins-ic">
                                            <i class="fab fa-instagram  mr-4"> </i>
                                        </a>
                                        <a class="pin-ic">
                                            <i class="fab fa-pinterest  mr-4"> </i>
                                        </a>
                                        <a class="sn-ic">
                                            <i class="fab fa-snapchat  mr-4"> </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="chef-slider-inner">
                        <div class="row mx-lg-0">
                            <div class="col-12 col-md-4 col-lg-4 p-0">
                                <div class="chef-image wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".4s">
                                    <img src="images/chef/chef-2.png" alt="meet our best  great chef in cafe">
                                </div>
                            </div>
                            <div class="col-12 col-md-1 col-lg-1 p-lg-0 d-lg-block d-none">
                            </div>
                            <div class="col-12 col-md-8 col-lg-7 p-lg-0">
                                <div class="chef-content wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">
                                    <h3 class="mb-0">Chef made a new butter dish</h3>
                                    <p class="wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">Slightly believable here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in top some form, by injected humour, or randomised words which is to don't look even.</p>
                                    <p class="wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <div class="chef-name">Shell Desuza</div>
                                    <span>Senior Chef, Cafe 360.</span>
                                    <div class="social-share">
                                        <a class="fb-ic">
                                            <i class="fab fa-facebook-f  mr-4"> </i>
                                        </a>
                                        <a class="tw-ic">
                                            <i class="fab fa-twitter  mr-4"> </i>
                                        </a>
                                        <a class="ins-ic">
                                            <i class="fab fa-instagram  mr-4"> </i>
                                        </a>
                                        <a class="pin-ic">
                                            <i class="fab fa-pinterest  mr-4"> </i>
                                        </a>
                                        <a class="sn-ic">
                                            <i class="fab fa-snapchat  mr-4"> </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END chef section -->
        <!--start email-subscription-->
        <section class="email-subscription position-relative" id="Contact">
            <div class="container">
                <div class="row specialities-top">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="wow fadeInDown" data-wow-duration="2s" data-wow-delay=".4s">
                            <h2 class="mb-0">Want to get the latest update?</h2>
                        </div>
                        <p class="wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">There are many variations of passagessuffered alteration or eipsum dolor sit amet, consectetur adipiscing elit, sed do teiusmod tempor.<br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-6">
                        <form class="email-form">
                            <div class="form-group position-relative mb-0">
                                <input type="email" class="form-control" placeholder="Your Email Id">
                                <button type="submit" class="btn btn-primary email-form-button">SEND</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--END  email-subscription-->

        <!--start download app-->
        <section class="download-app-section">
            <div class="container">
                <div class="row specialities-top">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="wow fadeInDown" data-wow-duration="2s" data-wow-delay=".4s">
                            <h2 class="mb-0">Download our App Today & Experience <br>Endless Possibilities</h2>
                        </div>
                        <p class="wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                        <div class="download-button text-center">
                            <button class="btn">DOWNLOAD APP</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--end download app-->
    </div>
    <!-- Page Wrapper -->
    <!--start footer-->
    <footer class="position-relative wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">
        <div class="footer-bottom">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="footer-menu text-center">
                            <ul>
                                <li class="nav-item"><a class="nav-link" href="#">Home</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#">About</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#">Story</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#">Booking</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#">Reviews</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#">TopFoods</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12 text-center">
                        <div class="footer-logo">
                            <img src="images/footer-images/footer-logo.png" alt="the logo image | Footer cafe Logo">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 footer-icon text-center">
                        <a class="fb-ic">
                            <i class="fab fa-facebook-f wow fadeInDown mr-md-5 mr-2" data-wow-duration="1.5s" data-wow-delay=".4s"> </i>
                        </a>
                        <a class="tw-ic">
                            <i class="fab fa-twitter wow fadeInUp mr-md-5 mr-2" data-wow-duration="1.5s" data-wow-delay=".4s"> </i>
                        </a>
                        <a class="ins-ic">
                            <i class="fab fa-instagram wow fadeInDown mr-md-5 mr-2" data-wow-duration="1.5s" data-wow-delay=".4s"> </i>
                        </a>
                        <a class="pin-ic">
                            <i class="fab fa-pinterest wow fadeInUp mr-md-5 mr-2" data-wow-duration="1.5s" data-wow-delay=".4s"> </i>
                        </a>
                        <a class="sn-ic">
                            <i class="fab fa-snapchat wow fadeInDown mr-md-5 mr-2" data-wow-duration="1.5s" data-wow-delay=".4s"> </i>
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-copylink text-center"><span><i class="fas fa-copyright"></i> All Rights Reserved by Cafe360 I Made with <i class="fas fa-heart" style="color: #ff0000;"></i>  I 2020</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--end footer-->

    <span class="scroll-top" data-scroll="up">
    <i class="fas fa-long-arrow-alt-up"></i>
</span>
    <script src="{{ mix('js/app.js') }}" defer></script>
    </body>
</html>
