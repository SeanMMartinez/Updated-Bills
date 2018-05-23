<?php

namespace App\Http\Controllers;

use App\Announcement;
use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AnnouncementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $announcements = Announcement::orderBy('Announcement_DateTime_Created')->paginate(10);
        return view('announcements.index')->with('announcements', $announcements);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('announcements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $announcement = new Announcement;

        $announcement->Announcement_Title = $request->input('Announcement_Title');
        $announcement->User_Id = auth()->user()->User_Id;
        $announcement->Announcement_Text = $request->input('Announcement_Text');
        $announcement->Announcement_DateTime_Created = Carbon::now()->toDateTimeString();
        $announcement->save();

        return redirect('/announcements')->with('success', 'Post Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $announcement = Announcement::find($id);
        return view('announcements.show')->with('announcement', $announcement);
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
        $announcement = Announcement::find($id);
        $announcement->Announcement_Title = $request->input('Announcement_Title');
        $announcement->User_Id = auth()->user()->id;
        $announcement->Announcement_Text = $request->input('Announcement_Text');
        $announcement->Announcement_DateTime_Created = $request->input('Announcement_DateTime_Created');
        $announcement->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $announcement = Announcement::find($id);
        // Check for correct user
        if(auth()->user()->id !==$announcement->User_Id){
            return redirect('/announcements')->with('error', 'Unauthorized Page');
        }

        $announcement->delete();
        return redirect('/announcements')->with('success', 'Post Removed');
    }
}
