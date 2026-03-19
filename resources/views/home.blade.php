@extends('template.layout')

@section('head')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('main')

@auth
Welcome {{ auth()->user()->last_name . ', ' . auth()->user()->first_name; }}
@endauth
@guest
<a href="{{ route('account.login') }}">Login</a>
<h1>Main</h1>
@endsection

@section('header')
<h1>Header</h1>
@endsection

@section('footer')
<h1>Footer</h1>
@endsection

@push('script')
<script>
    console.log("Hello world")
</script>
@endpush
