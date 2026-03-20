@extends('template.layout')

@section('head')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet"/>
    <title>Klaridad | Log-in</title>
@endsection

@section('main')
<form action="{{ route('account.post_login') }}" method="POST">
    @csrf
    <label for="phone_number">Phone number</label>
    <input type="text" name="phone_number" id="phone_number" maxlength="11">
    <br>
    <label for="password">Password</label>
    <input type="text" name="password" id="password">
    <button type="submit">Log in</button>
</form>
    <div id="response">
        {{ session('success') }}
        {{ session('error') }}
    </div>
<a href="{{ route('account.signup') }}">Sign up</a>
@endsection
