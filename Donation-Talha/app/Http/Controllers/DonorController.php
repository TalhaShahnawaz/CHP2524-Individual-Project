<?php

namespace App\Http\Controllers;
use App\Models\Approve_blood;
use App\Models\Approve_cloth;
use App\Models\Approve_food;
use App\Models\Approve_financila;
use App\Models\Donor;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
    }
    public function approveddonorsShow()
    {
        $blood = Approve_blood::all();
        $money = Approve_financila::all();
        $food = Approve_food::all();
        $cloth = Approve_cloth::all();
        return view('admin.approveddonors',['blood' => $blood,
        'money' => $money,
        'food' => $food,
        'cloth' => $cloth]);
    }
    

    public function destroyapproved_blood($id)
    {
        $patient = Approve_blood::destroy($id);

        return redirect('/approveddonors')->with('message','Updated Sucessfully');
    }

    public function destroyapproved_financial($id)
    {
        $patient = Approve_financila::destroy($id);

        return redirect('/approveddonors')->with('message','Updated Sucessfully');
    }

    public function destroyapproved_food($id)
    {
        $patient = Approve_food::destroy($id);

        return redirect('/approveddonors')->with('message','Updated Sucessfully');
    }

    public function destroyapproved_cloth($id)
    {
        $patient = Approve_cloth::destroy($id);

        return redirect('/approveddonors')->with('message','Updated Sucessfully');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
