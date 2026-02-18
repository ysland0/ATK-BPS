<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pengambilan Barang - Pencatatan ATK</title>
    <link rel="stylesheet" href="{{ asset('assets/css/laporanPengambilan.css') }}">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header">
            <a href="/landingPage" >
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
            <a href="/laporanPengambilan" class="menu-item active">
                <svg fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                    <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                Pengambilan Barang
            </a>
            <a href="/rinciBulanan" class="menu-item">
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
        <!-- Page Header -->
        <div class="page-header">
            <h1>Pengambilan Barang</h1>
            <p>Laporan Pengambilan Barang</p>
        </div>

        <!-- Filter Card -->
        <div class="filter-card">
            <div class="filter-header">
                <svg fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd"/>
                </svg>
                Filter Laporan
            </div>
            <p class="filter-description">Temukan laporan bulanan</p>

            <div class="filter-form">
                <div class="form-group">
                    <label>Jenis</label>
                    <select id="jenisLaporan" onchange="toggleFilterFields()">
                        <option value="bulanan">Rekap Bulanan</option>
                        <option value="harian">Laporan Harian (Detail)</option>
                    </select>
                </div>

                <div class="form-group" id="bulanGroup">
                    <label>Bulan</label>
                    <select id="bulan">
                        <option value="1">Januari</option>
                        <option value="2" selected>Februari</option>
                        <option value="3">Maret</option>
                        <option value="4">April</option>
                        <option value="5">Mei</option>
                        <option value="6">Juni</option>
                        <option value="7">Juli</option>
                        <option value="8">Agustus</option>
                        <option value="9">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                    </select>
                </div>

                <div class="form-group" id="tahunGroup">
                    <label>Tahun</label>
                    <input type="number" id="tahun" value="2026" min="2020" max="2099">
                </div>

                <div class="form-group" id="tanggalGroup" style="display: none;">
                    <label>Tanggal</label>
                    <input type="date" id="tanggal">
                </div>

                <div class="filter-buttons">
                    <button class="btn btn-primary" onclick="tampilkanLaporan()">
                        <svg fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd"/>
                        </svg>
                        Tampilkan
                    </button>
                    <button class="btn btn-danger" onclick="cetakPDF()">
                        <svg fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z" clip-rule="evenodd"/>
                        </svg>
                        Cetak PDF
                    </button>
                </div>
            </div>
        </div>

        <!-- Result Section -->
        <div class="result-section">
            <h2 class="result-header" id="resultTitle">Rekap Bulan FEBRUARI 2026</h2>

            <div class="table-container" id="rekapBulananTable">
                <table>
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Satuan</th>
                            <th>Total Diambil</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>02/02/2026</td>
                            <td>10103010600032</td>
                            <td>Stofmap Cetakan BPS Kota Semarang</td>
                            <td>Buah</td>
                            <td>7</td>
                        </tr>
                        <tr>
                            <td>03/02/2026</td>
                            <td>10103020010025</td>
                            <td>Kertas HVS 70 gr A4 SIDU</td>
                            <td>Rim</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>03/02/2026</td>
                            <td>10103010600032</td>
                            <td>Stofmap Cetakan BPS Kota Semarang</td>
                            <td>Buah</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>04/02/2026</td>
                            <td>10103020010025</td>
                            <td>Kertas HVS 70 gr A4 SIDU</td>
                            <td>Rim</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>04/02/2026</td>
                            <td>10103019990036</td>
                            <td>Pembatas Kertas Kecil</td>
                            <td>Buah</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>04/02/2026</td>
                            <td>10103010600032</td>
                            <td>Stofmap Cetakan BPS Kota Semarang</td>
                            <td>Buah</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>05/02/2026</td>
                            <td>10103020040040</td>
                            <td>Amplop folio cokelat cetakan BPS Kota Semarang</td>
                            <td>Buah</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>05/02/2026</td>
                            <td>10103010600032</td>
                            <td>Stofmap Cetakan BPS Kota Semarang</td>
                            <td>Buah</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>06/02/2026</td>
                            <td>10103020040034</td>
                            <td>Amplop Kabinet Kop BPS</td>
                            <td>Buah</td>
                            <td>17</td>
                        </tr>
                        <tr>
                            <td>06/02/2026</td>
                            <td>10103010600035</td>
                            <td>Map Arsip Folio</td>
                            <td>Buah</td>
                            <td>300</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="table-container" id="laporanHarianTable" style="display: none;">
                <table>
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Waktu</th>
                            <th>Nama Barang</th>
                            <th>Satuan</th>
                            <th>Banyaknya</th>
                            <th>Nama Pengambil</th>
                            <th>Tanda Tangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr data-signature="yes">
                            <td>04/02/2026</td>
                            <td>-</td>
                            <td>Pembatas Kertas Kecil</td>
                            <td>Buah</td>
                            <td>1</td>
                            <td>Eko Aji Prasetya, S.E</td>
                            <td class="signature-cell">✓</td>
                            <td>
                                <div class="action-buttons">
                                    <button class="action-btn edit-btn" onclick="editItem(1)">
                                        <svg fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>
                                        </svg>
                                    </button>
                                    <button class="action-btn delete-btn" onclick="deleteItem(1)">
                                        <svg fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr data-signature="yes">
                            <td>04/02/2026</td>
                            <td>-</td>
                            <td>Stofmap Cetakan BPS Kota Semarang</td>
                            <td>Buah</td>
                            <td>4</td>
                            <td>Metriana Jovanika, SST</td>
                            <td class="signature-cell">✓</td>
                            <td>
                                <div class="action-buttons">
                                    <button class="action-btn edit-btn" onclick="editItem(2)">
                                        <svg fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>
                                        </svg>
                                    </button>
                                    <button class="action-btn delete-btn" onclick="deleteItem(2)">
                                        <svg fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr data-signature="yes">
                            <td>04/02/2026</td>
                            <td>-</td>
                            <td>Kertas HVS 70 gr A4 SIDU</td>
                            <td>Rim</td>
                            <td>3</td>
                            <td>Astuti Dewi Adiningsih, SST</td>
                            <td class="signature-cell">✓</td>
                            <td>
                                <div class="action-buttons">
                                    <button class="action-btn edit-btn" onclick="editItem(3)">
                                        <svg fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>
                                        </svg>
                                    </button>
                                    <button class="action-btn delete-btn" onclick="deleteItem(3)">
                                        <svg fill="currentColor" viewBox="0 0 20 20">
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
        // Set tanggal hari ini
        document.addEventListener('DOMContentLoaded', function() {
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('tanggal').value = today;
        });

        // Embed logo as base64 so print window/PDF can always load it (unescaped output)
        const logoBase64 = 'data:image/png;base64,{!! base64_encode(file_get_contents(public_path("assets/images/logoBPS.png"))) !!}';
        // Toggle Filter Fields
        function toggleFilterFields() {
            const jenis = document.getElementById('jenisLaporan').value;
            const bulanGroup = document.getElementById('bulanGroup');
            const tahunGroup = document.getElementById('tahunGroup');
            const tanggalGroup = document.getElementById('tanggalGroup');

            if (jenis === 'bulanan') {
                bulanGroup.style.display = 'flex';
                tahunGroup.style.display = 'flex';
                tanggalGroup.style.display = 'none';
            } else {
                bulanGroup.style.display = 'none';
                tahunGroup.style.display = 'none';
                tanggalGroup.style.display = 'flex';
            }
        }

        // Tampilkan Laporan
        function tampilkanLaporan() {
            const jenis = document.getElementById('jenisLaporan').value;
            const rekapBulanan = document.getElementById('rekapBulananTable');
            const laporanHarian = document.getElementById('laporanHarianTable');
            const resultTitle = document.getElementById('resultTitle');

            if (jenis === 'bulanan') {
                const bulan = document.getElementById('bulan');
                const tahun = document.getElementById('tahun').value;
                const namaBulan = bulan.options[bulan.selectedIndex].text;
                
                rekapBulanan.style.display = 'block';
                laporanHarian.style.display = 'none';
                resultTitle.textContent = `Rekap Bulan ${namaBulan.toUpperCase()} ${tahun}`;
            } else {
                const tanggal = document.getElementById('tanggal').value;
                const dateObj = new Date(tanggal);
                const options = { day: '2-digit', month: 'long', year: 'numeric' };
                const formattedDate = dateObj.toLocaleDateString('id-ID', options);
                
                rekapBulanan.style.display = 'none';
                laporanHarian.style.display = 'block';
                resultTitle.textContent = `Laporan Tanggal: ${formattedDate}`;
            }
        }

            // Cetak PDF dengan Format Surat Resmi
            function cetakPDF() {
                const jenis = document.getElementById('jenisLaporan').value;
                const tanggal = document.getElementById('tanggal').value;
                const dateObj = new Date(tanggal);
                const options = { day: '2-digit', month: 'long', year: 'numeric' };
                const tanggalIndo = dateObj.toLocaleDateString('id-ID', options);
                
                // Ambil Judul & Data Tabel berdasarkan jenis yang aktif
                let title = document.getElementById('resultTitle').textContent;
                let tableContent = "";
                
                if (jenis === 'bulanan') {
                    tableContent = document.querySelector('#rekapBulananTable table').outerHTML;
                } else {
                    // Ambil baris dari tabel harian (tanpa kolom aksi)
                    const rows = document.querySelectorAll('#laporanHarianTable tbody tr');
                    let tableRows = '';
                    rows.forEach((row, index) => {
                        const cells = row.querySelectorAll('td');
                        tableRows += `
                            <tr>
                                <td style="border: 1px solid #000; padding: 8px; text-align: center;">${index + 1}</td>
                                <td style="border: 1px solid #000; padding: 8px;">${cells[2].textContent}</td>
                                <td style="border: 1px solid #000; padding: 8px; text-align: center;">${cells[3].textContent}</td>
                                <td style="border: 1px solid #000; padding: 8px; text-align: center;">${cells[4].textContent}</td>
                                <td style="border: 1px solid #000; padding: 8px;">${cells[5].textContent}</td>
                                <td style="border: 1px solid #000; padding: 8px; text-align: center;">✓</td>
                            </tr>`;
                    });
                    tableContent = `
                        <table>
                            <thead>
                                <tr>
                                    <th style="width: 5%;">NO</th>
                                    <th style="width: 35%;">NAMA BARANG</th>
                                    <th style="width: 10%;">SATUAN</th>
                                    <th style="width: 10%;">QTY</th>
                                    <th style="width: 25%;">PENGAMBIL</th>
                                    <th style="width: 15%;">TTD</th>
                                </tr>
                            </thead>
                            <tbody>${tableRows}</tbody>
                        </table>`;
                }

                const printWindow = window.open('', '_blank');
                printWindow.document.write(`
                    <html>
                    <head>
                        <title>Cetak Laporan - ${title}</title>
                        <style>
                            body { font-family: Arial; padding: 20px; }
                            .header-print { display: flex; align-items: center; border-bottom: 2px solid #000; padding-bottom: 10px; margin-bottom: 20px; }
                            .logo-print { width: 70px; height: 70px; margin-right: 15px; }
                            .title-print { flex-grow: 1; }
                            .title-print h1 { font-size: 14pt; margin: 0; }
                            .title-print p { font-size: 10pt; margin: 0; }
                            table { width: 100%; border-collapse: collapse; margin-top: 20px; }
                            th, td { border: 1px solid #000; padding: 8px; text-align: left; font-size: 10pt; }
                            th { background-color: #f2f2f2; text-align: center; }
                            .footer { margin-top: 50px; display: flex; justify-content: space-between; }
                            .sig-box { text-align: center; width: 200px; }
                        </style>
                    </head>
                    <body>
                        <div class="header-print">
                            <img src="${logoBase64}" class="logo-print">
                            <div class="title-print">
                                <h1>BADAN PUSAT STATISTIK KOTA SEMARANG</h1>
                                <p>Jl. Inspeksi Kali No. 1 Semarang</p>
                            </div>
                        </div>
                        <h2 style="text-align: center; font-size: 12pt;">${title}</h2>
                        ${tableContent}
                        <div class="footer">
                            <div class="sig-box">
                                <p>Mengetahui,</p>
                                <p style="margin-bottom: 60px;">Kepala Subbagian Umum</p>
                                <p><b>IRMA WULANDARI</b></p>
                                <p>NIP. 19880128 199403 2-01</p>
                            </div>
                            <div class="sig-box">
                                <p>Semarang, ${tanggalIndo}</p>
                                <p style="margin-bottom: 60px;">Petugas Persediaan</p>
                                <p><b>HARTANTO ADISATRIANTO</b></p>
                                <p>NIP. 19780922 199126 1-02</p>
                            </div>
                        </div>
                        <script>window.onload = function() { window.print(); window.close(); }<\/script>
                    </body>
                    </html>
                `);
                printWindow.document.close();
            }

        // CRUD Functions
        function editItem(id) {
            alert('Edit pengambilan ID: ' + id);
        }

        function deleteItem(id) {
            if (confirm('Apakah Anda yakin ingin menghapus data pengambilan ini?')) {
                alert('Data pengambilan ID ' + id + ' berhasil dihapus!');
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