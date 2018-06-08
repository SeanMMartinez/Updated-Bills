@extends ('layouts.app')
@section('content')
    <main>
        <div class="flex-container">
            <div class="columns m-t-10">
                <div class="column">
                    <h1 class="title">Manage Roles</h1>
                </div>
                <div class="column">
                    <a href="{{route('roles.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> Create New Role</a>
                </div>
            </div>
            <hr class="m-t-0">

            <div class="card">
                <div class="card-content">
                    <table class="table is-narrow">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Role Name</th>
                            <th>Description</th>
                            <th>Date Created</th>
                            <th></th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($roles as $role)
                            <tr>
                                <th>{{$role->Role_Id}}</th>
                                <td>{{$role->name}}</td>
                                <td>{{$role->Role_Description}}</td>
                                <td>{{$role->Role_DateCreated}}</td>
                                <td class="has-text-right"><a class="button is-outlined m-r-5" href="{{route('roles.show', $role->Role_Id)}}">View</a>
                                    <a class="button is-light" href="{{route('roles.edit', $role->Role_Id)}}">Edit</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div> <!-- end of .card -->
        </div>
    </main>
@endsection