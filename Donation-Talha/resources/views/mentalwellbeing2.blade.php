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
        
      * {
        box-sizing: border-box;
      }
      
      .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
      }
      h1 {
        text-align: center;
      }
      form {
        background-color: #f2f2f2;
        padding: 20px;
        border-radius: 10px;
      }
      label {
        display: block;
        font-weight: bold;
        margin-bottom: 10px;
      }
      input[type="text"],
      textarea {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        margin-bottom: 20px;
      }
      textarea {
        resize: none;
        height: 150px;
      }
      select {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        margin-bottom: 20px;
      }
      input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }
      input[type="submit"]:hover {
        background-color: #3e8e41;
      }
      .error-message {
        color: red;
        font-size: 0.8rem;
        margin-top: 5px;
      }
    
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

{{-- Start Of Image Slider --}}
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_make_1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="slider_text ">
                            <span>Get Started Now!</span>
                            <h3>Having Mental or Physiological Issues?  <br>We can Help</p>
                            
                            <a href="/about" class="boxed-btn3">Learn More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- END OF IMAGE SLIDER --}}

    {{-- START OF Mental Health SECTION --}}
    
        
    <main>


    <div class="container">
    <div class="section_title text-center mb-55">
                        <h3><span>Pleasxfgfhis Form</span></h3>
                    </div>
                    </div>
  <!-- reson_area_start  -->
  <div class="reson_area section_padding">
        <div class="container-2">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single_reson">
                        <div class="thum">
                            <div class="thum_1">
                                <img src="img/help/1.png" alt="">
                            </div>
                        </div>
                        <div class="help_content">
                            <h4>Need a Session Now?</h4>
                            <p>Please submit basic info via form and we will get to you within 15 minutes</p>
                                <a href="/about" class="boxed-btn3">Start Now
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_reson">
                        <div class="thum">
                            <div class="thum_1">
                                <img src="img/help/2.png" alt="">
                            </div>
                        </div>
                        <div class="help_content">
                            <h4>Mental Helth Test</h4>
                            <p>If you don't know about your situation take a breif evaluation test to estimate your situation</p>
                                <a href="https://www.psycom.net/depression-test" class="boxed-btn3">Start Now
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_reson">
                        <div class="thum">
                            <div class="thum_1">
                                <img src="img/help/3.png" alt="">
                            </div>
                        </div>
                        <div class="help_content">
                            <h4>Standard Procedure</h4>
                            <p>Take your time to fill a detailed form, tha will be evaluated by our experts panel and will get back to you within 48 hrs</p>
                                <a href="/about" class="boxed-btn3">Start Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- reson_area_end  -->
<div class="container">

                    <section class="help">
    <h2>How We Can Help</h2>
    <p class="help-text">Our team of mental health professionals is dedicated to helping you improve your mental well-being. We offer a range of services, including:</p>
    <ul class="help-list">
      <li>Counseling</li>
      <li>Therapy</li>
      <li>Support groups</li>
    </ul>
    <p class="help-contact">Contact us today to learn more about how we can help you.</p>
</section>
<section class="help">
    <h2>What You Can Expect</h2>
    <p class="expect-text">When you come to us for help with your mental well-being, you can expect:</p>
    <ul class="expect-list">
      <li>A safe and confidential environment</li>
      <li>Professional and caring staff</li>
      <li>Individualized treatment plans</li>
      <li>Support and resources for your loved ones</li>
    </ul>
    <p class="expect-goal">We believe that everyone deserves to live a happy and fulfilling life, and we are committed to helping you achieve that goal.</p>
</section>
      
    </main>
    </div>
    
    <section class="tips">
  <div class="tips__content">
    <h2>Important tips about mental health.</h2>
    <ul class="tips__list">
      <li>
        <div class="tips__box">
          <img class="tips__image" src="img/daily-routines-and-habits.png" alt="Internet for all devices image">
          <div class="tips__caption">
            <h3>Have a routine.</h3>
          </div>
        </div>
      </li>

      <li>
        <div class="tips__box">
          <img class="tips__image" src="img/computational-social.png" alt="Boost your productivity image">
          <div class="tips__caption">
            <h3>Social contact is important.</h3>
          </div>
        </div>
      </li>

      <li>
        <div class="tips__box">
          <img class="tips__image" src="img/keep-moving.jpg" alt="Pay as You Go image">
          <div class="tips__caption">
            <h3>Keep moving.</h3>
          </div>
        </div>
      </li>

      

      <li>
        <div class="tips__box">
          <img class="tips__image" src="img/eat-health-food.jpg" alt="Pay as You Go image">
          <div class="tips__caption">
            <h3>Eat Healthy Food.</h3>
          </div>
        </div>
      </li>  
    </ul>
  </div>
</section>


</div>
{{-- END OF Mental Health SECTION --}}
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
    {{-- End of footer --}}