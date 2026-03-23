@extends('layouts.app')

@section('title', 'nhachay.net - Nghe nhạc không giới hạn')

@section('content')
<section class="section">
  <div class="grid12">
    <div class="hero">
      <div class="badge">✨ Trải nghiệm âm nhạc thế hệ mới</div>
      <h1>Nghe nhạc không giới hạn với giao diện hiện đại và gợi ý thông minh</h1>
      <p>Khám phá bài hát mới, bảng xếp hạng hot, playlist theo tâm trạng và kho nhạc AI được cá nhân hóa theo gu nghe của bạn.</p>
      <div class="cta">
        <button class="btn-white">▶ Nghe ngay</button>
        <button class="btn-glass">🎤 Tạo nhạc AI</button>
      </div>
      <div class="stats">
        <div class="stat"><div class="big">12M+</div><div>Bài hát</div></div>
        <div class="stat"><div class="big">500K+</div><div>Playlist</div></div>
        <div class="stat"><div class="big">2M+</div><div>Ngườidùng</div></div>
      </div>
    </div>

    <div class="sidecard">
      <div class="muted">Khám phá thể loại</div>
      <div class="stack">
        <div class="item f1"><strong>Pop / Ballad</strong><div class="muted small">Bài hát trending</div></div>
        <div class="item f2"><strong>EDM / Remix</strong><div class="muted small">Năng lượng cao</div></div>
        <div class="item f3"><strong>Chill / Lo-Fi</strong><div class="muted small">Thư giãn & tập trung</div></div>
        <div class="item f4"><strong>Nhạc AI</strong><div class="muted small">Sáng tạo với AI</div></div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="section-head">
    <h2>🔥 Mới phát hành</h2>
    <a href="#" class="pill">Xem tất cả ›</a>
  </div>
  <div class="cards5">
    <a href="#" class="card">
      <div class="cover g1"><span class="tag">New</span></div>
      <div class="card-body">
        <div class="card-title">Midnight Dreams</div>
        <div class="small">The Night Walkers</div>
        <div class="actions"><span class="round-play">▶</span><span class="round-icon">♥</span></div>
      </div>
    </a>
    <a href="#" class="card">
      <div class="cover g2"><span class="tag">Trending</span></div>
      <div class="card-body">
        <div class="card-title">Neon Lights</div>
        <div class="small">Cyber Pulse</div>
        <div class="actions"><span class="round-play">▶</span><span class="round-icon">♥</span></div>
      </div>
    </a>
    <a href="#" class="card">
      <div class="cover g3"><span class="tag">AI Gen</span></div>
      <div class="card-body">
        <div class="card-title">Forest Whisper</div>
        <div class="small">AI Composer</div>
        <div class="actions"><span class="round-play">▶</span><span class="round-icon">♥</span></div>
      </div>
    </a>
    <a href="#" class="card">
      <div class="cover g4"><span class="tag">Remix</span></div>
      <div class="card-body">
        <div class="card-title">Summer Vibes 2026</div>
        <div class="small">DJ Spark</div>
        <div class="actions"><span class="round-play">▶</span><span class="round-icon">♥</span></div>
      </div>
    </a>
    <a href="#" class="card">
      <div class="cover g5"><span class="tag">Ballad</span></div>
      <div class="card-body">
        <div class="card-title">Last Letter</div>
        <div class="small">Emily Chen</div>
        <div class="actions"><span class="round-play">▶</span><span class="round-icon">♥</span></div>
      </div>
    </a>
  </div>
</section>

<section class="section">
  <div class="two-col">
    <div class="panel">
      <div class="section-head"><h2>📊 Bảng xếp hạng</h2><a href="#" class="pill">Xem BXH ›</a></div>
      <div class="chart-list">
        <div class="chart-row">
          <div class="rank top">1</div>
          <div class="thumb g1"></div>
          <div><div class="card-title">Vùng ký ức</div><div class="small">Chillies</div></div>
          <div class="plays">2.4M lượt nghe</div>
          <div class="round-icon">▶</div>
        </div>
        <div class="chart-row">
          <div class="rank top">2</div>
          <div class="thumb g2"></div>
          <div><div class="card-title">Mượn rượu tỏ tình</div><div class="small">BigDaddy x Emily</div></div>
          <div class="plays">1.9M lượt nghe</div>
          <div class="round-icon">▶</div>
        </div>
        <div class="chart-row">
          <div class="rank top">3</div>
          <div class="thumb g3"></div>
          <div><div class="card-title">Như anh đã thấy em</div><div class="small">PhucXP</div></div>
          <div class="plays">1.7M lượt nghe</div>
          <div class="round-icon">▶</div>
        </div>
        <div class="chart-row">
          <div class="rank">4</div>
          <div class="thumb g4"></div>
          <div><div class="card-title">AI Dreams</div><div class="small">Suno AI</div></div>
          <div class="plays">1.5M lượt nghe</div>
          <div class="round-icon">▶</div>
        </div>
        <div class="chart-row">
          <div class="rank">5</div>
          <div class="thumb g5"></div>
          <div><div class="card-title">Neon Nights</div><div class="small">Synthwave Boy</div></div>
          <div class="plays">1.2M lượt nghe</div>
          <div class="round-icon">▶</div>
        </div>
      </div>
    </div>

    <div class="panel">
      <div class="section-head"><h2>🎵 Thể loại phổ biến</h2><a href="#" class="pill">Tất cả ›</a></div>
      <div class="cat-grid">
        <div class="cat"><div class="ph g1"></div><div style="margin-top:10px;font-weight:700;">Pop</div></div>
        <div class="cat"><div class="ph g2"></div><div style="margin-top:10px;font-weight:700;">EDM</div></div>
        <div class="cat"><div class="ph g3"></div><div style="margin-top:10px;font-weight:700;">Ballad</div></div>
        <div class="cat"><div class="ph g4"></div><div style="margin-top:10px;font-weight:700;">Remix</div></div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="section-head">
    <h2>🎧 Nghe gần đây</h2>
    <a href="#" class="pill">Lịch sử ›</a>
  </div>
  <div class="song-list">
    <div class="song-row">
      <div class="rank">1</div>
      <div class="thumb g1"></div>
      <div>
        <div class="card-title">Midnight Dreams</div>
        <div class="small">The Night Walkers</div>
      </div>
      <div class="plays">3:42</div>
      <div class="song-right">
        <span class="round-icon">♥</span>
        <span class="round-play">▶</span>
      </div>
    </div>
    <div class="song-row">
      <div class="rank">2</div>
      <div class="thumb g2"></div>
      <div>
        <div class="card-title">Neon Lights</div>
        <div class="small">Cyber Pulse</div>
      </div>
      <div class="plays">4:15</div>
      <div class="song-right">
        <span class="round-icon">♥</span>
        <span class="round-play">▶</span>
      </div>
    </div>
    <div class="song-row">
      <div class="rank">3</div>
      <div class="thumb g3"></div>
      <div>
        <div class="card-title">Forest Whisper</div>
        <div class="small">AI Composer</div>
      </div>
      <div class="plays">2:58</div>
      <div class="song-right">
        <span class="round-icon">♥</span>
        <span class="round-play">▶</span>
      </div>
    </div>
  </div>
</section>
@endsection

@section('player')
<div class="player">
  <div class="player-grid">
    <div class="player-left">
      <div class="thumb g1" style="width:56px;height:56px;"></div>
      <div>
        <div style="font-weight:700;">Midnight Dreams</div>
        <div class="small">The Night Walkers</div>
      </div>
      <span class="round-icon">♥</span>
    </div>
    <div class="player-mid" style="width:100%;">
      <div class="player-controls">
        <span>🔀</span>
        <span>⏮</span>
        <span class="round-play">▶</span>
        <span>⏭</span>
        <span>🔁</span>
      </div>
      <div style="display:flex;align-items:center;gap:10px;width:100%;margin-top:8px;">
        <span class="small">1:24</span>
        <div class="progline"><div class="progfill"></div></div>
        <span class="small">3:42</span>
      </div>
    </div>
    <div class="player-right" style="justify-content:flex-end;">
      <span>🎵</span>
      <span>🔊</span>
      <div class="volline"><div class="volfill"></div></div>
    </div>
  </div>
</div>
@endsection
