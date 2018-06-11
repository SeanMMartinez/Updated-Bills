@extends ('layouts.sidenav')
@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Add Personnel') }}</div>

                        <div class="card-body">

                            <form method="POST" action="{{ action('PersonnelController@store') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control{{ $errors->has('Personnel_FirstName') ? ' is-invalid' : '' }}" name="Personnel_FirstName" value="{{ old('Personnel_FirstName') }}" required autofocus>

                                        @if ($errors->has('Personnel_FirstName'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Personnel_FirstName') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Middle Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control{{ $errors->has('Personnel_MiddleName') ? ' is-invalid' : '' }}" name="Personnel_MiddleName" value="{{ old('Personnel_MiddleName') }}" required autofocus>

                                        @if ($errors->has('Personnel_MiddleName'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Personnel_MiddleName') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control{{ $errors->has('Personnel_LastName') ? ' is-invalid' : '' }}" name="Personnel_LastName" value="{{ old('Personnel_LastName') }}" required autofocus>

                                        @if ($errors->has('Personnel_LastName'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Personnel_LastName') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Work') }}</label>

                                    <div class="col-md-6">
                                        <select class="mdb-select" name="Pwork_Id" id="Pwork_Id">
                                            <option value="" disabled selected>Select Work</option>
                                            @foreach($works as $work)
                                            <option value="{{ $work->Pwork_Id }}">{{ $work->Pwork_Name }}</option>
                                            @endforeach
                                        </select>

                                        @if ($errors->has('Personnel_LastName'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Personnel_LastName') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Contact Number') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control{{ $errors->has('Personnel_ContactNumber') ? ' is-invalid' : '' }}" name="Personnel_ContactNumber" value="{{ old('Personnel_ContactNumber') }}" required autofocus>

                                        @if ($errors->has('Personnel_ContactNumber'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Personnel_ContactNumber') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                                    <div class="col-md-6">
                                        <select class="mdb-select" name="Personnel_Gender" id="Personnel_Gender">
                                            <option value="" disabled selected>Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>

                                        @if ($errors->has('Personnel_Gender'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Personnel_Gender') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Birthdate') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="date" class="form-control{{ $errors->has('Personnel_Birthdate') ? ' is-invalid' : '' }}" name="Personnel_Birthdate" value="{{ old('Personnel_Birthdate') }}" required autofocus>

                                        @if ($errors->has('Personnel_Birthdate'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Personnel_Birthdate') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>

                                    <div class="col-md-6">
                                        <input type="checkbox" class="filled-in form-check-input"
                                               id="checkbox101" name="Personnel_Status" value="1">
                                        <label class="form-check-label" for="checkbox101">Active</label>

                                        @if ($errors->has('Personnel_Status'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Personnel_Status') }}</strong>
                                    </span>
                                        @endif
                                    </div>
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