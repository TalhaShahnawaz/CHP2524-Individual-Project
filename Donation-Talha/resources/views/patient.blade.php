<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Patient Section</title>

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
        <div class="single_slider  d-flex align-items-center slider_bg_x overlay2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="slider_text ">
                            <span>Patient Menu</span>
                            <h3>Find the Donated Blood closest to You</h3>
                            <p>With having Blood in Multiple Hospitals we makesure it reaches the Most</p>
                            <a href="/about" class="boxed-btn3">Learn More
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
            center: [67.0898699,24.8907091],
            zoom: 10
        });
        map.on('click', 'hospitals', function (e) {
            var clinic = e.features[0].properties.name;
            document.getElementById('clinic').value = clinic;
        });
        var hospitals = [
            
            {
            name: 'Pns Shifa Hospital',
            location: [67.0661589945045, 24.802033939939157]
            },
            {
            name: 'Shahrah-e-Firdousi Hospital',
            location: [67.02830591395774, 24.825456474440294]
            },
            {
            name: 'Altamash General Hospital',
            location: [67.00290003057671, 24.822963676198313]
            },
            {
            name: 'Dr. Ziauddin Hospital Clifton Campus',
            location: [67.00680363920826, 24.82277228050994]
            },
            {
            name: 'Chiniot General Hospital',
            location: [67.14483299521851, 24.83112082076502]
            },
            {
            name: 'Kharadar General Hospital',
            location: [66.99545495795219, 24.86175216258727]
            },
            {
            name: 'Al Shafi Hospital',
            location: [67.00513162731922, 24.87537976707921]
            },
            {
            name: 'Bagh E Halar General Hospital',
            location: [67.01886453725491, 24.88970659904993]
            },
            {
            name: 'Patni Relief Hospital',
            location: [66.9701127069832, 24.9133733755799]
            },
            {
            name: 'Naz General Hospital',
            location: [66.99895181784815, 24.94512954539923]
            },
            {
            name: 'Osmania General Hospital',
            location: [67.05457010432289, 24.897803638468076]
            },
            {
            name: 'The Hospital, Shah Faisal Colony',
            location: [67.1445206650964, 24.896557975168857]
            },
            {
            name: 'Star General Hospital',
            location: [67.16923990448038, 24.892820908514008]
            },
            {
            name: 'Hassan General Hospital',
            location: [67.18983926938391, 24.887215096127644]
            },
            {
            name: 'Sindh Medical Centre',
            location: [67.20219888832604, 24.912750624484495]
            },
            {
            name: 'Memon Medical Institute Hospital',
            location: [67.14633585103321, 24.94790761561032]
            },
            {
            name: 'Gulistan-e-Johar Hospital',
            location: [67.13169002736534, 24.92830336071048]
            },
            {
            name: 'Dr Yasmeen Taufeeq Hospital',
            location: [67.10286332851757, 24.951069300147445]
            },
            {
            name: 'Rajput General Hospital',
            location: [67.10077106811734, 24.943691910145024]
            },
            {
            name: 'Patel Hospital',
            location: [67.09728396745027, 24.937578880850207]
            },
            {
            name: 'The Aga Khan University Hospital',
            location: [67.109756, 24.893707]
            },
            {
                name: 'Jinnah Postgraduate Medical Center',
                location: [67.04410584712846, 24.85365490906637] 
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
                    if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var userLocation = [position.coords.longitude, position.coords.latitude];
                map.setCenter(userLocation);
                var e2 = document.createElement('div');
                
                e2.className = 'marker_y';
                
                new mapboxgl.Marker(e2)
                .setLngLat(userLocation)
                .setPopup(new mapboxgl.Popup({ offset: 25 })
                .setHTML('<h3>You are here!</h3>'))
                
                .addTo(map);
                
            });
 
}
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
                                        <input type="number" name="mobilePhone" class="form-control">
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
                                        <input type="number" name="postCode" class="form-control">
                                </div>
                            </div>

                            <div class="row d-flex justify-content-center">
                            <div class="col-sm-12">
                            <label for="clinic" class="form-label">Select The Nearest Hospital: </label>
                            <select id="clinic" name="clinic" class="form-control">
                                <option value="Pns Shifa Hospital">Pns Shifa Hospital</option>
                                <option value="Shahrah-e-Firdousi Hospital">Shahrah-e-Firdousi Hospital</option>
                                <option value="Altamash General Hospital">Altamash General Hospital</option>
                                <option value="Dr. Ziauddin Hospital Clifton Campus">Dr. Ziauddin Hospital Clifton Campus</option>
                                <option value="Chiniot General Hospital">Chiniot General Hospital</option>
                                <option value="Kharadar General Hospital">Kharadar General Hospital</option>
                                <option value="Al Shafi Hospital">Al Shafi Hospital</option>
                                <option value="Bagh E Halar General Hospital">Bagh E Halar General Hospital</option>
                                <option value="Patni Relief Hospital">Patni Relief Hospital</option>
                                <option value="Naz General Hospital">Naz General Hospital</option>
                                <option value="Osmania General Hospital">Osmania General Hospital</option>
                                <option value="The Hospital, Shah Faisal Colony">The Hospital, Shah Faisal Colony</option>
                                <option value="Star General Hospital">Star General Hospital</option>
                                <option value="Hassan General Hospital">Hassan General Hospital</option>
                                <option value="Sindh Medical Centre">Sindh Medical Centre</option>
                                <option value="Memon Medical Institute Hospital">Memon Medical Institute Hospital</option>
                                <option value="Gulistan-e-Johar Hospital">Gulistan-e-Johar Hospital</option>
                                <option value="Dr Yasmeen Taufeeq Hospital">Dr Yasmeen Taufeeq Hospital</option>
                                <option value="Rajput General Hospital">Rajput General Hospital</option>
                                <option value="Patel Hospital">Patel Hospital</option>
                                <option value="The Aga Khan University Hospital">The Aga Khan University Hospital</option>
                                <option value="Jinnah Postgraduate Medical Center">Jinnah Postgraduate Medical Center</option>
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