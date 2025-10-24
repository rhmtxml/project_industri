@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #f0f2f5;
    }
    .card {
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    .sidebar-menu li {
        list-style: none;
        margin-bottom: 15px;
    }
    .sidebar-menu li a {
        text-decoration: none;
        color: #333;
        font-weight: 500;
    }
    .sidebar-menu li:hover {
        background-color: #e9ecef;
        border-radius: 8px;
        padding-left: 5px;
        transition: 0.2s;
    }
    .profile-card img {
        border-radius: 50%;
        width: 80px;
        height: 80px;
        object-fit: cover;
    }
</style>

<div class="container mt-4">
    <div class="row">
        <!-- Sidebar kiri -->
        <div class="col-md-3">
            <div class="card p-3 mb-4">
                <div class="profile-card text-center mb-3">
                    <img src="https://i.pravatar.cc/100" alt="Foto Profil">
                    <h5 class="mt-2">{{ Auth::user()->name }}</h5>
                    <small class="text-muted">{{ Auth::user()->email }}</small>
                </div>
                <hr>
                <ul class="sidebar-menu ps-2">
                    <li><a href="#">🏠 Beranda</a></li>
                    <li><a href="#">👥 Teman</a></li>
                    <li><a href="#">🧑‍🤝‍🧑 Grup</a></li>
                    <li><a href="#">🛒 Marketplace</a></li>
                    <li><a href="#">🎥 Video</a></li>
                    <li><a href="#">⚙️ Pengaturan</a></li>
                    <li><a href="#">🚪 Keluar</a></li>
                </ul>
            </div>
        </div>

        <!-- Konten utama -->
        <div class="col-md-6">
            <!-- Kotak status -->
            <div class="card p-3 mb-4">
                <form>
                    <div class="d-flex align-items-center mb-3">
                        <img src="https://i.pravatar.cc/50" class="rounded-circle me-2" alt="Profil">
                        <input type="text" class="form-control" placeholder="Apa yang Anda pikirkan hari ini?">
                    </div>
                    <div class="d-flex justify-content-around">
                        <button class="btn btn-light btn-sm">📷 Foto/Video</button>
                        <button class="btn btn-light btn-sm">😊 Perasaan</button>
                        <button class="btn btn-light btn-sm">🏷️ Tag Teman</button>
                    </div>
                </form>
            </div>

            <!-- Contoh posting -->
            <div class="card p-3 mb-4">
                <div class="d-flex align-items-center mb-2">
                    <img src="https://i.pravatar.cc/40?img=8" class="rounded-circle me-2" alt="User">
                    <div>
                        <strong>Rizki Ramadhan</strong><br>
                        <small class="text-muted">5 menit yang lalu</small>
                    </div>
                </div>
                <p>Hari ini aku belajar Laravel dan berhasil membuat dashboard 🎉</p>
                <img src="https://picsum.photos/500/300" class="img-fluid rounded mb-2">
                <div class="d-flex justify-content-between">
                    <button class="btn btn-light btn-sm">👍 Suka</button>
                    <button class="btn btn-light btn-sm">💬 Komentar</button>
                    <button class="btn btn-light btn-sm">🔁 Bagikan</button>
                </div>
            </div>

            <!-- Post lain -->
            <div class="card p-3 mb-4">
                <div class="d-flex align-items-center mb-2">
                    <img src="https://i.pravatar.cc/40?img=12" class="rounded-circle me-2" alt="User">
                    <div>
                        <strong>Dinda Saputri</strong><br>
                        <small class="text-muted">10 menit yang lalu</small>
                    </div>
                </div>
                <p>Semangat coding Laravel hari ini! 💪🔥</p>
            </div>
        </div>

        <!-- Sidebar kanan -->
        <div class="col-md-3">
            <div class="card p-3 mb-4">
                <h6>Teman Online</h6>
                <ul class="list-unstyled">
                    <li class="mb-2"><img src="https://i.pravatar.cc/30?img=2" class="rounded-circle me-2"> Andi</li>
                    <li class="mb-2"><img src="https://i.pravatar.cc/30?img=5" class="rounded-circle me-2"> Sinta</li>
                    <li class="mb-2"><img src="https://i.pravatar.cc/30?img=7" class="rounded-circle me-2"> Rafi</li>
                </ul>
            </div>
            <div class="card p-3">
                <h6>Info Singkat</h6>
                <p class="small text-muted">Laravel adalah framework PHP modern untuk membuat aplikasi web yang cepat dan elegan.</p>
            </div>
        </div>
    </div>
</div>
@endsection
