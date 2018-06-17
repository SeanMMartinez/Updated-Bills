@extends('layouts.sidenav')

@section('title', 'Add Contract')

@section('content')
    <main>
        <form role="form-elegant md-form animated fadeIn" action="{{ action('ContractController@store') }}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="col-md-12">
                <input type="hidden" name="TenantInfo_Id" value="{{ $tenantInfo->TenantInfo_Id }}">
                <h3 class="font-weight-bold pl-0 my-4"><strong>Contract
                        Information</strong></h3>
                <div class="md-form pb-3">
                    <i class="fa fa-at prefix"></i>
                    <input type="date" id="Contract_Start" class="form-control" name="Contract_Start"
                           value="{{ old('Contract_Start') }}">
                    <label for="email">Start</label>
                    <span id="emailAddMsg"></span>
                </div>
                <div class="md-form pb-3">
                    <i class="fa fa-lock prefix"></i>
                    <input type="date" class="form-control" name="Contract_Expiry" value="{{ old('Contract_Expiry') }}">
                    <label for="password">Expiry</label>
                    <span id="password"></span>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="md-form pb-3">
                            <i class="fa fa-mobile-alt prefix"></i>
                            <input type="text" id="phoneno"
                                   class="form-control" name="Contract_Status" value="{{ old('Contract_Status') }}">
                            <label for="phoneno">Status</label>
                            <span id="phoneNoMsg"></span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="md-form pb-3">
                            <i class="fa fa-phone prefix"></i>
                            <input type="text" id="landno"
                                   class="form-control" name="Contract_File" value="{{ old('Contract_File') }}">
                            <label for="phoneno">File</label>
                            <span id="landNoMsg"></span>
                        </div>
                    </div>
                </div>
                <button class="btn btn-success float-right" type="submit">Submit
                </button>
            </div>
        </form>
    </main>
@endsection
