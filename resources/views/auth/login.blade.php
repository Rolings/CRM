@extends('auth.app')
@section('title','Login')
@section('content')
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <div class="container">
        <div class="" id="login-wrapper">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div id="logo-login">
                        <h1>Admin
                            <span></span>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="account-box">
                        {{ Form::open(['url' => route('admin.auth'),'method'=>'POST']) }}
                        <div class="form-group">
                            <a href="#" class="pull-right label-forgot">Forgot email?</a>
                            {{ Form::label('email', 'E-Mail Address') }}
                            {{ Form::text('email',null,['id'=>'email','class'=>'form-control']) }}
                        </div>
                        <div class="form-group">
                            <a href="#" class="pull-right label-forgot">Forgot password?</a>
                            {{ Form::label('password', 'Password') }}
                            {{ Form::password('password',['id'=>'password','class'=>'form-control']) }}
                        </div>
                        <div class="checkbox pull-left">
                            <label>{{ Form::checkbox('remember', '1', false) }}Remember me</label>
                        </div>
                        {{ Form::submit('Log In',['class'=>'btn btn btn-primary pull-right']) }}

                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
        <div style="text-align:center;margin:0 auto;">
            <h6 style="color:#fff;"></h6>
        </div>
    </div>
@endsection