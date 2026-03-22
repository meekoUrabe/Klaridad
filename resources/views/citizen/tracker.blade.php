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
  @include('components.sidebar')
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
            <input type="text" class="searchbar-input" id="reportid" name="reportid" placeholder="Enter your report ID (e.g., R20260315001)" value="{{ request()->query('id') }}" required>
            </div>
            <div class="sidebar-bottom">
                <button id="search_report" class='logout-btn'>
                  Search
                </button>
            </div>
        </div>

        <div class="tracker-card__section">
          <h3>Filter Reports</h3>
          <div class="filter-grid">
            <div class="filter-item">
              <label for="category">Category</label>
              <select id="category" class="form-input" name="category">
                <option value="">All Categories</option>
                @foreach ($report_category as $category)
                    <option value="{{ $category->report_c_id }}" {{ (request()->query('category') == $category->category_id) ? 'selected' : ''; }}>{{ $category->category }}</option>
                @endforeach
              </select>
            </div>

            <div class="filter-item">
              <label for="barangay">Barangay</label>
              <select class="form-input" id="barangay" name="id">
                <option value="">All Barangays</option>
                @foreach ($barangay as $b)
                    <option value="{{ $b->barangay_id }}" {{ (request()->query('barangay') == $b->barangay_id) ? 'selected' : ''; }}>{{ $b->name }}</option>
                @endforeach
              </select>
            </div>

            <div class="filter-item">
              <label for="status">Status</label>
              <select id="status" class="form-input" name='status'>
                <option value=" ">All Status</option>
                @foreach ($report_status as $status)
                    <option value="{{ $status->report_s_id }}" {{ (request()->query('status') == $status->report_s_id) ? 'selected' : ''; }}>{{ $status->status }}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>
      </section>

      <div class="shown-report">
        <p>Showing 0 reports:</p>
      </div>

      @foreach ($report as $r)
      <section class="tracker-card">
        <div class="report-card">
          <div class="ai-summary">
            <h4><span><i class="fas fa-circle-exclamation"></i></span> AI Summary</h4>
            <p>[AI summary description here]</p>
          </div>
          <div class="report-card__header">
            <div class="report-card__title">
              <span><i class="fas fa-note-sticky"></i></span>
              <span>{{ '#' . $r->report_id }}</span>
            </div>
            <div class="report-card__meta">
              <button class="upvotes"><i class="fas fa-thumbs-up"></i>{{ $r->likes }} </button>
              <span class="status-pill status-in-review">{{ $r->status }}</span>
            </div>
          </div>
          <p class="report-description">{{ $r->description }}</p>
          <div class="report-card__grid">
            <div class="report-detail">
              <h4><i class="fas fa-tag"></i> Category</h4>
              <p>{{ $r->category }}</p>
            </div>
            <div class="report-detail">
              <h4><i class="fas fa-map-marker-alt"></i> Barangay</h4>
              <p>{{ $r->barangay }}</p>
            </div>
            <div class="report-detail">
              <h4><i class="fas fa-calendar-alt"></i> Date Submitted</h4>
              <p>{{ $r->date_created }}</p>
            </div>
          </div>
        </div>

      </section>
              @endforeach
    </div>{{-- end .main-content --}}

  </div>{{-- end .right-panel --}}
@endsection

@push('script')
<script src="{{ asset('js/sidebar.js') }}"></script>
<script>
let report_element = document.getElementById('reportid');
let barangay_element = document.getElementById('barangay');
let category_element = document.getElementById('category');
let status_element = document.getElementById('status');

document.getElementById('search_report').addEventListener('click', function () { reQuery('id', report_element); });

barangay_element.addEventListener('change', function () { reQuery('barangay', barangay_element); });
category_element.addEventListener('change', function () { reQuery('category', category_element); });
status_element.addEventListener('change', function () { reQuery('status', status_element); });

function reQuery(query, element) {
    const url = new URL(window.location);
    url.searchParams.set(query, element.value);
    window.location.href = url.toString();
}

</script>
@endpush
