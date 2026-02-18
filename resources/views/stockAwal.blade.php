<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Awal Tahun - Pencatatan ATK</title>
    <link rel="stylesheet" href="{{ asset('assets/css/stockAwal.css') }}">
</head>
<body>
    <!-- Sidebar (sama seperti sebelumnya) -->
    <div class="sidebar">
        <div class="sidebar-header">
            <a href="/landingPage">
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
            <a href="/stockAwal" class="menu-item active">
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
            <a href="#" class="menu-item">
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
        <!-- Page Header with Buttons -->
        <div class="page-header-wrapper">
            <div class="page-header">
                <h1>Stock Awal Tahun 2026</h1>
            </div>
            <div class="header-buttons">
                <button class="btn btn-cyan" onclick="downloadTemplate()">
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z" clip-rule="evenodd"/>
                    </svg>
                    Template
                </button>
                <button class="btn btn-green" onclick="showAddModal()">
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd"/>
                    </svg>
                    Tambah Satuan
                </button>
            </div>
        </div>

        <!-- Info Section -->
        <div class="info-section">
            <p class="info-subtitle">Alur stock awal untuk memulai pencatatan di tahun 2026</p>

            <!-- Stats Grid -->
            <div class="stats-grid">
                <div class="stats-card green">
                    <div class="stats-content">
                        <div class="stats-info">
                            <h3 id="statsComplete">79 / 79</h3>
                            <p>Barang Sudah Diatur Stock Awalnya</p>
                        </div>
                        <div class="stats-icon green">
                            <svg fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <div class="progress-fill" id="progressBar" style="width: 100%;"></div>
                    </div>
                    <div style="margin-top: 15px;">
                        <div class="alert-info" id="alertComplete">
                            <svg fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <p>Semua barang sudah diatur</p>
                        </div>
                    </div>
                </div>

                <div class="stats-card yellow">
                    <div class="stats-content">
                        <div class="stats-info">
                            <h3 id="statsIncomplete">0</h3>
                            <p>Barang Belum Diatur</p>
                        </div>
                        <div class="stats-icon yellow">
                            <svg fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Search and Sort Controls -->
        <div class="controls-section">
            <div class="controls-grid">
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
                        <option value="tanggal-newest">Tanggal (Terbaru)</option>
                        <option value="tanggal-oldest">Tanggal (Terlama)</option>
                        <option value="stock-high">Stock (Tertinggi)</option>
                        <option value="stock-low">Stock (Terendah)</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Table Section -->
        <div class="table-section">
            <div class="table-header">
                <svg fill="currentColor" viewBox="0 0 20 20">
                    <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"/>
                </svg>
                <h3>Daftar Stock Awal</h3>
            </div>

            <div class="table-container">
                <table id="stockTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Satuan</th>
                            <th>Stock Awal</th>
                            <th>Tanggal Entry</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                        <!-- Data akan diisi otomatis dari JavaScript -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Satuan -->
    <div id="addModal" class="modal-overlay">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Tambah Stock Awal Barang</h2>
                <button class="close-btn" onclick="closeAddModal()">
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                    </svg>
                </button>
            </div>

            <form id="stockForm" onsubmit="submitForm(event)">
                <div class="form-group">
                    <label>Pilih Barang <span>*</span></label>
                    <select id="barangSelect" required onchange="updateBarangInfo()">
                        <option value="">-- Pilih Barang --</option>
                        <option value="10103020020026|Kertas Concorde A4">Kertas Concorde A4</option>
                        <option value="10103010120002|Staples Joyko HD-50">Staples Joyko HD-50</option>
                        <option value="10103040040101|Tinta Epson 008 (BK)">Tinta Epson 008 (BK)</option>
                        <option value="10103010100027|Double tape - 3M stron">Double tape - 3M stron</option>
                        <option value="10103010100026|Selotip Daimaru 1 inch">Selotip Daimaru 1 inch</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Kode Barang</label>
                    <input type="text" id="kodeBarang" readonly style="background: #f3f4f6;">
                </div>

                <div class="form-group">
                    <label>Satuan <span>*</span></label>
                    <select id="satuan" required>
                        <option value="">Pilih Satuan</option>
                        <option value="Buah">Buah</option>
                        <option value="Box">Box</option>
                        <option value="Pak">Pak</option>
                        <option value="Rim">Rim</option>
                        <option value="Dus">Dus</option>
                        <option value="Lembar">Lembar</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Stock Awal <span>*</span></label>
                    <input type="number" id="stockAwal" placeholder="0" min="0" required>
                </div>

                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" id="keterangan" placeholder="Opsional">
                </div>

                <div class="modal-buttons">
                    <button type="button" class="modal-btn cancel-btn" onclick="closeAddModal()">Batal</button>
                    <button type="submit" class="modal-btn submit-btn">Simpan</button>
                </div>
            </form>
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
        // Data stock barang
        let stockData = [
            {id: 1, kode: '10103020040035', nama: 'Amplop Coklat Cokelat Folio', satuan: 'Lembar', stock: 62, tanggal: '2026-01-26', keterangan: '-'},
            {id: 2, kode: '10103020040040', nama: 'Amplop folio cokelat cetakan BPS Kota Semarang', satuan: 'Buah', stock: 663, tanggal: '2026-01-26', keterangan: '-'},
            {id: 3, kode: '10103020040039', nama: 'Amplop kabinet cokelat cetakan BPS Kota Semarang', satuan: 'Buah', stock: 131, tanggal: '2026-01-26', keterangan: '-'},
            {id: 4, kode: '10103020040034', nama: 'Amplop Kabinet Kop BPS', satuan: 'Buah', stock: 512, tanggal: '2026-01-26', keterangan: '-'},
            {id: 5, kode: '10103999990630', nama: 'Bahan Publikitas SE2026 (Totebag)', satuan: 'Buah', stock: 62, tanggal: '2026-01-26', keterangan: '-'},
            {id: 6, kode: '10103019990046', nama: 'Balliner Pilot', satuan: 'Buah', stock: 62, tanggal: '2026-01-26', keterangan: '-'},
            {id: 7, kode: '10103010010039', nama: 'Ballpoint Balliner Pilot', satuan: 'Buah', stock: 9, tanggal: '2026-01-26', keterangan: '-'},
            {id: 8, kode: '10103010010030', nama: 'Ballpoint Snowman v5', satuan: 'Buah', stock: 62, tanggal: '2026-01-26', keterangan: '-'},
            {id: 9, kode: '10103999990433', nama: 'Ballpoint Trendee 02 PKP 2023', satuan: 'Buah', stock: 624, tanggal: '2026-01-26', keterangan: '-'},
            {id: 10, kode: '10103060100004', nama: 'Batu Baterai ABC', satuan: 'Buah', stock: 2, tanggal: '2026-01-26', keterangan: '-'}
        ];

        let originalData = [...stockData];

        // Render table
        function renderTable(data = stockData) {
            const tbody = document.getElementById('tableBody');
            tbody.innerHTML = '';

            data.forEach((item, index) => {
                const row = `
                    <tr>
                        <td>${index + 1}</td>
                        <td>${item.kode}</td>
                        <td>${item.nama}</td>
                        <td>${item.satuan}</td>
                        <td><span class="stock-badge">${item.stock}</span></td>
                        <td>${formatTanggal(item.tanggal)}</td>
                        <td>${item.keterangan}</td>
                        <td>
                            <div class="action-buttons">
                                <button class="action-btn edit-btn" onclick="editStock(${item.id})">
                                    <svg fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>
                                    </svg>
                                </button>
                                <button class="action-btn delete-btn" onclick="deleteStock(${item.id})">
                                    <svg fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                `;
                tbody.innerHTML += row;
            });

            updateStats();
        }

        // Format tanggal
        function formatTanggal(tanggal) {
            const date = new Date(tanggal);
            const day = String(date.getDate()).padStart(2, '0');
            const month = String(date.getMonth() + 1).padStart(2, '0');
            const year = date.getFullYear();
            return `${day}/${month}/${year}`;
        }

        // Update statistics
        function updateStats() {
            const total = 79; // Total barang di master
            const complete = stockData.length;
            const incomplete = total - complete;
            const percentage = (complete / total) * 100;

            document.getElementById('statsComplete').textContent = `${complete} / ${total}`;
            document.getElementById('statsIncomplete').textContent = incomplete;
            document.getElementById('progressBar').style.width = `${percentage}%`;

            if (incomplete === 0) {
                document.getElementById('alertComplete').innerHTML = `
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <p>Semua barang sudah diatur</p>
                `;
                document.getElementById('alertComplete').className = 'alert-info';
            } else {
                document.getElementById('alertComplete').innerHTML = `
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                    </svg>
                    <p>Masih ada ${incomplete} barang yang belum diatur</p>
                `;
                document.getElementById('alertComplete').className = 'alert-warning';
            }
        }

        // Search table
        function searchTable() {
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            const filtered = originalData.filter(item => 
                item.nama.toLowerCase().includes(searchTerm) ||
                item.kode.toLowerCase().includes(searchTerm) ||
                item.satuan.toLowerCase().includes(searchTerm)
            );
            renderTable(filtered);
        }

        // Sort table
        function sortTable() {
            const sortType = document.getElementById('sortSelect').value;
            let sorted = [...stockData];

            switch(sortType) {
                case 'nama-asc':
                    sorted.sort((a, b) => a.nama.localeCompare(b.nama));
                    break;
                case 'nama-desc':
                    sorted.sort((a, b) => b.nama.localeCompare(a.nama));
                    break;
                case 'tanggal-newest':
                    sorted.sort((a, b) => new Date(b.tanggal) - new Date(a.tanggal));
                    break;
                case 'tanggal-oldest':
                    sorted.sort((a, b) => new Date(a.tanggal) - new Date(b.tanggal));
                    break;
                case 'stock-high':
                    sorted.sort((a, b) => b.stock - a.stock);
                    break;
                case 'stock-low':
                    sorted.sort((a, b) => a.stock - b.stock);
                    break;
                default:
                    sorted = [...originalData];
            }

            stockData = sorted;
            renderTable();
        }

        // Download template Excel
        function downloadTemplate() {
            // Simulasi download template
            const csvContent = "No,Kode Barang,Nama Barang,Satuan,Stock Awal,Keterangan\n" +
                "1,10103020020026,Kertas Concorde A4,pak,0,\n" +
                "2,10103010120002,Staples Joyko HD-50,buah,0,\n" +
                "3,10103040040101,Tinta Epson 008 (BK),buah,0,\n" +
                "4,10103010100027,Double tape - 3M stron,buah,0,\n" +
                "5,10103010100026,Selotip Daimaru 1 inch,buah,0,";
            
            const blob = new Blob([csvContent], { type: 'text/csv;charset=utf-8;' });
            const link = document.createElement('a');
            const url = URL.createObjectURL(blob);
            
            link.setAttribute('href', url);
            link.setAttribute('download', 'Template_Stock_Awal_Tahun_2026.csv');
            link.style.visibility = 'hidden';
            
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }

        // Modal functions
        function showAddModal() {
            document.getElementById('addModal').style.display = 'flex';
        }

        function closeAddModal() {
            document.getElementById('addModal').style.display = 'none';
            document.getElementById('stockForm').reset();
            document.getElementById('kodeBarang').value = '';
        }

        function updateBarangInfo() {
            const select = document.getElementById('barangSelect');
            const selectedValue = select.value;
            
            if (selectedValue) {
                const [kode, nama] = selectedValue.split('|');
                document.getElementById('kodeBarang').value = kode;
            } else {
                document.getElementById('kodeBarang').value = '';
            }
        }

        function submitForm(event) {
            event.preventDefault();
            
            const barangSelect = document.getElementById('barangSelect');
            const [kode, nama] = barangSelect.value.split('|');
            const satuan = document.getElementById('satuan').value;
            const stock = parseInt(document.getElementById('stockAwal').value);
            const keterangan = document.getElementById('keterangan').value || '-';

            const newStock = {
                id: stockData.length + 1,
                kode: kode,
                nama: nama,
                satuan: satuan,
                stock: stock,
                tanggal: new Date().toISOString().split('T')[0],
                keterangan: keterangan
            };

            stockData.push(newStock);
            originalData.push(newStock);
            
            renderTable();
            closeAddModal();
            
            alert('Stock awal berhasil ditambahkan!');
        }

        function editStock(id) {
            alert('Edit stock barang ID: ' + id);
        }

        function deleteStock(id) {
            if (confirm('Apakah Anda yakin ingin menghapus data stock ini?')) {
                stockData = stockData.filter(item => item.id !== id);
                originalData = originalData.filter(item => item.id !== id);
                renderTable();
                alert('Stock berhasil dihapus!');
            }
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

        // Close modals on outside click
        window.onclick = function(event) {
            const addModal = document.getElementById('addModal');
            const logoutModal = document.getElementById('logoutModal');
            
            if (event.target === addModal) {
                closeAddModal();
            }
            if (event.target === logoutModal) {
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