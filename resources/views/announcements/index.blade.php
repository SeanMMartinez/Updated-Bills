@extends('layouts.app')
@section('content')
    <div class="card">
        <h3>Announcements</h3>
        @if(count($announcements)>0)
            @foreach($announcements as $announcement)
                <div class="card-body" >
                    <h5><b>Title:{{$announcement->Announcement_Title}}</b></h5>
                    <p><b>Body:</b> {{$announcement->Announcement_Text}}</p>
                    <p><b>Date and Time Created:</b> {{$announcement->Announcement_DateTime_Created}}</p>
                    <p><b>Created by:</b> {{$announcement->user->User_FirstName.' '.$announcement->user->User_LastName}}</p>
                    </br>
                </div>
            @endforeach
        @else <p>No Announcement found</p>
        @endif
    </div>
@endsection