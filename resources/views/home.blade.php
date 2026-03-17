@extends('template.layout')

@section('head')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('main')
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
