@extends('template.layout')

@section('head')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/components/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/goverment/goverment.css') }}">
    <title>City Goverment | Dashboard</title>
@endsection

@section('header')
@endsection

@section('main')

  <div class="right-panel">

    @include('components.navbar', ['profileRoute' => route('goverment.dashboard'), 'showLogout' => true])

    <div class="main-content">

    <section class="section1">
        <div class="section-head">
            <h1>City Goverment Dashboard</h1>
            <h2>Overview of all projects and reports across Zamboanga City</h2>
        </div>
        <div id="analytics-container">
            <ul>
                <li class="analytics-card">
                    <div class="analytics-card__text">
                        <span>Total Projects</span>

                    </div>
                    <i class="far fa-folder-open"></i>
                </li>
                <li class="analytics-card">
                    <div class="analytics-card__text">
                        <span>Total Reports</span>

                    </div>
                    <i class="far fa-file-alt"></i>
                </li>
                <li class="analytics-card">
                    <div class="analytics-card__text">
                        <span>Most Reported</span>

                    </div>
                    <i class="fas fa-triangle-exclamation"></i>
                </li>
            </ul>
        </div>

    </section>
    <section class="section2">
        <div class="section-head">
            <h2>All Barangays Overview</h2>
            <h3>Showing data for all 99 barangays in Zamboanga City</h3>
        </div>
    </section>

    </div>{{-- end .main-content --}}

  </div>{{-- end .right-panel --}}
@endsection
