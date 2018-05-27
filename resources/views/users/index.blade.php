@extends ('layouts.app')
@section('content')
    <div class="flex-container">
        <div class="columns m-t-10">
            <div class="column">
                <h1 class="title">Manage Users</h1>
            </div>
            <div class="column">
                <a href="{{route('users.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> Create New User</a>
            </div>
        </div>
        <hr class="m-t-0">

    <div class="card">
        <div class="card-content">
            <table class="table is-narrow">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Email</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Date Created</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                @foreach ($userAccounts as $userAccount)
                    <tr>
                        <th>{{$userAccount->UserAccount_Id}}</th>
                        <td>{{$userAccount->UserAccount_Email}}</td>
                        <td>{{$userAccount->user->User_FirstName}}</td>
                        <td>{{$userAccount->user->User_LastName}}</td>
                        <td>{{$userAccount->UserAccount_DateCreated}}</td>
                        <td class="has-text-right"><a class="button is-outlined m-r-5" href="{{route('users.show', $userAccount->UserAccount_Id)}}">View</a>
                            <a class="button is-light" href="{{route('users.edit', $userAccount->UserAccount_Id)}}">Edit</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div> <!-- end of .card -->

        {{$userAccounts->links()}}
    </div>
@endsection