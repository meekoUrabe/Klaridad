<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Klaridad</title>
  <link rel="stylesheet" href="{{ asset('css/variables.css') }}">
  @yield('head')
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    html { height: 100%; }
    body { height: 100vh; display: flex; flex-direction: row; font-family: 'Inter', sans-serif; overflow: hidden; }
    header { display: flex; flex-shrink: 0; }
    main { display: flex; flex-direction: column; flex: 1; height: 100%; }
    footer { flex-shrink: 0; }
  </style>
</head>
<body>
  <header>@yield('header')</header>
  <main>
    @yield('main')
  </main>
  <footer>@yield('footer')</footer>
  @stack('script')
</body>
</html>