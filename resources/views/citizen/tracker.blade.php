@extends('template.layout')

@section('head')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
<link rel="stylesheet" href="{{ asset('css/components/sidebar.css') }}">
<link rel="stylesheet" href="{{ asset('css/citizen/tracker.css') }}">
<title>Klaridad | Track Reports</title>
@endsection

@section('header')
  <div class="overlay" id="overlay" onclick="closeSidebar()"></div>

  <aside class="sidebar" id="sidebar">

    <button class="close-btn" onclick="closeSidebar()">✕</button>

    <div class="sidebar-top">
      <div class="brand">
        <h1>Klaridad</h1>
        <p>Zamboanga City</p>
      </div>

      <hr class="divider" style="margin-top: 16px;" />

      <nav>
        <ul class="nav-menu">
          <li>
            <a href="{{ route('citizen.dashboard') }}">
              <span class="icon"></span>
              Project Feed
            </a>
          </li>
          <li>
            <a href="{{ route('citizen.submit_report') }}">
              <span class="icon"></span>
              Submit Report
            </a>
          </li>
          <li>
            <a href="{{ route('citizen.submit_report') }}" class="active">
              <span class="icon"></span>
              Track Reports
            </a>
          </li>
        </ul>
      </nav>
    </div>

    <div class="sidebar-bottom">
      <button class="logout-btn">
        ↪ Logout
      </button>
    </div>

  </aside>
@endsection

@section('main')
  <div class="right-panel">

    <nav class="navbar">
      <button class="burger-btn" id="burgerBtn" onclick="toggleSidebar()">☰</button>
      <span class="nav-brand">Zamboanga City Governance Platform</span>
      <a href="{{route('citizen.profile')}}">
        <div class="nav-profile">
          <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/>
          </svg>
          <span class="profile-text">Profile</span>
        </div>
      </a>
    </nav>

    <div class="main-content">

      <section class="tracker-hero">
        <h2>Report Tracker</h2>
        <p>Track the status of submitted community reports and support issues</p>
      </section>

      <section class="tracker-card">
        <div class="tracker-card__section">
          <h3>Search by Report ID</h3>
          <div class="input-with-icon">
            <i class="fas fa-magnifying-glass"></i>
            <input type="text" class="searchbar-input" id="searchbar" name="searchbar" placeholder="Enter your report ID (e.g., R20260315001)" required>
          </div>
        </div>

        <div class="tracker-card__section">
          <h3>Filter Reports</h3>
          <div class="filter-grid">
            <div class="filter-item">
              <label for="category">Category</label>
              <select id="category" class="form-input">
                <option value="all-categories">All Categories</option>
                <option value="infrastructure">Infrastructure</option>
                <option value="corruption">Corruption</option>
                <option value="public-safety">Public Safety</option>
                <option value="environment">Environment</option>
                <option value="other">Other</option>
              </select>
            </div>

            <div class="filter-item">
              <label for="barangay">Barangay</label>
              <select class="form-input" id="barangay" name="barangay">
                <option value="">All Barangays</option>
                <option value="Baliwasan">Baliwasan</option>
                <option value="Canelar">Canelar</option>
                <option value="Culianan">Culianan</option>
                <option value="Guiwan">Guiwan</option>
                <option value="La Paz">La Paz</option>
                <option value="Pasonanca">Pasonanca</option>
                <option value="San Roque">San Roque</option>
                <option value="Talon-Talon">Talon-Talon</option>
                <option value="Tetuan">Tetuan</option>
                <option value="Tumaga">Tumaga</option>
              </select>
            </div>

            <div class="filter-item">
              <label for="status">Status</label>
              <select id="status" class="form-input">
                <option value="all-status">All Status</option>
                <option value="received">Received</option>
                <option value="in-review">In Review</option>
                <option value="resolved">Resolved</option>
              </select>
            </div>

            <div class="filter-item">
              <label for="time-period">Time Period</label>
              <select id="time-period" class="form-input">
                <option value="all-time">All Time</option>
                <option value="recent">Recent (7 days)</option>
                <option value="this-month">This Month</option>
                <option value="last-3-months">Last 3 Months</option>
                <option value="this-year">This Year</option>
              </select>
            </div>
          </div>
        </div>
      </section>

      <div class="shown-report">
        <p>Showing 0 reports:</p>
      </div>

      <section class="tracker-card">
        <div class="report-card">
          <div class="ai-summary">
            <h4><span><i class="fas fa-circle-exclamation"></i></span> AI Summary</h4>
            <p>[AI summary description here]</p>
          </div>
          <div class="report-card__header">
            <div class="report-card__title">
              <span><i class="fas fa-note-sticky"></i></span>
              <span>[REPORT ID HERE]</span>
            </div>
            <div class="report-card__meta">
              <button class="upvotes"><i class="fas fa-thumbs-up"></i> 67</button>
              <span class="status-pill status-in-review">[Status]</span>
            </div>
          </div>
          <p class="report-description">[No Description Yet]</p>
          <div class="report-card__grid">
            <div class="report-detail">
              <h4><i class="fas fa-tag"></i> Category</h4>
              <p>[Category]</p>
            </div>
            <div class="report-detail">
              <h4><i class="fas fa-map-marker-alt"></i> Barangay</h4>
              <p>[Barangay]</p>
            </div>
            <div class="report-detail">
              <h4><i class="fas fa-calendar-alt"></i> Date Submitted</h4>
              <p>[Month - Date, Year]</p>
            </div>
          </div>
        </div>
      </section>

    </div>{{-- end .main-content --}}

  </div>{{-- end .right-panel --}}
@endsection



@push('script')
<script src="{{ asset('js/sidebar.js') }}"></script>
@endpush