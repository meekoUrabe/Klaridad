@extends('template.layout')

@section('head')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/goverment/goverment.css') }}">
    <title>City Goverment | Dashboard</title>
@endsection

@section('main')

  <div class="right-panel">

    <nav class="navbar">
      <span class="nav-brand">Zamboanga City Governance Platform</span>
      <a href="{{ url()->current() }}">
        <div class="nav-profile">
          <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/>
          </svg>
          <span class="profile-text">Profile</span>
        </div>
      </a>
    </nav>

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
            <h3>Showing data for all 24 barangays in Zamboanga City</h3>
        </div>
    </section>

    </div>{{-- end .main-content --}}

  </div>{{-- end .right-panel --}}
@endsection
