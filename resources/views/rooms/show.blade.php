@extends('layouts.sidenav')

@section('title', 'View Room Details')

@section('content')
    <main>
        <div class="flex-container">
            <div class="columns m-t-10">
                <div class="column">
                    <h1 class="title">View Room Details</h1>
                </div> <!-- end of column -->

                <div class="column">
                    <a href="{{route('rooms.edit', $room->TenantRoom_Id)}}" class="button is-primary is-pulled-right"><i class="fa fa-user m-r-10"></i> Edit Room</a>
                </div>
            </div>
            <hr class="m-t-0">

            <div class="columns">
                <div class="column">
                    <div class="field">
                        <label for="name" class="label">Room</label>
                        <pre>{{$room->Room}}</pre>
                    </div>

                    <div class="field">
                        <label for="name" class="label">Room Type</label>
                        <pre>{{$room->RoomType}}</pre>
                    </div>

                    <div class="field">
                        <label for="name" class="label">Tenants</label>
                        @if(count($tenantInfos) > 0)
                            @foreach($tenantInfos as $tenantInfo)
                                <ul>
                                    <li>
                                        {{$tenantInfo->user->User_FirstName.' '.$tenantInfo->user->User_LastName}}
                                    </li>
                                </ul>
                            @endforeach
                        @else
                            <p>There are currently no tenants residing in this unit.</p>
                        @endif
                    </div>

                    <div class="field">
                        <div class="field">
                            <label for="email" class="label">Floor</label>
                            <pre>{{$room->Floor}}</pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection