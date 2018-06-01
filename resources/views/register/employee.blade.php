@extends('layouts.sidenav')


@section('content')
<style>
    .rgba-gradient .full-bg-img {
        background: -webkit-linear-gradient(98deg, rgba(22, 91, 231, 0.5), rgba(255, 32, 32, 0.5) 100%);
        background: -webkit-gradient(linear, 98deg, from(rgba(22, 91, 231, 0.5)), to(rgba(255, 32, 32, 0.5)));
        background: linear-gradient(to 98deg, rgba(22, 91, 231, 0.5), rgba(255, 32, 32, 0.5) 100%);
    }

    .card {
        background-color: rgba(255, 255, 255, 0.85);
    }

    /*
            .md-form label {
                color: #ffffff;
            }
    */
    h6 {
        line-height: 1.7;
    }
</style>

<main>
    <div class="justify-content-between">
        <div class="container-fluid text-center">
            <!--Grid row-->
            <div class="row text-left my-xl-5 ml-xl-3">
                <!--Grid column-->
                <div class="col-xl-12">
                    <form class="form-elegant animated fadeIn" action="addcustomer.php" method="post"
                          onsubmit="return validate(this);">
                        <!--Form without header-->
                        <div class="card">
                            <div class="card-body mx-4">
                                <!--Header-->
                                <div class="text-center">
                                    <h3 class="dark-grey-text mb-3">
                                        <strong>Register an Employee</strong>
                                    </h3>
                                    <hr/>
                                </div>

                                <!--Body-->

                                <!--Name-->
                                <div class="row">
                                        <div class="col">
                                            <div class="md-form pb-3">
                                                <i class="fa fa-user prefix"></i>
                                                <input type="text" id="firstName" name="firstname" class="form-control">
                                                <label for="firstName">First Name</label>
                                                <span id="fNMsg"></span>
                                            </div>
                                        </div>&nbsp;&nbsp;&nbsp;
                                        <div class="col">
                                            <div class="md-form pb-3">
                                                <input type="text" id="middleName" name="middlename" class="form-control">
                                                <label for="middleName">Middle Name</label>
                                            </div>
                                        </div>&nbsp;&nbsp;&nbsp;
                                        <div class="col">
                                            <div class="md-form pb-3">
                                                <input type="text" id="lastName" name="lastname" class="form-control">
                                                <label for="lastName">Last Name</label>
                                                <span id="lNMsg"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                                <div class="md-form pb-3">
                                                        <select class="mdb-select colorful-select dropdown-primary multiple">
                                                            <option value="" disabled selected>Choose your gender</option>
                                                            <option value="1">Male</option>
                                                            <option value="2">Female</option>
                                                            <option value="3">Other</option>
                                                        </select>
                                                        <label>Gender</label>
                                                        </div>
                                        </div>
                                        <div class="col">
                                            <div class="md-form pb-3">
                                            <select class="mdb-select colorful-select dropdown-primary multiple">
                                                <option value="" disabled selected>Choose your civil status</option>
                                                <option value="1">Single</option>
                                                <option value="2">Married</option>
                                                <option value="3">Separated</option>
                                                <option value="4">Divorced</option>
                                                <option value="5">Widowed</option>
                                            </select>
                                            <label>Civil Status</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                                <div class="md-form pb-3">
                                                        <input placeholder="Selected birthday" type="text" id="date-picker-example" class="form-control datepicker">
                                                        <label for="date-picker-example">Birthday</label>
                                                    </div>
                                        </div>
                                        <div class="col">
                                            <div class="md-form pb-3">
                                                <i class="fa fa-flag prefix"></i>
                                                <input type="text" id="nationality" name="nationality" class="form-control">
                                                <label for="nationality">Nationality</label>
                                                <span id="natMsg"></span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="md-form pb-3">
                                                <i class="fa fa-church prefix"></i>
                                                <input type="text" id="religion" name="religion" class="form-control">
                                                <label for="religion">Religion</label>
                                                <span id="relMsg"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="md-form pb-3">
                                        <i class="fa fa-home prefix"></i>
                                        <input type="text" id="homeAdd" name="homeAdd" class="form-control">
                                        <label for="address">Home Address</label>
                                        <span id="addMsg"></span>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="md-form pb-3">
                                                <input type="text" id="city" name="city" class="form-control">
                                                <label for="city">City</label>
                                                <span id="cityMsg"></span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="md-form pb-3">
                                                <input type="text" id="province" name="province" class="form-control">
                                                <label for="province">Province</label>
                                                <span id="provinceMsg"></span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="md-form pb-3">
                                                <input type="number" id="zipcode" name="zipcode" class="form-control">
                                                <label for="zipcode">Zip Code</label>
                                                <span id="zipMsg"></span>
                                            </div>
                                        </div>
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
                                                <input type="number" id="phoneno" name="phoneno" class="form-control">
                                                <label for="phoneno">Phone Number</label>
                                                <span id="phoneNoMsg"></span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="md-form pb-3">
                                                <i class="fa fa-phone prefix"></i>
                                                <input type="number" id="landno" name="landno" class="form-control">
                                                <label for="phoneno">Landline Number</label>
                                                <span id="landNoMsg"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="md-form pb-3">
                                        <div class="file-field">
                                            <div class="btn btn-primary btn-sm float-left">
                                                <span>Choose file</span>
                                                <input type="file">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text" placeholder="Upload your profile picture here">
                                            </div>
                                        </div>
                                    </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="text-center mb-3">
                                                <button type="submit" class="btn btn-lg btn-info btn-block z-depth-2">
                                                    Submit
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="text-center mb-3">
                                                <button type="reset" class="btn btn-lg btn-warning btn-block z-depth-2">
                                                    Reset
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <div class="text-center mb-3">
                                                <a href="index-temp.php"
                                                   class="btn btn-lg btn-info btn-block z-depth-2">Go
                                                    Back to Homepage</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!--Footer-->
                                <!--<div class="modal-footer mx-5 pt-3 mb-1">
                                    <p class="font-small grey-text d-flex justify-content-end">Already a member?
                                        <a href="login.php" class="blue-text ml-1"> Log In</a>
                                    </p>
                                </div> -->
                                <!-- /Footer -->

                    </form>
                </div>
                <!--/Form without header-->
            </div>
            <!--Grid column-->
        </div>
    </div>
</main>
@endsection