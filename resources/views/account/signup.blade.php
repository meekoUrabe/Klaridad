@extends('template.layout')

@section('head')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Klaridad | Sign Up</title>
<link rel="stylesheet" href="{{ asset('css/auth/signup.css') }}"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
<style>
  body { flex-direction: column !important; align-items: center; background: #f8f9fa; }
  header { width: 100%; justify-content: center; align-items: center; }
  main { width: 100%; align-items: center; }
</style>
@endsection

@section('header')
<div class="signup-header">
  <h1>Klaridad</h1>
  <p>Zamboanga City Citizen Governance Platform</p>
</div>
@endsection

@section('main')
<div class="form-container">
  <form action="{{ route('account.post_signup') }}" method="POST">
    @csrf
    <div class="form-header">
      <h2>Create Your Account</h2>
    </div>
    <div class="form-body">
      <div class="form-group">
        <label for="last_name">Last Name</label>
        <input type="text" class="form-input" id="last_name" name="last_name" placeholder="Surname" required>
        <label for="first_name">First Name</label>
        <input type="text" class="form-input" id="first_name" name="first_name" placeholder="Given Name" required>
      </div>
      <div class="form-group">
        <label for="phoneNumber">Phone Number</label>
        <div class="input-with-icon">
          <i class="fas fa-phone"></i>
          <input type="tel" class="form-input" id="phoneNumber" name="phone_number" placeholder="09XX XXX XXXX" maxlength="11" required>
        </div>
        <p class="helper-text">Enter your 11-digit Philippine mobile number</p>
      </div>
      <div class="form-group">
        <label for="barangay">City</label>
        <div class="input-with-icon">
          <i class="fas fa-location-dot"></i>
          <select class="form-input" id="city_id" name="city_id" required>
            <option value="">Select City</option>
            @foreach ($city as $c)
              <option value="{{ $c->city_id }}" {{ (request()->query('city') == $c->city_id) ? 'selected' : ''; }}>{{ $c->name }}</option>
            @endforeach
          </select>
        </div>
        <p class="helper-text">Select the city where you reside</p>
      </div>
      <div class="form-group">
        <label for="barangay">Barangay</label>
        <div class="input-with-icon">
          <i class="fas fa-location-dot"></i>
          <select class="form-input" id="barangay" name="barangay_id" required>
            <option value="">Select Barangay</option>
            @foreach ($barangay as $b)
              <option value="{{ $b->barangay_id }}">{{ $b->name }}</option>
            @endforeach
          </select>
        </div>
        <p class="helper-text">Select the barangay where you reside</p>
      </div>
      <div class="form-group">
        <label for="createPass">Create Password</label>
        <input type="password" class="form-input" id="createPass" name="password" placeholder="Create Password" required>
        <label for="confirmPass">Confirm Password</label>
        <input type="password" class="form-input" id="confirmPass" name="confirm_password" placeholder="Confirm Password" required>
      </div>
    </div>
    <div class="form-footer">
      <div id="response">
        {{ session('success') }}
        {{ session('error') }}
      </div>
      <button type="submit" class="btn-primary">Sign Up</button>
      <p>Already have an account? <a href="{{ route('account.login') }}">Login here</a></p>
      <p>By signing up, you agree to use this platform for community governance and transparency.</p>
    </div>
  </form>
</div>
@endsection

@push('script')
<script>
    let city_id = document.getElementById('city_id');

    city_id.addEventListener('change', function () { reQuery('city', city_id); });

    function reQuery(query, element) {
        const url = new URL(window.location);
        url.searchParams.set(query, element.value);
        window.location.href = url.toString();
    }
</script>
@endpush()
