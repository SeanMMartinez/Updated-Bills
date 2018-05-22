@extends('layouts.app')
@section('content')
    <h3>Announcements</h3>
    @if(count($announcements)>0)
    @foreach($announcements as $announcement)
        <div class="well">
            <h5><b>Title:</b> {{$announcement->Announcement_Title}}</h5>
            <p><b>Body:</b> {{$announcement->Announcement_Text}}</p>
            </br>
        </div>
    @endforeach
    @else <p>No Announcement found</p>
    @endif
@endsection