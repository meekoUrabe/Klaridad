@extends('template.layout')


@section('head')
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/components/sidebar.css') }}">
  <link rel="stylesheet" href="{{ asset('css/citizen/profile.css') }}">
  <title>My Profile - Zamboanga City Governance Platform</title>
@endsection

@section('header')
  @include('components.sidebar')
@endsection

@section('main')

  <div class="right-panel">

    <nav class="navbar">
      <button class="burger-btn" id="burgerBtn" onclick="toggleSidebar()">☰</button>
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

  <div class="container">

    <div class="page-title">
      <h1>My Profile</h1>
      <p>Manage your personal information and account settings</p>
    </div>


    <div class="profile-card">
      <div class="left">
        <div class="avatar">
          <svg width="40" height="40" fill="none" stroke="#2563eb" stroke-width="2"
            viewBox="0 0 24 24"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/></svg>
        </div>
        <div class="profile-info">
          <h2>{{ auth()->user()->last_name . ', ' . auth()->user()->first_name }}</h2>
          <div class="badges">
            <span class="badge">🛡 {{ auth()->user()->userRole->role }}</span>
            <span class="badge">📍 Tetuan</span>
          </div>
          <p class="member-since">📅 Member since January 15, 2024</p>
        </div>
      </div>
      <button class="edit-btn">✏️ Edit Profile</button>
    </div>

    <div class="form-section">

      <div class="form-group">
        <label>Full Name</label>
        <input type="text" placeholder="{{ auth()->user()->last_name . ', ' . auth()->user()->first_name }}" disabled />
      </div>

      <div class="form-group">
        <label>Phone Number</label>
        <input type="tel" placeholder="{{ auth()->user()->phone_number }}" disabled />
        <p class="hint">Format: 09XX XXX XXXX</p>
      </div>

      <div class="form-group">
        <label>Barangay</label>
        <div class="static-value">Tetuan</div>
      </div>

      <div class="form-group">
        <label>Address</label>
        <input type="text" placeholder="Enter your address" disabled />
      </div>

      <div class="action-buttons">
        <button class="save-btn">✓ Save Changes</button>
        <button class="cancel-btn">✕ Cancel</button>
      </div>
    </div>

    <div class="form-section">
      <h3>Account Information</h3>
      <div class="account-info-grid">
        <div class="account-info-item">
          <label>Account Type</label>
          <div class="value">Citizen</div>
        </div>
        <div class="account-info-item">
          <label>Member Since</label>
          <div class="value">January 15, 2024</div>
        </div>
        <div class="account-info-item">
          <label>Account Status</label>
          <div class="value active">Active</div>
        </div>
        <div class="account-info-item">
          <label>Verification Status</label>
          <div class="value verified">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M8 12l3 3 5-5"/></svg>
            Verified
          </div>
        </div>
      </div>
    </div>
  </div>
  <button class="help-btn">?</button>

    </div>{{-- end .main-content --}}

  </div>{{-- end .right-panel --}}
@endsection

@push('script')
  <script src="{{ asset('js/sidebar.js') }}"></script>
  <script src="{{ asset('js/citizen/profile.js') }}"></script>
@endpush
