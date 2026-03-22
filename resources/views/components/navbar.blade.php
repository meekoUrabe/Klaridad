<nav class="navbar">
  <span class="nav-brand">Zamboanga City Governance Platform</span>
  <a href="{{ $profileRoute ?? route('citizen.profile') }}">
    <div class="nav-profile">
      <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/>
      </svg>
      <span class="profile-text">Profile</span>
    </div>
  </a>
</nav>
