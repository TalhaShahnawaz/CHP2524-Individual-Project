<?php

namespace App\Http\Controllers;

use App\Models\Approve_blood;
use App\Models\Approve_cloth;
use App\Models\Approve_financila;


;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class mentalwellbeing extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mentalwellbeing');
    }

    public function index1()
    {
        return view('mentalwellbeing1');
    }

    public function index2()
    {
        return view('mentalwellbeing2');
    }

    // ALL DONATION PROFILE FUNCTION
    public function food()
    {
        $food = Approve_food::paginate(3);
        return view('donors.foodDonate',['foods'=>$food]);
    }

    public function blood()
    {
        $blood = Approve_blood::paginate(3);
        return view('donors.bloodDonate',['bloods'=>$blood]);
    }
    public function cloth()
    {
        $cloth = Approve_cloth::paginate(3);
        return view('donors.clothDonate',['cloths'=>$cloth]);
    }
   
    

    public function financial()
    {
        $financial = Approve_financila::paginate(3);
        return view('donors.financialDonate',['financial'=>$financial]);
    }




    public function profile($id)
    {
        $profile = Approve_food::find($id);

        return view('donors.foodProfile',['pro'=>$profile]);
    }
    public function blood_profile($id)
    {
        $profile2 = Approve_blood::find($id);

        return view('donors.bloodProfile',['pro2'=>$profile2]);
    }
    
    public function cloth_profile($id)
    {
        $profile3 = Approve_cloth::find($id);

        return view('donors.clothProfile',['pro3'=>$profile3]);
    }
    
    
   

    public function financial_profile($id)
    {
        $profile6 = Approve_financila::find($id);

        return view('donors.financialProfile',['pro6'=>$profile6]);
    }
    
    public function destroy($id)
    {
        //
    }
}
