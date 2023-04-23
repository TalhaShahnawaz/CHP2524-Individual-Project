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

    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center food_bg_img overlay2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="slider_text ">
                            <span>Help Someone Now</span>
                            <h3> Feed the Needy,
                                When They Need</h3>
                            <p>With so much to consume and such high prices <br>
                                , Feed those who can't feed themselves</p>
                            <a href="/about" class="boxed-btn3">Learn More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row bg-green-200 my-5 p-5">
            <div class="col-md-6 ">
                <h1 class="text-size">Donate Food</h1>
                <p class="fw-light fs-5">Food insecurity is a significant issue in Pakistan, with millions of people struggling to access basic nutrition on a daily basis. If you are looking to help those in need, consider making a food donation to a reputable organization that provides aid to underserved communities across the country.

Your food donation can help alleviate hunger and malnutrition, particularly among vulnerable groups such as children and the elderly. Donating non-perishable items such as rice, lentils, canned goods, and cooking oil can go a long way in ensuring that families have access to nutritious meals.
                </p>
            </div>
            <div class="col-md-6">
                <img src="img/hunger.jpg" alt="">
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
                <div class="container-fluid d-flex justify-content-center bg-green-200 my-5 p-5">
        <div class="row ">
            <div class="col">
                <form action="" method="POST">
                    @csrf 
                    <h2 class="fw-bold fs-4 mb-2">Please Select Your Distric To Donate</h2>
                    <div class="form-check-inline">
                        <input type="checkbox" class="form-check-input" name="category[]" value="Karachi Central">
                        <label class="form-check-label">Karachi Central</label>
                    </div>
                    <div class="form-check-inline">
                        <input type="checkbox" class="form-check-input" name="category[]" value="Karachi East">
                        <label class="form-check-label">Karachi East</label>
                    </div>
                    <div class="form-check-inline">
                        <input type="checkbox" class="form-check-input" name="category[]" value="Karachi South">
                        <label class="form-check-label">Karachi South</label>
                    </div>
                    <div class="form-check-inline">
                        <input type="checkbox" class="form-check-input" name="category[]" value="Karachi West">
                        <label class="form-check-label">Karachi West</label>
                    </div>
                    <div class="form-check-inline">
                        <input type="checkbox" class="form-check-input" name="category[]" value="Korangi">
                        <label class="form-check-label">Korangi</label>
                    </div>
                    <div class="form-check-inline">
                        <input type="checkbox" class="form-check-input" name="category[]" value="Malir">
                        <label class="form-check-label">Malir</label>
                    </div>
                    <div class="form-check-inline">
                        <input type="checkbox" class="form-check-input" name="category[]" value="Keamari">
                        <label class="form-check-label">Keamari</label>
                    </div>

                <div class="row my-4 d-flex justify-content-center">
                    <div class="col-sm-6">
                        <label class="form-label">First Name: </label>
                            <input type="text" name="firstName" class="form-control">
                    </div>
                
                    <div class="col-sm-6">
                        <label class="form-label">Last Name: </label>
                            <input type="text" name="lastName" class="form-control">
                    </div>
                </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-sm-12">
                            <label class="form-label">Mobile Phone: </label>
                                <input type="number" name="mobilePhone" class="form-control" ">
                        </div>
                    </div>

                    <div class="row d-flex justify-content-center">
                        <div class="col-sm-12">
                            <label class="form-label">E-mail: </label>
                                <input type="email" name="email" class="form-control" value={{Auth::user()->email}} readonly>
                        </div>
                    </div>

                    <div class="row d-flex justify-content-center">
                        <div class="col-sm-12">
                            <label class="form-label">Town: </label>
                                <input type="text" name="town" class="form-control">
                        </div>
                    </div>

                    <div class="row d-flex justify-content-center">
                        <div class="col-sm-12">
                            <label class="form-label">State: </label>
                                <input type="text" name="state" class="form-control">
                        </div>
                    </div>

                    <div class="row d-flex justify-content-center">
                        <div class="col-sm-12">
                            <label class="form-label">Post Code: </label>
                                <input type="number" name="postCode" class="form-control">
                        </div>
                    </div>

                    <div class="row d-flex justify-content-center">
                        <div class="col-sm-12">
                            <label class="form-label">Headline:  </label>
                                <input type="text" name="heading" class="form-control">
                        </div>
                    </div>                    

                    <div class="row d-flex justify-content-center">
                        <div class="col-sm-12">
                            <label class="form-label">Description:  </label>
                                <textarea name="description" class="form-control"  cols="78" rows="10"></textarea>
                                <br>
                        </div>
                    </div>

                    <div class="row d-flex justify-content-center">
                        <div class="col-sm-12">
                            <select class="custom-select form-control" name="selectMethod">
                                <option selected>Select Method</option>
                                <option value="Home">Home</option>
                                <option value="Resturant">Resturant</option>
                                <option value="Convention">Convention</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col my-2 p-3 d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Donate</button>
                        </div>
                    </div>
                </div>
                </form>
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
