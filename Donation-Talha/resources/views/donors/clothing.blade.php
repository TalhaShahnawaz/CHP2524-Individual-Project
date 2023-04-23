<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">

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
    <title>Charity</title>
</head>

<body>
   
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

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <img src="img/clothing.jpeg" class="img-fluid w-auto mt-5" alt="">
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row my-5 p-5">
            <div class="col-md-6 ">
                <h1 class="text-size">Donate Cloth</h1>
                <p class="fw-light fs-5">
                In Pakistan, many families struggle to make ends meet and provide basic necessities like clothing for their loved ones. If you have gently used clothes that you no longer need, consider donating them to those in need. At our organization, we promise to take your donated clothes and distribute them directly to those who are in need, ensuring that they reach the hands of the people who need them the most. Your contribution can make a significant difference in the lives of those who are less fortunate, providing them with warmth, comfort, and dignity. By working together, we can make a positive impact in our communities and help create a brighter future for all.

                    <br><br>
                    At times, disasters can strike unexpectedly, leaving communities in dire need of basic necessities such as food, water, and shelter. In such situations, access to clean clothes can often be overlooked, but it is just as important for maintaining dignity and health. We at Vitalshare believe in the power of community and the importance of helping those in need. That's why we've made it our mission to collect and distribute clothes to those who need them most. With your support, we can make a difference in the lives of those affected by disaster and poverty. Together, we can bring hope and comfort to those who need it most.
                </p>
            </div>
            <div class="col-md-6">
                <img src="img/cloth_blog.jpg" alt="">
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5 mb-5 bg-indigo-100">
    @if (Route::has('login'))
                                    @auth
                                    <!-- Only show the "Donations" tab if the user is logged in as a donor -->
                                    @if (Auth::check() && (Auth::user()->role_id == 'Patient' || Auth::user()->role_id == 'admin'))
                                    <div class="container mt-5">
  <div class="alert alert-warning" role="alert">
    Please Logout and Login as a Donor first.
  </div>
  
</div>
                @else
                <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-dark">
                    {{-- <img class="card-img img_opacity" src="{{ asset('img/cloth_form.jpg')}}" alt="Card image"> --}}
                    <div class="card-img-overlay">
                        <div class="row d-flex justify-content-center my-3">
                            <div class="col-sm-6 fw-light fs-5 bg-info border border-info py-3">
                                <h2>Donor Information: </h2>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <form action="" method="POST">
                                @csrf
                                <div class="d-flex justify-content-center">
                                    
                                    <div class="col-sm-6">
                                        <label for="firstName" class="form-label">First Name: </label>
                                        <input type="text" name="firstName" class="form-control">
                                    </div>
    
                                <div class="col-sm-6">
                                    <label for="lastName" class="form-label">Last Name: </label>
                                        <input type="text" name="lastName" class="form-control" id="lastName">
                                </div>
                                </div>                 
                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-12">

                                    <label for="mobilePhone" class="form-label">Mobile Phone: </label>
                                        <input type="number" name="mobilePhone" class="form-control" id="mobilePhone">

                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-12">
                                    <label for="email" class="form-label">E-mail: </label>
                                    <input type="email" name="email" class="form-control" value={{Auth::user()->email}} readonly>
                                </div>
                            </div>

                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-12">

                                    <label for="town" class="form-label">Town: </label>
                                        <input type="text" name="town" class="form-control">
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-6">
                                    <label for="state" class="form-label">State: </label>
                                        <input type="text" name="state" class="form-control">
                                </div>
                                <div class="col-sm-6">
                                    <label for="postCode" class="form-label">Post Code: </label>
                                        <input type="number" name="postCode" class="form-control">
                                </div>
                            </div>


                            <br>
                            <div class="row d-flex justify-content-center my-3">
                                <div class="col-sm-12 fw-light fs-5 bg-info border border-info py-3">
                                    <h2>Cloth Information: </h2>
                                </div>
                            </div>

                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-12">
                                        <h2 class="fw-bold fs-4 mb-2">Please Select Your Cloth Types: </h2>
                                        <div class="form-check-inline">
                                            <label class="form-check-label" for="exampleCheck1">Male</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label" for="exampleCheck1">Female</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label" for="exampleCheck1">Kids</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label" for="exampleCheck1">Old</label>
                                        </div>
                                        <div class="col-sm-12">
                                            <input type="text" name="checkBox" class="form-control"><br>
                                        </div>
                                </div>
                            </div>

                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-6">
                                         <label for="town" class="form-label">Size: </label>
                                        <input type="text" name="size" class="form-control">
                                        
                                </div>
                                <div class="col-sm-6">
                                        <label for="town" class="form-label">Quantity: </label>
                                        <input type="text" name="quantity" class="form-control">
                                        
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-6">
                                <label for="town" class="form-label">Location: </label>
                                        <input type="text" name="location" class="form-control">
                                        
                                </div>
                                <div class="col-sm-6">
                                <label for="town" class="form-label">Cloth Name: </label>
                                        <input type="text" name="colthName" class="form-control">
                                        
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-6">
                                <label for="town" class="form-label">Status: </label>
                                        <input type="text" name="status" class="form-control">
                                        
                                </div>
                                <div class="col-sm-6">
                                <label for="town" class="form-label">Comment: </label>
                                        <input type="text" name="comment" class="form-control">
                                        
                                </div>
                            </div>
                            <div class="row">
                                <div class="col my-1 p-2 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-info">Donate</button>
                                </div>
                            </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>  
                @endif
                @else
                <div class="container mt-5">
  
 
  <div class="alert alert-warning" role="alert">
    Please login as Donor first.
    <a href="{{ route('login') }}" class="btn btn-primary ml-2">Login</a>
  </div>
</div>
</div>
                                    @endauth
                                    @endif
   
    </div>

    
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
    <script src="{{asset('js/myscript.js')}}"></script>
</body>

</html>
