<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hello') }}
        </h2>
    </x-slot>

    <div id="wrapper" class="bg-info">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin Panel</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Pages Collapse Menu -->

            <li class="nav-item">                  
                <a class="nav-link" href="{{url('adminProfile')}}">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapsePatient"
                aria-expanded="true" aria-controls="collapsePatient" href="#">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Patients</span>
                </a>
                
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapsePatientAdd"
                aria-expanded="true" aria-controls="collapsePatientAdd" href="#">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Add Patients</span>
                </a>
                
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="{{url('activeDonors')}}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Donors</span></a>
            </li>

           
            <!-- Nav Item - News -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                aria-expanded="true" aria-controls="collapseThree" href="#">
                    <i class="fas fa-fw fa-table"></i>
                    <span>News</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{url('postNews')}}">Post News</a>
                        <a class="collapse-item" href="{{url('viewNews')}}">Edit News</a>
                        <a class="collapse-item" href="{{url('editComment')}}">Edit Comment</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{url('subscription')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Contact Request</span></a>
            </li>

            {{-- <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Reason For Helping</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Popular Couses</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-table"></i>
                    <span>News & Update</span></a>
            </li> --}}

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

    <div id="content-wrapper" class="d-flex flex-column">
        {{-- <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-center text-black">Admin Profile</h4><br>
                    <div class="row">
                        @foreach ($admins as $item)
                        <div class="col-md-4">
                            <h1>{{$item->file}}</h1>
                        </div>
                        <div class="col-md-8">
                            <p>{{$item->name}}</p>
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
        </div> --}}
    </div>
</x-app-layout>
