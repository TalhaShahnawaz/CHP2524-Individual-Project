<?php

namespace App\Http\Controllers;

use App\Models\Approve_patient;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function patientShow()
    {
        $patient = Patient::all();

        return view('admin.patientShow',['patient'=>$patient]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

     public function approvedpatient()
     {
         $patient = Approve_patient::all();
 
         return view('admin.approvedpatient',['patient'=>$patient]);
     }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $patient = new Patient;
        $patient->firstName = $request->firstName;
        $patient->lastName = $request->lastName;
        $patient->mobilePhone = $request->mobilePhone;
        $patient->email = $request->email;
        $patient->town = $request->town;
        $patient->state = $request->state;
        $patient->postCode = $request->postCode;
        $patient->clinic = $request->clinic;
        $patient->selectTime = $request->selectTime;
        $patient->selectDate = $request->selectDate;
        $patient->description = $request->description;
        $patient->bloodGroup = $request->bloodGroup;

        $patient->save();

        return redirect()->back()->with('message',' Updated');
    }

    public function approve(Request $request)
    {
        $patient = new Approve_patient();

        $patient->firstName = $request->firstName;
        $patient->lastName = $request->lastName;
        $patient->mobilePhone = $request->mobilePhone;
        $patient->email = $request->email;
        $patient->town = $request->town;
        $patient->state = $request->state;
        $patient->postCode = $request->postCode;
        $patient->clinic = $request->clinic;
        $patient->selectTime = $request->selectTime;
        $patient->selectDate = $request->selectDate;
        $patient->bloodGroup = $request->description;
        $patient->description = $request->description;
    
        $patient->save();

        $patientToDelete = Patient::find($request->id); // find the patient to delete by id
        $patientToDelete->delete(); // delete the record from the database

        return redirect('/patientShow')->with('message','Updated');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit_patient($id)
    {
        $patient = Patient::find($id);

        return view('admin.patientEdit',['patient'=>$patient]);
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
    public function destroyPatient($id)
    {
        $patient = Patient::destroy($id);

        return redirect('/patientShow')->with('message','Updated Sucessfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyapproved_patient($id)
    {
        $patient = Approve_patient::destroy($id);

        return redirect('/approvedpatient')->with('message','Updated Sucessfully');
    }

}



