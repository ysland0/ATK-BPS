<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Permohonan Barang - Admin</title>
    <link rel="stylesheet" href="{{ asset('assets/css/laporanPermohonan.css') }}">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Header -->
        <div class="sidebar-header">
            <div class="sidebar-logo">
                <a href="#" class="logo-link">
                <svg fill="currentColor" viewBox="0 0 20 20">
                    <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"/>
                </svg>
            </a>
            </div>
            <div class="sidebar-title">Pencatatan<br>ATK</div>
        </div>

        <!-- Menu Dashboard -->
        <div class="menu-section">
            <a href="/dashboardPage" class="menu-item">
                <svg fill="currentColor" viewBox="0 0 20 20">
                    <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                </svg>
                Dashboard
            </a>
        </div>

        <!-- Menu Invetaris -->
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

        <!-- Menu Laporan -->
        <div class="menu-section">
            <div class="menu-section-title">Laporan</div>
            <a href="/laporanPengambilan" class="menu-item">
                <svg fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                    <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                Pengambilan Barang
            </a>
            <a href="/laporanRinciBulanan" class="menu-item">
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
            <a href="/laporanPermohonan" class="menu-item active">
                <svg fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                    <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                Permohonan
            </a>
        </div>

        <!-- Menu Data Master -->
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

    <main class="main-content">
    <!-- Header -->
    <div class="page-header">
        <div class="page-title">
            <h1>Permohonan Barang</h1>
            <p>Laporan Permohonan Barang</p>
        </div>
    </div>
    <!-- Request Cards -->
        <div class="request-cards" id="requestCards">
            <!-- Card 1 -->
            <div class="request-card" data-name="kertas hvs warna merah" data-employee="siti aminah">
                <div class="request-info">
                    <div class="request-details">
                        <h3>Kertas HVS warna Merah</h3>
                        <p>Siti Aminah</p>
                    </div>
                </div>
                <div class="request-actions">
                    <button class="btn-action btn-selesai" onclick="selesaiRequest(this)">
                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Diterima
                    </button>
                    <button class="btn-action btn-tolak" onclick="tolakRequest(this)">
                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                        Ditolak
                    </button>
                </div>
                </div>

            <!-- Card 2 -->
            <div class="request-card" data-name="kertas hvs warna merah" data-employee="siti aminah">
                <div class="request-info">
                    <div class="request-details">
                        <h3>Kertas HVS warna Merah</h3>
                        <p>Siti Aminah</p>
                    </div>
                </div>
                <div class="request-actions">
                    <button class="btn-action btn-selesai" onclick="selesaiRequest(this)">
                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Diterima
                    </button>
                    <button class="btn-action btn-tolak" onclick="tolakRequest(this)">
                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                        Ditolak
                    </button>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="request-card" data-name="kertas hvs warna merah" data-employee="siti aminah">
                <div class="request-info">
                    <div class="request-details">
                        <h3>Kertas HVS warna Merah</h3>
                        <p>Siti Aminah</p>
                    </div>
                </div>
                <div class="request-actions">
                    <button class="btn-action btn-selesai" onclick="selesaiRequest(this)">
                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Diterima
                    </button>
                    <button class="btn-action btn-tolak" onclick="tolakRequest(this)">
                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                        Ditolak
                    </button>
                </div>
            </div>
        </div>
        <button class="btn-print" onclick="printPDF()">
            <svg width="16" height="16" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M5 4v3H4a2 2 0 00-2 2v3a2 2 0 002 2h1v2a2 2 0 002 2h6a2 2 0 002-2v-2h1a2 2 0 002-2V9a2 2 0 00-2-2h-1V4a2 2 0 00-2-2H7a2 2 0 00-2 2zm8 0H7v3h6V4zm0 8H7v4h6v-4z" clip-rule="evenodd"/>
            </svg>
            Print PDF
        </button>
        <!-- Alert Info -->
        <div class="alert-info">
            <svg fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
            </svg>
            <p>Print PDF Untuk mengajukan Laporan Permohonan Barang Kepada Pimpinan</p>
        </div>
    </div>

        <!-- Print Template (Hidden) -->
    <div class="print-container" id="printContainer" style="display: none;">
        <div class="print-header">
            <div class="print-logo">
                <img src="{{ asset('assets/images/logoBPS.png') }}" alt="Logo BPS">
                <div>
                    <h3 style="margin: 0; font-size: 14px; font-weight: 700;">BADAN PUSAT STATISTIK</h3>
                    <h3 style="margin: 0; font-size: 14px; font-weight: 700;">KOTA SEMARANG</h3>
                </div>
            </div>

            <div class="print-title">
                <h2>SURAT PERMOHONAN PERSEDIAAN BARANG</h2>
                <h2>ATK/CETAKAN/DLL</h2>
            </div>

            <div class="print-info">
                <div>
                    <span>No : <span id="printNo">______</span></span>
                </div>
                <div>
                    <span>Tahun: <span id="printYear">2026</span></span>
                </div>
            </div>
        </div>
    </div>
        <div class="print-table-wrapper">
            <table class="data-table" id="printTable" style="display: none;">
                <thead>
                    <tr>
                        <th style="width: 5%;">No.</th>
                        <th style="width: 25%;">Nama Barang</th>
                        <th style="width: 20%;">Nama Peminta Barang</th>
                    </tr>
                </thead>
                <tbody id="printTableBody">
                    <!-- Will be filled by JavaScript -->
                </tbody>
            </table>
        </div>

        <div class="print-signatures" style="display: none;" id="printSignatures">
            <div class="signature-block">
                <p>Mengetahui</p>
                <p class="date">Semarang, <span id="printDate">_____________</span></p>
                <p style="margin-top: 50px; margin-bottom: 5px;">Kepala Subbagian Umum</p>
                <br><br><br>
                <p class="name">Ir. Rina Wulanjar</p>
                <p class="nip">NIP. 19690120 199401 2 001</p>
            </div>

            <div class="signature-block">
                <p>Petugas Persediaan</p>
                <p style="margin-top: 50px; margin-bottom: 5px;">&nbsp;</p>
                <br><br><br>
                <p class="name">Hartanto Agoestijono</p>
                <p class="nip">NIP. 19700802 199102 1 002</p>
            </div>
        </div>

        <!-- Data Table -->
        <div class="data-table-container">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Nama Barang</th>
                        <th>Nama Pegawai</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="tableBody">
                    <tr>
                        <td>
                            <div>
                                <div style="font-weight: 600;">kertas HVS warna Merah</div>
                            </div>
                        </td>
                        <td>
                            <div style="font-weight: 600;">Siti Aminah</div>
                        <td>
                            <span class="status-badge status-selesai">Diterima</span>
                        </td>
                        <td>
                            <div class="action-icons">
                                <button class="icon-btn view" onclick="viewRequest(this)" title="Lihat Detail">
                                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                    </svg>
                                </button>
                                <button class="icon-btn edit" onclick="editRequest(this)" title="Edit">
                                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>
                                    </svg>
                                </button>
                                <button class="icon-btn delete" onclick="deleteRequest(this)" title="Hapus">
                                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>
                                <div style="font-weight: 600;">kertas HVS warna Merah</div>
                            </div>
                        </td>
                        <td>
                            <div style="font-weight: 600;">Siti Aminah</div>
                        <td>
                            <span class="status-badge status-selesai">Diterima</span>
                        </td>
                        <td>
                            <div class="action-icons">
                                <button class="icon-btn view" onclick="viewRequest(this)" title="Lihat Detail">
                                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                    </svg>
                                </button>
                                <button class="icon-btn edit" onclick="editRequest(this)" title="Edit">
                                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>
                                    </svg>
                                </button>
                                <button class="icon-btn delete" onclick="deleteRequest(this)" title="Hapus">
                                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>
                                <div style="font-weight: 600;">kertas HVS warna Merah</div>
                            </div>
                        </td>
                        <td>
                            <div style="font-weight: 600;">Siti Aminah</div>
                        <td>
                            <span class="status-badge status-selesai">Diterima</span>
                        </td>
                        <td>
                            <div class="action-icons">
                                <button class="icon-btn view" onclick="viewRequest(this)" title="Lihat Detail">
                                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                    </svg>
                                </button>
                                <button class="icon-btn edit" onclick="editRequest(this)" title="Edit">
                                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>
                                    </svg>
                                </button>
                                <button class="icon-btn delete" onclick="deleteRequest(this)" title="Hapus">
                                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
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
    </main>

    <script>
        // Print PDF Function
        function printPDF() {
            const tableRows = document.querySelectorAll('#tableBody tr');
            const acceptedItems = [];
            
            // Collect accepted items
            tableRows.forEach(row => {
                const statusBadge = row.querySelector('.status-badge');
                if (statusBadge && statusBadge.textContent.trim() === 'Diterima') {
                    const itemName = row.querySelector('td div div:first-child').textContent.trim();
                    const employeeName = row.querySelector('td div div:last-child').textContent.trim();
                    acceptedItems.push({ itemName, employeeName });
                }
            });
            
            if (acceptedItems.length === 0) {
                alert('⚠️ Tidak ada permohonan dengan status "Diterima" untuk dicetak!');
                return;
            }
            
            // Generate print pages
            const printContainer = document.getElementById('printContainer');
            printContainer.innerHTML = '';
            
            const itemsPerPage = 10; // Maximum items per page
            const totalPages = Math.ceil(acceptedItems.length / itemsPerPage);
            
            for (let pageNum = 0; pageNum < totalPages; pageNum++) {
                const startIdx = pageNum * itemsPerPage;
                const endIdx = Math.min(startIdx + itemsPerPage, acceptedItems.length);
                const pageItems = acceptedItems.slice(startIdx, endIdx);
                
                const page = createPrintPage(pageItems, pageNum + 1, startIdx);
                printContainer.appendChild(page);
            }
            
            // Print
            setTimeout(() => {
                window.print();
            }, 100);
        }

        // Create a print page
        function createPrintPage(items, pageNumber, startIndex) {
            const today = new Date();
            const day = today.getDate();
            const month = today.toLocaleDateString('id-ID', { month: 'long' });
            const year = today.getFullYear();
            
            const page = document.createElement('div');
            page.className = 'print-page';
            
            page.innerHTML = `
                <div class="print-header">
                    <div class="print-logo">
                        <img src="{{ asset('assets/images/logoBPS.png') }}" alt="Logo BPS" onerror="this.style.display='none'">
                        <div class="print-logo-text">
                            <h3>BADAN PUSAT STATISTIK</h3>
                            <h3>KOTA SEMARANG</h3>
                        </div>
                    </div>

                    <div class="print-title">
                        <h2>SURAT PERMOHONAN PERSEDIAAN BARANG</h2>
                        <h2>ATK/CETAKAN/DLL</h2>
                    </div>

                    <div class="print-info">
                        <div>No : <strong>${generateDocNumber()}</strong></div>
                        <div>Tahun: <strong>${day}/${today.getMonth() + 1}/${year}</strong></div>
                    </div>
                </div>

                <table class="print-table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Barang</th>
                            <th>Nama Peminta Barang</th>
                        </tr>
                    </thead>
                    <tbody>
                        ${generateTableRows(items, startIndex)}
                    </tbody>
                </table>

                ${pageNumber === 1 ? generateSignatures(day, month, year) : ''}
            `;
            
            return page;
        }

        // Generate table rows
        function generateTableRows(items, startIndex) {
            let rows = '';
            
            items.forEach((item, index) => {
                rows += `
                    <tr>
                        <td style="text-align: center;">${startIndex + index + 1}</td>
                        <td>${item.itemName}</td>
                        <td>${item.employeeName}</td>
                    </tr>
                `;
            });
            
            return rows;
        }

        // Generate signatures (only on first page)
        function generateSignatures(day, month, year) {
            return `
                <div class="print-signatures">
                    <div class="signature-block">
                        <p class="title">Mengetahui</p>
                        <p class="jabatan">Kepala Subbagian Umum</p>

                        <div class="ttd-space"></div>

                        <p class="name">Ir. Rina Wulanjar</p>
                        <p class="nip">NIP. 19690120 199401 2 001</p>
                    </div>

                    <div class="signature-block">
                        <p class="date invisible">Semarang, ${day} ${month} ${year}</p>
                        <p class="jabatan">Petugas Persediaan</p>

                        <div class="ttd-space"></div>

                        <p class="name">Hartanto Agoestijono</p>
                        <p class="nip">NIP. 19700802 199102 1 002</p>
                    </div>
                </div>
            `;
        }


        // Generate document number (keep existing function)
        function generateDocNumber() {
            const today = new Date();
            const year = today.getFullYear();
            const random = Math.floor(Math.random() * 1000);
            return `3374-${random}`;
        }        

        // Search functionality
        function searchRequests() {
            const searchValue = document.getElementById('searchInput').value.toLowerCase();
            const cards = document.querySelectorAll('.request-card');
            
            cards.forEach(card => {
                const name = card.getAttribute('data-name').toLowerCase();
                const employee = card.getAttribute('data-employee').toLowerCase();
                
                if (name.includes(searchValue) || employee.includes(searchValue)) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        // Selesai action
        function selesaiRequest(button) {
            const card = button.closest('.request-card');
            const namaBarang = card.querySelector('.request-details h3').textContent.trim();

            if (confirm('Setujui permohonan "' + namaBarang + '"?')) {
                card.style.opacity = '0.5';

                setTimeout(() => {
                    card.remove();
                    showAlert('success', '✓ Disetujui!', '"' + namaBarang + '" telah berhasil disetujui.');
                }, 300);
            }
        }

        // Tolak action
        function tolakRequest(button) {
            const card = button.closest('.request-card');
            const namaBarang = card.querySelector('.request-details h3').textContent.trim();

            if (confirm('Tolak permohonan "' + namaBarang + '"?')) {
                card.style.opacity = '0.5';

                setTimeout(() => {
                    card.remove();
                    showAlert('danger', '✕ Ditolak!', '"' + namaBarang + '" telah ditolak.');
                }, 300);
            }
        }

        // Alert notification
        function showAlert(type, title, message) {
            const existing = document.querySelector('.custom-alert');
            if (existing) existing.remove();

            const colors = {
                success: { bg: '#d1fae5', border: '#6ee7b7', text: '#065f46' },
                danger:  { bg: '#fee2e2', border: '#fca5a5', text: '#991b1b' }
            };

            const alert = document.createElement('div');
            alert.className = 'custom-alert';
            alert.style.cssText = `
                position: fixed;
                top: 24px;
                right: 24px;
                z-index: 99999;
                background: ${colors[type].bg};
                border: 1.5px solid ${colors[type].border};
                color: ${colors[type].text};
                border-radius: 10px;
                padding: 14px 20px;
                min-width: 300px;
                box-shadow: 0 4px 16px rgba(0,0,0,0.10);
                font-size: 14px;
                animation: slideIn 0.3s ease;
            `;

            alert.innerHTML = `
                <div style="font-weight: 600; font-size: 15px; margin-bottom: 4px;">${title}</div>
                <div>${message}</div>
            `;

            document.body.appendChild(alert);

            setTimeout(function() {
                alert.style.transition = 'opacity 0.4s';
                alert.style.opacity = '0';
                setTimeout(function() { alert.remove(); }, 400);
            }, 3000);
        }

        // View request
        function viewRequest(button) {
            alert('Fitur lihat detail akan segera tersedia!');
        }

        // Edit request
        function editRequest(button) {
            alert('Fitur edit akan segera tersedia!');
        }

        // Delete request
        function deleteRequest(button) {
            if (confirm('Hapus permohonan ini dari riwayat?')) {
                const row = button.closest('tr');
                row.style.opacity = '0';
                
                setTimeout(() => {
                    row.remove();
                    alert('🗑️ Permohonan berhasil dihapus!');
                }, 300);
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

            window.onclick = function(event) {
                const modal = document.getElementById('logoutModal');
                if (event.target === modal) {
                    closeLogoutModal();
                }
            }
        
    </script>
</body>
</html>