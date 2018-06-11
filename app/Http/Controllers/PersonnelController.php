<?php

namespace App\Http\Controllers;

use App\Personnel;
use App\PersonnelWork;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personnels = Personnel::all();
        return view('personnels.index')->with('personnels', $personnels);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $works = PersonnelWork::all();
        return view('personnels.create')->with('works', $works);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //store personnel info
        $personnel = new Personnel();
        $personnel->Personnel_FirstName = $request->input('Personnel_FirstName');
        $personnel->Personnel_MiddleName = $request->input('Personnel_MiddleName');
        $personnel->Personnel_LastName = $request->input('Personnel_LastName');
        $personnel->Pwork_Id = $request->input('Pwork_Id');
        $personnel->Personnel_ContactNumber = $request->input('Personnel_ContactNumber');
        $personnel->Personnel_Gender = $request->input('Personnel_Gender');
        $personnel->Personnel_Birthdate = $request->input('Personnel_Birthdate');
        $personnel->Personnel_Status = $request->input('Personnel_Status');
        $personnel->Personnel_DateAdded = Carbon::now()->toDateTimeString();
        $personnel->save();

        return redirect()->route('personnels.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personnel = Personnel::findOrFail($id);
        return view('personnels.show')->withPersonnel($personnel);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personnel = Personnel::findOrFail($id);
        $works = PersonnelWork::all();
        return view('personnels.edit')->withPersonnel($personnel)->with('works', $works);
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
        $personnel = Personnel::findOrFail($id);
        $personnel->Personnel_FirstName = $request->input('Personnel_FirstName');
        $personnel->Personnel_MiddleName = $request->input('Personnel_MiddleName');
        $personnel->Personnel_LastName = $request->input('Personnel_LastName');
        $personnel->Pwork_Id = $request->input('Pwork_Id');
        $personnel->Personnel_ContactNumber = $request->input('Personnel_ContactNumber');
        $personnel->Personnel_Gender = $request->input('Personnel_Gender');
        $personnel->Personnel_Birthdate = $request->input('Personnel_Birthdate');
        $personnel->Personnel_Status = $request->input('Personnel_Status');
        $personnel->Personnel_DateAdded = Carbon::now()->toDateTimeString();
        $personnel->save();

        return redirect()->route('personnels.index');
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
