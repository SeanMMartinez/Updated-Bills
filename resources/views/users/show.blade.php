@extends('layouts.sidenav')

@section('title', 'View Tenant Details')

@section('content')
    <main>
        <div class="flex-container">
            <div class="columns m-t-10">
                <div class="column">
                    <h1 class="title">View Tenant Details</h1>
                </div> <!-- end of column -->

                <div class="column">
                    <a href="{{route('users.edit', $userAccount->UserAccount_Id)}}" class="button is-primary is-pulled-right"><i class="fa fa-user m-r-10"></i> Edit User</a>
                </div>
            </div>
            <hr class="m-t-0">

            <div class="columns">
                <div class="column">
                    <div class="field">
                        <div class="field">
                            <img width="300px" height="300px" src="/storage/images/{{$userAccount->user->User_Picture}}">
                        </div>
                    </div>

                    <div class="field">
                        <label for="name" class="label">Name</label>
                        <pre>{{$userAccount->user->User_FirstName.' '.$userAccount->user->User_LastName}}</pre>
                    </div>

                    <div class="field">
                        <div class="field">
                            <label for="email" class="label">Email</label>
                            <pre>{{$userAccount->UserAccount_Email}}</pre>
                        </div>
                    </div>

                    <div class="field">
                        <div class="field">
                            <label for="email" class="label">Room</label>
                            <pre>{{$tenantInfo->room->Room}}</pre>
                        </div>
                    </div>

                    <div class="field">
                        <div class="field">
                            <label for="email" class="label">Guardian Name</label>
                            <pre>{{$tenantInfo->tenantGuardian->TenantGuardian_FirstName.' '.$tenantInfo->tenantGuardian->TenantGuardian_LastName}}</pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection