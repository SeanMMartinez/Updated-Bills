@extends('layouts.sidenav')

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
                                <form role="form-elegant md-form animated fadeIn" action="" method="post"
                                      runat="server">
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
                                                                           class="form-control validate">
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-group md-form pb-3">
                                                                    <label for="middleName" data-error="wrong"
                                                                           data-success="right">Middle
                                                                        Name</label>
                                                                    <input id="middleName" type="text"
                                                                           required="required"
                                                                           class="form-control validate">
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-group md-form pb-3">
                                                                    <label for="lastName" data-error="wrong"
                                                                           data-success="right">Last
                                                                        Name</label>
                                                                    <input id="lastName" type="text" required="required"
                                                                           class="form-control validate">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="form-group md-form pb-3">
                                                                    <select id="gender"
                                                                            class="mdb-select colorful-select dropdown-primary validate">
                                                                        <option value="" disabled selected>Choose your gender
                                                                        </option>
                                                                        <option value="1">Male</option>
                                                                        <option value="2">Female</option>
                                                                        <option value="3">Other</option>
                                                                    </select>
                                                                    <label for="gender" data-error="wrong"
                                                                           data-success="right">Gender</label>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-group md-form pb-3">
                                                                    <select id="civStat"
                                                                            class="mdb-select colorful-select dropdown-primary validate">
                                                                        <option value="" disabled selected>Choose your civil status
                                                                        </option>
                                                                        <option value="1">Single</option>
                                                                        <option value="2">Married</option>
                                                                        <option value="3">Separated</option>
                                                                        <option value="3">Divorced</option>
                                                                        <option value="3">Widowed</option>
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
                                                                           class="form-control datepicker">
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
                                                                           name="nationality"
                                                                           class="form-control validate">
                                                                    <span id="natMsg"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-group md-form pb-3">
                                                                    <i class="fa fa-church prefix"></i>
                                                                    <label for="religion" data-error="wrong"
                                                                           data-success="right">Religion</label>
                                                                    <input type="text" id="religion" name="religion"
                                                                           class="form-control validate">
                                                                    <span id="relMsg"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="md-form pb-3">
                                                            <i class="fa fa-home prefix"></i>
                                                            <input type="text" id="homeAdd" name="homeAdd"
                                                                   class="form-control">
                                                            <label for="address">Home Address</label>
                                                            <span id="addMsg"></span>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="md-form pb-3">
                                                                    <input type="text" id="city" name="city"
                                                                           class="form-control">
                                                                    <label for="city">City</label>
                                                                    <span id="cityMsg"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="md-form pb-3">
                                                                    <input type="text" id="province" name="province"
                                                                           class="form-control">
                                                                    <label for="province">Province</label>
                                                                    <span id="provinceMsg"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="md-form pb-3">
                                                                    <input type="number" id="zipcode" name="zipcode"
                                                                           class="form-control">
                                                                    <label for="zipcode">Zip Code</label>
                                                                    <span id="zipMsg"></span>
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
                                                                class="mdb-select colorful-select dropdown-primary validate">
                                                            <option value="" disabled selected>Choose the relation
                                                            </option>
                                                            <option value="1">Mother</option>
                                                            <option value="2">Father</option>
                                                            <option value="3">Other</option>
                                                        </select>
                                                        <label for="civStat" data-error="wrong" data-success="right">Guardian's
                                                            Relation</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group md-form pb-3">
                                                            <i class="fa fa-user prefix"></i>
                                                            <label for="firstName" data-error="wrong"
                                                                   data-success="right">First
                                                                Name</label>
                                                            <input id="firstName" type="text"
                                                                   required="required"
                                                                   class="form-control validate">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group md-form pb-3">
                                                            <label for="middleName" data-error="wrong"
                                                                   data-success="right">Middle
                                                                Name</label>
                                                            <input id="middleName" type="text"
                                                                   required="required"
                                                                   class="form-control validate">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group md-form pb-3">
                                                            <label for="lastName" data-error="wrong"
                                                                   data-success="right">Last
                                                                Name</label>
                                                            <input id="lastName" type="text" required="required"
                                                                   class="form-control validate">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group md-form pb-3">
                                                    <input placeholder="Selected birthday" type="text"
                                                           id="date-picker-example"
                                                           class="form-control datepicker">
                                                    <label for="date-picker-example" data-error="wrong"
                                                           data-success="right">Birthday</label>
                                                </div>
                                                <div class="md-form pb-3">
                                                    <i class="fa fa-at prefix"></i>
                                                    <input type="email" id="email" name="email" class="form-control">
                                                    <label for="email">Email Address</label>
                                                    <span id="emailAddMsg"></span>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="md-form pb-3">
                                                            <i class="fa fa-mobile-alt prefix"></i>
                                                            <input type="number" id="phoneno" name="phoneno"
                                                                   class="form-control">
                                                            <label for="phoneno">Phone Number</label>
                                                            <span id="phoneNoMsg"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="md-form pb-3">
                                                            <i class="fa fa-phone prefix"></i>
                                                            <input type="number" id="landno" name="landno"
                                                                   class="form-control">
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
                                                    <input type="email" id="email" name="email" class="form-control">
                                                    <label for="email">Email Address</label>
                                                    <span id="emailAddMsg"></span>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="md-form pb-3">
                                                            <i class="fa fa-mobile-alt prefix"></i>
                                                            <input type="number" id="phoneno" name="phoneno"
                                                                   class="form-control">
                                                            <label for="phoneno">Phone Number</label>
                                                            <span id="phoneNoMsg"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="md-form pb-3">
                                                            <i class="fa fa-phone prefix"></i>
                                                            <input type="number" id="landno" name="landno"
                                                                   class="form-control">
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
        <!-- Steps form -->
    </main>
@endsection

