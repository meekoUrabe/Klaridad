@extends('template.layout')

@section('head')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet"/>
    <title>Klaridad | Log-in</title>
@endsection

@section('header')
<div class="header">
    <h1>Klaridad</h1>
    <p>Zamboanga City Citizen Governance Platform</p>
</div>
@endsection

@section('main')
<form class="login-box" meth>
    <h1>Login to Your Account</h1>
    <div class="main-loginbox">
    <label for=""> Phone Number</label>
    <input type="tel" placeholder="☎ 09XX XXX XXXX" maxlength="11">
    <p>Enter your 11-digit Philippine mobile number</p>
    
    <label for=""> Login Password </label>
    <input type="password" placeholder="Login Password" id="login_password" name="login_password" required>
    <br>

    <button id="btn"> Login with Phone Number</button>
    <h2 class="divider"><span>or</span></h2>
    <button id="btn">Login with <i class="fa-brands fa-google"></i>mail</button>

    <h3>Don't have an account? <a href="{{ route('account.signup') }}"> Sign up here </a> </h3>
    <h3>By logging in, you agree to use this platform for community governance and transparency.</h3>
    </div>

</form>
@endsection

@section('footer')
    <p>© {{ date('Y') }} Klaridad - Zamboanga City Government</p>
@endsection
