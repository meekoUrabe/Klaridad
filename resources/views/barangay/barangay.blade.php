@extends('template.layout')

@section('head')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
<link rel="stylesheet" href="{{ asset('css/components/sidebar.css') }}">
<link rel="stylesheet" href="{{ asset('css/barangay/barangay.css') }}">
<title>Klaridad | Barangay Dashboard</title>
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
                        <a href="{{ url()->current() }}" class="active">
                            <span class="icon"></span>
                            Barangay Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('citizen.dashboard') }}">
                            <span class="icon"></span>
                            Project Feed
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
            <div class="role-switcher-wrapper">
                <div class="role-dropdown" id="roleDropdown">
                    <div class="role-option" data-role="Citizen">
                        Citizen
                    </div>
                    <div class="role-option selected" data-role="Barangay Official">
                        Barangay Official <span class="checkmark">✓</span>
                    </div>
                    <div class="role-option" data-role="City Government">
                        City Government
                    </div>
                </div>

                <div class="role-selected" id="roleSelected" onclick="toggleDropdown()">
                    <span id="roleLabel">Barangay Official</span>
                    <span class="arrow">▾</span>
                </div>
            </div>

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

<header class = "header1">
    <h1>Barangay Dashboard - Tetuan</h1>
    <p>Manage community reports and post new projects for your barangay</p>
</header>

<section class="PostProjects">
    <div class="ContainerPosProj">
        <h1>Post New Project</h1>
        <button onclick="toggleForm()">+ Add Project</button>
    </div>
    
    <div id="formBox" class="hidden">
        <form id="Formain">
            <div id="tabs">
                <label>Project Name</label>
                <input type="text" placeholder="Enter Project Name">
            </div>
            
            <div id="tabs">
                <label>Budget (PHP)</label>
                <input type="number" placeholder="0.00">
            </div>
            
            <div id="tabs">
                <label>Status</label>
                <select>
                    <option>Ongoing</option>
                    <option>Completed</option>
                    <option>Discontinued</option>
                    <option>Overdue</option>
                </select>
            </div>
            
            <div id="tabs">
                <label>Photo Upload</label>
                <input type="file">
            </div>
            
            <div id="Desc">
                <p>Description</p>
                <textarea placeholder="Description"></textarea>
            </div>
            
        </form>
        <button type="submit">Submit Project</button>
    </div>

  </div>{{-- end .main-content --}}
</div>{{-- end .right-panel --}}
@endsection

@push('script')
<script src="{{ asset('js/sidebar.js') }}"></script>
<script src="{{ asset('js/barangay/barangay.js') }}"></script>
@endpush
    
