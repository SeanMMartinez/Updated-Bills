@extends ('layouts.sidenav')
@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __(' Post Bills') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ action('BillController@store') }}">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="TenantRoom_Id">Room:</label>
                                    <select class="mdb-select" id="TenantRoom_Id" name="TenantRoom_Id">
                                        <option>Select Room</option>
                                        @foreach($rooms as $room)
                                            <option value="{{$room->TenantRoom_Id}}">{{$room->Room}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Bill_Month">Month of Bill:</label>
                                    <select class="mdb-select" id="Bill_Month" name="Bill_Month">
                                        <option>Select Month</option>
                                        <option>January</option>
                                        <option>February</option>
                                        <option>March</option>
                                        <option>April</option>
                                        <option>May</option>
                                        <option>June</option>
                                        <option>July</option>
                                        <option>August</option>
                                        <option>September</option>
                                        <option>October</option>
                                        <option>November</option>
                                        <option>December</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Bill_Water">Water Bill:</label>
                                    <input type="text" name="Bill_Water" value="{{ old('Bill_Water') }}"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Bill_Electricity">Electricity Bill:</label>
                                    <input type="text" name="Bill_Electricity" value="{{ old('Bill_Electricity') }}"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Bill_Rent">Rent Bill:</label>
                                    <input type="text" name="Bill_Rent" value="{{ old('Bill_Rent') }}"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Bill_Total">Total Bill:</label>
                                    <input type="text" name="Bill_Total" value="{{ old('Bill_Total') }}"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Bill_DueDate">Bill Due Date:</label>
                                    <input type="text" name="Bill_DueDate" value="{{ old('Bill_DueDate') }}"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Bill_Status">Bill Status:</label>
                                    <input type="text" name="Bill_Status" value="{{ old('Bill_Status') }}"
                                           class="form-control">
                                </div>


                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Create') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection