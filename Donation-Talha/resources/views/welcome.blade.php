<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>VitalShare</title>

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


    <header>
         
        <div class="header-area ">
            <div class="header-top_area">
                <div class="container-fluid">
                    <div class="row">
                        
                </div>
            </div>
        </div>
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                <div class="col-xl-3 col-lg-3">
  <div class="logo">
    <a href="{{url('/')}}">
      <img src="img/logo.png" alt="" style="display: inline-block; vertical-align: middle;">
      <span style="display: inline-block; vertical-align: middle; " class="logo-t">VitalShare</span>
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

                                    
                                    

                                    
                                    
                                    <li><a href="{{url('mentalwellbeing')}}">Mental Well-Being</a></li>
                                    <li><a href="/about">About</a></li>
                                    <!-- -->
                                    @if (Route::has('login'))
                                
                                    @auth
                                    
                                    @if (Auth::check() && Auth::user()->role_id == 'admin')

                                    <li style="background-color: white; border-radius: 25px;;" ><a href="{{ url('/adminProfile') }}" style="color: black; border-radius: 25px; display: block; padding: 10px">Dashboard</a></li>
                                    @endif
                                    <li style="background-color: white; border-radius: 25px;;" > <form action="{{ url('/logout') }}" method="POST" >
                                @csrf
                                <button type="submit" class="logout-btn">Logout</button>
                                </form>        @else
                                <li style="background-color: white; border-radius: 25px;">
                                <a href="{{ route('login') }}" style="color: black; border-radius: 25px; display: block; padding: 10px;">Log in</a>
                                </li>

                                    @if (Route::has('register'))
                                    <li style="background-color: white; border-radius: 25px;">
                                        <a href="{{ route('register') }}" style="color: black; border-radius: 25px; display: block; padding: 10px;">Register</a>
                                        </li>
                                    @endif
                                    @endauth
                                
                                @endif
        <!-- -->
                                </ul>
                            </nav>
                            <div class="Appointment">
                                <div class="book_btn d-none d-lg-block">
                                    
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

    {{-- image slideer --}}
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1 overlay2a">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="slider_text ">
                            <span>Welcome</span>
                            <h3> VitalShare brings Donation and Treatment at One Place</h3>
                            <p>Pakistan is Facing All kind of Issues, You can make a difference</p>
                            <a href="/about" class="boxed-btn3">Learn More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End of image slider --}}

    <!-- counter_area_start  -->
    <div class="counter_area mt-4">
        <div class="container">
            <div class="counter_bg overlay">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single_counter d-flex align-items-center justify-content-center">
                            <div class="icon">
                                <i class="flaticon-calendar"></i>
                            </div>
                            <div class="events">
                                <h3 class="counter">100</h3>
                                <p>Donations Recieved</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single_counter d-flex align-items-center justify-content-center">
                            <div class="icon">
                                <i class="flaticon-heart-beat"></i>
                            </div>
                            <div class="events">
                                <h3 class="counter">80</h3>
                                <p>patients Treated</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single_counter d-flex align-items-center justify-content-center">
                            <div class="icon">
                                <i class="flaticon-in-love"></i>
                            </div>
                            <div class="events">
                                <h3 class="counter">50</h3>
                                <p>Blood Transfusions</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single_counter d-flex align-items-center justify-content-center">
                            <div class="icon">
                                <i class="flaticon-hug"></i>
                            </div>
                            <div class="events">
                                <h3 class="counter">40</h3>
                                <p>Mental Wellbeing Sessions</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter_area_end  -->

    {{-- body --}}
    

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8">
                <img src="{{ asset('img/support.png')}}" alt="">
            </div>
            <div class="col-md-4">
                <div class="mt-4 ml-4">
                <div class="my-5">
                        <a href="#" class="btn btn-success text-gray-900">Our Impact</a>
                    </div>
                    <div class="vl bg-success"></div>
                    <p class="fw-bold fs-1">Helping others is the Way.... </p>
                    <p class="fw-bold fs-1">To Actually Help Ourselves...</p>
                    <div class="mt-5">
                        <p class="fw-light fs-4">
                            The purpose of life is not to be happy. It is to be useful, to be honorable, to be
                            compassionate, to have it make some difference that you have lived and lived well.
                            <br>
                            
                        </p>
                        
                    </div>
                    
                    
                </div>
                
            </div>
            
        </div>
    </div>
    
  

    {{-- Sponser Ship --}}
    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-dark text-white">
                    <img class="card-img img_opacity" src="{{ asset('img/Sponsr.jpg')}}" alt="Card image">
                    <div class="card-img-overlay">
                        <p class="card-text sponsr_text text-center text-gray-900 mt-48">Our Supported People</p>
                        <p class="card-text text-center mt-10 text-dark font-weight-light fs-4">There is nothing more
                            beautiful than <b>SOMEONE</b> who goes out of their way to make life beautiful for <b>OTHERS</b></p>

                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Home Blog --}}
    <div class="container my-5  ">
        <div class="row">

            <div class="col-md-6">
                <div class="mt-4 ml-4">
                    <div class="vl bg-success"></div>
                    <p class="fw-bold fs-1"><b>Find more About Us</b> </p>
                    <div class="mt-5">
                    <p class="fw-light fs-6 text-left">
    Our website is a platform for individuals and organizations to donate food, clothing, money, and blood to those in need. We also provide information and support for mental health. Our goal is to make it easy for people to help others and create a positive impact in the world. Whether you want to give back to your community or support a specific cause, our website offers a simple and secure way to make a difference.
</p>
<p class="fw-light fs-6 text-left">
    With so many challenges being faced by Pakistan, it's important to remember that there are still good things happening every day. Our website is dedicated to working with charities and organizations around the world. We believe that by sharing these stories, we can inspire more people to get involved and make a difference in their own communities. Whether you're interested in donating, volunteering, or simply learning more about the causes we support, our website has something for everyone.
</p>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('img/blog.png')}}" alt="">
            </div>
        </div>
    </div>
    {{-- End of Home Blog --}}

    

    {{-- Sign Up to Hear from us --}}
    <div class="container-fluid bg-green-300">
        <div class="row">
            <div class="col my-5">
                <div class="vl bg-success"></div>
                <h2 class="fw-bold fs-1 mx-5 my-5">Sign Up to Hear from us</h2>
                <p class="fw-bold fs-6 my-4">Sign up here to receive our quarterly newsletter via email.</p>
                <div class="row">
                    <div class="col-sm-2">
                        <form action="" method="POST">
                            @csrf
                            <div class="mb-3">
                            <label for="first_name" class="form-label">First Name: </label>
                                <input type="text" name="subFirst" placeholder="First Name" class="form-control"
                                    id="first_name" required>
                                
                            </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="mb-3">
                        <label for="first_name" class="form-label">Last Name: </label>
                            <input type="text" name="subLast" placeholder="Last Name" class="form-control"
                                id="first_name" required>
                            
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="mb-3">
                        <label for="first_name" class="form-label">E-mail: </label>
                            <input type="email" name="subEmail" placeholder="example@mail.com" class="form-control"
                                id="first_name" required>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-success text-dark" style="width: 18rem">Submit</button>
                        </div>
                    </div>
                    </form>
                    @if (session()->has('message'))
                    <div class="alert alert-success mt-4">
                        {{session('message')}}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    {{-- end of sign-up --}}

    <!-- footer_start  -->
    <footer class="footer bg-green-300">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4 ">
                        <div class="footer_widget">
                        <div class="logo">
    <a href="{{url('/')}}">
      <img src="img/footer_logo.png" alt="" style="display: inline-block; vertical-align: middle;">
      <span style="display: inline-block; vertical-align: middle; " class="logo-u">VitalShare</span>
    </a>
  </div>
                            
                            <p class="address_text">Vitalshare is Created in Laravel <br> with Love to Spread in the
                                <br> World.....
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

                                <li><a href="{{url('financial')}}">Donate</a></li>
                                <li><a href="/patient">For Patients</a></li>
                                <li><a href="{{url('mentalwellbeing')}}">Mental Wellbeing</a></li>
                                
			</ul>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Privacy Policy
                            </h3>
                            <p class="address_text">We use cookies and other identifiers to help improve your online experience. By using our website you are agreeing to this.</p>
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
                                Copyright &copy; VitalShare
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
