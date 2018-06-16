@extends ('layouts.sidenav')

@section('title', 'Tenants')

@section('content')
    <main>
        <div class="justify-content-between">
            <div class="container-fluid  text-center">
                <div class="row text-left my-xl-5 ml-xl-1">
                    <div class="col-xl-12">
                        <form class="form-elegant animated fadeIn" action="" method="post" onsubmit="" runat="server">
                            <div class="card">
                                <div class="card-body mx-4">
                                    <div class="text-left">
                                        <h3 class="dark-grey-text mb-3">
                                            <strong>Manage Tenants</strong>
                                        </h3>
                                    </div>
                                    <hr/>
                                    <a class="btn btn-info mb-3" href="{{ route('users.create') }}">
                                        <i class="fa fa-pencil-alt"></i> Add New Tenant
                                    </a>
                                    <!--Table-->
                                    <table class="table table-hover">
                                        <!--Table head-->
                                        <thead class="blue lighten-3">
                                        <tr>
                                            <th>ID #</th>
                                            <th>Email Address</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <!--Table head-->

                                        <!--Table body-->
                                        <tbody>
                                        @if(count($userAccounts) > 0)
                                        @foreach($userAccounts as $userAccount)
                                            <tr>
                                                <th scope="row">{{$userAccount->User_Id}}</th>
                                                <td>{{$userAccount->UserAccount_Email}}</td>
                                                <td>{{$userAccount->user->User_FirstName}}</td>
                                                <td>{{$userAccount->user->User_LastName}}</td>
                                                <td>
                                                    <a class="fa fa-eye fa-2x blue-text" data-toggle="tooltip"
                                                       data-placement="top" title="View" href="{{ route('users.show', $userAccount->UserAccount_Id) }}"></a>&nbsp;&nbsp;
                                                    <a class="fa fa-edit fa-2x amber-text" data-toggle="tooltip"
                                                       data-placement="top" title="Edit" href="{{ route('users.edit', $userAccount->UserAccount_Id) }}"></a>&nbsp;&nbsp;
                                                </td>
                                            </tr>
                                        @endforeach
                                        @else
                                            <p>No records found.</p>
                                        @endif
                                        </tbody>
                                        <!--Table body-->

                                    </table>
                                    <!--Table-->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection