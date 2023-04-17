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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mapbox-gl@2.3.1/dist/mapbox-gl.css">
  <script src="https://cdn.jsdelivr.net/npm/mapbox-gl@2.3.1/dist/mapbox-gl.js"></script>
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

    {{-- image slideer --}}
    
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_x overlay2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="slider_text ">
                            <span>Patient Menu</span>
                            <h3>Find the Donated Blood closest to You</h3>
                            <p>With having Blood in Multiple Hospitals we makesure it reaches the Most</p>
                            <a href="#" class="boxed-btn3">Learn More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End of image slider --}}

   

    {{-- body --}}
    <div class="container-fluid mt-5 mb-5 bg-indigo-100">
    @if (Route::has('login'))
                                    @auth
                                    <!-- Only show the "Donations" tab if the user is logged in as a donor -->
                                    @if (Auth::check() && (Auth::user()->role_id == 'user' || Auth::user()->role_id == 'admin'))
                                    <div class="container mt-5">
  <div class="alert alert-warning" role="alert">
    Please Logout and Login as a patient first.
  </div>
  
</div>
                @else
                <div class="container">
    <h1>Find Hospitals in The Map</h1>

    <div id="map" style="width: 100%; height: 500px;"></div>

    <script>
        mapboxgl.accessToken = '{{ env('MAPBOX_ACCESS_TOKEN') }}';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [-1.797, 53.642],
            zoom: 8
        });
        map.on('click', 'hospitals', function (e) {
            var clinic = e.features[0].properties.name;
            document.getElementById('clinic').value = clinic;
        });
        var hospitals = [
            {
                name: 'Huddersfield Royal Infirmary',
                location: [-1.8156964868897674, 53.65540242144038]
            },
            {
                name: 'Calderdale Royal Hospital',
                location: [-1.8583089177739405, 53.70772792444424]
            },
            {
                name: 'Dewsbury and District Hospital',
                location: [-1.65042327626675, 53.71013059315998]
            },
            {
                name: 'St. Luke’s Hospital',
                location: [-1.76309164712977, 53.79092631026062]
            },
            {
                name: 'Bradford Royal Infirmary',
                location: [-1.79904963739249, 53.8168802176168] 
            }
            // add more hospitals here
        ];

        hospitals.forEach(function(hospital) {
            var el = document.createElement('div');
            el.className = 'marker_x';

            new mapboxgl.Marker(el)
                .setLngLat(hospital.location)
                .setPopup(new mapboxgl.Popup({ offset: 25 }) // add popups
                .setHTML('<h3>' + hospital.name + '</h3>'))
                .addTo(map);
        });
    </script>

</div>          

<div class="container-fluid mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-dark text-white">
                    <img class="card-img img_opacity" src="{{ asset('img/blood_form1.jpg')}}" alt="Card image">
                    <div class="card-img-overlay">
                        <div class="row d-flex justify-content-center">
                            <form action="" method="POST">
                                @csrf
                                <p class="form-label">Please Fill this Form</p>
                                <div class="row d-flex justify-content-center">
                                    
                                    <div class="col-sm-6">
                                        <label for="firstName" class="form-label">First Name: </label>
                                        <input type="text" name="firstName" class="form-control">
                                </div>
    
                                <div class="col-sm-6">
                                    <label for="lastName" class="form-label">Last Name: </label>
                                        <input type="text" name="lastName" class="form-control">
                                </div>
                                </div>
                            
                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-12">
                                    <label for="mobilePhone" class="form-label">Mobile Phone: </label>
                                        <input type="text" name="mobilePhone" class="form-control">
                                </div>
                            </div>

                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-12">
                                    <label for="email" class="form-label" >E-mail: </label>
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
                                <div class="col-sm-12">
                                    <label for="state" class="form-label">State: </label>
                                        <input type="text" name="state" class="form-control">
                                </div>
                                <div class="col-sm-12">
                                    <label for="postCode" class="form-label">Post Code: </label>
                                        <input type="text" name="postCode" class="form-control">
                                </div>
                            </div>

                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-12">
                                    <label for="clinic" class="form-label">Select The Nearest Hospital: </label>
                                    <select id="clinic" name="clinic" class="form-control">
                                    <option value="Huddersfield Royal Infirmary">Huddersfield Royal Infirmary</option>
                                    <option value="Calderdale Royal Hospital">Calderdale Royal Hospital</option>
                                    <option value="Dewsbury and District Hospital">Dewsbury and District Hospital</option>
                                    <option value="St. Luke’s Hospital">St. Luke’s Hospital</option>
                                    <option value="Bradford Royal Infirmary">Bradford Royal Infirmary</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-12">
                                    <label for="selectTime" class="form-label">Select Your Time: </label>
                                        <input type="time" name="selectTime" class="form-control" id="email">
                                </div>
                                <div class="col-sm-12">
                                    <label for="postCode" class="form-label">Select Your Date: </label>
                                        <input type="date" name="selectDate" class="form-control" id="email">
                                </div>
                            </div>

                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-12">
                                    <label for="postCode" class="form-label">Any Messages?  </label>
                                        <textarea name="description" class="form-control" id="description" cols="78" rows="3"></textarea><br>
                                </div>
                            </div>

                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-12">
                                    <select class="custom-select form-control" name="bloodGroup">
                                        <option selected>Please Select Your Blood Group</option>
                                        <option value="A+">A+</option>
                                        <option value="AB+">AB+</option>
                                        <option value="A-">A-</option>
                                        <option value="AB-">AB-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col my-3 p-2 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-success">Request</button>
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
                @endif
                @else
                <div class="container mt-5">
  
 
  <div class="alert alert-warning" role="alert">
    Please login as Patient first.
    <a href="{{ route('login') }}" class="btn btn-primary ml-2">Login</a>
  </div>
</div>
</div>
                                    @endauth
                                    @endif
   
    </div>

    
</body>    