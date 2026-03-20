@extends('template.layout')


@section('head')
  <title>My Profile - Zamboanga City Governance Platform</title>
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body { font-family: Arial, sans-serif; background: #f3f4f6; color: #333; }

    .container { max-width: 780px; margin: 40px auto; padding: 0 20px; }

    .page-title h1 { font-size: 28px; font-weight: bold; }
    .page-title p { color: #6b7280; margin-top: 4px; }

    .profile-card {
      background: #2563eb;
      border-radius: 12px;
      padding: 30px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-top: 24px;
      color: white;
    }
    .profile-card .left { display: flex; align-items: center; gap: 20px; }
    .avatar {
      width: 80px; height: 80px;
      background: white;
      border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
    }
    .avatar svg { color: #2563eb; }
    .profile-info h2 { font-size: 24px; font-weight: bold; }
    .badges { display: flex; gap: 8px; margin-top: 8px; }
    .badge {
      background: rgba(255,255,255,0.2);
      border: 1px solid rgba(255,255,255,0.4);
      border-radius: 20px;
      padding: 4px 12px;
      font-size: 13px;
      display: flex; align-items: center; gap: 4px;
    }
    .member-since { font-size: 13px; margin-top: 8px; opacity: 0.9; }
    .edit-btn {
      background: white;
      color: #2563eb;
      border: none;
      border-radius: 8px;
      padding: 10px 20px;
      font-weight: bold;
      cursor: pointer;
      display: flex; align-items: center; gap: 6px;
    }

    .form-section {
      background: white;
      border-radius: 12px;
      padding: 30px;
      margin-top: 24px;
      display: flex;
      flex-direction: column;
      gap: 24px;
    }
    .form-group label {
      display: block;
      font-weight: 600;
      margin-bottom: 8px;
    }
    .form-group input,
    .form-group select {
      width: 100%;
      padding: 12px 16px;
      border: 1px solid #e5e7eb;
      border-radius: 8px;
      font-size: 15px;
      color: #6b7280;
      background: #f9fafb;
    }
    .form-group .hint {
      font-size: 12px;
      color: #9ca3af;
      margin-top: 4px;
    }

    .help-btn {
      position: fixed;
      bottom: 24px; right: 24px;
      background: #2563eb;
      color: white;
      border: none;
      border-radius: 50%;
      width: 44px; height: 44px;
      font-size: 20px;
      cursor: pointer;
    }
  </style>
    
@endsection

@section('main')
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
          <h2>Juan Dela Cruz</h2>
          <div class="badges">
            <span class="badge">🛡 Citizen</span>
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
        <input type="text" placeholder="Juan Dela Cruz" disabled />
      </div>

      <div class="form-group">
        <label>Email Address</label>
        <input type="email" placeholder="juan.delacruz@email.com" disabled />
      </div>

      <div class="form-group">
        <label>Phone Number</label>
        <input type="tel" placeholder="09123456789" disabled />
        <p class="hint">Format: 09XX XXX XXXX</p>
      </div>

      <div class="form-group">
        <label>Barangay</label>
        <select disabled>
          <option>Tetuan</option>
          <option>Canelar</option>
          <option>Talon-Talon</option>
        </select>
      </div>

      <div class="form-group">
        <label>Address</label>
        <input type="text" placeholder="Enter your address" disabled />
      </div>

    </div>
  </div>
  <button class="help-btn">?</button>

  <script>
    // Get the edit button and all form inputs
    const editBtn = document.querySelector('.edit-btn');
    const formInputs = document.querySelectorAll('.form-section input, .form-section select');
    let isEditMode = false;

    // Add click listener to edit button
    editBtn.addEventListener('click', function() {
      isEditMode = !isEditMode;
      
      // Toggle disabled state for all inputs
      formInputs.forEach(input => {
        input.disabled = !isEditMode;
      });

      // Update button text and appearance
      if (isEditMode) {
        editBtn.textContent = '✓ Save Changes';
        editBtn.style.background = '#10b981';
      } else {
        editBtn.textContent = '✏️ Edit Profile';
        editBtn.style.background = 'white';
        editBtn.style.color = '#2563eb';
      }
    });
  </script>

@endsection