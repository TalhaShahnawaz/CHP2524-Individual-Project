<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hello') }}
        </h2>
    </x-slot>

    <div id="wrapper" class="bg-info">

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
        <div class="col-md-12">
        @if (session()->has('message'))
                        <div class="alert alert-danger">
                            {{session('message')}}
                        </div>
                    @endif
                    

        <h3>Blood Donors</h3>

            <table class="table table-light table-hover text-center">
                <thead class="table-danger">
                    <tr>
                        {{-- <th>Image</th> --}}
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blood as $bloods)
                    <tr>
                        {{-- <td><img src="/storage/blog_images/{{$item->file}}" class="img-thumbnail rounded-pill" alt=""/></td> --}}
                        <td class="border-bottom-danger">{{$bloods->firstName}}</td>
                        <td class="border-bottom-danger">{{$bloods->lastName}}</td>
                        <td class="border-bottom-danger">{{$bloods->mobilePhone}}</td>
                        <td class="border-bottom-danger">{{$bloods->email}}</td>
                        <td class="border-bottom-danger">
                            <a href="{{url('/deleteapprovedblood',$bloods->id)}}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>     
                    @endforeach
                </tbody>
            </table>
            



            <h3>Financial Donors</h3>

<table class="table table-light table-hover text-center">
    <thead class="table-dark">
        <tr>
            {{-- <th>Image</th> --}}
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($money as $moneys)
        <tr>
            {{-- <td><img src="/storage/blog_images/{{$item->file}}" class="img-thumbnail rounded-pill" alt=""/></td> --}}
            <td class="border-bottom-dark">{{$moneys->firstName}}</td>
            <td class="border-bottom-dark">{{$moneys->lastName}}</td>
            <td class="border-bottom-dark">{{$moneys->mobilePhone}}</td>
            <td class="border-bottom-dark">{{$moneys->email}}</td>
            <td class="border-bottom-dark">
                <a href="{{url('/deleteapprovedfinancial',$moneys->id)}}" class="btn btn-dark btn-sm">Delete</a>
            </td>
        </tr>     
        @endforeach
    </tbody>
</table>




<h3>Food Donors</h3>

<table class="table table-light table-hover text-center">
    <thead class="table-primary">
        <tr>
            {{-- <th>Image</th> --}}
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($food as $foods)
        <tr>
            {{-- <td><img src="/storage/blog_images/{{$item->file}}" class="img-thumbnail rounded-pill" alt=""/></td> --}}
            <td class="border-bottom-primary">{{$foods->firstName}}</td>
            <td class="border-bottom-primary">{{$foods->lastName}}</td>
            <td class="border-bottom-primary">{{$foods->mobilePhone}}</td>
            <td class="border-bottom-primary">{{$foods->email}}</td>
            <td class="border-bottom-primary">
                <a href="{{url('/deleteapprovedfood',$foods->id)}}" class="btn btn-primary btn-sm">Delete</a>
            </td>
        </tr>     
        @endforeach
    </tbody>
</table>




<h3>Cloth Donors</h3>

<table class="table table-light table-hover text-center">
    <thead class="table-info">
        <tr>
            {{-- <th>Image</th> --}}
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cloth as $cloths)
        <tr>
            {{-- <td><img src="/storage/blog_images/{{$item->file}}" class="img-thumbnail rounded-pill" alt=""/></td> --}}
            <td class="border-bottom-info">{{$cloths->firstName}}</td>
            <td class="border-bottom-info">{{$cloths->lastName}}</td>
            <td class="border-bottom-info">{{$cloths->mobilePhone}}</td>
            <td class="border-bottom-info">{{$cloths->email}}</td>
            <td class="border-bottom-info">
                <a href="{{url('/deleteapprovedcloth',$cloths->id)}}" class="btn btn-info btn-sm">Delete</a>
            </td>
        </tr>     
        @endforeach
    </tbody>
</table>

            @if (session()->has('message'))
                        <div class="alert alert-danger">
                            {{session('message')}}
                        </div>
                    @endif
        
                </div> 
    </div>
    </div>
</x-app-layout>
