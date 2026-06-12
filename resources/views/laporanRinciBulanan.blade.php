<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Rinci Bulanan - Pencatatan ATK</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/exceljs/4.4.0/exceljs.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/laporanRinciBulanan.css') }}">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header">
                <a href="#" class="logo-link">
                <div class="sidebar-logo">
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"/>
                    </svg>
                </div>
                <div class="sidebar-title">Pencatatan<br>ATK</div>
            </a>
        </div>

        <div class="menu-section">
            <a href="/dashboardPage" class="menu-item">
                <svg fill="currentColor" viewBox="0 0 20 20">
                    <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                </svg>
                Dashboard
            </a>
        </div>

        <div class="menu-section">
            <div class="menu-section-title">Invetaris</div>
            <a href="/pemasukanBarang" class="menu-item">
                <svg fill="currentColor" viewBox="0 0 20 20">
                    <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM14 11a1 1 0 011 1v1h1a1 1 0 110 2h-1v1a1 1 0 11-2 0v-1h-1a1 1 0 110-2h1v-1a1 1 0 011-1z"/>
                </svg>
                Pemasukan Barang
            </a>
            <a href="/stockAwal" class="menu-item">
                <svg fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1.323l3.954 1.582 1.599-.8a1 1 0 01.894 1.79l-1.233.616 1.738 5.42a1 1 0 01-.285 1.05A3.989 3.989 0 0115 15a3.989 3.989 0 01-2.667-1.019 1 1 0 01-.285-1.05l1.715-5.349L11 6.477V16h2a1 1 0 110 2H7a1 1 0 110-2h2V6.477L6.237 7.582l1.715 5.349a1 1 0 01-.285 1.05A3.989 3.989 0 015 15a3.989 3.989 0 01-2.667-1.019 1 1 0 01-.285-1.05l1.738-5.42-1.233-.617a1 1 0 01.894-1.788l1.599.799L9 4.323V3a1 1 0 011-1z" clip-rule="evenodd"/>
                </svg>
                Stock Awal Tahun
            </a>
        </div>

        <div class="menu-section">
            <div class="menu-section-title">Laporan</div>
            <a href="/laporanPengambilan" class="menu-item">
                <svg fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                    <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                Pengambilan Barang
            </a>
            <a href="/laporanRinciBulanan" class="menu-item active">
                <svg fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                    <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"/>
                </svg>
                Rinci Bulanan
            </a>
            <a href="/kartuKendali" class="menu-item">
                <svg fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm2 10a1 1 0 10-2 0v3a1 1 0 102 0v-3zm2-3a1 1 0 011 1v5a1 1 0 11-2 0v-5a1 1 0 011-1zm4-1a1 1 0 10-2 0v7a1 1 0 102 0V8z" clip-rule="evenodd"/>
                </svg>
                Kartu kendali tahunan
            </a>
            <a href="/laporanPermohonan" class="menu-item">
                <svg fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                    <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                Permohonan
            </a>
        </div>

        <div class="menu-section">
            <div class="menu-section-title">Data Master</div>
            <a href="/masterSupplier" class="menu-item">
                <svg fill="currentColor" viewBox="0 0 20 20">
                    <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"/>
                    <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z"/>
                </svg>
                Supplier
            </a>
            <a href="/masterBarang" class="menu-item">
                <svg fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm9 4a1 1 0 10-2 0v6a1 1 0 102 0V7zm-3 2a1 1 0 10-2 0v4a1 1 0 102 0V9zm-3 3a1 1 0 10-2 0v1a1 1 0 102 0v-1z" clip-rule="evenodd"/>
                </svg>
                Barang
            </a>
            <a href="/masterPegawai" class="menu-item">
                <svg fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"/>
                </svg>
                Pegawai
            </a>
        </div>

        <a href="javascript:void(0)" onclick="showLogoutModal()" class="logout-btn">
            <svg fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"/>
            </svg>
            Logout
        </a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Page Header -->
        <div class="page-header">
           <h1>Laporan Rekap Persediaan Barang - {{ strtoupper(\Carbon\Carbon::create()->month((int)$bulan)->translatedFormat('F')) }} {{ $tahun }}</h1>
        </div>

        <!-- Filter Card -->
        <div class="filter-card">
            <div class="filter-header">
                <svg fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                    <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"/>
                </svg>
                <h2>Laporan Rekap Persediaan Barang</h2>
            </div>
            <p class="filter-subtitle">Rekap transaksi bulanan: Pengambilan, Pemasukan, dan Transfer</p>

            <form action="{{ route('laporan.rinci') }}" method="GET" class="filter-form">
                    <div class="form-group">
                    <label>Bulan</label>
                    <select name="bulan" id="bulan">
                        @foreach(range(1, 12) as $m)
                            <option value="{{ sprintf('%02d', $m) }}" {{ $bulan == $m ? 'selected' : '' }}>
                                {{ \Carbon\Carbon::create()->month($m)->translatedFormat('F') }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Tahun</label>
                    <select name="tahun" id="tahun">
                        <option value="2025" {{ $tahun == '2025' ? 'selected' : '' }}>2025</option>
                        <option value="2026" {{ $tahun == '2026' ? 'selected' : '' }}>2026</option>
                    </select>
                </div>

                <button class="btn btn-primary" onclick="tampilkanLaporan()">
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"/>
                    </svg>
                    Tampilkan
                </button>
            </form>
        </div>

        <!-- Controls Bar -->
        <div class="controls-bar">
            <div class="search-box">
                <svg fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"/>
                </svg>
                <input type="text" id="searchInput" placeholder="Cari barang..." onkeyup="searchTable()">
            </div>
            <div class="sort-group">
                <span class="sort-label">Urutkan:</span>
                <select class="sort-select" id="sortSelect" onchange="sortTable()">
                    <option value="default">Default</option>
                    <option value="nama-asc">Nama Barang (A-Z)</option>
                    <option value="nama-desc">Nama Barang (Z-A)</option>
                    <option value="tanggal-newest">Tanggal Dokumen (Terbaru)</option>
                    <option value="tanggal-oldest">Tanggal Dokumen (Terlama)</option>
                </select>
            </div>
        </div>

        <!-- TABEL 1: SUMMARY PER BARANG -->
        <div class="summary-card">
            <svg fill="currentColor" viewBox="0 0 20 20"><path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/></svg>
            <h3>Summary per Barang</h3>
        </div>
        <div class="table-container" style="margin-bottom: 30px; border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden;">
             <table id="summaryTable" style="width: 100%; min-width: 800px; table-layout: fixed; border-collapse: collapse;">
        <thead>
            <tr style="background: #f8fafc; border-bottom: 1px solid #e2e8f0;">
                <th style="width: 15%; padding: 12px 10px; text-align: left;">KODE</th>
                <th style="width: 30%; padding: 12px 10px; text-align: left;">NAMA BARANG</th>
                <th style="width: 10%; padding: 12px 10px; text-align: left;">SATUAN</th>
                <th style="width: 10%; padding: 12px 10px; text-align: center;">AWAL</th>
                <th style="width: 11%; padding: 12px 10px; text-align: center;">MASUK</th>
                <th style="width: 11%; padding: 12px 10px; text-align: center;">KELUAR</th>
                <th style="width: 13%; padding: 12px 10px; text-align: center;">AKHIR</th>
                </thead>
                <tbody id="summaryTableBody"></tbody>
            </table>
            
            <!-- PAGINATION UNTUK SUMMARY -->
            <div style="display:flex; align-items:center; justify-content:space-between; padding: 15px; background: #fff; border-top: 1px solid #f1f5f9;">
                <span id="summaryPageInfo" style="color:#64748b; font-size:13px;"></span>
                <div id="summaryPageButtons" style="display:flex; gap:5px;"></div>
            </div>
        </div>

         <!-- Export Buttons -->
        <div class="export-buttons">
            <button class="btn btn-pdf" onclick="cetakPDF()">
                <svg fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z" clip-rule="evenodd"/>
                </svg>
                PDF
            </button>
            <button class="btn btn-excel" onclick="exportExcel()">
                <svg fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z" clip-rule="evenodd"/>
                </svg>
                Excel
            </button>
            <button class="btn btn-sheets" onclick="exportSheets()">
                <svg fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z" clip-rule="evenodd"/>
                </svg>
                G-Sheets
            </button>
        </div>

        <div class="summary-card">
            <svg fill="currentColor" viewBox="0 0 20 20">
                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"/>
            </svg>
            <h3>Detail Transaksi</h3>
        </div>
        <!-- Table Section -->
        <div class="table-container">
            <table id="laporanTable">
                <thead>
                    <tr>
                        <th>JENIS</th>
                        <th>KODE</th>
                        <th>NAMA BARANG</th>
                        <th>JUMLAH</th>
                        <th>SATUAN</th>
                        <th>TGL BUKU</th>
                        <th>HARGA SAT.</th>
                        <th>TOTAL HARGA</th>
                        <th>TGL DOKUMEN</th> 
                        <th>NO. BUKTI</th>
                        <th>NAMA/SUPPLIER</th>
                    </tr>
                </thead>
                <tbody id="detailTableBody"></tbody> 
            </table>
        </div>
    </div>

    <!-- Logout Modal -->
    <div id="logoutModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.6); backdrop-filter: blur(5px); z-index: 9999; justify-content: center; align-items: center;">
        <div style="background: white; border-radius: 20px; padding: 35px; max-width: 420px; width: 90%; text-align: center; box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);">
            <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #fef3c7 0%, #fbbf24 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px;">
                <svg width="45" height="45" fill="currentColor" viewBox="0 0 20 20" style="color: #92400e;">
                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                </svg>
            </div>
            <h2 style="font-size: 24px; font-weight: 700; color: #1f2937; margin-bottom: 12px;">Konfirmasi Logout</h2>
            <p style="font-size: 16px; color: #6b7280; margin-bottom: 30px;">Apakah Anda yakin ingin keluar dari website ini?</p>
            <div style="display: flex; gap: 12px;">
                <button onclick="closeLogoutModal()" style="flex: 1; padding: 12px 30px; background: #f3f4f6; color: #4b5563; border: 2px solid #e5e7eb; border-radius: 10px; font-size: 15px; font-weight: 600; cursor: pointer;">Batal</button>
                <button onclick="confirmLogout()" style="flex: 1; padding: 12px 30px; background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%); color: white; border: none; border-radius: 10px; font-size: 15px; font-weight: 600; cursor: pointer; box-shadow: 0 4px 15px rgba(239, 68, 68, 0.3);">Ya, Logout</button>
            </div>
        </div>
    </div>

<script>
    const bulanNamaList = {
    '01': 'Januari', '02': 'Februari', '03': 'Maret', '04': 'April',
    '05': 'Mei', '06': 'Juni', '07': 'Juli', '08': 'Agustus',
    '09': 'September', '10': 'Oktober', '11': 'November', '12': 'Desember'
    };

    const GOOGLE_CLIENT_ID = '725972495548-3ndslhvjpk94r4k29cir5fbvha41fm07.apps.googleusercontent.com';
    const GOOGLE_SCOPE = 'https://www.googleapis.com/auth/spreadsheets https://www.googleapis.com/auth/drive.file';
    let googleAccessToken = null;

    function loadGoogleAPI() {
        return new Promise((resolve) => {
            if (window.google) { resolve(); return; }
            const script = document.createElement('script');
            script.src = 'https://accounts.google.com/gsi/client';
            script.onload = resolve;
            document.head.appendChild(script);
        });
    }

    async function exportSheets() {
        await loadGoogleAPI();
        const client = google.accounts.oauth2.initTokenClient({
            client_id: GOOGLE_CLIENT_ID,
            scope: GOOGLE_SCOPE,
            callback: async (response) => {
                if (response.error) { alert('Login Google gagal: ' + response.error); return; }
                googleAccessToken = response.access_token;
                await createAndFillSheet();
            }
        });
        client.requestAccessToken();
    }

    async function createAndFillSheet() {
        const bulanVal = document.getElementById('bulan').value;
        const bulanNama = bulanNamaList[bulanVal] || bulanVal;
        const tahun = document.getElementById('tahun').value;
        const judulSheet = `Laporan Persediaan ${bulanNama} ${tahun}`;
        const now = new Date();
        const tglCetak = `${String(now.getDate()).padStart(2,'0')} ${bulanNamaList[String(now.getMonth()+1).padStart(2,'0')]} ${now.getFullYear()} ${String(now.getHours()).padStart(2,'0')}:${String(now.getMinutes()).padStart(2,'0')}:${String(now.getSeconds()).padStart(2,'0')}`;

        try {
            // 1. Buat spreadsheet baru
            const createRes = await fetch('https://sheets.googleapis.com/v4/spreadsheets', {
                method: 'POST',
                headers: { 'Authorization': 'Bearer ' + googleAccessToken, 'Content-Type': 'application/json' },
                body: JSON.stringify({
                    properties: { title: judulSheet },
                    sheets: [{ properties: { title: 'Laporan' } }]
                })
            });
            const sheet = await createRes.json();
            const spreadsheetId = sheet.spreadsheetId;
            const spreadsheetUrl = sheet.spreadsheetUrl;
            const sheetId = sheet.sheets[0].properties.sheetId; 

            // 2. Siapkan data
            const allRows = [
                ['', '', '', '', 'BADAN PUSAT STATISTIK KOTA SEMARANG', '', '', '', '', '', ''],
                ['', '', '', '', 'Laporan Rekap Persediaan Barang', '', '', '', '', '', ''],
                ['', '', '', '', `Periode: ${bulanNama.toUpperCase()} ${tahun}`, '', '', '', '', '', ''],
                ['', '', '', '', '', '', '', '', '', '', ''],
                ['REKAP LAPORAN BULANAN', '', '', '', '', '', '', '', '', '', ''],
                ['Jenis', 'Kode', 'Nama Barang', 'Jumlah', 'Satuan', 'Tgl Buku', 'Harga Sat', 'Total Harga', 'Tgl Dokumen', 'No Bukti', 'Tag ID'],
                ...currentData.map(item => [
                    item.jenis === 'PEMBELIAN' ? 'BELI' : item.jenis,
                    item.kode || '', item.nama || '', item.jumlah || 0,
                    item.satuan || '', item.tgl_buku || '', item.harga_sat || 0,
                    item.total_harga || 0, item.tanggal_dokumen || '',
                    item.no_bukti || '', item.tag_id || ''
                ]),
                ['', '', '', '', '', '', '', '', '', '', ''],
                [`Dicetak pada: ${tglCetak}`, '', '', '', '', '', '', '', '', '', ''],
            ];

            // 3. Isi data ke sheet
            await fetch(`https://sheets.googleapis.com/v4/spreadsheets/${spreadsheetId}/values/Laporan!A1:K${allRows.length}?valueInputOption=RAW`, {
                method: 'PUT',
                headers: { 'Authorization': 'Bearer ' + googleAccessToken, 'Content-Type': 'application/json' },
                body: JSON.stringify({ values: allRows })
            });

            // 4. Format cells
            const formatRes = await fetch(`https://sheets.googleapis.com/v4/spreadsheets/${spreadsheetId}:batchUpdate`, {
                method: 'POST',
                headers: { 'Authorization': 'Bearer ' + googleAccessToken, 'Content-Type': 'application/json' },
                body: JSON.stringify({ requests: [
                    // Merge header instansi
                    { mergeCells: { range: { sheetId: sheetId, startRowIndex: 0, endRowIndex: 1, startColumnIndex: 4, endColumnIndex: 11 }, mergeType: 'MERGE_ALL' }},
                    { mergeCells: { range: { sheetId: sheetId, startRowIndex: 1, endRowIndex: 2, startColumnIndex: 4, endColumnIndex: 11 }, mergeType: 'MERGE_ALL' }},
                    { mergeCells: { range: { sheetId: sheetId, startRowIndex: 2, endRowIndex: 3, startColumnIndex: 4, endColumnIndex: 11 }, mergeType: 'MERGE_ALL' }},
                    
                    // Merge section label (row 5, index 4)
                    { mergeCells: { range: { sheetId: sheetId, startRowIndex: 4, endRowIndex: 5, startColumnIndex: 0, endColumnIndex: 11 }, mergeType: 'MERGE_ALL' }},

                    // Style header instansi (bold + center)
                    { repeatCell: {
                        range: { sheetId: sheetId, startRowIndex: 0, endRowIndex: 3, startColumnIndex: 4, endColumnIndex: 11 },
                        cell: { userEnteredFormat: { textFormat: { bold: true }, horizontalAlignment: 'CENTER' }},
                        fields: 'userEnteredFormat(textFormat,horizontalAlignment)'
                    }},

                    // Style section label: background hijau muda
                    { repeatCell: {
                        range: { sheetId: sheetId, startRowIndex: 4, endRowIndex: 5, startColumnIndex: 0, endColumnIndex: 11 },
                        cell: { userEnteredFormat: {
                            backgroundColor: { red: 220/255, green: 252/255, blue: 231/255 },
                            textFormat: { bold: true, foregroundColor: { red: 21/255, green: 128/255, blue: 61/255 }}
                        }},
                        fields: 'userEnteredFormat(backgroundColor,textFormat)'
                    }},

                    // Style header tabel (row 6, index 5): background hijau tua + teks putih
                    { repeatCell: {
                        range: { sheetId: sheetId, startRowIndex: 5, endRowIndex: 6, startColumnIndex: 0, endColumnIndex: 11 },
                        cell: { userEnteredFormat: {
                            backgroundColor: { red: 22/255, green: 163/255, blue: 74/255 },
                            textFormat: { bold: true, foregroundColor: { red: 1, green: 1, blue: 1 }},
                            horizontalAlignment: 'CENTER'
                        }},
                        fields: 'userEnteredFormat(backgroundColor,textFormat,horizontalAlignment)'
                    }},

                    // Auto resize kolom
                    { autoResizeDimensions: { dimensions: { sheetId: sheetId, dimension: 'COLUMNS', startIndex: 0, endIndex: 11 }}}
                ]})
                            });

            const formatJson = await formatRes.json();
            console.log('Format response:', JSON.stringify(formatJson));

            alert('✅ Google Sheets berhasil dibuat!');
            window.location.href = spreadsheetUrl;

        } catch (err) {
            alert('Gagal membuat Google Sheet: ' + err.message);
        }
    }
    const rawData = @json($allData);
    const saldoAwalMap = @json($saldoAwalPerBarang); 
    let originalData = Array.isArray(rawData) ? rawData : Object.values(rawData);

    // Helper: Parsing Tanggal
    function parseDate(str) {
        if (!str) return 0;
        const parts = str.split('/');
        return parts.length === 3 ? new Date(parts[2], parts[1] - 1, parts[0]).getTime() : 0;
    }

    // Default Sort Detail: Terbaru ke Terlama
    originalData.sort((a, b) => parseDate(b.tanggal_dokumen) - parseDate(a.tanggal_dokumen));
    
    let currentData = [...originalData];
    let summaryArray = []; // Akan diisi hasil grouping

    // Pagination Settings untuk Summary
    let currentPageSummary = 1;
    const rowsPerPageSummary = 10;

    function formatRupiah(angka) {
        return "Rp " + Number(angka || 0).toLocaleString('id-ID');
    }

    // 2. FUNGSI UTAMA RENDER
    function renderTable() {
        // --- PROSES GROUPING UNTUK SUMMARY ---
        const summaryMap = {};

        // Masukkan saldo awal
        Object.entries(saldoAwalMap).forEach(([kode, data]) => {
            summaryMap[kode] = {
                kode: kode, nama: data.nama, satuan: data.satuan,
                initial: parseInt(data.saldo) || 0, in: 0, out: 0
            };
        });

        // Tambah transaksi bulan ini ke summary
        currentData.forEach(item => {
            if (!summaryMap[item.kode]) {
                summaryMap[item.kode] = {
                    kode: item.kode, nama: item.nama, satuan: item.satuan,
                    initial: 0, in: 0, out: 0
                };
            }
            const jml = parseInt(item.jumlah || 0);
            if (item.jenis === 'PEMBELIAN' || item.jenis === 'BELI' || item.jenis === 'TRANSFER') {
                summaryMap[item.kode].in += jml;
            } else if (item.jenis === 'PAKAI') {
                summaryMap[item.kode].out += jml;
            }
        });

        // Convert ke Array & Urutkan A-Z Nama
        summaryArray = Object.values(summaryMap);
        summaryArray.sort((a, b) => (a.nama || "").localeCompare(b.nama || ""));

        // Render Page pertama Summary
        currentPageSummary = 1;
        renderSummaryPage();

        // --- RENDER DETAIL (SEMUA DATA TERFILTER) ---
        const detailBody = document.getElementById('detailTableBody');
        if (detailBody) {
            detailBody.innerHTML = '';
            currentData.forEach(item => {
                let badgeStyle = item.jenis === 'PAKAI' ? 'background:#fee2e2; color:#b91c1c;' : 'background:#dcfce7; color:#15803d;';
                let badgeLabel = (item.jenis === 'PEMBELIAN' || item.jenis === 'BELI') ? 'BELI' : item.jenis;

                detailBody.innerHTML += `
                    <tr>
                        <td><span class="badge" style="${badgeStyle}">${badgeLabel}</span></td>
                        <td style="font-weight:bold;">${item.kode || ''}</td>
                        <td>${item.nama || ''}</td>
                        <td style="text-align:center;">${item.jumlah || 0}</td>
                        <td>${item.satuan || ''}</td>
                        <td>${item.tgl_buku || ''}</td>
                        <td>${formatRupiah(item.harga_sat)}</td>
                        <td>${formatRupiah(item.total_harga)}</td>
                        <td>${item.tanggal_dokumen || ''}</td>
                        <td>${item.no_bukti || ''}</td>
                        <td>${item.tag_id || ''}</td>
                    </tr>`;
            });
        }
    }

    // 3. RENDER HALAMAN SPESIFIK SUMMARY
    function renderSummaryPage() {
        const summaryBody = document.getElementById('summaryTableBody');
        if (!summaryBody) return;

        summaryBody.innerHTML = '';
        const start = (currentPageSummary - 1) * rowsPerPageSummary;
        const end = start + rowsPerPageSummary;
        const pageItems = summaryArray.slice(start, end);

        pageItems.forEach(s => {
            const saldoAkhir = s.initial + s.in - s.out;
            summaryBody.innerHTML += `
                <tr style="border-bottom: 1px solid #f1f5f9;">
                    <td style="font-weight:bold; font-size:12px;">${s.kode}</td>
                    <td style="font-size:13px; color:#334155; overflow-wrap: break-word;">${s.nama}</td>
                    <td style="font-size:13px;">${s.satuan}</td>
                    <td style="text-align:center;">${s.initial}</td>
                    <td style="text-align:center;"><span class="badge" style="background:#dcfce7; color:#15803d; padding:2px 8px; border-radius:10px;">${s.in}</span></td>
                    <td style="text-align:center;"><span class="badge" style="background:#fee2e2; color:#b91c1c; padding:2px 8px; border-radius:10px;">${s.out}</span></td>
                    <td style="text-align:center; font-weight:bold; background:#f8fafc; color:${saldoAkhir < 0 ? '#b91c1c' : '#1e293b'}">${saldoAkhir}</td>
                </tr>`;
        });

        updateSummaryPaginationControls();
    }

    // 4. PAGINATION PINTAR (MAKS 5 TOMBOL)
    function updateSummaryPaginationControls() {
        const container = document.getElementById('summaryPageButtons');
        const info = document.getElementById('summaryPageInfo');
        if (!container) return;

        const totalPages = Math.ceil(summaryArray.length / rowsPerPageSummary);
        const from = summaryArray.length > 0 ? (currentPageSummary - 1) * rowsPerPageSummary + 1 : 0;
        const to = Math.min(currentPageSummary * rowsPerPageSummary, summaryArray.length);
        info.textContent = `Menampilkan ${from} - ${to} dari ${summaryArray.length} barang`;

        container.innerHTML = '';
        if (totalPages <= 1) return;

        let startPage = Math.max(1, currentPageSummary - 2);
        let endPage = Math.min(totalPages, startPage + 4);
        if (endPage - startPage < 4) startPage = Math.max(1, endPage - 4);

        if (startPage > 1) {
            addPageBtn(1, false, container);
            if (startPage > 2) {
                const dots = document.createElement('span');
                dots.textContent = '...';
                dots.style.padding = '5px';
                container.appendChild(dots);
            }
        }

        for (let i = startPage; i <= endPage; i++) {
            addPageBtn(i, i === currentPageSummary, container);
        }

        if (endPage < totalPages) {
            if (endPage < totalPages - 1) {
                const dots = document.createElement('span');
                dots.textContent = '...';
                dots.style.padding = '5px';
                container.appendChild(dots);
            }
            addPageBtn(totalPages, false, container);
        }
    }

    function addPageBtn(page, isActive, container) {
        const btn = document.createElement('button');
        btn.innerText = page;
        btn.style.cssText = `padding: 6px 12px; border: 1px solid #e2e8f0; border-radius: 6px; cursor: pointer; font-weight: bold; background: ${isActive ? '#4a5fc1' : 'white'}; color: ${isActive ? 'white' : '#4a5fc1'};`;
        btn.onclick = () => {
            currentPageSummary = page;
            renderSummaryPage();
            window.scrollTo({ top: 300, behavior: 'smooth' }); // Scroll ke tabel summary
        };
        container.appendChild(btn);
    }

    // 5. SEARCH & SORT
    function searchTable() {
        const term = document.getElementById('searchInput').value.toLowerCase();
        currentData = originalData.filter(item =>
            (item.nama && item.nama.toLowerCase().includes(term)) ||
            (item.kode && item.kode.toLowerCase().includes(term)) ||
            (item.tag_id && item.tag_id.toLowerCase().includes(term))
        );
        renderTable(); // Recalculate summary & detail
    }

    function sortTable() {
        const sortType = document.getElementById('sortSelect').value;
        if (sortType === 'nama-asc') currentData.sort((a, b) => (a.nama || '').localeCompare(b.nama || ''));
        else if (sortType === 'nama-desc') currentData.sort((a, b) => (b.nama || '').localeCompare(a.nama || ''));
        else if (sortType === 'tanggal-newest') currentData.sort((a, b) => parseDate(b.tanggal_dokumen) - parseDate(a.tanggal_dokumen));
        else if (sortType === 'tanggal-oldest') currentData.sort((a, b) => parseDate(a.tanggal_dokumen) - parseDate(b.tanggal_dokumen));
        renderTable();
    }

    document.addEventListener('DOMContentLoaded', () => renderTable());

    function confirmLogout() { window.location.href = "{{ route('logout') }}"; }
    function showLogoutModal() { document.getElementById('logoutModal').style.display = 'flex'; }
    function closeLogoutModal() { document.getElementById('logoutModal').style.display = 'none'; }

    function cetakPDF() {
        const bulanVal = document.getElementById('bulan').value;
        const tahun = document.getElementById('tahun').value;
        const bulanNama = bulanNamaList[bulanVal] || bulanVal;
        const now = new Date();
        const tglCetak = `${String(now.getDate()).padStart(2,'0')} ${bulanNamaList[String(now.getMonth()+1).padStart(2,'0')]} ${now.getFullYear()} ${String(now.getHours()).padStart(2,'0')}:${String(now.getMinutes()).padStart(2,'0')}:${String(now.getSeconds()).padStart(2,'0')}`;

        let rowsHtml = currentData.map(item => `
            <tr>
                <td><span class="badge-jenis ${item.jenis === 'PAKAI' ? 'pakai' : item.jenis === 'PEMBELIAN' ? 'beli' : 'transfer'}">${item.jenis === 'PEMBELIAN' ? 'BELI' : item.jenis}</span></td>
                <td>${item.kode || ''}</td>
                <td>${item.nama || ''}</td>
                <td style="text-align:center">${item.jumlah || 0}</td>
                <td style="text-align:center">${item.satuan || ''}</td>
                <td style="text-align:center">${item.tgl_buku || ''}</td>
                <td style="text-align:right">${item.harga_sat || 0}</td>
                <td style="text-align:right">${item.total_harga || 0}</td>
                <td style="text-align:center">${item.tanggal_dokumen || ''}</td>
                <td>${item.no_bukti || ''}</td>
                <td>${item.tag_id || ''}</td>
            </tr>`).join('');

        const pdfWindow = window.open('', '_blank');
        pdfWindow.document.write(`
            <!DOCTYPE html>
            <html>
            <head>
                <title>Laporan Rekap Persediaan Barang</title>
                <style>
                    * { margin: 0; padding: 0; box-sizing: border-box; }
                    body { font-family: Arial, sans-serif; font-size: 11px; color: #222; padding: 30px; }

                    /* Header */
                    .header { display: flex; align-items: center; justify-content: center; gap: 20px; padding-bottom: 16px; border-bottom: 2px solid #333; margin-bottom: 24px; }
                    .header img { width: 70px; height: 70px; object-fit: contain; }
                    .header-text { text-align: center; }
                    .header-text h1 { font-size: 20px; font-weight: bold; letter-spacing: 1px; }
                    .header-text p { font-size: 12px; color: #444; margin-top: 2px; }

                    /* Judul */
                    .title-section { text-align: center; margin-bottom: 20px; }
                    .title-section h2 { font-size: 15px; font-weight: bold; text-decoration: underline; text-underline-offset: 3px; text-transform: uppercase; letter-spacing: 1px; }
                    .title-section p { font-size: 12px; margin-top: 4px; color: #555; }

                    /* Section label */
                    .section-label { background: #dcfce7; color: #15803d; border-left: 3px solid #16a34a; font-weight: bold; font-size: 12px; padding: 8px 14px; margin-bottom: 5px; display: block; width: 100%; }

                    /* Tabel */
                    table { width: 100%; border-collapse: collapse; font-size: 9px; }
                    thead tr { background: #16a34a; color: white; }
                    thead th { padding: 8px 6px; text-align: center; font-weight: bold; border: 1px solid #15803d; }
                    tbody tr:nth-child(even) { background: #f9fafb; }
                    tbody tr:nth-child(odd) { background: #ffffff; }
                    tbody td { padding: 7px 6px; border: 1px solid #e5e7eb; vertical-align: middle; word-wrap: break-word; }

                    /* Badge */
                    .badge-jenis { padding: 3px 10px; border-radius: 4px; font-size: 9px; font-weight: bold; display: inline-block; }
                    .badge-jenis.pakai { background: #fee2e2; color: #b91c1c; }
                    .badge-jenis.beli { background: #dcfce7; color: #15803d; }
                    .badge-jenis.transfer { background: #fef9c3; color: #a16207; }

                    /* Footer */
                    .footer { text-align: center; margin-top: 24px; font-size: 10px; color: #888; }

                    @media print {
                        body { padding: 15px; -webkit-print-color-adjust: exact; print-color-adjust: exact; }
                        table { table-layout: fixed; }
                    }
                </style>
            </head>
            <body>
                <div class="header">
                    <img src="/assets/images/logoBPS.png" alt="Logo BPS" onerror="this.style.display='none'">
                    <div class="header-text">
                        <h1>BPS KOTA SEMARANG</h1>
                        <p>Laporan Rekap Persediaan Barang</p>
                        <p>Tahun ${tahun}</p>
                    </div>
                </div>

                <div class="title-section">
                    <h2>Laporan Rekap Persediaan Barang</h2>
                    <p>Periode: ${bulanNama.toUpperCase()} ${tahun}</p>
                </div>

                <div class="section-label">REKAP LAPORAN BULANAN</div>
                <table>
                    <thead>
                        <tr>
                            <th>Jenis</th>
                            <th>Kode</th>
                            <th>Nama Barang</th>
                            <th>Jumlah</th>
                            <th>Satuan</th>
                            <th>Tgl Buku</th>
                            <th>Harga Sat.</th>
                            <th>Total Harga</th>
                            <th>Tgl Dokumen</th>
                            <th>No. Bukti</th>
                            <th>Tag ID</th>
                        </tr>
                    </thead>
                    <tbody>${rowsHtml}</tbody>
                </table>

                <div class="footer">Dicetak pada: ${tglCetak}</div>
            </body>
            </html>
        `);
        pdfWindow.document.close();
        setTimeout(() => pdfWindow.print(), 500);
    }
    // 8. FIX EXCEL
    async function exportExcel() {
        const bulanVal = document.getElementById('bulan').value;
        const bulanNama = bulanNamaList[bulanVal] || bulanVal;
        const tahun = document.getElementById('tahun').value;
        const now = new Date();
        const tglCetak = `${String(now.getDate()).padStart(2,'0')} ${bulanNamaList[String(now.getMonth()+1).padStart(2,'0')]} ${now.getFullYear()} ${String(now.getHours()).padStart(2,'0')}:${String(now.getMinutes()).padStart(2,'0')}:${String(now.getSeconds()).padStart(2,'0')}`;

        const workbook = new ExcelJS.Workbook();
        const worksheet = workbook.addWorksheet('Laporan Persediaan');

        // ── Lebar kolom ──────────────────────────────────────────────────────
        worksheet.columns = [
            { key: 'jenis',        width: 12 },
            { key: 'kode',         width: 22 },
            { key: 'nama',         width: 45 },
            { key: 'jumlah',       width: 10 },
            { key: 'satuan',       width: 12 },
            { key: 'tgl_buku',     width: 15 },
            { key: 'harga_sat',    width: 18 },
            { key: 'total_harga',  width: 18 },
            { key: 'tgl_dok',      width: 15 },
            { key: 'no_bukti',     width: 20 },
            { key: 'tag_id',       width: 35 }
        ];

        const totalCols = worksheet.columns.length; // 11
        const lastCol   = String.fromCharCode(64 + totalCols); // 'K'

        // ── ROW 1-4: Area header (logo + judul di tengah bersama) ─────────────
        // Semua kolom di-merge penuh A-K, logo float di tengah-kiri judul
        worksheet.addRow([]); // row 1
        worksheet.addRow([]); // row 2
        worksheet.addRow([]); // row 3
        worksheet.addRow([]); // row 4 kosong

        // Set tinggi row 1-3 agar logo + teks muat
        // Merge seluruh kolom A-K untuk tiap row judul
        worksheet.mergeCells(`A1:${lastCol}1`);
        worksheet.mergeCells(`A2:${lastCol}2`);
        worksheet.mergeCells(`A3:${lastCol}3`);

        // Row 1: Nama instansi
        const cellR1 = worksheet.getCell('A1');
        cellR1.value     = '   BADAN PUSAT STATISTIK KOTA SEMARANG';
        cellR1.font      = { bold: true, size: 14 };
        cellR1.alignment = { horizontal: 'center', vertical: 'middle' };

        // Row 2: Sub judul
        const cellR2 = worksheet.getCell('A2');
        cellR2.value     = '   Laporan Rekap Persediaan Barang';
        cellR2.font      = { bold: true, size: 12 };
        cellR2.alignment = { horizontal: 'center', vertical: 'middle' };

        // Row 3: Periode
        const cellR3 = worksheet.getCell('A3');
        cellR3.value     = `Periode: ${bulanNama.toUpperCase()} ${tahun}`;
        cellR3.font      = { size: 11 };
        cellR3.alignment = { horizontal: 'center', vertical: 'middle' };

        // ── Logo di kolom A, row 1-3 (sebelah kiri judul) ────────────────────
        try {
            const response = await fetch('/assets/images/logoBPS.png');
            const imageBlob = await response.arrayBuffer();
            const imageId = workbook.addImage({
                buffer: imageBlob,
                extension: 'png',
            });
            // Hitung posisi logo agar ada di tengah, sebelah kiri teks judul
            // Kolom tengah = kolom ke-5 dari 11 kolom (sekitar col index 4)
            worksheet.addImage(imageId, {
                tl: { col: 3.0, row: 0.1 },
                ext: { width: 65, height: 65 }
            });
        } catch (e) {
            console.error('Gagal memuat logo:', e);
        }

        // ── Row 5: Section label ──────────────────────────────────────────────
        const sectionRow = worksheet.addRow(['REKAP LAPORAN BULANAN']);
        worksheet.mergeCells(`A${sectionRow.number}:${lastCol}${sectionRow.number}`);
        sectionRow.getCell(1).fill  = { type: 'pattern', pattern: 'solid', fgColor: { argb: 'DCFCE7' } };
        sectionRow.getCell(1).font  = { color: { argb: '15803D' }, bold: true };
        sectionRow.getCell(1).border = { left: { style: 'medium', color: { argb: '16A34A' } } };

        // ── Row 6: Header tabel ───────────────────────────────────────────────
        const headerRow = worksheet.addRow(['Jenis', 'Kode', 'Nama Barang', 'Jumlah', 'Satuan',
            'Tgl Buku', 'Harga Sat.', 'Total Harga', 'Tgl Dokumen', 'No. Bukti', 'Tag ID']);
        headerRow.eachCell((cell) => {
            cell.fill      = { type: 'pattern', pattern: 'solid', fgColor: { argb: '16A34A' } };
            cell.font      = { color: { argb: 'FFFFFF' }, bold: true };
            cell.alignment = { horizontal: 'center', vertical: 'middle' };
            cell.border    = { top:{style:'thin'}, left:{style:'thin'}, bottom:{style:'thin'}, right:{style:'thin'} };
        });

        // ── Data ──────────────────────────────────────────────────────────────
        currentData.forEach(item => {
            const row = worksheet.addRow([
                item.jenis === 'PEMBELIAN' ? 'BELI' : item.jenis,
                item.kode,
                item.nama,
                item.jumlah,
                item.satuan,
                item.tgl_buku,
                item.harga_sat,
                item.total_harga,
                item.tanggal_dokumen,
                item.no_bukti,
                item.tag_id
            ]);

            const jenisCell = row.getCell(1);
            if (item.jenis === 'PAKAI')          jenisCell.font = { color: { argb: 'B91C1C' }, bold: true };
            else if (item.jenis === 'PEMBELIAN') jenisCell.font = { color: { argb: '15803D' }, bold: true };
            else                                 jenisCell.font = { color: { argb: 'A16207' }, bold: true };

            row.eachCell({ includeEmpty: true }, (cell) => {
                cell.border    = { top:{style:'thin',color:{argb:'E5E7EB'}}, left:{style:'thin',color:{argb:'E5E7EB'}}, bottom:{style:'thin',color:{argb:'E5E7EB'}}, right:{style:'thin',color:{argb:'E5E7EB'}} };
                cell.alignment = { vertical: 'middle' };
            });
        });

        // ── Footer ────────────────────────────────────────────────────────────
        worksheet.addRow([]);
        const footerRow = worksheet.addRow([`Dicetak pada: ${tglCetak}`]);
        worksheet.mergeCells(`A${footerRow.number}:${lastCol}${footerRow.number}`);
        footerRow.getCell(1).alignment = { horizontal: 'center' };
        footerRow.getCell(1).font      = { italic: true, color: { argb: '888888' }, size: 10 };

        // ── Download ──────────────────────────────────────────────────────────
        const buffer = await workbook.xlsx.writeBuffer();
        saveAs(new Blob([buffer]), `Laporan_Persediaan_${bulanNama}_${tahun}.xlsx`);
    }
</script>
</body>
</html>