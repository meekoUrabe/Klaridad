@extends('template.layout')

@section('head')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
<link rel="stylesheet" href="{{ asset('css/components/sidebar.css') }}">
<link rel="stylesheet" href="{{ asset('css/citizen/dashboard.css') }}">
<title>Klaridad | Main Page</title>
@endsection

@section('header')
  @include('components.sidebar')
@endsection

@section('main')
  <div class="right-panel">

    <nav class="navbar">
      <button class="burger-btn" id="burgerBtn" onclick="toggleSidebar()">☰</button>
      <span class="nav-brand">Zamboanga City Governance Platform</span>
      <a href=" {{ route('citizen.profile') }} ">
        <div class="nav-profile">
          <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/>
          </svg>
          <span class="profile-text">Profile</span>
        </div>
      </a>
    </nav>

    <div class="main-content">

      <section class="header1">
        <h1>Project Feed</h1>
        <p>View barangay government projects in your area</p>
      </section>

      <section class="Filter">
        <h3>Filter Projects</h3>
        <div class="Main-Filter">
          <div class="FilterSelection">
            <h4>Barangay</h4>
            <select id="barangay" name="barangay">
                <option value="">All Barangay</option>
                @foreach ($barangay as $b)
                    <option value="{{ $b->barangay_id }}" {{ (request()->query('barangay') == $b->barangay_id) ? 'selected' : ''; }}>{{ $b->name }}</option>
                @endforeach
            </select>
          </div>

          <div class="FilterSelection">
            <h4>Status</h4>
            <select id="status" name="status">
                <option value="">All Status</option>
                @foreach ($project_status as $status)
                    <option value="{{ $status->project_s_id }}" {{ (request()->query('status') == $status->project_s_id) ? 'selected' : ''; }}>{{ $status->status }}</option>
                @endforeach
            </select>
          </div>
        </div>
      </section>

      <h2>Showing {{ $projects->count() }} Projects</h2>

      <section class="Projects">
        @foreach ($projects as $p)
            <div class="ProjectTabs">
              <div class="Tabs">
                <img src="{{ Storage::disk('project')->url('project/' . $p->picture_path) }}">
                <div class="Title">
                  <h3>{{ $p->name }}</h3>
                  <h4 id="ongoing">{{ $p->status }}</h4>
                </div>
                <p>{{ $p->barangay_name }}</p>
                <p>₱{{ $p->budget }}</p>
              </div>
            </div>
        @endforeach
      </section>

    </div>{{-- end .main-content --}}

  </div>{{-- end .right-panel --}}
@endsection



@push('script')
<script src="{{ asset('js/sidebar.js') }}"></script>
<script>
let barangay_element = document.getElementById('barangay');
let status_element = document.getElementById('status');

barangay_element.addEventListener('change', function () { reQuery('barangay', barangay_element); });
status_element.addEventListener('change', function () { reQuery('status', status_element); });

function reQuery(query, element) {
    const url = new URL(window.location);
    url.searchParams.set(query, element.value);
    window.location.href = url.toString();
}
</script>
@endpush
