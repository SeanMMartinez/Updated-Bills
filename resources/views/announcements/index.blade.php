{{--@extends('layouts.app')
@section('content')
    <div class="card">
        <h3>Announcements</h3>
        @if(count($announcements)>0)
            @foreach($announcements as $announcement)
                <div class="card-body" >
                    <h5><b>Title:{{$announcement->Announcement_Title}}</b></h5>
                    <p><b>Body:</b> {{$announcement->Announcement_Text}}</p>
                    <p><b>Date and Time Created:</b> {{$announcement->Announcement_DateTime_Created}}</p>
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
@endsection--}}

@extends('layouts.sidenav')

@section('content')

    <div class="justify-content-between">
        <div class="container-fluid text-center">
            <div class="row text-left my-xl-5 ml-xl-1">
                <div class="col-xl-12">
                    <form class="form-elegant animated fadeIn">
                        <div class="card">
                            <div class="card-body mx-4">
                                <div class="text-left">
                                    <h3 class="dark-grey-text mb-3">
                                        <strong>Announcements</strong>
                                    </h3>
                                </div>
                                <hr/>
                                <a class="btn btn-info btn-md z-depth-2 mb-4" href="{{ route('announcements.create') }}">
                                    <i class="fa fa-edit"></i> Create a new announcement
                                </a>

                                @foreach($announcements as $announcement)
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h2 class="card-title"><strong>{{ $announcement->Announcement_Title }}</strong></h2>
                                                <p class="card-text"><small class="text-muted">Date Created: {{ $announcement->Announcement_DateTime_Created }}</small></p>
                                            </div>
                                        </div>

                                        <hr/>
                                        <p>
                                            {{ $announcement->Announcement_Text }}
                                        </p>
                                        <hr/>
                                        <div class="text-right">
                                            <a href="{{ route('announcements.show', $announcement->Announcement_Id) }}" class="btn btn-info btn-md z-depth-2">
                                                <i class="fa fa-eye fa-2x "></i> View Details
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection