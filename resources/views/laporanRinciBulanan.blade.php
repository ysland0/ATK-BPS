<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Rinci Bulanan - Pencatatan ATK</title>
    <!-- SheetJS Library untuk Excel Export -->
    <script src="https://cdn.sheetjs.com/xlsx-0.20.1/package/dist/xlsx.full.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/laporanRinciBulanan.css') }}">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header">
            <a href="/dashboard">
                <div class="sidebar-logo">
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"/>
                    </svg>
                </div>
                <div class="sidebar-title">Pencatatan<br>ATK</div>
            </a>
        </div>

        <div class="menu-section">
            <a href="/dashboard-page" class="menu-item">
                <svg fill="currentColor" viewBox="0 0 20 20">
                    <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                </svg>
                Dashboard
            </a>
        </div>

        <div class="menu-section">
            <div class="menu-section-title">Invetaris</div>
            <a href="/pemasukan-barang" class="menu-item">
                <svg fill="currentColor" viewBox="0 0 20 20">
                    <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM14 11a1 1 0 011 1v1h1a1 1 0 110 2h-1v1a1 1 0 11-2 0v-1h-1a1 1 0 110-2h1v-1a1 1 0 011-1z"/>
                </svg>
                Pemasukan Barang
            </a>
            <a href="/stock-awal-tahun" class="menu-item">
                <svg fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1.323l3.954 1.582 1.599-.8a1 1 0 01.894 1.79l-1.233.616 1.738 5.42a1 1 0 01-.285 1.05A3.989 3.989 0 0115 15a3.989 3.989 0 01-2.667-1.019 1 1 0 01-.285-1.05l1.715-5.349L11 6.477V16h2a1 1 0 110 2H7a1 1 0 110-2h2V6.477L6.237 7.582l1.715 5.349a1 1 0 01-.285 1.05A3.989 3.989 0 015 15a3.989 3.989 0 01-2.667-1.019 1 1 0 01-.285-1.05l1.738-5.42-1.233-.617a1 1 0 01.894-1.788l1.599.799L9 4.323V3a1 1 0 011-1z" clip-rule="evenodd"/>
                </svg>
                Stock Awal Tahun
            </a>
        </div>

        <div class="menu-section">
            <div class="menu-section-title">Laporan</div>
            <a href="/laporan-pengambilan" class="menu-item">
                <svg fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                    <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                Pengambilan Barang
            </a>
            <a href="/laporan-rinci-bulanan" class="menu-item active">
                <svg fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                    <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"/>
                </svg>
                Rinci Bulanan
            </a>
            <a href="/kartu-kendali" class="menu-item">
                <svg fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm2 10a1 1 0 10-2 0v3a1 1 0 102 0v-3zm2-3a1 1 0 011 1v5a1 1 0 11-2 0v-5a1 1 0 011-1zm4-1a1 1 0 10-2 0v7a1 1 0 102 0V8z" clip-rule="evenodd"/>
                </svg>
                Kartu kendali tahunan
            </a>
        </div>

        <div class="menu-section">
            <div class="menu-section-title">Data Master</div>
            <a href="/master-supplier" class="menu-item">
                <svg fill="currentColor" viewBox="0 0 20 20">
                    <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"/>
                    <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z"/>
                </svg>
                Supplier
            </a>
            <a href="/master-barang" class="menu-item">
                <svg fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm9 4a1 1 0 10-2 0v6a1 1 0 102 0V7zm-3 2a1 1 0 10-2 0v4a1 1 0 102 0V9zm-3 3a1 1 0 10-2 0v1a1 1 0 102 0v-1z" clip-rule="evenodd"/>
                </svg>
                Barang
            </a>
            <a href="/master-pegawai" class="menu-item">
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
            <h1>Laporan Rekap Persediaan Barang - FEBRUARI 2026</h1>
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

            <div class="filter-form">
                <div class="form-group">
                    <label>Bulan</label>
                    <select id="bulan">
                        <option value="01">Januari</option>
                        <option value="02" selected>Februari</option>
                        <option value="03">Maret</option>
                        <option value="04">April</option>
                        <option value="05">Mei</option>
                        <option value="06">Juni</option>
                        <option value="07">Juli</option>
                        <option value="08">Agustus</option>
                        <option value="09">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Tahun</label>
                    <select id="tahun">
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026" selected>2026</option>
                    </select>
                </div>

                <button class="btn btn-primary" onclick="tampilkanLaporan()">
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"/>
                    </svg>
                    Tampilkan
                </button>
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

        <!-- Summary Card -->
        <div class="summary-card">
            <svg fill="currentColor" viewBox="0 0 20 20">
                <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
            </svg>
            <h3>Summary per Barang</h3>
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

        <!-- Table Section -->
        <div class="table-section">
            <div class="table-container">
                <table id="laporanTable">
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
                            <th>Pemasukan</th>
                            <th>Pengambilan</th>
                            <th>Saldo Akhir</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                        <!-- Data will be inserted here -->
                    </tbody>
                </table>
            </div>
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
        // Data laporan (contoh)
        let laporanData = [
            {id: 1, jenis: 'PAKAI', kode: '10103010100030', nama: 'Ballpoint Snowman v5', jumlah: 1, satuan: 'Buah', tglBuku: '12/02/2026', hargaSat: 0, totalHarga: 0, tglDokumen: '12/02/2026', noBukti: '3374-9', tagId: 'Nita Amaliyah, A.P.Kb.N.', pemasukan: 0, pengambilan: 1, saldoAkhir: 23},
            {id: 2, jenis: 'PAKAI', kode: '10103010030021', nama: 'Binder Klip no. 107', jumlah: 1, satuan: 'Dus', tglBuku: '10/02/2026', hargaSat: 0, totalHarga: 0, tglDokumen: '10/02/2026', noBukti: '3374-7', tagId: 'Astuti Dewi Adiningtyas, SST', pemasukan: 0, pengambilan: 1, saldoAkhir: 55},
            {id: 3, jenis: 'PAKAI', kode: '10103010030022', nama: 'Binder Klip no.260', jumlah: 1, satuan: 'Dus', tglBuku: '10/02/2026', hargaSat: 0, totalHarga: 0, tglDokumen: '10/02/2026', noBukti: '3374-7', tagId: 'Astuti Dewi Adiningtyas, SST', pemasukan: 0, pengambilan: 1, saldoAkhir: 2},
            {id: 4, jenis: 'PAKAI', kode: '10103010030028', nama: 'Binder Klip No. 155', jumlah: 1, satuan: 'Dus', tglBuku: '10/02/2026', hargaSat: 0, totalHarga: 0, tglDokumen: '10/02/2026', noBukti: '3374-7', tagId: 'Astuti Dewi Adiningtyas, SST', pemasukan: 0, pengambilan: 1, saldoAkhir: 32},
            {id: 5, jenis: 'PAKAI', kode: '10103010060032', nama: 'Stofmap Cetakan BPS Kota Semarang', jumlah: 7, satuan: 'Buah', tglBuku: '02/02/2026', hargaSat: 0, totalHarga: 0, tglDokumen: '02/02/2026', noBukti: '3374-1', tagId: 'Hartanto Agoestijono, SH', pemasukan: 0, pengambilan: 7, saldoAkhir: 285},
            {id: 6, jenis: 'PAKAI', kode: '10103010060032', nama: 'Stofmap Cetakan BPS Kota Semarang', jumlah: 3, satuan: 'Buah', tglBuku: '03/02/2026', hargaSat: 0, totalHarga: 0, tglDokumen: '03/02/2026', noBukti: '3374-2', tagId: 'Hartanto Agoestijono, SH', pemasukan: 0, pengambilan: 3, saldoAkhir: 282},
            {id: 7, jenis: 'PAKAI', kode: '10103010060032', nama: 'Stofmap Cetakan BPS Kota Semarang', jumlah: 4, satuan: 'Buah', tglBuku: '04/02/2026', hargaSat: 0, totalHarga: 0, tglDokumen: '04/02/2026', noBukti: '3374-3', tagId: 'Metriana Jovanika, SST', pemasukan: 0, pengambilan: 4, saldoAkhir: 278},
            {id: 8, jenis: 'PAKAI', kode: '10103010060032', nama: 'Stofmap Cetakan BPS Kota Semarang', jumlah: 5, satuan: 'Buah', tglBuku: '05/02/2026', hargaSat: 0, totalHarga: 0, tglDokumen: '05/02/2026', noBukti: '3374-4', tagId: 'Hartanto Agoestijono, SH', pemasukan: 0, pengambilan: 5, saldoAkhir: 273},
            {id: 9, jenis: 'PAKAI', kode: '10103010060032', nama: 'Stofmap Cetakan BPS Kota Semarang', jumlah: 4, satuan: 'Buah', tglBuku: '06/02/2026', hargaSat: 0, totalHarga: 0, tglDokumen: '06/02/2026', noBukti: '3374-5', tagId: 'Hartanto Agoestijono, SH', pemasukan: 0, pengambilan: 4, saldoAkhir: 269},
            {id: 10, jenis: 'PAKAI', kode: '10103010060032', nama: 'Stofmap Cetakan BPS Kota Semarang', jumlah: 5, satuan: 'Buah', tglBuku: '09/02/2026', hargaSat: 0, totalHarga: 0, tglDokumen: '09/02/2026', noBukti: '3374-6', tagId: 'Nita Amaliyah, A.P.Kb.N.', pemasukan: 0, pengambilan: 5, saldoAkhir: 264}
        ];

        let originalData = [...laporanData];

        // Render table
        function renderTable(data = laporanData) {
            const tbody = document.getElementById('tableBody');
            tbody.innerHTML = '';

            data.forEach((item) => {
                const row = `
                    <tr>
                        <td><span class="badge badge-pakai">${item.jenis}</span></td>
                        <td>${item.kode}</td>
                        <td>${item.nama}</td>
                        <td>${item.jumlah}</td>
                        <td>${item.satuan}</td>
                        <td>${item.tglBuku}</td>
                        <td>${item.hargaSat.toFixed(2)}</td>
                        <td>${item.totalHarga.toFixed(2)}</td>
                        <td>${item.tglDokumen}</td>
                        <td>${item.noBukti}</td>
                        <td>${item.tagId}</td>
                        <td>
                            <button class="icon-btn green">
                                <svg fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                            </button>
                        </td>
                        <td>
                            <button class="icon-btn red">
                                <svg fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                            </button>
                        </td>
                        <td>${item.saldoAkhir}</td>
                    </tr>
                `;
                tbody.innerHTML += row;
            });
        }

        // Search table
        function searchTable() {
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            const filtered = originalData.filter(item => 
                item.nama.toLowerCase().includes(searchTerm) ||
                item.kode.toLowerCase().includes(searchTerm) ||
                item.tagId.toLowerCase().includes(searchTerm)
            );
            renderTable(filtered);
        }

        // Sort table
        function sortTable() {
            const sortType = document.getElementById('sortSelect').value;
            let sorted = [...laporanData];

            switch(sortType) {
                case 'nama-asc':
                    sorted.sort((a, b) => a.nama.localeCompare(b.nama));
                    break;
                case 'nama-desc':
                    sorted.sort((a, b) => b.nama.localeCompare(a.nama));
                    break;
                case 'tanggal-newest':
                    sorted.sort((a, b) => {
                        const dateA = a.tglDokumen.split('/').reverse().join('-');
                        const dateB = b.tglDokumen.split('/').reverse().join('-');
                        return dateB.localeCompare(dateA);
                    });
                    break;
                case 'tanggal-oldest':
                    sorted.sort((a, b) => {
                        const dateA = a.tglDokumen.split('/').reverse().join('-');
                        const dateB = b.tglDokumen.split('/').reverse().join('-');
                        return dateA.localeCompare(dateB);
                    });
                    break;
                default:
                    sorted = [...originalData];
            }

            laporanData = sorted;
            renderTable();
        }

        // Tampilkan laporan
        function tampilkanLaporan() {
            const bulan = document.getElementById('bulan').value;
            const tahun = document.getElementById('tahun').value;
            
            const bulanNama = ['', 'JANUARI', 'FEBRUARI', 'MARET', 'APRIL', 'MEI', 'JUNI', 
                             'JULI', 'AGUSTUS', 'SEPTEMBER', 'OKTOBER', 'NOVEMBER', 'DESEMBER'];
            
            document.querySelector('.page-header h1').textContent = 
                `Laporan Rekap Persediaan Barang - ${bulanNama[parseInt(bulan)]} ${tahun}`;
            
            renderTable();
        }

        // Cetak PDF
        function cetakPDF() {
            const bulan = document.getElementById('bulan').value;
            const tahun = document.getElementById('tahun').value;
            
            const bulanNama = ['', 'JANUARI', 'FEBRUARI', 'MARET', 'APRIL', 'MEI', 'JUNI', 
                             'JULI', 'AGUSTUS', 'SEPTEMBER', 'OKTOBER', 'NOVEMBER', 'DESEMBER'];

            const pdfWindow = window.open('', '_blank');
            pdfWindow.document.write(`
                <!DOCTYPE html>
                <html>
                <head>
                    <title>Laporan Rinci Bulanan</title>
                    <style>
                        body { font-family: Arial, sans-serif; padding: 20px; }
                        .header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px; border-bottom: 2px solid #000; padding-bottom: 15px; }
                        .header img { width: 80px; }
                        .header-text { text-align: center; flex: 1; }
                        .header-text h1 { font-size: 18px; margin: 5px 0; }
                        .header-text h2 { font-size: 14px; margin: 5px 0; font-weight: normal; }
                        .title { text-align: center; margin: 20px 0; }
                        .title h3 { font-size: 16px; font-weight: bold; text-decoration: underline; margin: 5px 0; }
                        .title p { font-size: 14px; margin: 5px 0; }
                        .rekap-header { background: #e8f5e9; padding: 10px; font-weight: bold; margin: 20px 0 10px 0; }
                        table { width: 100%; border-collapse: collapse; font-size: 11px; }
                        th, td { border: 1px solid #000; padding: 6px; text-align: left; }
                        th { background: #f0f0f0; font-weight: bold; }
                        .badge { background: #ffcdd2; color: #c62828; padding: 3px 8px; border-radius: 3px; font-size: 10px; font-weight: bold; }
                    </style>
                </head>
                <body>
                    <div class="header">
                        <img src="{{ asset('assets/images/logoBPS.png') }}" alt="Logo BPS" onerror="this.style.display='none'">
                        <div class="header-text">
                            <h1>BPS KOTA SEMARANG</h1>
                            <h2>Laporan Rekap Persediaan Barang</h2>
                            <h2>Tahun ${tahun}</h2>
                        </div>
                    </div>

                    <div class="title">
                        <h3>LAPORAN REKAP PERSEDIAAN BARANG</h3>
                        <p>Periode: ${bulanNama[parseInt(bulan)]} ${tahun}</p>
                    </div>

                    <div class="rekap-header">REKAP LAPORAN BULANAN</div>

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
                        <tbody>
                            ${laporanData.map(item => `
                                <tr>
                                    <td><span class="badge">${item.jenis}</span></td>
                                    <td>${item.kode}</td>
                                    <td>${item.nama}</td>
                                    <td>${item.jumlah}</td>
                                    <td>${item.satuan}</td>
                                    <td>${item.tglBuku}</td>
                                    <td>${item.hargaSat.toFixed(2)}</td>
                                    <td>${item.totalHarga.toFixed(2)}</td>
                                    <td>${item.tglDokumen}</td>
                                    <td>${item.noBukti}</td>
                                    <td>${item.tagId}</td>
                                </tr>
                            `).join('')}
                        </tbody>
                    </table>
                </body>
                </html>
            `);
            pdfWindow.document.close();
            pdfWindow.print();
        }

        // Export Excel
        function exportExcel() {
            const bulan = document.getElementById('bulan').value;
            const tahun = document.getElementById('tahun').value;
            const bulanNama = ['', 'FEBRUARI', 'FEBRUARI', 'MARET', 'APRIL', 'MEI', 'JUNI', 
                             'JULI', 'AGUSTUS', 'SEPTEMBER', 'OKTOBER', 'NOVEMBER', 'DESEMBER'];

            const wb = XLSX.utils.book_new();
            
            const wsData = [
                ['LAPORAN BULANAN RINCI'],
                [],
                [`Periode: ${bulanNama[parseInt(bulan)]} ${tahun}`],
                [],
                [],
                ['Jenis', 'Kode', 'Nama Barang', 'Jumlah', 'Satuan', 'Tgl Buku', 'Harga Satuan', 'Total Harga', 'Tgl Dokumen', 'No. Bukti', 'Tag ID'],
                ...laporanData.map(item => [
                    item.jenis,
                    item.kode,
                    item.nama,
                    item.jumlah,
                    item.satuan,
                    item.tglBuku,
                    item.hargaSat,
                    item.totalHarga,
                    item.tglDokumen,
                    item.noBukti,
                    item.tagId
                ])
            ];
            
            const ws = XLSX.utils.aoa_to_sheet(wsData);
            
            ws['!cols'] = [
                {wch: 10}, {wch: 18}, {wch: 35}, {wch: 8}, {wch: 10},
                {wch: 12}, {wch: 12}, {wch: 12}, {wch: 12}, {wch: 12}, {wch: 30}
            ];
            
            XLSX.utils.book_append_sheet(wb, ws, `Laporan_${bulanNama[parseInt(bulan)]}_${tahun}`);
            XLSX.writeFile(wb, `Laporan_Bulanan_${bulan}_${tahun}.xlsx`);
        }

        // Export Google Sheets
        function exportSheets() {
            alert('Fitur export ke Google Sheets akan segera tersedia!');
        }

        // Logout Modal
        function showLogoutModal() {
            document.getElementById('logoutModal').style.display = 'flex';
        }

        function closeLogoutModal() {
            document.getElementById('logoutModal').style.display = 'none';
        }

        function confirmLogout() {
            window.location.href = '/';
        }

        window.onclick = function(event) {
            const modal = document.getElementById('logoutModal');
            if (event.target === modal) {
                closeLogoutModal();
            }
        }

        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            renderTable();
        });
    </script>
</body>
</html>