@extends('layouts.app')

@section('content')
    <div class="flex-container">
        <div class="columns m-t-10">
            <div class="column">
                <h1 class="title">View Role</h1>
            </div> <!-- end of column -->

        </div>
        <hr class="m-t-0">

        <div class="columns">
            <div class="column">
                <div class="field">
                    <label for="email" class="label">Role Name</label>
                    <pre>{{$role->name}}</pre>
                </div>

                <div class="field">
                    <div class="field">
                        <label for="email" class="label">Role Description</label>
                        <pre>{{$role->Role_Description}}</pre>
                    </div>
                </div>

                <div class="content">
                    <h2 class="title">Permissions:</h2>
                        <ul>
                            @foreach ($role->permissions as $r)
                                <li>{{$r->Permission_Name}}</li>
                            @endforeach
                        </ul>
                </div>

            </div>
        </div>
    </div>
@endsection