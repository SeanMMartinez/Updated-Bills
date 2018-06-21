{{--
@extends ('layouts.sidenav')
@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Edit User') }}</div>

                        <div class="card-body">

                            <form method="POST" action="{{ route('rooms.update', $room->TenantRoom_Id) }}">
                                {{method_field('PUT')}}
                                {{csrf_field()}}

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control{{ $errors->has('User_FirstName') ? ' is-invalid' : '' }}" name="User_FirstName" value="{{ $userAccount->user->User_FirstName }}" autofocus>

                                        @if ($errors->has('User_FirstName'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('User_FirstName') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Middle Name') }}</label>

                                    <div class="col-md-6">

                                        <input id="name" type="text" class="form-control{{ $errors->has('User_MiddleName') ? ' is-invalid' : '' }}" name="User_MiddleName" value="{{ $userAccount->user->User_MiddleName }}"  autofocus>
                                        @if ($errors->has('User_MiddleName'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('User_MiddleName') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control{{ $errors->has('User_LastName') ? ' is-invalid' : '' }}" name="User_LastName" value="{{ $userAccount->user->User_MiddleName }}"  autofocus>

                                        @if ($errors->has('User_LastName'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('User_LastName') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Picture') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control{{ $errors->has('User_Picture') ? ' is-invalid' : '' }}" name="User_Picture" value="{{ $userAccount->user->User_Picture }}"  autofocus>

                                        @if ($errors->has('User_Picture'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('User_Picture') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nationality') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control{{ $errors->has('User_Nationality') ? ' is-invalid' : '' }}" name="User_Nationality" value="{{ $userAccount->user->User_Nationality }}"  autofocus>

                                        @if ($errors->has('User_Nationality'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('User_Nationality') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Birthdate') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="date" class="form-control{{ $errors->has('User_Birthdate') ? ' is-invalid' : '' }}" name="User_Birthdate" value="{{ $userAccount->user->User_Birthdate }}"  autofocus>

                                        @if ($errors->has('User_Birthdate'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('User_Birthdate') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control{{ $errors->has('User_Age') ? ' is-invalid' : '' }}" name="User_Age" value="{{ $userAccount->user->User_Age }}"  autofocus>

                                        @if ($errors->has('User_Age'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('User_Age') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Religion') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control{{ $errors->has('User_Religion') ? ' is-invalid' : '' }}" name="User_Religion" value="{{ $userAccount->user->User_Religion }}"  autofocus>

                                        @if ($errors->has('User_Religion'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('User_Religion') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control{{ $errors->has('User_Gender') ? ' is-invalid' : '' }}" name="User_Gender" value="{{ $userAccount->user->User_Gender}}"  autofocus>

                                        @if ($errors->has('User_Gender'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('User_Gender') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Civil Status') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control{{ $errors->has('User_CivilStatus') ? ' is-invalid' : '' }}" name="User_CivilStatus" value="{{ $userAccount->user->User_CivilStatus }}"  autofocus>

                                        @if ($errors->has('User_CivilStatus'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('User_CivilStatus') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Cellphone') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control{{ $errors->has('User_CellphoneNo') ? ' is-invalid' : '' }}" name="User_CellphoneNo" value="{{ $userAccount->user->User_CellphoneNo }}"  autofocus>

                                        @if ($errors->has('User_CellphoneNo'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('User_CellphoneNo') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Landline') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control{{ $errors->has('User_LandlineNo') ? ' is-invalid' : '' }}" name="User_LandlineNo" value="{{ $userAccount->user->User_LandlineNo }}"  autofocus>

                                        @if ($errors->has('User_LandlineNo'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('User_LandlineNo') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Home Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control{{ $errors->has('Address_HomeAdd') ? ' is-invalid' : '' }}" name="Address_HomeAdd" value="{{ $address->Address_HomeAdd }}"  autofocus>
                                        @if ($errors->has('Address_HomeAdd'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Address_HomeAdd') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control{{ $errors->has('Address_City') ? ' is-invalid' : '' }}" name="Address_City" value="{{ $address->Address_City  }}"  autofocus>

                                        @if ($errors->has('Address_City'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Address_City') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Province') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control{{ $errors->has('Address_Province') ? ' is-invalid' : '' }}" name="Address_Province" value="{{ $address->Address_Province  }}"  autofocus>

                                        @if ($errors->has('Address_Province'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Address_Province') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Zip Code') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control{{ $errors->has('Address_ZipCode') ? ' is-invalid' : '' }}" name="Address_ZipCode" value="{{ $address->Address_ZipCode  }}"  autofocus>

                                        @if ($errors->has('Address_ZipCode'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Address_ZipCode') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control{{ $errors->has('UserAccount_Email') ? ' is-invalid' : '' }}" name="UserAccount_Email" value="{{ $userAccount->UserAccount_Email }}" >

                                        @if ($errors->has('UserAccount_Email'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('UserAccount_Email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <input id="email" type="hidden"
                                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>

                                    <div class="col-md-6">
                                        --}}
{{--<input id="name" type="number" class="form-control{{ $errors->has('UserAccount_Status') ? ' is-invalid' : '' }}" name="UserAccount_Status" value="{{ $userAccount->UserAccount_Status }}"  autofocus>--}}{{--

                                        <input type="checkbox" name="UserAccount_Status" value="{{ $userAccount->UserAccount_Status }}" @if ($userAccount->UserAccount_Status == 1) checked='checked' @endif > Active<br>
                                        @if ($errors->has('UserAccount_Status'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('UserAccount_Status') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Edit') }}
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
@endsection--}}

@extends ('layouts.sidenav')
@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Edit Personnel') }}</div>

                        <div class="card-body">

                            <form method="POST" action="{{ route('personnels.update', $personnel->Personnel_Id) }}">
                                {{method_field('PUT')}}
                                {{csrf_field()}}

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control{{ $errors->has('Personnel_FirstName') ? ' is-invalid' : '' }}" name="Personnel_FirstName" value="{{ $personnel->Personnel_FirstName }}" required autofocus>

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
                                        <input id="name" type="text" class="form-control{{ $errors->has('Personnel_MiddleName') ? ' is-invalid' : '' }}" name="Personnel_MiddleName" value="{{ $personnel->Personnel_MiddleName }}" required autofocus>

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
                                        <input id="name" type="text" class="form-control{{ $errors->has('Personnel_LastName') ? ' is-invalid' : '' }}" name="Personnel_LastName" value="{{ $personnel->Personnel_LastName }}" required autofocus>

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
                                            <option value="" disabled>Select Work</option>
                                            @foreach($works as $work)
                                                <option value="{{ $work->Pwork_Id }}"
                                                        @if ($personnel->Pwork_Id == $work->Pwork_Id) selected='selected' @endif>{{ $work->Pwork_Name }}</option>
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
                                        <input id="name" type="text" class="form-control{{ $errors->has('Personnel_ContactNumber') ? ' is-invalid' : '' }}" name="Personnel_ContactNumber" value="{{ $personnel->Personnel_ContactNumber }}" required autofocus>

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
                                            <option value="" disabled>Select Gender</option>
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
                                        <input id="name" type="date" class="form-control{{ $errors->has('Personnel_Birthdate') ? ' is-invalid' : '' }}" name="Personnel_Birthdate" value="{{ $personnel->Personnel_Birthdate }}" required autofocus>

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
                                        {{--<input type="checkbox" class="filled-in form-check-input"--}}
                                               {{--id="checkbox101" name="Personnel_Status" value="1"--}}
                                               {{--@if($personnel->Personnel_Status == 1) checked="checked" @endif>--}}
                                        {{--<label class="form-check-label" for="checkbox101">Active</label>--}}

                                        {{--@if ($errors->has('Personnel_Status'))--}}
                                            {{--<span class="invalid-feedback">--}}
                                                {{--<strong>{{ $errors->first('Personnel_Status') }}</strong>--}}
                                            {{--</span>--}}
                                        {{--@endif--}}
                                        <div class="switch round blue-white-switch">
                                            <label>
                                                Vacant
                                                <input type="hidden" id="checkbox101" name="Personnel_Status" value="0">
                                                <input type="checkbox" id="checkbox101" name="Personnel_Status" value="1"
                                                       @if($personnel->Personnel_Status == 1) checked="checked" @endif>
                                                <span class="lever"></span>
                                                Active
                                            </label>
                                        </div>
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