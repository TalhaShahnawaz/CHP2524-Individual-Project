<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hello') }}
        </h2>
    </x-slot>
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
    <div id="wrapper" class="bg-danger">

        <!-- Sidebar -->
        <div class="container-fluid mb-5 bg-red-700">
            <div class="row">
                <div class="col">
                    <div class="card">
                        {{-- <img class="card-img img_opacity" src="{{ asset('img/patient_form.jpg')}}" alt="Card image">
                        --}}
                        <div class="">
                            <div class="row d-flex justify-content-center">
                                <form action="/patientEdit" method="POST">
                                    @csrf
                                    <div class="row d-flex justify-content-center">

                                    <div class="col-sm-12">
                                            <label for="id" class="form-label">ID: </label>
                                            <input type="text" name="id" value={{$patient->id}}
                                                class="form-control" readonly>
                                        </div>

                                        <div class="col-sm-6">
                                            <label for="firstName" class="form-label">First Name: </label>
                                            <input type="text" name="firstName" value={{$patient->firstName}}
                                                class="form-control">
                                        </div>

                                        <div class="col-sm-6">
                                            <label for="lastName" class="form-label">Last Name: </label>
                                            <input type="text" name="lastName" value={{$patient->lastName}}
                                                class="form-control">
                                        </div>
                                    </div>

                                    <div class="row d-flex justify-content-center">
                                        <div class="col-sm-12">
                                            <label for="mobilePhone" class="form-label">Mobile Phone: </label>
                                            <input type="text" name="mobilePhone" value={{$patient->mobilePhone}}
                                                class="form-control">
                                        </div>
                                    </div>

                                    <div class="row d-flex justify-content-center">
                                        <div class="col-sm-12">
                                            <label for="email" class="form-label">E-mail: </label>
                                            <input type="email" name="email" value={{$patient->email}}
                                                class="form-control" readonly>
                                        </div>
                                    </div>

                                    <div class="row d-flex justify-content-center">
                                        <div class="col-sm-12">
                                            <label for="town" class="form-label">Town: </label>
                                            <input type="text" name="town" value={{$patient->town}} class="form-control">
                                        </div>
                                    </div>

                                    <div class="row d-flex justify-content-center">
                                        <div class="col-sm-6">
                                            <label for="state" class="form-label">State: </label>
                                            <input type="text" name="state" value={{$patient->state}}
                                                class="form-control">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="postCode" class="form-label">Post Code: </label>
                                            <input type="text" name="postCode" value={{$patient->postCode}}
                                                class="form-control">
                                        </div>
                                    </div>

                                    <div class="row d-flex justify-content-center">
                                        <div class="col-sm-12">
                                            <label for="clinic" class="form-label">Name Your Clinic: </label>
                                            <input type="text" name="clinic" value={{$patient->clinic}}
                                                class="form-control">
                                        </div>
                                    </div>

                                    <div class="row d-flex justify-content-center">
                                        <div class="col-sm-6">
                                            <label for="selectTime" class="form-label">Select Your Time: </label>
                                            <input type="time" name="selectTime" value={{$patient->selectTime}}
                                                class="form-control" id="email">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="postCode" class="form-label">Select Your Date: </label>
                                            <input type="date" name="selectDate" value={{$patient->selectDate}}
                                                class="form-control" id="email">
                                        </div>
                                    </div>

                                    <div class="row d-flex justify-content-center">
                                        <div class="col-sm-12">
                                            <label for="postCode" class="form-label">Any Messages? </label>
                                            <textarea name="description" class="form-control" id="description" cols="78"
                                                rows="3">{{$patient->description}}</textarea><br>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-sm-12">
                                            <label for="postCode" class="form-label">Blood Group </label>
                                            <textarea name="description" class="form-control" id="description" cols="78"
                                                rows="3" readonly>{{$patient->bloodGroup}}</textarea><br>
                                        </div>
                                    </div>
                                    
                            </div>
                        </div>
                        <div class="row">                       
                            <div class="col-sm-6">
                                <div class="mt-5 text-center">
                                    <button class="btn btn-danger text-white" type="submit">Approve</button>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mt-5 text-center">
                                    <a href="{{url('/destroy_patient',$patient->id)}}" class="btn btn-danger text-white" type="submit">Reject</a>
                                </div>
                            </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-sm-6 text-center">
                            <div class="mt-5 text-center">
                                <a href="{{url('/patientShow')}}" class="btn btn-danger btn-lg btn-block text-white" type="submit">Back</a>
                            </div>
                    </div>
                    </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <!-- End of Sidebar -->

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
</x-app-layout>
