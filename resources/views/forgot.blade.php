@extends('layout')

@section('content')
<div class="logo-main">
    <a href="/"><img src="/assets/global/img/logo_white.svg" alt="Laraspace Logo"></a>
</div>
<form action="" id="loginForm" method="post">
    <input type="hidden" name="_token" value="ju0AJjtVlV2LnL9lhkK9fOpg7DhuaMFVgR1mifUv">
    <div class="form-group">
        <input type="email" class="form-control form-control-danger" placeholder="Enter email" name="email">
    </div>
    <button class="btn btn-theme btn-full">Send Resent Link</button>
</form>

@endsection