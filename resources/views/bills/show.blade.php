@extends('layouts.sidenav')

@section('title', 'Bills')

@section('content')
    <main>
        <div class="card">
            <h3>Bill</h3>
            @if(count($billbreakdowns)>0)
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
                @foreach($billbreakdowns as $billbreakdown)
                    <p><b>Bill break down Input:</b> {{$billbreakdown->BillBDown_Input }}</p>
                    <p><b>Bill break down Consumption:</b> {{$billbreakdown->BillBDown_Consumption }}</p>
                    <p><b>Bill break down PriceRate :</b> {{$billbreakdown->BillBDown_PriceRate  }}</p>
                    <p><b>Bill break down Total:</b> {{$billbreakdown->BillBDown_Total  }}</p>

                @endforeach
            @else <p>No Bills found</p>
            @endif
            <a class="waves-effect" href="{{ route('bills.index') }}">View Bills</a>
        </div>
    </main>

@endsection
