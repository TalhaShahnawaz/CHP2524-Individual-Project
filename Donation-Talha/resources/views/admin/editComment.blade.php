<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hello') }}
        </h2>
    </x-slot>

    <div id="wrapper">

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
                
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="{{url('activeDonors')}}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Donors</span></a>
            </li>

            <!-- Nav Item - Post -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo" href="#">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Blog</span>
                </a>
                
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

        <div id="content-wrapper" class="d-flex flex-column ml-5">
            <div class="col-md-12">
                <table class="table table-light table-hover text-center">
                    <thead class="table-info">
                        <tr>
                            {{-- <th>Image</th> --}}
                            <th>Name</th>
                            <th>Comment</th>
                            <th>Email</th>
                            <th>Website</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comm as $com)
                        <tr>
                            {{-- <td><img src="/storage/blog_images/{{$item->file}}" class="img-thumbnail rounded-pill" alt=""/></td> --}}
                            <td class="border-bottom-info">{{$com->name}}</td>
                            <td class="border-bottom-info">{{$com->comment}}</td>
                            <td class="border-bottom-info">{{$com->email}}</td>
                            <td class="border-bottom-info">{{$com->website}}</td>
                            <td class="border-bottom-info">
                                <a href="{{url('/edit_com',$com->id)}}" class="btn btn-info btn-sm">Remove</a>
                            </td>
                        </tr>     
                        @endforeach
                    </tbody>
                </table>
    
                @if (session()->has('message'))
                            <div class="alert alert-info">
                                {{session('message')}}
                            </div>
                        @endif
            </div> 
    </div>
</x-app-layout>
