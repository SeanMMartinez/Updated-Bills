@extends('layouts.sidenav')

@section('title', 'Add Violation')

@section('content')
    <main>
        <form role="form-elegant md-form animated fadeIn" action="{{ action('ViolationController@store') }}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="col-md-12">
                <input type="hidden" name="User_Id" value="{{ $user->User_Id }}">
                <h3 class="font-weight-bold pl-0 my-4"><strong>Contract
                        Information</strong></h3>
                <div class="md-form pb-3">
                    <i class="fa fa-at prefix"></i>
                    <input type="text" id="Records_Title" class="form-control" name="Records_Title"
                           value="{{ old('Records_Title') }}">
                    <label for="Records_Title">Start</label>
                    <span id="emailAddMsg"></span>
                </div>
                <div class="md-form pb-3">
                    <i class="fa fa-lock prefix"></i>
                    <input type="text" class="form-control" name="Records_Text" value="{{ old('Records_Text') }}">
                    <label for="Records_Text">Expiry</label>
                    <span id="password"></span>
                </div>
                <button class="btn btn-success float-right" type="submit">Submit
                </button>
            </div>
        </form>
    </main>
@endsection
