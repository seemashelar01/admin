@extends('admin.auth.master', ['pageTitle' => 'Reset Login'])
@push('styles')
@endpush
@section('content')
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background: linear-gradient(rgba(0,0,0, 0.7), rgba(0, 0, 0, .8)),url({{ asset('assets/theme/images/big/auth-bg.jpg') }}) ;background-position: center; background-repeat: no-repeat;background-size: cover;">
        <div class="auth-box">
            <div>
                <div class="logo">
                    <span class="db"><img src="{{ asset('assets/theme/images/logo-icon.png') }}" alt="logo" /></span>
                    <h5 class="font-medium m-b-20 mt-2">Recover Password</h5> 
                </div>
                <div class="row m-t-20">
                    <div id="altbx"></div>
                    <!-- Form -->
                    <form class="col-12" action="#" data-parsley-validate="" method="post" id="resetpassword">
                        <!-- email -->
                        <div class="form-group row">
                            <div class="col-12">
                                <label>Enter your Email and instructions will be sent to you!</label>
                                <input class="form-control form-control-lg" id="userEmail" type="email" required="" data-parsley-required-message="Email is required" placeholder="Enter Email" name="useremail">
                            </div>
                            <span id="error" style="color:red"></span>
                        </div>
                        <!-- pwd -->
                        <div class="row m-t-20">
                            <div class="col-12">
                                <button class="btn btn-block btn-lg btn-danger" type="submit" id="submit" name="submit">Reset</button>
                            </div>
                        </div>
                        <p class="mt-3 text-right"><a href="#">Back to Login.</a></p>
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
