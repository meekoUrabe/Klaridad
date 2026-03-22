@extends('template.layout')

@section('head')    
<title>Klaridad – Governance Transparency Platform</title>
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('css/home.css') }}" />
@endsection


@section('main')
  
<nav>
  <div class="nav-inner">
    <a href="#" class="logo">
      <div class="logo-icon">
        <img src="{{ asset('images/logo.png') }}" alt="Klaridad Logo">
      </div>
      <div class="logo-text">
        <h1>Klaridad</h1>
        <p>Governance Transparency Platform</p>
      </div>
    </a>
    <div class="nav-btns">
      <a href="{{ route('account.login') }}"><button class="btn btn-outline">Sign In</button></a>
      <a href="{{ route('account.signup') }}"><button class="btn btn-primary">Get Started</button></a>
    </div>
  </div>
</nav>

<section class="hero">
  <div class="hero-bg"></div>
  <div class="hero-inner">
    <div class="fade-up">
      <div class="hero-badge">
        <svg width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
        Zamboanga City, Philippines
      </div>
      <h1>Transparency in Governance, Powered by Citizens</h1>
      <p>Track government projects, report community issues, and hold your barangay accountable—all in one platform.</p>
      <div class="hero-btns">
        <a href="{{route('account.signup')}}">
          <button class="btn btn-white btn-lg">
            Get Started
            <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
          </button>
        </a>
      </div>
      <div class="hero-stats">
        <div>
          <div class="hero-stat-num">12,547</div>
          <div class="hero-stat-label">Active Citizens</div>
        </div>
        <div>
          <div class="hero-stat-num">324</div>
          <div class="hero-stat-label">Projects Tracked</div>
        </div>
        <div>
          <div class="hero-stat-num">24</div>
          <div class="hero-stat-label">Barangays</div>
        </div>
      </div>
    </div>
    <div class="hero-img fade-up delay-2">
      <img src="{{ asset('images/651906750_2392787584502522_566011144086514244_n.jpg') }}" alt="Zamboanga City Community" />
    </div>
  </div>
</section>

<section class="features-bg">
  <div class="section-inner">
    <div class="text-center mb-16">
      <h2 class="section-title">Why Choose Klaridad?</h2>
      <p class="section-sub">Empowering citizens and officials with tools for transparent, accountable governance</p>
    </div>
    <div class="cards-grid">
      <div class="card">
        <div class="card-icon" style="background:#dbeafe;">
          <svg fill="none" viewBox="0 0 24 24" stroke="#2563eb" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
        </div>
        <h3>Full Transparency</h3>
        <p>Track every government project in your barangay—budgets, timelines, and status updates in real-time.</p>
      </div>
      <div class="card">
        <div class="card-icon" style="background:#dcfce7;">
          <svg fill="none" viewBox="0 0 24 24" stroke="#16a34a" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
        </div>
        <h3>Report Issues</h3>
        <p>Submit reports about infrastructure, corruption, safety, and more. Track their resolution status.</p>
      </div>
      <div class="card">
        <div class="card-icon" style="background:#f3e8ff;">
          <svg fill="none" viewBox="0 0 24 24" stroke="#9333ea" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
        </div>
        <h3>Community Voice</h3>
        <p>Upvote important issues to prioritize community concerns and amplify citizen voices.</p>
      </div>
      <div class="card">
        <div class="card-icon" style="background:#ffedd5;">
          <svg fill="none" viewBox="0 0 24 24" stroke="#ea580c" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
        </div>
        <h3>Data-Driven Insights</h3>
        <p>AI-powered analytics identify trends and common issues across all barangays.</p>
      </div>
      <div class="card">
        <div class="card-icon" style="background:#fef9c3;">
          <svg fill="none" viewBox="0 0 24 24" stroke="#ca8a04" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
        </div>
        <h3>Mobile Friendly</h3>
        <p>Accessible on any device—desktop, tablet, or smartphone. Report issues on the go.</p>
      </div>
      <div class="card">
        <div class="card-icon" style="background:#fee2e2;">
          <svg fill="none" viewBox="0 0 24 24" stroke="#dc2626" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
        </div>
        <h3>Secure &amp; Private</h3>
        <p>Your data is protected with industry-standard security. Anonymous reporting available.</p>
      </div>
    </div>
  </div>
</section>

<section style="background:#fff;">
  <div class="section-inner">
    <div class="text-center mb-16">
      <h2 class="section-title">How Klaridad Works</h2>
      <p class="section-sub">Simple, transparent, and effective governance in three easy steps</p>
    </div>
    <div class="steps-grid">
      <div class="step">
        <div class="step-num">1</div>
        <img src="{{ asset('images/create_your_account.png') }}" alt="Create Account" class="step-img" />
        <h3>Create Your Account</h3>
        <p>Sign up and Choose your barangay to get started.</p>
      </div>
      <div class="step">
        <div class="step-num">2</div>
        <img src="{{ asset('images/engage_with_content.png') }}" alt="Engage with Content" class="step-img" />
        <h3>Engage with Content</h3>
        <p>View projects, submit reports, upvote issues, and track progress. Your voice matters in your community.</p>
      </div>
      <div class="step">
        <div class="step-num">3</div>
        <img src="{{ asset('images/see_real_results.png') }}" alt="See Results" class="step-img" />
        <h3>See Real Results</h3>
        <p>Watch as your reports get addressed, projects move forward, and your community becomes more transparent.</p>
      </div>
    </div>
  </div>
</section>

<div class="stats-bar">
  <div class="section-inner">
    <div class="stats-grid">
      <div>
        <div class="stat-icon">
          <svg fill="none" viewBox="0 0 24 24" stroke="rgba(255,255,255,.7)" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
        </div>
        <div class="stat-num">324</div>
        <div class="stat-label">Active Projects</div>
      </div>
      <div>
        <div class="stat-icon">
          <svg fill="none" viewBox="0 0 24 24" stroke="rgba(255,255,255,.7)" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
        </div>
        <div class="stat-num">12,547</div>
        <div class="stat-label">Registered Citizens</div>
      </div>
      <div>
        <div class="stat-icon">
          <svg fill="none" viewBox="0 0 24 24" stroke="rgba(255,255,255,.7)" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
        </div>
        <div class="stat-num">1,892</div>
        <div class="stat-label">Reports Submitted</div>
      </div>
      <div>
        <div class="stat-icon">
          <svg fill="none" viewBox="0 0 24 24" stroke="rgba(255,255,255,.7)" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
        </div>
        <div class="stat-num">98</div>
        <div class="stat-label">Barangays Connected</div>
      </div>
    </div>
  </div>
</div>

<section class="cta-section">
  <div class="section-inner">
    <h2>Ready to Make Your Voice Heard?</h2>
    <p>Join thousands of citizens in Zamboanga City working together for transparent, accountable governance.</p>
    <div class="cta-btns">
      <a href="{{route('account.signup')}}">
        <button class="btn btn-white btn-xl">
            Get Started
            <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
        </button>
      </a>
    </div>
  </div>
</section>
@endsection

@section('footer')
  <div class="section-inner">
    <div class="footer-grid">
      <div>
        <div class="footer-brand">
          <div class="footer-brand-icon">
            <img src="{{ asset('images/logo.png') }}" alt="Klaridad Logo">
          </div>
          <span class="footer-brand-name">Klaridad</span>
        </div>
        <p>Empowering transparent governance in Zamboanga City, Philippines.</p>
      </div>

      <div class="footer-col">
        <h4>Resources</h4>
        <ul>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms of Service</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Contact</h4>
        <ul class="footer-contact">
          <li>
            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            Zamboanga City
          </li>
          <li>
            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
            <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="45363035352a3731052e2924372c2124216b352d">[email&#160;protected]</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; {{ date('Y') }} Klaridad - TabiDev Studios</p>
    </div>
  </div>
@endsection

@push('script')
  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
  <script src="{{ asset('js/landing.js') }}"></script>
@endpush

 