@extends('layouts.app')

@section('content')
    <div class="flex-container">
        <div class="columns m-t-10">
            <div class="column">
                <h1 class="title">View Announcement</h1>
            </div> <!-- end of column -->

        </div>
        <hr class="m-t-0">

        <div class="columns">
            <div class="column">
                <div class="field">
                    <h1><b>{{$announcement->Announcement_Title}}</b></h1>
                </div>

                <div class="field">
                    <div class="field">
                        <label for="email" class="label">Text</label>
                        <pre>{{$announcement->Announcement_Text}}</pre>
                    </div>
                </div>

                <div class="field">
                    <div class="field">
                        <label for="email" class="label">Date Created</label>
                        <pre>{{$announcement->Announcement_DateTime_Created}}</pre>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection