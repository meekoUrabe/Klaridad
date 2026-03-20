
<div class="overlay" id="overlay" onclick="closeSidebar()"></div>
<aside class="sidebar" id="sidebar">

  <button class="close-btn" onclick="closeSidebar()">✕</button>

  <div class="sidebar-top">
    <div class="brand">
      <h1>Klaridad</h1>
      <p>Zamboanga City</p>
    </div>

    <hr class="divider" style="margin-top: 16px;" />
    <x-nav></x-nav>
    <!-- Nav Menu -->
    {{-- <nav>
      <ul class="nav-menu">
        <li>
          <a href="/project-feed" class="active">
            <span class="icon"></span>
            Project Feed
          </a>
        </li>
        <li>
          <a href="/submit-report">
            <span class="icon"></span>
            Submit Report
          </a>
        </li>
        <li>
          <a href="/track-reports">
            <span class="icon"></span>
            Track Reports
          </a>
        </li>
      </ul>
    </nav> --}}

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

<div class="right-panel">

  <nav class="navbar">
    <button class="burger-btn" id="burgerBtn" onclick="toggleSidebar()">☰</button>
    <span class="nav-brand">Zamboanga City Governance Platform</span>
    <a href="">
      <div class="nav-profile">
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/>
        </svg>
        <span class="profile-text">Profile</span>
      </div>
    </a>
  </nav>

  <main class="main-content">
    <h1 style="color:#374151; font-size:24px;">TITE</h1>
    <p style="color:#6b7280; margin-top:8px;">1231231231231231231231231231231231231231231223123123123</p>
  </main>

  <footer class="footer">
    <span>© 2024 Klaridad — Zamboanga City Governance Platform. All rights reserved.</span>
  </footer>

</div>

<script>
  
</script>

</body>
</html>