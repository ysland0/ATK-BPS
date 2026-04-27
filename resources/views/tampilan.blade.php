<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRESISI - BPS Kota Semarang</title>
    <!-- Chart.js for graphs -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;1,600&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Manrope','Inter', 'Segoe UI', -apple-system, BlinkMacSystemFont, sans-serif;
            background: #f8fafc;
        }

        /* Navbar */
        .navbar {
            background: white;
            padding: 16px 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .logo-section {
            display: flex;
            align-items: center;
            gap: 18px;
        }

        .logo {
            width: 50px;
            height: 50px;
            background: #1e3a8a;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .logo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .logo-text h3 {
            font-size: 25px;
            color: #1e3a8a;
            font-weight: 700;
            margin-bottom: 2px;
        }

        .logo-text p {
            font-size: 18px;
            color: #64748b;
            font-weight: 400;
        }

        .nav-menu {
            display: flex;
            gap: 32px;
            align-items: center;
        }

        .nav-link {
            color: #475569;
            font-size: 18px;
            text-decoration: none;
            position: relative;
            display: inline-block;
            
        }

        .nav-link::after {
            content: "";
            position: absolute;
            bottom: -8px;
            left: 50%;
            width: 0;
            height: 2px;
            background: #1e3a8a;
            transition: width 0.3s ease;
            transform: translateX(-50%);
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }

        .nav-link:hover {
            color: #1e3a8a;
        }

        .nav-link.active {
            color: #1e3a8a;
            font-weight: 600;
        }

        .btn-login {
            background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);
            color: white;
            padding: 9px 24px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            font-size: 17px;
            transition: all 0.2s;
            border: none;
            cursor: pointer;
            box-shadow: 0 1px 3px rgba(251, 191, 36, 0.3);
        }

        .btn-login:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(251, 191, 36, 0.4);
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            background: url('{{ asset("assets/images/fotoBPS.jpeg") }}') center/cover no-repeat;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: flex-start; /* ⬅️ penting */
            padding-left: 150px; /* ⬅️ geser ke kiri */

        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="%23ffffff" fill-opacity="0.03" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,122.7C672,117,768,139,864,154.7C960,171,1056,181,1152,165.3C1248,149,1344,107,1392,85.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>') bottom/cover no-repeat;
        }

        .hero-content {
        position: relative;
        color: white;
        text-align: left; 
        z-index: 2;
        }

        .hero-title {
            font-size: 80px;
            flex-wrap: wrap;
            align-items: baseline;
            line-height: 1.1;
            letter-spacing: -1px;
        }

        .presisi {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
        }
        /* Background dekorasi di belakang teks PRESISI */
        .hero-text-bg {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -60%);
            
            width: 500px;
            height: 250px;

            background: linear-gradient(
                            rgba(30, 58, 138, 0.3),
                            rgba(30, 58, 138, 0.3)
                        ),
                        
        }

        .hero h1 {
            position: relative;
            z-index: 2;
        }

        /* Optional: glow effect biar makin aesthetic */
        .hero h1 .presisi {
            text-shadow: 0 4px 20px rgba(255, 255, 255, 0.25);
        }
        

        .hero h1 {
            font-size: 100px;
            color: white;
            margin-bottom: -12px;
            font-weight: 300;
            letter-spacing: -0.5px;
            line-height: 1.1;
        }

        .hero h1 .presisi {
            font-weight: 600;
        }

        .hero h2 {
            font-size: 40px;
            white-space: nowrap;
        }

        .hero h2 span {
            font-style: italic;
            color: #fbbf24;
            font-weight: 300;
        }

        .hero::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(
                to right,
                    rgba(30, 58, 138, 0.85) 0%,
                    rgba(30, 58, 138, 0.65) 40%,
                    rgba(30, 58, 138, 0.35) 70%,
                    rgba(30, 58, 138, 0.15) 100%
            );
            z-index: 1;
        }

        .hero p {
            font-size: 20px;
            color: rgba(255, 255, 255, 0.85);
            margin-bottom: 50px;
            line-height: 1.5;
        }

        .hero-buttons {
            margin-top: 20px;
            display: flex;
            gap: 30px;
        }

        .btn {
            padding: 11px 26px;
            border-radius: 7px;
            font-size: 22px;
            font-weight: 700;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.2s;
            border: none;
            cursor: pointer;
        }

        .btn-primary {
            background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);
            color: #1e293b;
            box-shadow: 0 2px 8px rgba(251, 191, 36, 0.35);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 16px rgba(251, 191, 36, 0.45);
        }

        .btn-secondary {
            background: rgba(255, 255, 255, 0.12);
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(10px);
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.18);
            border-color: rgba(255, 255, 255, 0.35);
        }

        .btn svg {
            width: 16px;
            height: 16px;
        }

        /* Tutorial Section */
        .tutorial {
            padding: 60px 20px;
            background: white;
            text-align: center;
        }

        .tutorial h2 {
            font-size: 32px;
            color: #0f172a;
            margin-bottom: 8px;
            font-weight: 700;
        }

        .tutorial p {
            color: #64748b;
            font-size: 18px;
            margin-bottom: 40px;
        }

        .video-container {
            max-width: 920px;
            margin: 0 auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            position: relative;
            background: linear-gradient(135deg, #e2e8f0 0%, #cbd5e1 100%);
            height: 480px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .play-button {
            width: 90px;
            height: 90px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
        }

        .play-button:hover {
            transform: scale(1.08);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.2);
        }

        .play-button svg {
            width: 36px;
            height: 36px;
            color: #1e3a8a;
            margin-left: 4px;
        }

        /* Features Section */
        .features {
            padding: 50px 60px;
            background: #f8fafc;
        }

        .features-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
            align-items: stretch;
        }

        .feature-box {
            text-align: center;
            padding: 36px 32px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
            transition: all 0.3s;
            border: 1px solid #e2e8f0;
        }

        .feature-box:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
            border-color: #cbd5e1;
        }

        .feature-box h3 {
            font-size: 23px;
            color: #0f172a;
            margin-bottom: 12px;
            font-weight: 700;
        }

        .feature-box p {
            color: #64748b;
            line-height: 1.7;
            margin-bottom: 22px;
            font-size: 18px;
        }

        /* Overview Section */
        .overview {
            padding: 60px;
            background: #f8fafc;
        }

        .overview h2 {
            font-size: 32px;
            margin-bottom: 40px;
            font-weight: 700;
            font-style: italic;
            color: #0f172a;
            text-align: center;

        }

        /* GRID UTAMA */
        .overview-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 24px;
        }

        /* KANAN (stats + chart) */
        .right-panel {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        /* STAT CARDS */
        .stats-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
        }

        .stat-card {
            background: white;
            border-radius: 12px;
            padding: 20px;
            display: flex;
            gap: 12px;
            align-items: center;
            border: 1px solid #e2e8f0;
        }

        .stat-info h3 {
            font-size: 26px;
        }

        .stat-info p {
            font-size: 18px;
        }

        /* CHART */
        .chart-container {
            background: white;
            border-radius: 10px;
            padding: 40px;
            border: 1px solid #e2e8f0;
            height: 340px;
        }

        .chart-title {
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 5px;
        }

        /* LIST BARANG */
        .top-items {
            background: white;
            border-radius: 12px;
            padding: 24px;
            border: 1px solid #e2e8f0;
            height: 100%;
        }

        .item-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px solid #f1f5f9;
        }

        .item-info {
            flex: 1;
            margin-left: 12px;
        }

        .item-avatar {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: #e2e8f0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        .item-info {
            flex: 1;
        }

        .item-info h4 {
            font-size: 13px;
            color: #0f172a;
            font-weight: 600;
            margin-bottom: 2px;
        }

        .item-info p {
            font-size: 11px;
            color: #64748b;
        }

        .item-badge {
            padding: 4px 12px;
            border-radius: 12px;
            font-size: 11px;
            font-weight: 600;
        }

        .badge-tersedia {
            background: #dcfce7;
            color: #166534;
        }

        .badge-digunakan {
            background: #fef3c7;
            color: #92400e;
        }

        .badge-kosong {
            background: #fee2e2;
            color: #991b1b;
        }

        /* Footer */
        .footer {
            background: #3749A6;
            border-top: 1px solid #e2e8f0;
            padding: 50px 60px 24px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 60px;
            margin-bottom: 32px;
            max-width: 1200px;
        }

        .footer-info h3 {
            font-size: 20px;
            color: #FFFFFF;
            margin-bottom: 12px;
            font-weight: 700;
        }

        .footer-info p {
            color: #cbd5e1;
            line-height: 1.7;
            margin-bottom: 18px;
            font-size: 16px;
        }

        .footer-contact {
            display: flex;
            flex-direction: column;
            gap: 10px;
            color: #cbd5e1;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #cbd5e1;
            font-size: 13px;
        }

        .contact-item svg {
            width: 16px;
            height: 16px;
            color: #cbd5e1;
            flex-shrink: 0;
        }

        .footer-social h4 {
            font-size: 16px;
            color: #FFFFFF;
            margin-bottom: 18px;
            font-weight: 700;
        }

        .social-links {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .social-link {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #cbd5e1;
            text-decoration: none;
            font-size: 13px;
            transition: color 0.2s;
        }

        .social-link:hover {
            color: #7C9DD2;
        }

        .social-link svg {
            width: 16px;
            height: 16px;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 24px;
            border-top: 1px solid #e2e8f0;
            color: #FFFFFF;
            font-size: 13px;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .overview-grid {
                grid-template-columns: 1fr;
            }
            
            .features-container {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .navbar {
                padding: 15px 20px;
            }

            .nav-menu {
                display: none;
            }

            .hero h1 {
                font-size: 40px;
            }

            .hero h1 .p-letter {
                font-size: 48px;
            }

            .hero h2 {
                font-size: 18px;
            }

            .hero-buttons {
                flex-direction: column;
            }

            .overview, .features, .footer {
                padding: 40px 20px 20px;
            }

            .footer-content {
                grid-template-columns: 1fr;
                gap: 40px;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo-section">
            <div class="logo">
                <img src="{{ asset('assets/images/logoPresisi.png') }}" alt="Logo BPS" onerror="this.style.display='none'">
            </div>
            <div class="logo-text">
                <h3>PRESISI</h3>
                <p>BPS Kota Semarang</p>
            </div>
        </div>

        <div class="nav-menu">
            <a href="#beranda" class="nav-link active">Beranda</a>
            <a href="#panduan" class="nav-link">Panduan</a>
            <a href="#grafik" class="nav-link ">Grafik</a>
            <a href="#kontak" class="nav-link ">Kontak</a>
            <a href="/login" class="btn-login">Login Admin</a>
        </div>

        <!-- SCRIPT TARUH DI SINI -->
        <script>
        const navLinks = document.querySelectorAll(".nav-link");

        navLinks.forEach(link => {
            link.addEventListener("click", function() {
                navLinks.forEach(l => l.classList.remove("active"));
                this.classList.add("active");
            });
        });
        </script>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="beranda">
            <div class="hero-content">
            <!-- Background khusus di belakang teks -->
            <h1 class="hero-title">
                <span class="presisi">PRESISI</span>
            </h1>

            <h2>Persediaan <span>Real Time</span>, Efisien, dan Sinkron </h2>
            <p>Website Pengambilan, Permohonan serta Pencatatan Alat Tulis Kantor</p>
            
            <div class="hero-buttons">
                <a href="/pengambilan" class="btn btn-primary">
                    Pengambilan Barang
                </a>
                <a href="/permohonan" class="btn btn-secondary">
                    Permohonan Barang
                </a>
            </div>
        </div>
    </section>

    <!-- Tutorial Section -->
    <section class="tutorial" id="panduan">
        <h2>Tutorial</h2>
        <p>Jika ada yang belum mengerti, bisa click video dibawah untuk panduannya !!</p>
        
        <div class="video-container">
            <div class="play-button" onclick="alert('Video tutorial akan segera tersedia!')">
                <svg fill="currentColor" viewBox="0 0 20 20">
                    <path d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z"/>
                </svg>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="features-container">
            <div class="feature-box">
                <h3>Mempermudah</h3>
                <p>Website ini berfungsi untuk mempermudah pencatatan ATK pada divisi tata usaha</p>
            </div>
            
            <div class="feature-box">
                <h3>Sinkron</h3>
                <p>website ini berguna untuk mensinkronkan pencatatan dan jumlah pengambilan barang</p>
            </div>
        </div>
    </section>

    <!-- Overview Section -->
    <section class="overview" id="grafik">
        <h2>Overview</h2>

        <div class="overview-grid">

        <!-- LEFT: LIST BARANG -->
        <div class="top-items">
            <h3>Daftar Barang Tersedia</h3>

            <input type="text" id="searchBarang" placeholder="Cari nama barang..."
                style="width:100%; padding:10px; margin-bottom:15px; border-radius:6px; border:1px solid #e2e8f0;">

            <div id="barangList">

                <div class="item-row">
                    <div style="display:flex; align-items:center;">
                        <div class="item-avatar">ATK</div>
                        <div class="item-info">
                            <h4>Pulpen</h4>
                            <p>Stok: 20</p>
                        </div>
                    </div>
                    <span class="item-badge badge-tersedia">Tersedia</span>
                </div>

                <div class="item-row">
                    <div style="display:flex; align-items:center;">
                        <div class="item-avatar">ATK</div>
                        <div class="item-info">
                            <h4>Buku Tulis</h4>
                            <p>Stok: 15</p>
                        </div>
                    </div>
                    <span class="item-badge badge-tersedia">Tersedia</span>
                </div>

                <div class="item-row">
                    <div style="display:flex; align-items:center;">
                        <div class="item-avatar">ATK</div>
                        <div class="item-info">
                            <h4>Spidol</h4>
                            <p>Stok: 8</p>
                        </div>
                    </div>
                    <span class="item-badge badge-digunakan">Menipis</span>
                </div>

                <div class="item-row">
                    <div style="display:flex; align-items:center;">
                        <div class="item-avatar">ATK</div>
                        <div class="item-info">
                            <h4>Kertas A4</h4>
                            <p>Stok: 50</p>
                        </div>
                    </div>
                    <span class="item-badge badge-tersedia">Tersedia</span>
                </div>

                <div class="item-row">
                    <div style="display:flex; align-items:center;">
                        <div class="item-avatar">ATK</div>
                        <div class="item-info">
                            <h4>Stapler</h4>
                            <p>Stok: 5</p>
                        </div>
                    </div>
                    <span class="item-badge badge-digunakan">Menipis</span>
                </div>

            </div>
        </div>

        <!-- RIGHT SIDE -->
        <div class="right-panel">

            <!-- STAT -->
            <div class="stats-row">

                <div class="stat-card">
                    <div class="stat-info">
                        <h3>18</h3>
                        <p>Barang Tersedia</p>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-info">
                        <h3>27</h3>
                        <p>Diambil Bulanan</p>
                    </div>
                </div>

            </div>

            <!-- CHART -->
            <div class="chart-container">
                <div class="chart-title">Grafik Aktivitas Pengambilan Barang</div>
                <canvas id="demandChart"></canvas>
            </div>

        </div>

    </div>
</section>

    <!-- Footer -->
    <footer class="footer" id="kontak">
        <div class="footer-content">
            <div class="footer-info">
                <h3>Presisi<br><small style="font-size: 14px; color: #FFFFFF; font-weight: 400;">BPS Kota Semarang</small></h3>
                <p>Website yang mempermudah pengambilan, permohonan dan pencatatan ATK untuk BPS Kota Semarang</p>
                
                <div class="footer-contact">
                    <div class="contact-item">
                        <svg fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                        </svg>
                        Jl. Inspeksi Kali Semarang No.1, Semarang, Jawa Tengah
                    </div>
                    <div class="contact-item">
                        <svg fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                        </svg>
                        (024)3546413
                    </div>
                    <div class="contact-item">
                        <svg fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                        </svg>
                        bps3374@bps.go.id
                    </div>
                    <div class="contact-item">
                        <svg fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z"/>
                            <path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z"/>
                        </svg>
                        WhatsApp: 085117113374
                    </div>
                </div>
            </div>

            <div class="footer-social">
                <h4>Media Sosial</h4>
                <div class="social-links">
                    <a href="https://www.instagram.com/bpskotasemarang/" target="_blank" class="social-link">
                        <svg fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        Instagram
                    </a>
                    <a href="https://www.youtube.com/@bpskotasemarang8647" target="_blank" class="social-link">
                        <svg fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                        YouTube
                    </a>
                    <a href="https://id.linkedin.com/company/badan-pusat-statistik" target="_blank" class="social-link">
                        <svg fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        LinkedIn BPS Pusat
                    </a>
                    <a href="https://www.tiktok.com/@bps.kota.semarang" target="_blank" class="social-link">
                        <svg fill="currentColor" viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63 .41-1.11 1.04-1.36 1." /></svg>
                        Tiktok
                    </a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            © 2026 BPS Kota Semarang
        </div>
    </footer>

    <script>
        // Chart.js - Demand Chart
        const ctx = document.getElementById('demandChart').getContext('2d');
        
        const gradient = ctx.createLinearGradient(0, 0, 0, 400);
        gradient.addColorStop(0, 'rgba(99, 102, 241, 0.15)');
        gradient.addColorStop(1, 'rgba(99, 102, 241, 0.01)');
        
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Aug', 'Sep', 'Oct', 'Dec', 'Jan'],
                datasets: [{
                    label: 'Permintaan Barang',
                    data: [120, 190, 250, 320, 280, 350, 420, 480, 390, 550, 480, 620],
                    borderColor: '#6366f1',
                    backgroundColor: gradient,
                    borderWidth: 2.5,
                    fill: true,
                    tension: 0.4,
                    pointRadius: 0,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: '#6366f1',
                    pointHoverBorderColor: '#fff',
                    pointHoverBorderWidth: 2
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        backgroundColor: 'rgba(15, 23, 42, 0.9)',
                        padding: 12,
                        titleColor: '#fff',
                        bodyColor: '#fff',
                        borderColor: '#334155',
                        borderWidth: 1,
                        displayColors: false,
                        callbacks: {
                            label: function(context) {
                                return context.parsed.y + ' permintaan';
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 700,
                        grid: {
                            color: '#f1f5f9',
                            drawBorder: false
                        },
                        ticks: {
                            color: '#94a3b8',
                            font: {
                                size: 11
                            },
                            padding: 8
                        }
                    },
                    x: {
                        grid: {
                            display: false,
                            drawBorder: false
                        },
                        ticks: {
                            color: '#94a3b8',
                            font: {
                                size: 11
                            },
                            padding: 8
                        }
                    }
                }
            }
        });
    </script>
    <script>
        const searchInput = document.getElementById("searchBarang");
        const items = document.querySelectorAll("#barangList .item-row");

        // 🔹 tampilkan hanya 5 awal
        function showDefaultItems() {
            items.forEach((item, index) => {
                item.style.display = index < 5 ? "flex" : "none";
            });
        }

        // 🔹 search filter
        searchInput.addEventListener("keyup", function() {
            const keyword = this.value.toLowerCase();

            items.forEach(item => {
                const text = item.innerText.toLowerCase();
                if (text.includes(keyword)) {
                    item.style.display = "flex";
                } else {
                    item.style.display = "none";
                }
            });
        });

        // init
        showDefaultItems();
    </script>
</body>
</html>