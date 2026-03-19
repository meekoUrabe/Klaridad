@extends('template.layout')


@section('main')
<form action="{{ route('account.post_signup') }}" method="POST">
    @csrf
    <label for="first_name">First name</label>
    <input type="text" name="first_name" id="first_name">
    <br>
    <label for="last_name">Last name</label>
    <input type="text" name="last_name" id="last_name">
    <br>
    <label for="phone_number">Phone number</label>
    <input type="text" name="phone_number" id="phone_number" maxlength="11">
    <br>
    <label for="password">Password</label>
    <input type="text" name="password" id="password">
    <br>
    <button type="submit">Sign up</button>
</form>
    <div id="response">
        {{ session('success') }}
        {{ session('error') }}
    </div>
<a href="{{ route('account.login') }}">Log in</a>
@endsection
