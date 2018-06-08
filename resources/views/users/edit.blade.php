{{--
@extends ('layouts.sidenav')

@section('title', 'Edit Tenant Details')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit User') }}</div>

                    <div class="card-body">

                        <form method="POST" action="{{ route('users.update', $userAccount->UserAccount_Id) }}">
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

                            <div class="col-md-12">
                                <div class="form-check pb-3">
                                    <input type="hidden" name="UserAccount_Status" value="0"/>
                                    <input type="checkbox" class="filled-in form-check-input"
                                           id="checkbox101" name="UserAccount_Status"
                                           @if($userAccount->UserAccount_Status == 1) checked="checked"
                                           @endif value="1">
                                    <label class="form-check-label" for="checkbox101">Active</label>
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
@endsection--}}

@extends('layouts.sidenav')

@section('title', 'Register Tenant')

@section('content')
    <main>
        <div class="justify-content-between">
            <div class="container-fluid text-center">
                <!--Grid row-->
                <div class="row text-left my-xl-5 ml-xl-3">
                    <!--Grid column-->
                    <div class="col-xl-12">
                        <!-- Steps form -->
                        <div class="card">
                            <div class="card-body mx-4">
                                <h2 class="text-center font-weight-bold pt-4 pb-5"><strong>Registration for
                                        Tenants</strong></h2>
                                <hr/>
                                <!-- Stepper -->
                                <div class="steps-form disabled pb-4">
                                    <div class="steps-row setup-panel">
                                        <div class="steps-step">
                                            <a href="#step-1" role="button"
                                               class="btn btn-info btn-circle animated pulse infinite">1</a>
                                        </div>
                                        <div class="steps-step">
                                            <a href="#step-2" role="button" class="btn btn-grey btn-circle disabled"
                                               aria-disabled="true">2</a>
                                        </div>
                                        <div class="steps-step">
                                            <a href="#step-3" role="button" class="btn btn-grey btn-circle disabled"
                                               aria-disabled="true">3</a>
                                        </div>
                                        <div class="steps-step">
                                            <a href="#step-4" role="button" class="btn btn-grey btn-circle disabled"
                                               aria-disabled="true">4</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress" style="height: 20px">
                                    <div class="progress-bar bg-info" role="progressbar" style="height:20px"
                                         aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <form role="form-elegant md-form animated fadeIn" action="{{ route('users.update', $userAccount->UserAccount_Id) }}" method="post">
                                {{method_field('PUT')}}
                                {{csrf_field()}}
                                <!-- First Step -->
                                    <fieldset>
                                        <div class="row setup-content" id="step-1">
                                            <div class="col-md-12">
                                                <h3 class="font-weight-bold pl-0 my-4"><strong>Step 1: Basic
                                                        Information</strong></h3>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="file-field">
                                                            <div class="mb-4">
                                                                <img src="https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg"
                                                                     class="rounded-circle z-depth-1-half avatar-pic"
                                                                     id="avatar">
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="btn btn-mdb-color btn-rounded float-left">
                                                                    <span>Add photo</span>
                                                                    <input type="file" id="uploadBtn">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="form-group md-form pb-3">
                                                                    <i class="fa fa-user prefix"></i>
                                                                    <label for="firstName" data-error="wrong"
                                                                           data-success="right">First
                                                                        Name</label>
                                                                    <input id="firstName" type="text"
                                                                           required="required"
                                                                           class="form-control validate" name="User_FirstName" value="{{ $userAccount->user->User_FirstName }}">
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-group md-form pb-3">
                                                                    <label for="middleName" data-error="wrong"
                                                                           data-success="right">Middle
                                                                        Name</label>
                                                                    <input id="middleName" type="text"
                                                                           required="required"
                                                                           class="form-control validate" name="User_MiddleName" value="{{ $userAccount->user->User_MiddleName }}">
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-group md-form pb-3">
                                                                    <label for="lastName" data-error="wrong"
                                                                           data-success="right">Last
                                                                        Name</label>
                                                                    <input id="lastName" type="text" required="required"
                                                                           class="form-control validate" name="User_LastName" value="{{ $userAccount->user->User_LastName }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="form-group md-form pb-3">
                                                                    <select id="gender"
                                                                            class="mdb-select colorful-select dropdown-primary validate" name="User_Gender" value="{{ $userAccount->user->User_Gender }}">
                                                                        <option value="" disabled selected>Choose your gender</option>
                                                                        <option value="Male">Male</option>
                                                                        <option value="Female">Female</option>
                                                                    </select>
                                                                    <label for="gender" data-error="wrong"
                                                                           data-success="right">Gender</label>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-group md-form pb-3">
                                                                    <select id="civStat"
                                                                            class="mdb-select colorful-select dropdown-primary validate" name="User_CivilStatus" value="{{ $userAccount->user->User_CivilStatus }}">
                                                                        <option value="" disabled selected>Choose your civil status
                                                                        </option>
                                                                        <option value="Single">Single</option>
                                                                        <option value="Married">Married</option>
                                                                        <option value="Separated">Separated</option>
                                                                        <option value="Divorced">Divorced</option>
                                                                        <option value="Widowed">Widowed</option>
                                                                    </select>
                                                                    <label for="civStat" data-error="wrong"
                                                                           data-success="right">Civil Status</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="form-group md-form pb-3">
                                                                    <input placeholder="Selected birthday" type="text"
                                                                           id="date-picker-example"
                                                                           class="form-control datepicker" name="User_Birthdate" value="{{ $userAccount->user->User_Birthdate }}">
                                                                    <label for="date-picker-example" data-error="wrong"
                                                                           data-success="right">Birthday</label>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-group md-form pb-3">
                                                                    <i class="fa fa-flag prefix"></i>
                                                                    <label for="nationality" data-error="wrong"
                                                                           data-success="right">Nationality</label>
                                                                    <input type="text" id="nationality"
                                                                           class="form-control validate" name="User_Nationality" value="{{ $userAccount->user->User_Nationality }}">
                                                                    <span id="natMsg"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-group md-form pb-3">
                                                                    <i class="fa fa-church prefix"></i>
                                                                    <label for="age" data-error="wrong"
                                                                           data-success="right">Age</label>
                                                                    <input type="number" id="age"
                                                                           class="form-control validate" name="User_Age" value="{{ $userAccount->user->User_Age }}">
                                                                    <span id="relMsg"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-group md-form pb-3">
                                                                    <i class="fa fa-church prefix"></i>
                                                                    <label for="religion" data-error="wrong"
                                                                           data-success="right">Religion</label>
                                                                    <input type="text" id="religion"
                                                                           class="form-control validate" name="User_Religion" value="{{ $userAccount->user->User_Religion }}">
                                                                    <span id="relMsg"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="md-form pb-3">
                                                            <i class="fa fa-home prefix"></i>
                                                            <input type="text" id="homeAdd"
                                                                   class="form-control" name="Address_HomeAdd" value="{{ $address->Address_HomeAdd }}">
                                                            <label for="address">Home Address</label>
                                                            <span id="addMsg"></span>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="md-form pb-3">
                                                                    <input type="text" id="city"
                                                                           class="form-control" name="Address_City" value="{{ $address->Address_City }}">
                                                                    <label for="city">City</label>
                                                                    <span id="cityMsg"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="md-form pb-3">
                                                                    <input type="text" id="province"
                                                                           class="form-control" name="Address_Province" value="{{ $address->Address_Province }}">
                                                                    <label for="province">Province</label>
                                                                    <span id="provinceMsg"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="md-form pb-3">
                                                                    <input type="number" id="zipcode"
                                                                           class="form-control" name="Address_ZipCode" value="{{ $address->Address_ZipCode }}">
                                                                    <label for="zipcode">Zip Code</label>
                                                                    <span id="zipMsg"></span>
                                                                </div>
                                                            </div>

                                                            <div class="col">
                                                                <div class="form-group md-form pb-3">
                                                                    <select id="civStat"
                                                                            class="mdb-select colorful-select dropdown-primary validate" name="TenantRoom_Id">
                                                                        <option value="" disabled selected>Assign room
                                                                        </option>
                                                                        @foreach($rooms as $room)
                                                                            <option value="{{$room->TenantRoom_Id}}"
                                                                                    @if ($tenantInfo->TenantRoom_Id == $room->TenantRoom_Id) selected='selected' @endif>{{$room->Room}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    <label for="civStat" data-error="wrong"
                                                                           data-success="right">Room</label>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <button class="btn btn-indigo nextBtn float-right"
                                                                type="button">
                                                            Next
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <!-- Second Step -->
                                    <fieldset>
                                        <div class="row setup-content" id="step-2">
                                            <div class="col-md-12">
                                                <h3 class="font-weight-bold pl-0 my-4"><strong>Step 2: Guardian's
                                                        Information</strong></h3>
                                                <div class="col-md-4">
                                                    <div class="form-group md-form">
                                                        <select id="relateStat"
                                                                class="mdb-select colorful-select dropdown-primary validate" name="TenantGuardian_Relation" selected="selected">
                                                            <option value="" disabled selected>Choose the relation
                                                            </option>
                                                            <option value="Mother">Mother</option>
                                                            <option value="Father">Father</option>
                                                            <option value="Other">Other</option>
                                                        </select>
                                                        <label for="civStat" data-error="wrong" data-success="right">Guardian's
                                                            Relation</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group md-form pb-3">
                                                            <i class="fa fa-user prefix"></i>
                                                            <label for="TenantGuardian_FirstName" data-error="wrong"
                                                                   data-success="right">First
                                                                Name</label>
                                                            <input id="TenantGuardian_FirstName" name="TenantGuardian_FirstName" type="text"
                                                                   required="required"
                                                                   class="form-control validate" value="{{ $tenantInfo->tenantGuardian->TenantGuardian_FirstName }}">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group md-form pb-3">
                                                            <label for="TenantGuardian_LastName" data-error="wrong"
                                                                   data-success="right">Last
                                                                Name</label>
                                                            <input id="TenantGuardian_LastName" name="TenantGuardian_LastName" type="text"
                                                                   required="required"
                                                                   class="form-control validate" value="{{ $tenantInfo->tenantGuardian->TenantGuardian_LastName }}">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group md-form pb-3">
                                                            <label for="age" data-error="wrong"
                                                                   data-success="right">Age</label>
                                                            <input id="TenantGuardian_Age" name="TenantGuardian_Age" type="text" required="required"
                                                                   class="form-control validate" value="{{ $tenantInfo->tenantGuardian->TenantGuardian_Age }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="md-form pb-3">
                                                    <i class="fa fa-at prefix"></i>
                                                    <input type="email" id="TenantGuardian_Email" name="TenantGuardian_Email" class="form-control" value="{{ $tenantInfo->tenantGuardian->TenantGuardian_Email }}">
                                                    <label for="email">Email Address</label>
                                                    <span id="emailAddMsg"></span>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="md-form pb-3">
                                                            <i class="fa fa-mobile-alt prefix"></i>
                                                            <input type="number" id="TenantGuardian_CellphoneNo" name="TenantGuardian_CellphoneNo"
                                                                   class="form-control" value="{{ $tenantInfo->tenantGuardian->TenantGuardian_CellphoneNo }}">
                                                            <label for="phoneno">Phone Number</label>
                                                            <span id="phoneNoMsg"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="md-form pb-3">
                                                            <i class="fa fa-phone prefix"></i>
                                                            <input type="number" id="TenantGuardian_LandlineNo" name="TenantGuardian_LandlineNo"
                                                                   class="form-control" value="{{ $tenantInfo->tenantGuardian->TenantGuardian_LandlineNo }}">
                                                            <label for="phoneno">Landline Number</label>
                                                            <span id="landNoMsg"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-grey prevBtn float-left" type="button">Previous
                                                </button>
                                                <button class="btn btn-indigo nextBtn float-right" type="button">Next
                                                </button>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <!-- Third Step -->
                                    <fieldset>
                                        <div class="row setup-content" id="step-3">
                                            <div class="col-md-12">
                                                <h3 class="font-weight-bold pl-0 my-4"><strong>Step 3: Contact
                                                        Information</strong></h3>
                                                <div class="md-form pb-3">
                                                    <i class="fa fa-at prefix"></i>
                                                    <input type="email" id="UserAccount_Email" class="form-control" name="UserAccount_Email" value="{{ $userAccount->UserAccount_Email }}">
                                                    <label for="email">Email Address</label>
                                                    <span id="emailAddMsg"></span>
                                                </div>
                                                <input type="hidden" class="form-control" name="password" value="{{ $userAccount->password }}">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="md-form pb-3">
                                                            <i class="fa fa-mobile-alt prefix"></i>
                                                            <input type="number" id="phoneno"
                                                                   class="form-control" name="User_CellphoneNo" value="{{ $userAccount->user->User_CellphoneNo }}">
                                                            <label for="phoneno">Phone Number</label>
                                                            <span id="phoneNoMsg"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="md-form pb-3">
                                                            <i class="fa fa-phone prefix"></i>
                                                            <input type="number" id="landno"
                                                                   class="form-control" name="User_LandlineNo" value="{{ $userAccount->user->User_LandlineNo }}">
                                                            <label for="phoneno">Landline Number</label>
                                                            <span id="landNoMsg"></span>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="md-form pb-3">
                                                            <input type="hidden" name="UserAccount_Status" value="0"/>
                                                            <input type="checkbox" class="filled-in form-check-input"
                                                                   id="checkbox101" name="UserAccount_Status"
                                                                   @if($userAccount->UserAccount_Status == 1) checked="checked"
                                                                   @endif value="1">
                                                            <label class="form-check-label" for="checkbox101">Active</label>
                                                        </div>
                                                    </div>

                                                </div>
                                                <button class="btn btn-grey prevBtn float-left" type="button">Previous
                                                </button>
                                                <button class="btn btn-indigo nextBtn float-right" type="button">Next
                                                </button>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="row setup-content" id="step-4">
                                            <div class="col-md-12">
                                                <h3 class="font-weight-bold pl-0 my-4"><strong>Step 4: Terms and
                                                        Conditions</strong></h3>
                                                <div class="form-check pb-3">
                                                    <input type="checkbox" class="filled-in form-check-input"
                                                           id="checkbox101" checked="checked">
                                                    <label class="form-check-label" for="checkbox101">I agree on the
                                                        terms and conditions of this dormitory</label>
                                                </div>
                                                <button class="btn btn-grey prevBtn float-left" type="button">Previous
                                                </button>
                                                <button class="btn btn-success float-right" type="submit">Submit
                                                </button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

