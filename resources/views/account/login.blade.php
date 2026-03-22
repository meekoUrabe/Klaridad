@extends('template.layout')

@section('head')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
<link href="{{ asset('css/auth/login.css') }}" rel="stylesheet"/>
<title>Klaridad | Log-in</title>
<style>
  body { flex-direction: column !important; align-items: center; background: #f8f9fa; }
  header { width: 100%; justify-content: center; align-items: center; }
  main { width: 100%; align-items: center; }
</style>
@endsection

@section('header')
<div class="header">
  <h1>Klaridad</h1>
  <p>Zamboanga City Citizen Governance Platform</p>
</div>
@endsection

@section('main')
<form class="login-box" action="{{ route('account.post_login') }}" method="POST">
  @csrf
  <h1>Login to Your Account</h1>
  <div class="main-loginbox">
    <label for="phone_number">Phone Number</label>
    <input type="tel" id="phone_number" name="phone_number" placeholder="☎ 09XX XXX XXXX" maxlength="11" required>
    <p>Enter your 11-digit Philippine mobile number</p>

    <label for="password">Login Password</label>
    <input type="password" placeholder="Login Password" id="password" name="password" required>
  </div>

  <div class="form-footer">
    <button type="submit" class="btn-auth">Login with Phone Number</button>
    <p>Don't have an account? <a href="{{ route('account.signup') }}">Sign up here</a></p>
    <p>By logging in, you agree to use this platform for community governance and transparency.</p>
  </div>
</form>

<!-- TEMPORARY: Quick Access Dashboards (Remove Later) -->
<div style="margin-top: 30px; padding: 20px; background: #fff3cd; border-radius: 8px; border-left: 4px solid #ffc107; max-width: 400px;">
  <p style="margin: 0 0 12px 0; font-weight: 600; color: #856404;">⚡ Temporary Debug Links</p>
  <div style="display: flex; flex-direction: column; gap: 8px;">
    <a href="{{ route('citizen.dashboard') }}" style="padding: 10px 12px; background: #007bff; color: white; text-decoration: none; border-radius: 4px; text-align: center; font-size: 14px;">👤 Citizen Dashboard</a>
    <a href="{{ route('barangay.dashboard') }}" style="padding: 10px 12px; background: #28a745; color: white; text-decoration: none; border-radius: 4px; text-align: center; font-size: 14px;">🏢 Barangay Dashboard</a>
    <a href="{{ route('goverment.dashboard') }}" style="padding: 10px 12px; background: #6f42c1; color: white; text-decoration: none; border-radius: 4px; text-align: center; font-size: 14px;">🏛️ Government Dashboard</a>
  </div>
</div>
<!-- END TEMPORARY -->
@endsection
