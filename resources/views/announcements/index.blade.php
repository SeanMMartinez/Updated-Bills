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
                <div class="column">
                    <a href="{{route('announcements.show', $announcement->Announcement_Id)}}" class="button is-primary is-pulled-right">
                        <i class="fa fa-user m-r-10"></i>View Details</a>
                </div>
            @endforeach
        @else <p>No Announcement found</p>
        @endif
    </div>
@endsection