<?php

namespace App\Http\Controllers;

use App\Models\People;
use App\Models\User;
use App\Models\AdminProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $req){
        if(Auth::user()->hasRole('user')){
            $people=People::all();
            return view('users.userDashboard');
        }
        elseif(Auth::user()->hasRole('Patient')){
            return view('Patient.PatientDashboard');
        }
        elseif(Auth::user()->hasRole('admin')){
            return view('admin.adminProfile');

        }
    }
    // public function show($id)
    //     {
    //             $admin = AdminProfile::find($id);
    //             return view('admin.adminDashboard',['admins'=>$admin]);
    //     }
}
