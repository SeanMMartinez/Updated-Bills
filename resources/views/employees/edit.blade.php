@extends ('layouts.sidenav')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit User') }}</div>

                    <div class="card-body">

                        <form method="POST" action="{{ route('employees.update', $userAccount->UserAccount_Id) }}">
                            @csrf
                            {{ method_field('PUT') }}

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
                                    <input id="upload" type="file" name="User_Picture">

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

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>

                                <div class="col-md-6">
                                    <div class="switch round blue-white-switch">
                                        <label>
                                            Inactive
                                            <input type="hidden" id="checkbox101" name="UserAccount_Status" value="0">
                                            <input type="checkbox" id="checkbox101" name="UserAccount_Status" value="1"
                                                   @if($userAccount->UserAccount_Status == 1) checked="checked" @endif>
                                            <span class="lever"></span>
                                            Active
                                        </label>
                                    </div>
                                    @if ($errors->has('UserAccount_Status'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('UserAccount_Status') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <h2 class="title">Roles:</h2>
                            @foreach ($roles as $role)
                                <div class="form-check pb-3">
                                    <input type="checkbox" class="filled-in form-check-input" id="{{$role->name}}" name="roles[]"
                                           value="{{$role->Role_Id}}"
                                           @if ($userAccount->roles->contains($role->Role_Id)) checked='checked' @endif>
                                    <label class="form-check-label" for="{{$role->name}}">{{$role->name}}</label>
                                </div>
                            @endforeach

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
@endsection