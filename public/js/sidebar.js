function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');
    sidebar.classList.toggle('open');
    overlay.classList.toggle('open');
  }

  function closeSidebar() {
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');
    sidebar.classList.remove('open');
    overlay.classList.remove('open');
  }

  function toggleDropdown() {
    const dropdown = document.getElementById('roleDropdown');
    const selected = document.getElementById('roleSelected');
    dropdown.classList.toggle('open');
    selected.classList.toggle('open');
  }

  // Close sidebar when clicking nav menu items on mobile
  document.querySelectorAll('.nav-menu li a').forEach(link => {
    link.addEventListener('click', function () {
      if (window.innerWidth <= 768) {
        closeSidebar();
      }
    });
  });

  // Handle role option clicks
  document.querySelectorAll('.role-option').forEach(option => {
    option.addEventListener('click', function () {
      const role = this.dataset.role;

      // Update label
      document.getElementById('roleLabel').textContent = role;

      // Update selected styling
      document.querySelectorAll('.role-option').forEach(opt => {
        opt.classList.remove('selected');
        opt.innerHTML = opt.dataset.role;
      });
      this.classList.add('selected');
      this.innerHTML = `${role} <span class="checkmark">✓</span>`;

      // Close dropdown
      document.getElementById('roleDropdown').classList.remove('open');
      document.getElementById('roleSelected').classList.remove('open');
    });
  });

  // Close dropdown when clicking outside
  document.addEventListener('click', function (e) {
    const wrapper = document.querySelector('.role-switcher-wrapper');
    if (!wrapper.contains(e.target)) {
      document.getElementById('roleDropdown').classList.remove('open');
      document.getElementById('roleSelected').classList.remove('open');
    }
});