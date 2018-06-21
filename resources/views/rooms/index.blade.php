@extends ('layouts.sidenav')
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
                                            <strong>Manage Rooms</strong>
                                        </h3>
                                    </div>
                                    <hr/>
                                    <a class="btn btn-info mb-3" href="{{ route('rooms.create') }}">
                                        <i class="fa fa-pencil-alt"></i> Add New Room
                                    </a>
                                    <!--Table-->
                                    <table class="table table-hover">
                                        <!--Table head-->
                                        <thead class="blue lighten-3">
                                        <tr>
                                            <th>Room</th>
                                            <th>Floor</th>
                                            <th>Room Type</th>
                                            <th>Room Limit</th>
                                            <th>Room Status</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <!--Table head-->

                                        <!--Table body-->
                                        <tbody>

                                        @foreach($rooms as $room)
                                            <tr>
                                                <th scope="row">{{$room->Room}}</th>
                                                <td>{{$room->Floor}}</td>
                                                <td>{{$room->RoomType}}</td>
                                                <td>{{$room->RoomLimit}}</td>

                                                @if($room->RoomStatus == 1)
                                                    <td style="color: red;"><b>Full</b></td>
                                                @elseif($room->RoomStatus == 0)
                                                    <td style="color: green;"><b>Vacant</b></td>
                                                @endif
                                                <td>
                                                    <a class="fa fa-eye fa-2x blue-text" data-toggle="tooltip"
                                                       data-placement="top" title="View" href="{{ route('rooms.show', $room->TenantRoom_Id) }}"></a>&nbsp;&nbsp;
                                                    <a class="fa fa-edit fa-2x amber-text" data-toggle="tooltip"
                                                       data-placement="top" title="Edit" href="{{ route('rooms.edit', $room->TenantRoom_Id) }}"></a>&nbsp;&nbsp;
                                                </td>
                                            </tr>
                                        @endforeach
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