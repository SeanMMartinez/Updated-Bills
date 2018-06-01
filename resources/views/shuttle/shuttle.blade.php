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
                        <!--Form without header-->
                        <div class="card">
                            <div class="card-body mx-4">
                                <!--Header-->
                                <div>
                                    <h3 class="dark-grey-text mb-3">
                                        <strong>Shuttle Schedules</strong>
                                    </h3>
                                    <hr/>
                                </div>

                                <!--Table-->
                                <div class="row">
                                    <div class="col">

                                        <div class="md-form pb-3">
                                            <input placeholder="Selected time" type="text" id="input_starttime"
                                                   class="form-control timepicker">
                                            <label for="input_starttime">Start Time</label>
                                        </div>
                                        <div class="md-form pb-3">
                                            <input placeholder="Selected time" type="text" id="input_endtime"
                                                   class="form-control timepicker">
                                            <label for="input_endtime">End Time</label>
                                        </div>
                                        <div class="md-form pb-3">
                                            <input placeholder="Selected date" type="text" id="date-picker-example"
                                                   class="form-control datepicker">
                                            <label for="date-picker-example">Date</label>
                                        </div>
                                        <button class="btn btn-info btn-md">Create Shuttle Schedule</button>
                                    </div>
                                    <div class="col">

                                        <table class="table table-hover table-responsive-md">

                                            <!--Table head-->
                                            <thead class="blue lighten-2">
                                            <tr>
                                                <th>#</th>
                                                <th>Date</th>
                                                <th>Start Time</th>
                                                <th>End Time</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                            </thead>
                                            <!--Table head-->
                                            <!--Table body-->
                                            <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Test</td>
                                                <td>Test</td>
                                                <td>Test</td>
                                                <td>
                                                    <a class="fa fa-eye fa-2x blue-text" data-toggle="tooltip"
                                                       data-placement="top" title="View"></a>
                                                    &nbsp;&nbsp;
                                                    <a class="fa fa-edit fa-2x amber-text" data-toggle="tooltip"
                                                       data-placement="top" title="Edit"></a>
                                                    &nbsp;&nbsp;
                                                    <a class="fa fa-trash-alt fa-2x red-text" data-toggle="tooltip"
                                                       data-placement="top" title="Delete"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Test</td>
                                                <td>Test</td>
                                                <td>Test</td>
                                                <td>
                                                    <a class="fa fa-eye fa-2x blue-text" data-toggle="tooltip"
                                                       data-placement="top" title="View"></a>
                                                    &nbsp;&nbsp;
                                                    <a class="fa fa-edit fa-2x amber-text" data-toggle="tooltip"
                                                       data-placement="top" title="Edit"></a>
                                                    &nbsp;&nbsp;
                                                    <a class="fa fa-trash-alt fa-2x red-text" data-toggle="tooltip"
                                                       data-placement="top" title="Delete"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Test</td>
                                                <td>Test</td>
                                                <td>Test</td>
                                                <td>
                                                    <a class="fa fa-eye fa-2x blue-text" data-toggle="tooltip"
                                                       data-placement="top" title="View"></a>
                                                    &nbsp;&nbsp;
                                                    <a class="fa fa-edit fa-2x amber-text" data-toggle="tooltip"
                                                       data-placement="top" title="Edit"></a>
                                                    &nbsp;&nbsp;
                                                    <a class="fa fa-trash-alt fa-2x red-text" data-toggle="tooltip"
                                                       data-placement="top" title="Delete"></a>
                                                </td>
                                            </tr>
                                            </tbody>
                                            <!--Table body-->

                                        </table>
                                        <!--Table-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Body-->


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