@extends('layouts.masternonauth')

@section('title', 'Register')

@section('headerStyle')
<link rel="stylesheet" media="screen, print" href="{{ URL::asset('css/fa-brands.css') }}">
@stop

@section('content')

<div class="page-wrapper">
    <div class="page-inner bg-brand-gradient">
        <div class="page-content-wrapper bg-transparent m-0">
            <div class="height-10 w-100 shadow-lg px-4 bg-brand-gradient">
                <div class="d-flex align-items-center container p-0">
                    <div class="page-logo width-mobile-auto m-0 align-items-center justify-content-center p-0 bg-transparent bg-img-none shadow-0 height-9">
                        <a href="javascript:void(0)" class="page-logo-link press-scale-down d-flex align-items-center">
                            <img src="{{ URL::asset('/img/logo.png') }}" alt="SmartAdmin Laravel" aria-roledescription="logo">
                            <span class="page-logo-text mr-1">SmartAdmin Laravel</span>
                        </a>
                    </div>
                    <span class="text-white opacity-50 ml-auto mr-2 hidden-sm-down">
                        Already a member?
                    </span>
                    <a href="/page/page_login" class="btn-link text-white ml-auto ml-sm-0">
                        Secure Login
                    </a>
                </div>
            </div>
            <div class="flex-1" style="background: url(/img/svg/pattern-1.svg) no-repeat center bottom fixed; background-size: cover;">
                <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0">
                    <div class="row">
                        <div class="col-xl-12">
                            <h2 class="fs-xxl fw-500 mt-4 text-white text-center">
                                Register now, its free!
                                <small class="h3 fw-300 mt-3 mb-5 text-white opacity-60 hidden-sm-down">
                                    Your registration is free for a limited time. Enjoy SmartAdmin on your mobile, desktop or tablet.
                                    <br>It is ready to go wherever you go!
                                </small>
                            </h2>
                        </div>
                        <div class="col-xl-6 ml-auto mr-auto">
                            <div class="card p-4 rounded-plus bg-faded">
                                <div class="alert alert-primary text-dark" role="alert">
                                    <strong>Heads Up!</strong> Due to server maintenance from 9:30GTA to 12GTA, the verification emails could be delayed by up to 10 minutes.
                                </div>
                                <form id="js-login" novalidate="" action="#">
                                    <div class="form-group row">
                                        <label class="col-xl-12 form-label" for="fname">Your first and last name</label>
                                        <div class="col-6 pr-1">
                                            <input type="text" id="fname" class="form-control" placeholder="First Name" required>
                                            <div class="invalid-feedback">No, you missed this one.</div>
                                        </div>
                                        <div class="col-6 pl-1">
                                            <input type="text" id="lname" class="form-control" placeholder="Last Name" required>
                                            <div class="invalid-feedback">No, you missed this one.</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="emailverify">Email will be needed for verification and account recovery</label>
                                        <input type="email" id="emailverify" class="form-control" placeholder="Email for verification" required>
                                        <div class="invalid-feedback">No, you missed this one.</div>
                                        <div class="help-block">Your email will also be your username</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="userpassword">Pick a password: <br>Don't reuse your bank password, we didn't spend a lot on security for this app.</label>
                                        <input type="password" id="userpassword" class="form-control" placeholder="minimm 8 characters" required>
                                        <div class="invalid-feedback">Sorry, you missed this one.</div>
                                        <div class="help-block">Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.</div>
                                    </div>
                                    <div class="form-group demo">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="terms" required>
                                            <label class="custom-control-label" for="terms"> I agree to terms & conditions</label>
                                            <div class="invalid-feedback">You must agree before proceeding</div>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="newsletter">
                                            <label class="custom-control-label" for="newsletter">Sign up for newsletters (dont worry, we won't send so many)</label>
                                        </div>
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col-md-4 ml-auto text-right">
                                            <button id="js-login-btn" type="submit" class="btn btn-block btn-danger btn-lg mt-3">Send verification</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @include('layouts/partials/footer-sm')
            </div>
        </div>
    </div>
</div>
<!-- BEGIN Color profile -->
<!-- this area is hidden and will not be seen on screens or screen readers -->
@include('layouts/partials/color-profile')
@stop

@section('footerScript')
<script>
    $("#js-login-btn").click(function(event) {

        // Fetch form to apply custom Bootstrap validation
        var form = $("#js-login")

        if (form[0].checkValidity() === false) {
            event.preventDefault()
            event.stopPropagation()
        }

        form.addClass('was-validated');
        // Perform ajax submit here...
    });
</script>
@stop