@extends('layouts.sidenav')

@section('title', 'View Announcement Details')

@section('content')
    <main>
        <div class="justify-content-between">
            <div class="container-fluid  text-center">
                <div class="row text-left my-xl-5 ml-xl-1">
                    <div class="col-xl-12">
                        <form class="form-elegant animated fadeIn">
                            <div class="card">
                                <div class="card-body mx-4">
                                    <div class="text-left">
                                        <h3 class="dark-grey-text mb-3">
                                            <strong>View Announcement Details</strong>
                                        </h3>
                                    </div>
                                    <hr/>
                                    <h2 class="card-title"><strong>{{ $announcement->Announcement_Title }}</strong></h2>
                                    <p class="card-text">
                                        <small class="text-muted">Date Created: {{ $announcement->Announcement_DateTime_Created }}</small><br>
                                        <small class="text-muted">Created by: {{ $announcement->user->User_FirstName.' '.$announcement->user->User_LastName }}</small>
                                    </p>
                                    <p>
                                        {!! $announcement->Announcement_Text !!}
                                    </p>
                                    <hr>
                                    <a class="btn btn-grey float-left" href="{{ route('announcements.index') }}">Go back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

