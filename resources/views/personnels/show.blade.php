@extends('layouts.sidenav')

@section('content')
    <main>
        <div class="flex-container">
            <div class="columns m-t-10">
                <div class="column">
                    <h1 class="title">View Employee</h1>
                </div> <!-- end of column -->

                <div class="column">
                    <a href="{{route('personnels.edit', $personnel->Personnel_Id)}}" class="button is-primary is-pulled-right"><i class="fa fa-user m-r-10"></i> Edit Personnel</a>
                </div>
            </div>
            <hr class="m-t-0">

            <div class="columns">
                <div class="column">
                    <div class="field">
                        <label for="name" class="label">First Name</label>
                        <pre>{{$personnel->Personnel_FirstName}}</pre>
                    </div>

                    <div class="field">
                        <div class="field">
                            <label for="email" class="label">Last Name</label>
                            <pre>{{$personnel->Personnel_LastName}}</pre>
                        </div>
                    </div>

                    <div class="field">
                        <div class="field">
                            <label for="email" class="label">Work</label>
                            <pre>{{$personnel->work->Pwork_Name}}</pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection