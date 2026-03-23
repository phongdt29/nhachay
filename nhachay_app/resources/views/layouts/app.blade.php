<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title', 'nhachay.net')</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
  <div class="page">
    <div class="shell">
      <div class="topline">@yield('topline', 'Music streaming platform')</div>

      <header>
        <div class="row">
          <a href="{{ route('home') }}" class="logo">
            <div class="disc"></div>
            <div>nhachay.net<small>Music streaming platform</small></div>
          </a>

          <nav>
            <a href="{{ route('home') }}" class="navbtn {{ request()->routeIs('home') ? 'active' : '' }}">Trang chủ</a>
            <a href="{{ route('ai-music') }}" class="navbtn {{ request()->routeIs('ai-music') ? 'active' : '' }}">AI Music</a>
            <a href="{{ route('genres') }}" class="navbtn {{ request()->routeIs('genres') ? 'active' : '' }}">Thể loại</a>
            <a href="{{ route('charts') }}" class="navbtn {{ request()->routeIs('charts') ? 'active' : '' }}">BXH</a>
          </nav>

          <div class="spacer">
            <div class="search">
              <input type="text" placeholder="🔎 Tìm bài hát, ca sĩ, playlist, AI prompt">
            </div>
            <div class="ghostbtn">🌐 VN</div>
            <div class="ghostbtn">👤 Tài khoản</div>
          </div>
        </div>
      </header>

      <div class="ticker-wrap">
        <div class="ticker">
          <div>🔔 Top tìm kiếm hôm nay: Ballad AI • Remix 2026 • Nhạc Tết • Chill học bài</div>
          <div>›</div>
        </div>
      </div>

      @yield('content')

      @yield('player')
    </div>
  </div>
</body>
</html>
