@extends('../layouts.without_dashboard')

@section('title')
Login
@endsection

@section('content')
<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        <div class="login-content">
            <div class="login-logo">
                <a href="#">
                    <h3>Login</h3>
                </a>
            </div>
            <div class="login-form">
                @if($errors && count($errors))
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {{$errors->first()}}
                </div>
                @endif
                <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                    @csrf

                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" placeholder="Email/Username" name="email">
                        {{-- @if($errors->has('email'))
                        <p>{{$errors->first('email')}}</p>
                        @endif --}}
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        {{-- @if($errors->has('password'))
                        <p>{{$errors->first('password')}}</p>
                        @endif --}}
                    </div>

                    <div class="checkbox">
                        <label class="pull-right">
                            <a href="{{ route('password.request') }}">Forgotten Password?</a>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
