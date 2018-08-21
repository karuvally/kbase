@extends('layouts.without_dashboard')

@section('content')
<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        <div class="login-content">
            <div class="login-logo">
                <a href="index.html">
                    <h3>Login
                        <h3>
                </a>
            </div>
            <div class="login-form">
                @if($errors->has('err_msg'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {{$errors->first('err_msg')}}
                </div>
                @endif

                <form action="/login_frm" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" placeholder="Email" name="username"> @if($errors->has('username'))
                        <p>{{$errors->first('username')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="password"> @if($errors->has('password'))
                        <p>{{$errors->first('password')}}</p>
                        @endif
                    </div>

                    <div class="checkbox">
                        <label class="pull-right">
                            <a href="#">Forgotten Password?</a>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                    <div class="social-login-content">
                        <!--   <div class="social-button">
                                <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i>Sign in with facebook</button>
                                <button type="button" class="btn social twitter btn-flat btn-addon mt-2"><i class="ti-twitter"></i>Sign in with twitter</button>
                            </div>-->
                    </div>
                    <div class="register-link m-t-15 text-center">
                        <p>Don't have account ?
                            <a href="#"> Sign Up Here</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
