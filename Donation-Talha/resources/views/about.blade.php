<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/app.css">
    <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/themify-icons.css">
    <link rel="stylesheet" href="/css/nice-select.css">
    <link rel="stylesheet" href="/css/flaticon.css">
    <link rel="stylesheet" href="/css/gijgo.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/slicknav.css">
    <link rel="stylesheet" href="/css/style.css">
    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
</head>

<body>
    @if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
        
        @if (Auth::check() && Auth::user()->role_id == 'admin')

        <a href="{{ url('/adminProfile') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
        @endif
        <form action="{{ url('/logout') }}" method="POST">
    @csrf
    <button type="submit" class="text-sm text-gray-700 dark:text-gray-500 underline">Logout</button>
</form>        @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
        @endif
        @endauth
    </div>
    @endif

    <header>
        <div class="header-area ">
            <div class="header-top_area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-md-12 col-lg-8">
                            
                            
                        </div>
                        {{-- <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-pinterest-p"></i>
                                    </a> --}}
                        {{-- Login-to-dashboard --}}
                        {{-- @if (Route::has('login'))
                                        <div class="hidden fixed top-0 right-0 sm:block">
                                            @auth
                                            <a href="{{ url('/adminProfile') }}"
                        class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                        @else
                        <a href="{{ route('login') }}" class="text-sm mt-4 btn bg-green-400 btn-sm">Log
                            in</a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-sm ml-3 mt-4 btn btn-info btn-sm">Register</a>
                        @endif
                        @endauth
                    </div>
                    @endif --}}
                </div>
            </div>
        </div>
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-3">
                        <div class="logo">
                            <a href="{{url('/')}}">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9">
                        <div class="main-menu">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="/">Home</a></li>
                                    
                                    @if (Route::has('login'))
                                    @auth
                                    <!-- Only show the "Donations" tab if the user is logged in as a donor -->
                                    @if (Auth::check() && (Auth::user()->role_id == 'user' || Auth::user()->role_id == 'admin'))
                                    <li><a href="#">Donations<i class="ti-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a class="dropdown-item" href="{{url('food')}}">Food Donation</a></li>
                                            <li><a class="dropdown-item" href="{{url('blood')}}">Blood Donation</a></li>
                                            <li><a class="dropdown-item" href="{{url('clothing')}}">Cloth Donation</a></li>
                                            <li><a class="dropdown-item" href="{{url('financial')}}">Financial Donation</a></li>
                                        </ul>
                                    </li>
                                    @else
                                    <li><a href="/patient">Patients</a></li>
                                    @endif
                                    @else
                                    <li><a href="#">Donations<i class="ti-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a class="dropdown-item" href="{{url('food')}}">Food Donation</a></li>
                                            <li><a class="dropdown-item" href="{{url('blood')}}">Blood Donation</a></li>
                                            <li><a class="dropdown-item" href="{{url('clothing')}}">Cloth Donation</a></li>
                                            <li><a class="dropdown-item" href="{{url('financial')}}">Financial Donation</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/patient">Patients</a></li>
                                    @endauth
                                    @endif




                                    
                                    
                                    <li><a href="/about">About</a></li>
                                </ul>
                            </nav>
                            <div class="Appointment">
                                <div class="book_btn d-none d-lg-block">
                                    <a href="{{url('makeDonation')}}">Make a Donation Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>
    <main>
    <div class="bradcam_area breadcam_bg overlay d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>About Us</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
    <div class="row justify-content">
        <div class="col-lg-5">
            <div class="activites_info">
                <div class="section_title">
                    <h3><span>Our Mission</span></h3>
                </div>
                <p>Our mission is to <strong>make a positive impact in the world through donations</strong>. We believe that everyone should have the opportunity to live a healthy, happy, and fulfilling life, and we work tirelessly to support causes that make this possible. We are committed to <strong>facilitating donations that are used effectively and efficiently to create real change</strong>.</p>
            </div>
        </div>
        <div class="col-lg-7">
            <img src="img/mission.jpg" alt="Mission Image">
        </div>
    </div>

    <div class="row justify-content">
        <div class="col-lg-7">
            <img src="img/story.jpg" alt="Story Image">
        </div>
        <div class="col-lg-5">
            <div class="activites_info">
                <div class="section_title">
                    <h3><span>Our Story</span></h3>
                </div>
                <p>Our organization was founded in <strong>2022</strong> by a group of passionate volunteers who wanted to make a difference in the world. Over the years, we have grown and expanded our reach, partnering with other organizations and charities to maximize our impact. We are proud of the work we have accomplished so far and are committed to <strong>continuing to make a positive difference in people's lives</strong>.</p>
            </div>
        </div>
    </div>

    <div class="row justify-content">
        <div class="col-lg-5">
            <div class="activites_info">
                <div class="section_title">
                    <h3><span>Our Approach</span></h3>
                </div>
                <p>We believe that <strong>transparency, ethics, and accountability</strong> are essential to our work. We are committed to being open and honest about our operations and finances, and to ensuring that donations are used for their intended purposes. We work closely with our partners to <strong>maximize the impact of every donation</strong>, and we continually evaluate and improve our approach to ensure that we are making the biggest possible difference.</p>
            </div>
        </div>
        <div class="col-lg-7">
            <img src="img/approach.jpg" alt="Approach Image">
        </div>
    </div>

    <div class="row justify-content">
        <div class="col-lg-7">
            <img src="img/team.jpg" alt="Team Image">
        </div>
        <div class="col-lg-5">
            <div class="activites_info">
                <div class="section_title">
                    <h3><span>Our Team</span></h3>
                </div>
                <p>Our team is made up of dedicated individuals who are passionate about making a difference in the world. We come from <strong>diverse backgrounds and bring a range of skills and experiences to our work</strong>. Together, we work tirelessly to ensure that donations are used effectively and efficiently to support the causes we care about. We are committed to <strong>transparency, ethics, and accountability</strong>, and we believe that these values are essential to our work.</p>
            </div>
        </div>
    </div>
    
    
</div>
        
        
    
</main>
    <!-- footer_start  -->
    <footer class="footer bg-green-300">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/footer_logo.png" alt="">
                                </a>
                            </div>
                            <p class="address_text">Lorem ipsum dolor sit amet, <br> consectetur adipiscing elit, sed do
                                <br> eiusmod tempor incididunt ut labore.
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-dribbble"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Services
                            </h3>
                            <ul class="links">
                                <li><a href="#">Donate</a></li>
                                <li><a href="#">Sponsor</a></li>
                                <li><a href="#">Fundraise</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Top News
                            </h3>
                            <ul class="news_links">
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/news/news_1.png" alt="">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">
                                            <h4>School for African
                                                Childrens</h4>
                                        </a>
                                        <span>Jun 12, 2019</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/news/news_2.png" alt="">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">
                                            <h4>School for African
                                                Childrens</h4>
                                        </a>
                                        <span>Jun 12, 2019</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="row">
                    <div class="bordered_1px "></div>
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <p class="text-center ">
                                Copyright &copy; 
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                    
                            </p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_end  -->




    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('js/ajax-form.js')}}"></script>
    <script src="{{asset('js/waypoints.min.js')}}"></script>
    <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('js/scrollIt.js')}}"></script>
    <script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="{{asset('js/nice-select.min.js')}}"></script>
    <script src="{{asset('js/jquery.slicknav.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/gijgo.min.js')}}"></script>
    <!--contact js-->
    <script src="{{asset('js/contact.js')}}"></script>
    <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('js/jquery.form.js')}}"></script>
    <script src="{{asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js/mail-script.js')}}"></script>

    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>
