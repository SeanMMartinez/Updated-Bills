<?php

namespace App\Http\Controllers;

use App\Room;
use App\TenantInfo;
use App\User;
use App\UserAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::orderBy('Floor', 'ASC')->paginate(10);
        return view('rooms.index')->with('rooms', $rooms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $room = new Room();

        $room->Room = $request->input('Room');
        $room->Floor = $request->input('Floor');
        $room->RoomType = $request->input('RoomType');
        $room->RoomLimit = 0;
        $room->RoomStatus = 0;
        $room->save();

        return redirect()->route('rooms.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $room = Room::where('TenantRoom_Id', $id)->first();
        $tenantInfos = TenantInfo::where('TenantRoom_Id', $room->TenantRoom_Id)->get();
        return view('rooms.show')->with('tenantInfos', $tenantInfos)->with('room', $room);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $room = Room::where('TenantRoom_Id', $id)->first();
        return view("rooms.edit")->with('room', $room);
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
        $room = Room::findOrFail($id);
        $room->Room = $request->input('Room');
        $room->Floor = $request->input('Floor');
        $room->RoomType = $request->input('RoomType');

        if ($room->RoomType == 'Double') {
            if ($room->RoomLimit >= 2) {
                $room->RoomStatus = 1; //if 1 room is full
            } else if ($room->RoomLimit < 2) {
                $room->RoomStatus = 0; //if 0 room is vacant
            }
        } else if ($room->RoomType == 'Quadruple') {
            if ($room->RoomLimit >= 2) {
                $room->RoomStatus = 1; //if 1 room is full
            } else if ($room->RoomLimit < 2) {
                $room->RoomStatus = 0; //if 0 room is vacant
            }
        } else if ($room->RoomType == 'Hexatruple') {
            if ($room->RoomLimit >= 6) {
                $room->RoomStatus = 1; //if 1 room is full
            } else if ($room->RoomLimit < 6) {
                $room->RoomStatus = 0; //if 0 room is vacant
            }
        }

        $room->save();

        return redirect()->route('rooms.show', $id);
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
