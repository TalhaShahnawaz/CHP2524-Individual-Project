<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hello') }}
        </h2>
    </x-slot>

    <div id="wrapper">

        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/adminProfile">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin Panel</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Pages Collapse Menu -->

             <li class="nav-item">                  
                <a class="nav-link" href="{{url('/')}}">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Home</span>
                </a>
            </li>
            <li class="nav-item">                  
                <a class="nav-link" href="{{url('/mentalwellbeingdata')}}">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Mental Wellbeing</span>
                </a>
            </li>
            <li class="nav-item">                  
                <a class="nav-link" href="{{url('/reguser')}}">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>All Users</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link"  href="/approvedpatient">
                <i class="fas fa-fw fa-chart-area"></i>
                    <span>Approved Patients</span>
                </a>
                
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="{{url('/approveddonors')}}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Approved Donors</span></a>
            </li>

            
            

            <li class="nav-item">
                <a class="nav-link" href="{{url('subscription')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Contact Request</span></a>
            </li>

            
            <li class="nav-item">                  
                <a class="nav-link" href="{{url('/patientShow')}}">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Patient Requests</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseFour"
                aria-expanded="true" aria-controls="collapseFour" href="#">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Donation Request</span>
                </a>
                <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{url('foodShow')}}">Food Donation</a>
                        <a class="collapse-item" href="{{url('bloodShow')}}">Blood Donation</a>
                        
                        <a class="collapse-item" href="{{url('clothShow')}}">Cloth Donation</a>
                       
                        <a class="collapse-item" href="{{url('financialShow')}}">Financial Donation</a>
                    </div>
                </div>
            </li>

            

            
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->

        <div id="content-wrapper" class="d-flex flex-column ml-5">
            <div class="container">
                <h2 style="color: black" class="text-center">Post News</h2>
                <div class="row">
                    <div class="col-md-8">
                        <div class="row d-flex justify-content-center mt-3">
                            @if (session()->has('message'))
                                <div class="alert alert-success my-3">
                                        {{session('message')}}
                                </div>
                            @endif
                            <form action="" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row d-flex justify-content-center my-4">
                                    <div class="col-sm-10">
                                        <label for="file">Upload Image: </label>
                                        <input type="file" class="form-control" name="cover_image">
                                    </div>
                                </div>

                                <div class="row d-flex justify-content-center my-4">
                                    <div class="col-sm-10">
                                        <label for="heading" class="form-label">Heading: </label>
                                        <input type="text" name="heading" class="form-control py-4">
                                    </div>
                                </div>

                                <div class="row d-flex justify-content-center my-4">
                                    <div class="col-sm-10">
                                        <label for="category" class="form-label">Category </label>
                                        <input type="text" name="category" class="form-control">
                                    </div>
                                </div>

                                <div class="row d-flex justify-content-center my-4">
                                    <div class="col-sm-10">
                                        <label for="paragraph_one" class="form-label">Paragraph Part One: </label>
                                        <textarea name="paragraph_one" cols="60" rows="5"></textarea><br>
                                    </div>
                                </div>

                                <div class="row d-flex justify-content-center my-4">
                                    <div class="col-sm-10">
                                        <label for="paragraph_two" class="form-label">Paragraph Part Two: </label>
                                        <textarea name="paragraph_two" cols="60" rows="5"></textarea><br>
                                    </div>
                                </div>

                                <div class="row d-flex justify-content-center my-4">
                                    <div class="col-sm-10">
                                        <label for="paragraph_three" class="form-label">Paragraph Part Three: </label>
                                        <textarea name="paragraph_three" cols="60" rows="5"></textarea><br>
                                    </div>
                                </div>

                                <div class="row d-flex justify-content-center my-4">
                                    <div class="col-sm-10">
                                        <label for="paragraph_four" class="form-label">Paragraph Part Four: </label>
                                        <textarea name="paragraph_four" cols="60" rows="5"></textarea><br>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-center my-4">
                                    <div class="col-sm-10">
                                        <label for="date" class="form-label">Date: </label>
                                        <input type="date" name="date" class="form-control">
                                    </div>
                                </div>
                                

                                <div class="row">
                                    <div class="col p-2 d-flex justify-content-center">
                                        <button type="submit" class="btn btn-info btn-lg">Post News</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
