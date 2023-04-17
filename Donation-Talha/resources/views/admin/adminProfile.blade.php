<x-app-layout>
    <x-slot name="header">
        
    </x-slot>

    <div id="wrapper" class="bg-info">

        <!-- Sidebar -->
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
                        
                        <a class="collapse-item" href="{{url('clothShow')}}">Clothe Donation</a>
                       
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

    <div id="content-wrapper" class="d-flex flex-column">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-center text-black">Welcome to Admin Profile</h4><br>
                    <div class="row">
                        @foreach ($admins as $item)
                        <div class="col-md-4">
                            <img src="/storage/admin_images/{{$item->file}}" alt="Admin">
                        </div>
                        <div class="col-md-8">
                            <h2>{{$item->name}}</h2>
                            <table>
                                <td>
                                    <a href="{{url('/adminForm')}}" class="btn btn-primary">Edit</a>
                                </td>
                            </table>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
