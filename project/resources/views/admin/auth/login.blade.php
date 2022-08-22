@extends('admin.auth.master', ['pageTitle' => 'Login'])
@push('styles')
@endpush
@section('content')
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background: linear-gradient(rgba(0,0,0, 0.7), rgba(0, 0, 0, .8)),url({{ asset('assets/theme/images/big/auth-bg.jpg') }}) ;background-position: center; background-repeat: no-repeat;background-size: cover;">
        <div class="auth-box">
            <div id="loginform">
                <div class="logo">
                    <span class="db mb-3"><img src="{{ asset('assets/theme/images/logo-icon.png') }}" alt="logo" /></span>
                    <h5 class="font-medium m-b-20 mt-2">Sign In to Admin</h5>
                </div>
                <!-- Form -->
                <div class="row">
                    <div class="col-12">
                        <form class="form-horizontal m-t-20" id="loginform" action="#" method="post">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
                                </div>
                                <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" required="" data-parsley-required-message="Email is required." value="" />
                            </div>
                            <span class="text-danger"></span>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon2"><i class="ti-pencil"></i></span>
                                </div>
                                <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required="" data-parsley-required-message="Password is required." value="" />
                            </div>
                            <span class="text-danger"></span>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" name="rememberme">
                                        <label class="custom-control-label" for="customCheck1">Remember me</label>
                                        <a href="#" id="to-recover" class="text-dark float-right"><i class="fa fa-lock m-r-5"></i> Forgot pwd?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <div class="col-xs-12 p-b-20">
                                    <button class="btn btn-block btn-lg btn-info" type="submit">Log In</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="recoverform">
                <div class="logo">
                    <span class="db"><img src="{{ asset('assets/theme/images/logo-icon.png') }}" alt="logo" /></span>
                    <h5 class="font-medium m-b-20">Recover Password</h5>
                    <span>Enter your Email and instructions will be sent to you!</span>
                </div>
                <div class="row m-t-20">
                    <!-- Form -->
                    <form class="col-12" action="#">
                        <!-- email -->
                        <div class="form-group row">
                            <div class="col-12">
                                <input class="form-control form-control-lg" type="email" required="" placeholder="Username">
                            </div>
                        </div>
                        <!-- pwd -->
                        <div class="row m-t-20">
                            <div class="col-12">
                                <button class="btn btn-block btn-lg btn-danger" type="submit" name="action">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $(".preloader").fadeOut();
        });
    </script>
    <script type="text/javascript" src="{{ asset('assets/dist/js/parsely.min.js') }}"></script>
@endpush
