<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Room;
use DB;
use Illuminate\Http\Request;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bills = Bill::orderBy('Bill_DateTime_Created', 'DESC')->paginate(10);
        return view('bills.index')->with('bills', $bills);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rooms = Room::all();
        return view('bills.create')->with('rooms', $rooms);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $RoomId = $request->input('TenantRoom_Id');

        $tenantIds = DB::table('tenantinfo')
            ->join('user', 'tenantinfo.User_Id', '=', 'user.User_Id')
            ->join('room', 'room.TenantRoom_Id', '=', 'tenantinfo.TenantRoom_Id')
            ->select('user.User_Id')
            ->where('room.TenantRoom_Id','=', $RoomId)
            ->get();
        $tenantCount = count($tenantIds);

        foreach($tenantIds as $tenantId){
            $bill = new Bill();
            $User_Id = $tenantId->User_Id;
            $bill->User_Id = $User_Id;
            $bill->Bill_Month = $request->input('Bill_Month');

            $BillWater = $request->input('Bill_Water');
            $bill->Bill_Water = $BillWater / $tenantCount;

            $BillElectricity = $request->input('Bill_Electricity');
            $bill->Bill_Electricity = $BillElectricity / $tenantCount;

            $BillRent = $request->input('Bill_Rent');
            $bill->Bill_Rent = $BillRent / $tenantCount;

            //get the total bill
            $BillTotal = $BillWater + $BillElectricity + $BillRent;

            //Divide the total bill to the number of tenants
            $bill->Bill_Total = $BillTotal / $tenantCount;
            $bill->Bill_DateTime_Created = Carbon::now('Asia/Manila')->toDateTimeString();
            $bill->Bill_DueDate = $request->input('Bill_DueDate');
            $bill->Bill_Status = $request->input('Bill_Status');
            $bill->save();
        }

        return redirect()->route('bills.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
