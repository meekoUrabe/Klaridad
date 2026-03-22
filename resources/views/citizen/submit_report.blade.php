@extends('template.layout')

@section('head')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
<link rel="stylesheet" href="{{ asset('css/components/sidebar.css') }}">
<link rel="stylesheet" href="{{ asset('css/citizen/report.css') }}">
<title>Klaridad | Submit Report</title>
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
            <a href="{{ route('citizen.submit_report') }}" class="active">
              <span class="icon"></span>
              Submit Report
            </a>
          </li>
          <li>
            <a href="{{ route('citizen.tracker') }}">
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

      <section class="submit-report-header">
        <h2>Submit a Report</h2>
        <p>Report a community problem or concern to your barangay government</p>
      </section>

      <section class="form-container">
        <form action="#" method="post" enctype="multipart/form-data">
          @csrf

          <div class="report-card">
            <div class="anonymous">
              <h4>
                <input type="checkbox">
                <span><i class="fas fa-user-check"></i></span>
                Report Anonymously
              </h4>
              <p>Your identity will be protected. Name field will be hidden if checked.</p>
            </div>
          </div>

          <div class="main-form">

            <div class="form-group">
              <label for="barangay">Barangay</label>
              <div class="input-with-icon">
                <i class="fas fa-location-dot"></i>
                <select class="form-input" id="barangay" name="barangay_id" required>
                  <option value="">Select Barangay</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label for="category">Category</label>
              <div class="input-with-icon">
                <i class="fas fa-tags"></i>
                <select id="category" class="form-input" name="category" required>
                  <option value="">Select Category</option>
                  <option value="infrastructure">Infrastructure</option>
                  <option value="sanitation">Sanitation</option>
                  <option value="safety">Public Safety</option>
                  <option value="health">Health</option>
                  <option value="other">Other</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label for="description">Description</label>
              <textarea id="description" cols="5" rows="6" class="form-input" name="description" placeholder="Describe the problem or concern in detail..."></textarea>
            </div>

            <div class="form-group">
              <label for="location">Location</label>
              <input type="text" class="form-input" id="location" name="location" placeholder="Specific Location (e.g., Corner of Main St. and 2nd Ave.)">
            </div>

            <div class="form-group">
              <label class="upload" for="photo">Photo Upload (optional)</label>
              <div class="upload-box">
                <span><i class="fas fa-upload"></i></span>
                <input type="file" class="form-input" id="photo" name="photo" accept="image/*">
                <p>Upload a photo of the issue (if available)</p>
              </div>
            </div>

            <div class="form-footer">
              <button type="submit" class="btn-primary">Submit Report</button>
            </div>

          </div>

        </form>
      </section>

    </div>{{-- end .main-content --}}

  </div>{{-- end .right-panel --}}
@endsection

@push('script')
<script src="{{ asset('js/sidebar.js') }}"></script>
@endpush