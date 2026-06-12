<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Kartu Kendali Tahunan - Pencatatan ATK</title>
    <link rel="stylesheet" href="{{ asset('assets/css/kartuKendali.css') }}">
</head>
<body>

    {{-- ══════════════════════ SIDEBAR ══════════════════════ --}}
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
                <svg fill="currentColor" viewBox="0 0 20 20"><path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/></svg>
                Dashboard
            </a>
        </div>

        <div class="menu-section">
            <div class="menu-section-title">Inventaris</div>
            <a href="/pemasukanBarang" class="menu-item">
                <svg fill="currentColor" viewBox="0 0 20 20"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM14 11a1 1 0 011 1v1h1a1 1 0 110 2h-1v1a1 1 0 11-2 0v-1h-1a1 1 0 110-2h1v-1a1 1 0 011-1z"/></svg>
                Pemasukan Barang
            </a>
            <a href="/stockAwal" class="menu-item">
                <svg fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1.323l3.954 1.582 1.599-.8a1 1 0 01.894 1.79l-1.233.616 1.738 5.42a1 1 0 01-.285 1.05A3.989 3.989 0 0115 15a3.989 3.989 0 01-2.667-1.019 1 1 0 01-.285-1.05l1.715-5.349L11 6.477V16h2a1 1 0 110 2H7a1 1 0 110-2h2V6.477L6.237 7.582l1.715 5.349a1 1 0 01-.285 1.05A3.989 3.989 0 015 15a3.989 3.989 0 01-2.667-1.019 1 1 0 01-.285-1.05l1.738-5.42-1.233-.617a1 1 0 01.894-1.788l1.599.799L9 4.323V3a1 1 0 011-1z" clip-rule="evenodd"/></svg>
                Stock Awal Tahun
            </a>
        </div>

        <div class="menu-section">
            <div class="menu-section-title">Laporan</div>
            <a href="/laporanPengambilan" class="menu-item">
                <svg fill="currentColor" viewBox="0 0 20 20"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                Pengambilan Barang
            </a>
            <a href="/laporanRinciBulanan" class="menu-item">
                <svg fill="currentColor" viewBox="0 0 20 20"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"/></svg>
                Rinci Bulanan
            </a>
            <a href="/kartuKendali" class="menu-item active">
                <svg fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm2 10a1 1 0 10-2 0v3a1 1 0 102 0v-3zm2-3a1 1 0 011 1v5a1 1 0 11-2 0v-5a1 1 0 011-1zm4-1a1 1 0 10-2 0v7a1 1 0 102 0V8z" clip-rule="evenodd"/></svg>
                Kartu Kendali Tahunan
            </a>
            <a href="/laporanPermohonan" class="menu-item">
                <svg fill="currentColor" viewBox="0 0 20 20"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                Permohonan
            </a>
        </div>

        <div class="menu-section">
            <div class="menu-section-title">Data Master</div>
            <a href="/masterSupplier" class="menu-item">
                <svg fill="currentColor" viewBox="0 0 20 20"><path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"/><path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z"/></svg>
                Supplier
            </a>
            <a href="/masterBarang" class="menu-item">
                <svg fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm9 4a1 1 0 10-2 0v6a1 1 0 102 0V7zm-3 2a1 1 0 10-2 0v4a1 1 0 102 0V9zm-3 3a1 1 0 10-2 0v1a1 1 0 102 0v-1z" clip-rule="evenodd"/></svg>
                Barang
            </a>
            <a href="/masterPegawai" class="menu-item">
                <svg fill="currentColor" viewBox="0 0 20 20"><path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"/></svg>
                Pegawai
            </a>
        </div>

        <a href="javascript:void(0)" onclick="showLogoutModal()" class="logout-btn">
            <svg fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"/></svg>
            Logout
        </a>
    </div>

    {{-- ══════════════════════ MAIN CONTENT ══════════════════════ --}}
    <div class="main-content">

        <div class="page-header">
            <h1>Kartu Kendali Tahunan</h1>
            <p>Laporan Stock Per Barang Tiap Tahun</p>
        </div>

        {{-- Filter Card --}}
        <div class="filter-card">
            <div class="filter-header">
                <svg fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm2 10a1 1 0 10-2 0v3a1 1 0 102 0v-3zm2-3a1 1 0 011 1v5a1 1 0 11-2 0v-5a1 1 0 011-1zm4-1a1 1 0 10-2 0v7a1 1 0 102 0V8z" clip-rule="evenodd"/></svg>
                <h2>Kartu Stock Barang Tahunan</h2>
            </div>
            <p class="filter-subtitle">Kartu stock individual per barang sepanjang tahun</p>

            <div class="filter-form">
                <div class="form-group">
                    <label>Pilih Barang</label>
                    <select id="pilihBarang">
                        <option value="">-- Cari Barang --</option>
                        @foreach($barangs as $b)
                            <option value="{{ $b->id }}">{{ $b->nama_barang }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Tahun</label>
                    <select id="tahun">
                        @for($y = date('Y'); $y >= date('Y') - 4; $y--)
                            <option value="{{ $y }}" {{ $y == date('Y') ? 'selected' : '' }}>{{ $y }}</option>
                        @endfor
                    </select>
                </div>

                <button class="btn btn-primary" onclick="tampilkanKartu()">
                    <svg fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"/></svg>
                    Tampilkan
                </button>
            </div>
        </div>

        {{-- Alert Info --}}
        <div class="alert-info" id="alertInfo">
            <svg fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/></svg>
            <p>Pilih barang di atas untuk menampilkan kartu stock tahunannya.</p>
        </div>

        {{-- Daftar Barang --}}
        <div class="daftar-barang-section">
            <div class="table-header">
                <svg fill="currentColor" viewBox="0 0 20 20"><path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"/></svg>
                <h3>Daftar Barang ({{ $barangs->count() }})</h3>
            </div>

            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Satuan</th>
                            <th>Kartu Kendali</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($barangs as $b)
                        <tr>
                            <td>{{ $b->kode_barang ?? $b->id }}</td>
                            <td>{{ $b->nama_barang }}</td>
                            <td>{{ $b->satuan ?? '-' }}</td>
                            <td>
                                <button class="view-btn" onclick="lihatKartuById({{ $b->id }})">
                                    <svg fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                    </svg>
                                    Lihat Kartu
                                </button>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" style="text-align:center; color:#6b7280; padding:20px;">
                                Belum ada data barang.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <div style="display:flex; align-items:center; justify-content:space-between; 
            padding:12px 4px 0; flex-wrap:wrap; gap:12px; margin-top:-16px; margin-bottom:16px;" >
            <span style="font-size:13px; color:#6b7280;" id="paginationInfo"></span>
            <div id="paginationContainer" style="display:inline-flex; border:1px solid #e5e7eb; border-radius:10px; overflow:hidden; background:white;"></div>
        </div>

        {{-- Result Section --}}
        <div class="result-section" id="resultSection" style="display:none;">
            <div class="result-header">
                <h3 class="result-title" id="resultTitle">Kartu Stock Barang Tahunan</h3>
                <div class="export-buttons">
                    <button class="btn btn-excel" onclick="exportExcel()">
                        <svg fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z" clip-rule="evenodd"/></svg>
                        Excel
                    </button>
                    <button class="btn btn-pdf" onclick="cetakPDF()">
                        <svg fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z" clip-rule="evenodd"/></svg>
                        PDF
                    </button>
                </div>
            </div>

            {{-- Loading spinner --}}
            <div id="loadingSpinner" style="display:none; text-align:center; padding:40px;">
                <div style="display:inline-block; width:40px; height:40px; border:4px solid #e5e7eb;
                            border-top-color:#3b82f6; border-radius:50%; animation:spin 0.8s linear infinite;"></div>
                <p style="margin-top:12px; color:#6b7280;">Memuat data kartu kendali...</p>
            </div>

            <div id="kartuContent">
                {{-- HTML kartu akan diisi via AJAX --}}
            </div>
        </div>

    </div>

    {{-- Logout Modal --}}
    <div id="logoutModal" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%;
         background:rgba(0,0,0,0.6); backdrop-filter:blur(5px); z-index:9999;
         justify-content:center; align-items:center;">
        <div style="background:white; border-radius:20px; padding:35px; max-width:420px; width:90%;
                    text-align:center; box-shadow:0 20px 60px rgba(0,0,0,0.3);">
            <div style="width:80px; height:80px; background:linear-gradient(135deg,#fef3c7,#fbbf24);
                        border-radius:50%; display:flex; align-items:center; justify-content:center;
                        margin:0 auto 25px;">
                <svg width="45" height="45" fill="currentColor" viewBox="0 0 20 20" style="color:#92400e;">
                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                </svg>
            </div>
            <h2 style="font-size:24px; font-weight:700; color:#1f2937; margin-bottom:12px;">Konfirmasi Logout</h2>
            <p style="font-size:16px; color:#6b7280; margin-bottom:30px;">Apakah Anda yakin ingin keluar?</p>
            <div style="display:flex; gap:12px;">
                <button onclick="closeLogoutModal()"
                        style="flex:1; padding:12px; background:#f3f4f6; color:#4b5563; border:2px solid #e5e7eb;
                               border-radius:10px; font-size:15px; font-weight:600; cursor:pointer;">Batal</button>
                <button onclick="confirmLogout()"
                        style="flex:1; padding:12px; background:linear-gradient(135deg,#ef4444,#dc2626); color:white;
                               border:none; border-radius:10px; font-size:15px; font-weight:600; cursor:pointer;">Ya, Logout</button>
            </div>
        </div>
    </div>

    <style>
        @keyframes spin { to { transform: rotate(360deg); } }
    </style>

    <script>
        // ID barang yang sedang aktif ditampilkan
        // ──────────────────────────────────────────────────────────────
        // PAGINATION — Daftar Barang
        // ──────────────────────────────────────────────────────────────
        const ROWS_PER_PAGE = 10;
        let currentPage = 1;
        let allRows = [];

        function initPagination() {
            allRows = Array.from(document.querySelectorAll('.daftar-barang-section tbody tr'));
            // Jangan paginate jika hanya row "Belum ada data"
            if (allRows.length === 1 && allRows[0].querySelector('[colspan]')) return;
            renderPage(1);
        }

        function renderPage(page) {
            currentPage = page;
            const total = allRows.length;
            const totalPages = Math.max(1, Math.ceil(total / ROWS_PER_PAGE));
            currentPage = Math.min(currentPage, totalPages);

            const start = (currentPage - 1) * ROWS_PER_PAGE;
            const end = start + ROWS_PER_PAGE;

            allRows.forEach((r, i) => {
                r.style.display = (i >= start && i < end) ? '' : 'none';
            });

            const from = total === 0 ? 0 : start + 1;
            const to = Math.min(end, total);
            document.getElementById('paginationInfo').textContent =
                `Menampilkan ${from}–${to} dari ${total} barang`;

            renderPaginationButtons(totalPages);
        }

        function renderPaginationButtons(totalPages) {
            const container = document.getElementById('paginationContainer');
            container.innerHTML = '';

            const btnStyle = `padding:8px 14px; border:none; border-right:1px solid #e5e7eb;
                background:white; color:#4a5fc1; cursor:pointer; font-weight:600;
                font-size:13px; transition:background 0.15s;`;
            const activeStyle = `background:#4a5fc1 !important; color:white !important;`;

            const prev = document.createElement('button');
            prev.innerHTML = '&#8592;';
            prev.style.cssText = btnStyle;
            prev.style.opacity = currentPage === 1 ? '0.4' : '1';
            prev.style.cursor = currentPage === 1 ? 'not-allowed' : 'pointer';
            prev.disabled = currentPage === 1;
            prev.onclick = () => renderPage(currentPage - 1);
            container.appendChild(prev);

            getPageRange(currentPage, totalPages).forEach(p => {
                if (p === '...') {
                    const dot = document.createElement('span');
                    dot.textContent = '...';
                    dot.style.cssText = `padding:8px 10px; border-right:1px solid #e5e7eb;
                        color:#9ca3af; font-size:13px; background:white;`;
                    container.appendChild(dot);
                } else {
                    const btn = document.createElement('button');
                    btn.textContent = p;
                    btn.style.cssText = btnStyle + (p === currentPage ? activeStyle : '');
                    btn.onclick = () => renderPage(p);
                    container.appendChild(btn);
                }
            });

            const next = document.createElement('button');
            next.innerHTML = '&#8594;';
            next.style.cssText = btnStyle + 'border-right:none;';
            next.style.opacity = currentPage === totalPages ? '0.4' : '1';
            next.style.cursor = currentPage === totalPages ? 'not-allowed' : 'pointer';
            next.disabled = currentPage === totalPages;
            next.onclick = () => renderPage(currentPage + 1);
            container.appendChild(next);
        }

        function getPageRange(current, total) {
            if (total <= 7) return Array.from({length: total}, (_, i) => i + 1);
            if (current <= 4) return [1, 2, 3, 4, 5, '...', total];
            if (current >= total - 3) return [1, '...', total-4, total-3, total-2, total-1, total];
            return [1, '...', current-1, current, current+1, '...', total];
        }

        document.addEventListener('DOMContentLoaded', initPagination);

        let activeBarangId = null;

        // ──────────────────────────────────────────────────────────────
        // Tombol "Tampilkan" dari filter dropdown
        // ──────────────────────────────────────────────────────────────
        function tampilkanKartu() {
            const barangSelect = document.getElementById('pilihBarang');
            if (!barangSelect.value) {
                alert('Silakan pilih barang terlebih dahulu!');
                return;
            }
            lihatKartuById(barangSelect.value);
        }

        // ──────────────────────────────────────────────────────────────
        // Tombol "Lihat Kartu" dari tabel daftar barang
        // ──────────────────────────────────────────────────────────────
        function lihatKartuById(id) {
            const tahun = document.getElementById('tahun').value;
            activeBarangId = id;

            // Sembunyikan alert info
            document.getElementById('alertInfo').style.display = 'none';

            // Tampilkan result section + loading
            document.getElementById('resultSection').style.display = 'block';
            document.getElementById('loadingSpinner').style.display = 'block';
            document.getElementById('kartuContent').innerHTML = '';

            fetch(`/kartuKendali/barang/${id}?tahun=${tahun}`, {
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Accept': 'application/json',
                }
            })
            .then(res => {
                if (!res.ok) throw new Error('Gagal memuat data.');
                return res.json();
            })
            .then(data => {
                document.getElementById('loadingSpinner').style.display = 'none';
                document.getElementById('kartuContent').innerHTML = data.html;
                document.getElementById('resultTitle').textContent =
                    'Kartu Stock Barang Tahunan ' + tahun;
                document.getElementById('resultSection').scrollIntoView({ behavior: 'smooth' });
            })
            .catch(err => {
                document.getElementById('loadingSpinner').style.display = 'none';
                document.getElementById('kartuContent').innerHTML =
                    `<div style="color:#dc2626; padding:20px; text-align:center;">
                        ⚠️ ${err.message}
                    </div>`;
            });
        }

        // ──────────────────────────────────────────────────────────────
        // Export Excel — redirect ke URL dengan query ?export=excel
        // ──────────────────────────────────────────────────────────────
        function exportExcel() {
            if (!activeBarangId) {
                alert('Silakan pilih barang terlebih dahulu!');
                return;
            }
            const tahun = document.getElementById('tahun').value;
            window.location.href = `/kartuKendali/barang/${activeBarangId}?tahun=${tahun}&export=excel`;
        }

        // ──────────────────────────────────────────────────────────────
        // Cetak PDF — print hanya area kartu kendali
        // ──────────────────────────────────────────────────────────────
        function cetakPDF() {
            if (!activeBarangId) {
                alert('Silakan pilih barang terlebih dahulu!');
                return;
            }
            window.print();
        }

        // ──────────────────────────────────────────────────────────────
        // Logout modal
        // ──────────────────────────────────────────────────────────────
        function showLogoutModal()  { document.getElementById('logoutModal').style.display = 'flex'; }
        function closeLogoutModal() { document.getElementById('logoutModal').style.display = 'none'; }
        function confirmLogout() { window.location.href = "{{ route('logout') }}";}

        window.onclick = function (e) {
            const modal = document.getElementById('logoutModal');
            if (e.target === modal) closeLogoutModal();
        };
    </script>
</body>
</html>