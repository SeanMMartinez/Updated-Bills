@extends('layouts.sidenav')

@section('title', 'Bills')

@section('content')
    <main>
        <div class="card">
            <h3>Bills</h3>
            @if(count($bills)>0)
                @foreach($bills as $bill)
                    <div class="card-body" >
                        <h5><b>Bill_Id:{{$bill->Bill_Id}}</b></h5>
                        <p><b>Tenant Room Id:</b> {{$bill->user->tenantInfo->room->TenantRoom_Id}}</p>
                        <p><b>User Id:</b> {{$bill->User_Id}}</p>
                        <p><b>Bill Month</b> {{$bill->Bill_Month}}</p>
                        <p><b>Bill Total</b> {{$bill->Bill_Total}}</p>
                        <p><b>Bill Divided Total</b> {{$bill->Bill_DividedTotal}}</p>
                        <p><b>Bill DueDate:</b> {{$bill->Bill_DueDate}}</p>
                        <p><b>Bill Status:</b> {{$bill->Bill_Status}}</p>
                        </br>
                    </div>
                    <a class="fa fa-eye fa-2x blue-text" data-toggle="tooltip"
                       data-placement="top" title="View" href="{{ route('bills.show', $bill->Bill_Id) }}"></a>&nbsp;
                @endforeach
            @else <p>No Bills found</p>
            @endif
        </div>
    </main>
@endsection
