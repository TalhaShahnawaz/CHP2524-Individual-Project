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
        <div class="col-md-10">
            <h3>Mental Wellbeing Session Requests (!!URGENT)</h3>
            <table class="table table-light table-hover text-center">
                <thead class="table-dark">
                    <tr>
                        <th>Name</th>
                        <th>E-mail</th>
                        <th>Mobile</th>
                        <th>Emergency Contact</th>
                        <th>Location</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mdata as $datas)
                    <tr>
                        <td class="border-bottom-primary">{{$datas->name}}</td>
                        <td class="border-bottom-primary">{{$datas->email}}</td>
                        <td class="border-bottom-primary">{{$datas->mobile}}</td>
                        <td class="border-bottom-primary">{{$datas->emergency_mobile}}</td>
                        <td class="border-bottom-primary">{{$datas->current_location}}</td>
                        <td class="border-bottom-primary">
                            <a href="#" class="btn btn-info btn-sm">Sent Mail</a>
                            <a href="{{url('/destroym', $datas->id)}}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @if (session()->has('mge'))
            <div class="alert alert-danger">
                {{session('mge')}}
            </div>                    
        @endif
        </div>

        <!-- Content Wrapper -->

        <div id="content-wrapper" class="d-flex flex-column ml-5">
            
    </div>
    </div>
</x-app-layout>
