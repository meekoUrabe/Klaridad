<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/components/variables.css') }}">
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
  @yield('head')
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    html, body { min-height: 100%; }
    body { min-height: 100vh; display: flex; flex-direction: row; font-family: 'Inter', sans-serif; overflow-x: hidden; overflow-y: auto; }
    header { display: flex; flex-shrink: 0; }
    main { display: flex; flex-direction: column; flex: 1; }
    .app-footer {
      flex-shrink: 0;
      text-align: center;
      padding: 12px 16px;
      border-top: 1px solid #e5e7eb;
      background: #ffffff;
      color: #6b7280;
      font-size: 13px;
    }
    .app-footer.app-footer-custom {
      text-align: initial;
      padding: 0;
      border-top: 0;
      background: transparent;
      color: inherit;
      font-size: inherit;
    }
  </style>
</head>
<body>
  <header>@yield('header')</header>
  <main>
    @yield('main')
    <footer class="app-footer @hasSection('footer') app-footer-custom @endif">
      @hasSection('footer')
        @yield('footer')
      @else
        <p>© {{ date('Y') }} Klaridad - TabiDev Studios</p>
      @endif
  </footer>
  </main>
  
  
  @stack('script')
</body>
</html>