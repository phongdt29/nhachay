@extends('layouts.app')

@section('title', 'Trang chủ - Nhạc Hay AI')

@section('content')
<style>
    /* Inline styles cho trang home (nên chuyển vào app.css sau này) */
    .hero-banner {
        background: linear-gradient(135deg, #4f46e5 0%, #9333ea 100%);
        border-radius: 16px;
        padding: 40px;
        color: white;
        margin: 20px 0 40px 0;
        position: relative;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        justify-content: center;
        min-height: 280px;
    }
    .hero-banner h1 { font-size: 2.5rem; font-weight: 800; margin-bottom: 12px; line-height: 1.2; }
    .hero-banner p { font-size: 1.1rem; opacity: 0.9; margin-bottom: 24px; max-width: 600px; }
    .btn-cta {
        background: white; color: #4f46e5; padding: 12px 32px;
        border-radius: 99px; font-weight: 700; text-decoration: none;
        display: inline-flex; align-items: center; gap: 8px; transition: transform 0.2s;
        width: fit-content;
    }
    .btn-cta:hover { transform: translateY(-2px); }
    
    .section-header { display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 20px; padding-top: 10px; border-top: 1px solid rgba(255,255,255,0.05); }
    .section-title { font-size: 1.25rem; font-weight: 700; color: #fff; }
    .section-link { color: #a1a1aa; text-decoration: none; font-size: 0.9rem; font-weight: 500; }
    .section-link:hover { color: #fff; }

    .grid-cols-5 { display: grid; grid-template-columns: repeat(5, 1fr); gap: 24px; margin-bottom: 40px; }
    .card { background: rgba(255,255,255,0.03); border-radius: 12px; padding: 16px; transition: all 0.3s; cursor: pointer; border: 1px solid transparent; }
    .card:hover { background: rgba(255,255,255,0.08); transform: translateY(-4px); border-color: rgba(255,255,255,0.1); }
    .card-img { aspect-ratio: 1/1; border-radius: 8px; background: #27272a; margin-bottom: 12px; overflow: hidden; }
    .card-img img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s; }
    .card:hover .card-img img { transform: scale(1.05); }
    .card-title { font-weight: 600; color: #fff; margin-bottom: 4px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; font-size: 0.95rem; }
    .card-sub { font-size: 0.8rem; color: #a1a1aa; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }
</style>

<!-- Hero Banner -->
<div class="hero-banner">
    <h1>Âm nhạc AI<br>Không giới hạn</h1>
    <p>Khám phá hàng triệu bài hát được tạo ra bởi trí tuệ nhân tạo. Tự do sáng tạo giai điệu của riêng bạn với công nghệ Suno AI tiên tiến nhất.</p>
    <a href="{{ route('ai-music') }}" class="btn-cta">
        <span>✨</span> Bắt đầu tạo nhạc ngay
    </a>
</div>

<!-- Gợi ý Section -->
<div class="section-header">
    <h2 class="section-title">Gợi ý cho bạn</h2>
    <a href="#" class="section-link">Xem tất cả ›</a>
</div>

<div class="grid-cols-5">
    @for($i=1; $i<=5; $i++)
    <div class="card">
        <div class="card-img">
            <img src="https://picsum.photos/seed/music{{$i}}/300/300" alt="Cover">
        </div>
        <div class="card-title">Giai điệu Chill #{{ $i }}</div>
        <div class="card-sub">Tuyển tập Lo-fi</div>
    </div>
    @endfor
</div>

<!-- BXH Section -->
<div class="section-header">
    <h2 class="section-title">Bảng xếp hạng tuần</h2>
    <a href="{{ route('charts') }}" class="section-link">Xem đầy đủ ›</a>
</div>

<div class="grid-cols-5">
    @for($i=1; $i<=5; $i++)
    <div class="card">
        <div class="card-img">
            <img src="https://picsum.photos/seed/chart{{$i}}/300/300" alt="Cover">
        </div>
        <div class="card-title">Top Hit #{{ $i }}</div>
        <div class="card-sub">Nhiều nghệ sĩ</div>
    </div>
    @endfor
</div>
@endsection
