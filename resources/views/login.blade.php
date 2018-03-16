@extends('layout')

@section('content')
<div class="logo-main">
    <a href="/"><img src="assets/global/img/logo_white.svg" alt="Bamboo Logo"></a>
</div>
<form action="" id="loginForm" method="post">
    <input type="hidden" name="_token" value="ju0AJjtVlV2LnL9lhkK9fOpg7DhuaMFVgR1mifUv">
    <div class="form-group">
        <input type="email" class="form-control form-control-danger" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
        <input type="password" class="form-control form-control-danger" placeholder="Enter Password"
               name="password">
    </div>
    <div class="other-actions row">
        <div class="col-6">
            <div class="checkbox">
                <label class="c-input c-checkbox">
                    <input type="checkbox" name="remember">
                    <span class="c-indicator"></span>
                    Remember Me
                </label>
            </div>
        </div>
        <div class="col-6 text-right">
            <a href="/user/forgot" class="forgot-link">Forgot Password?</a>
        </div>
    </div>
    <button class="btn btn-theme btn-full">Login</button>
</form>


@endsection