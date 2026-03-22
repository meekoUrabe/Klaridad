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
          <a href="{{ route('citizen.dashboard') }}" @if(request()->routeIs('citizen.dashboard')) class="active" @endif>
            <span class="icon"></span>
            Project Feed
          </a>
        </li>
        <li>
          <a href="{{ route('citizen.submit_report') }}" @if(request()->routeIs('citizen.submit_report')) class="active" @endif>
            <span class="icon"></span>
            Submit Report
          </a>
        </li>
        <li>
          <a href="{{ route('citizen.tracker') }}" @if(request()->routeIs('citizen.tracker')) class="active" @endif>
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
        <div class="role-option selected" data-role="Citizen">
          Citizen <span class="checkmark">✓</span>
        </div>
        <div class="role-option" data-role="Barangay Official">
          Barangay Official
        </div>
        <div class="role-option" data-role="City Government">
          City Government
        </div>
      </div>

      <div class="role-selected" id="roleSelected" onclick="toggleDropdown()">
        <span id="roleLabel">Citizen</span>
        <span class="arrow">▾</span>
      </div>
    </div>

    <button class="logout-btn">
      ↪ Logout
    </button>
  </div>

</aside>