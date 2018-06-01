<?php
/**
 * Created by PhpStorm.
 * User: Jeremy Ramos
 * Date: 4/22/2018
 * Time: 5:10 PM
 */
?>

@extends('layouts.app')

@section('content')
    <section class="intro-2 rgba-gradient">
        <div class="justify-content-center">
            <!--Grid row-->
            <div class="row mx-auto text-left">

                <!--Grid column-->
                <div class="col-md-4 mx-auto">
                    <div class="text-center animated fadeIn">
                        <img src="img/logo.png" class="mt-xl-5" style="height: 200px; width: 200px"/>
                        <h3 class="black-text mb-3" style="font-size: 35px; font-family: 'Roboto Medium'">
                            <strong>DormPanion</strong>
                        </h3>
                    </div>
                    <form class="form-elegant animated fadeIn mb-5"
                          style="-webkit-animation-delay: .3s; -o-animation-delay: .3s; -moz-animation-delay: .3s"
                          action="{{ route('login') }}" method="post">
                        @csrf
                        <!--Form without header-->
                        <div class="card">
                            <div class="card-body mx-4">
                                <!--Header-->
                                <div class="text-center">
                                    <h3 class="dark-grey-text mb-3">
                                        <strong>Sign in</strong>
                                    </h3>
                                    <hr/>
                                </div>

                                <!--Body-->
                                <div class="md-form">
                                    <i class="fa fa-user prefix"></i>
                                    <input type="text" id="email" class="form-control" name="UserAccount_Email" value="{{ old('UserAccount_Email') }}">
                                    <label for="email">Email</label>
                                </div>

                                <div class="md-form pb-3">
                                    <i class="fa fa-key prefix"></i>
                                    <input type="password" id="password" class="form-control" name="password" value="{{ old('password') }}">
                                    <label for="password">Password</label>
                                </div>
                                <div class="container text-sm-center pb-3">
                                    <div class="g-recaptcha" style="display: inline-block"
                                         data-sitekey="{{env('CAPTCHA_SITE_KEY')}}"></div>
                                    @if ($errors->has('g-recaptcha-response'))
                                        <span class="invalid-feedback" style="display: block;">
                                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="container">
                                    <div class="text-center mb-3">
                                        <button type="submit" class="btn btn-lg btn-info btn-block z-depth-2">
                                            Sign in
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!--Footer-->
                            <div class="modal-footer mx-5 pt-3 mb-1">
                                <p class="font-small grey-text d-flex justify-content-end">Forgot Password?
                                    <a href="#" class="blue-text ml-1"> Click here</a>
                                </p>
                            </div>

                        </div>
                        <!--/Form without header-->

                    </form>

                </div>
                <!--Grid column-->
            </div>
        </div>
    </section>
@endsection
