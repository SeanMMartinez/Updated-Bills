@extends('layouts.app')
@section('content')
    <div class="card">
        <h3>Bills</h3>
        @if(count($bills)>0)
            @foreach($bills as $bill)
                <div class="card-body" >
                    <h5><b>Bill_Id:{{$bill->Bill_Id}}</b></h5>
                    <p><b>Tenant Room Id:</b> {{$bill->user->tenantInfo->room->TenantRoom_Id}}</p>
                    <p><b>User Id:</b> {{$bill->User_Id}}</p>
                    <p><b>Bill Water</b> {{$bill->Bill_Water}}</p>
                    <p><b>Bill Electricity</b> {{$bill->Bill_Electricity}}</p>
                    <p><b>Bill Rent</b> {{$bill->Bill_Rent}}</p>
                    <p><b>Bill Total:</b> {{$bill->Bill_Total}}</p>

                    </br>
                </div>

            @endforeach
        @else <p>No Bills found</p>
        @endif
    </div>
@endsection