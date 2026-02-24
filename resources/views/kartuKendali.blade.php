<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Kendali Tahunan - Pencatatan ATK</title>
    <link rel="stylesheet" href="{{ asset('assets/css/kartuKendali.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/xlsx-js-style@1.2.0/dist/xlsx.bundle.js"></script>
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
            <a href="/laporanRinciBulanan" class="menu-item">
                <svg fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                    <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"/>
                </svg>
                Rinci Bulanan
            </a>
            <a href="/kartuKendali" class="menu-item active">
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
            <h1>Kartu Kendali Tahunan</h1>
            <p>Laporan Stock Per barang tiap Tahun</p>
        </div>

        <!-- Filter Card -->
        <div class="filter-card">
            <div class="filter-header">
                <svg fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm2 10a1 1 0 10-2 0v3a1 1 0 102 0v-3zm2-3a1 1 0 011 1v5a1 1 0 11-2 0v-5a1 1 0 011-1zm4-1a1 1 0 10-2 0v7a1 1 0 102 0V8z" clip-rule="evenodd"/>
                </svg>
                <h2>Kartu Stock Barang Tahunan 2026</h2>
            </div>
            <p class="filter-subtitle">Kartu stock individual per barang sepanjang tahun</p>

            <div class="filter-form">
                <div class="form-group">
                    <label>Pilih Barang</label>
                    <select id="pilihBarang">
                        <option value="">-- Cari Barang --</option>
                        <option value="BRG001">Pulpen Biru Standard</option>
                        <option value="BRG002">Kertas A4 80gsm</option>
                        <option value="BRG003">Spidol Whiteboard</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Tahun</label>
                    <select id="tahun">
                        <option value="2026" selected>2026</option>
                        <option value="2025">2025</option>
                        <option value="2024">2024</option>
                    </select>
                </div>

                <button class="btn btn-primary" onclick="tampilkanKartu()">
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"/>
                    </svg>
                    Tampilkan
                </button>
            </div>
        </div>

        <!-- Alert Info -->
        <div class="alert-info">
            <svg fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
            </svg>
            <p>Pilih barang di atas untuk menampilkan kartu stock tahunannya.</p>
        </div>

        <!-- Daftar Barang Section -->
        <div class="daftar-barang-section">
            <div class="table-header">
                <svg fill="currentColor" viewBox="0 0 20 20">
                    <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"/>
                </svg>
                <h3>Daftar Barang (3)</h3>
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
                    <tbody id="tableBody">
                        <tr>
                            <td>BRG001</td>
                            <td>Pulpen Biru Standard</td>
                            <td>Buah</td>
                            <td>
                                <button class="view-btn" onclick="lihatKartu('BRG001', 'Pulpen Biru Standard', 'Buah')">
                                    <svg fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                    </svg>
                                    Lihat Kartu
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>BRG002</td>
                            <td>Kertas A4 80gsm</td>
                            <td>Rim</td>
                            <td>
                                <button class="view-btn" onclick="lihatKartu('BRG002', 'Kertas A4 80gsm', 'Rim')">
                                    <svg fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                    </svg>
                                    Lihat Kartu
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>BRG003</td>
                            <td>Spidol Whiteboard</td>
                            <td>Buah</td>
                            <td>
                                <button class="view-btn" onclick="lihatKartu('BRG003', 'Spidol Whiteboard', 'Buah')">
                                    <svg fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                    </svg>
                                    Lihat Kartu
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Result Section (Hidden by default) -->
        <div class="result-section" id="resultSection">
            <div class="result-header">
                <h3 class="result-title" id="resultTitle">Kartu Stock Barang Tahunan 2026</h3>
                <div class="export-buttons">
                    <button class="btn btn-excel" onclick="exportExcel()">
                        <svg fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z" clip-rule="evenodd"/>
                        </svg>
                        Excel
                    </button>
                    <button class="btn btn-pdf" onclick="cetakPDF()">
                        <svg fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z" clip-rule="evenodd"/>
                        </svg>
                        PDF
                    </button>
                </div>
            </div>

            <!-- Kartu Content akan di-generate oleh JavaScript -->
            <div id="kartuContent">
                <!-- Content will be inserted here -->
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
        let currentBarangData = null;

        // Data barang sesuai dengan master barang
        const barangData = {
            'BRG001': {
                nama: 'Pulpen Biru Standard',
                kode: 'BRG001',
                satuan: 'Buah',
                kategori: 'Alat Tulis',
                halaman: 1,
                program: '',
                stockAwal: 150
            },
            'BRG002': {
                nama: 'Kertas A4 80gsm',
                kode: 'BRG002',
                satuan: 'Rim',
                kategori: 'Kertas',
                halaman: 1,
                program: '',
                stockAwal: 50
            },
            'BRG003': {
                nama: 'Spidol Whiteboard',
                kode: 'BRG003',
                satuan: 'Buah',
                kategori: 'Alat Tulis',
                halaman: 1,
                program: '',
                stockAwal: 75
            }
        };

        const borderStyle = {
            border: {
                top: { style: "thin" },
                bottom: { style: "thin" },
                left: { style: "thin" },
                right: { style: "thin" }
            }
        };

        const range = XLSX.utils.decode_range(ws['!ref']);

        for (let R = range.s.r; R <= range.e.r; ++R) {
            for (let C = range.s.c; C <= range.e.c; ++C) {
                const cell_address = { c: C, r: R };
                const cell_ref = XLSX.utils.encode_cell(cell_address);

                if (!ws[cell_ref]) continue;

                ws[cell_ref].s = {
                    ...ws[cell_ref].s,
                    ...borderStyle
                };
            }
        }



        // Fungsi tampilkan kartu
        function tampilkanKartu() {
            const barangSelect = document.getElementById('pilihBarang');
            const tahun = document.getElementById('tahun').value;
            
            if (!barangSelect.value) {
                alert('Silakan pilih barang terlebih dahulu!');
                return;
            }

            const selectedOption = barangSelect.options[barangSelect.selectedIndex];
            const kodeBarang = selectedOption.value;
            const namaBarang = selectedOption.text;
            
            const data = barangData[kodeBarang];
            if (data) {
                lihatKartu(data.kode, data.nama, data.satuan);
            }
        }

        // Fungsi lihat kartu
        function lihatKartu(kode, nama, satuan) {
            const data = barangData[kode] || {
                nama: nama,
                kode: kode,
                satuan: satuan,
                halaman: 1,
                program: '',
                stockAwal: 0
            };

            currentBarangData = data;

            const kartuHTML = `
                <div style="padding: 20px; background: white;">
                    <!-- Header Kartu -->
                    <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 30px;">
                        <div style="display: flex; align-items: center; gap: 15px;">
                            <img src="{{ asset('assets/images/logoBPS.png') }}" style="width: 60px; height: 60px;" alt="Logo BPS" onerror="this.style.display='none'">
                            <div>
                                <div style="font-weight: 700; font-size: 14px;">BADAN PUSAT STATISTIK</div>
                                <div style="font-weight: 700; font-size: 14px;">KOTA SEMARANG</div>
                            </div>
                        </div>
                        <div style="text-align: center;">
                            <div style="font-weight: 700; font-size: 16px; margin-bottom: 10px;">KARTU PERSEDIAAN BARANG HABIS PAKAI (ATK/ARK/CS)</div>
                        </div>
                    </div>

                    <!-- Info Alamat -->
                    <div style="margin-bottom: 20px;">
                        <div style="font-size: 13px;">Jl. Inspeksi Kali</div>
                        <div style="font-size: 13px;">No. 1 Semarang</div>
                    </div>

                    <!-- Info Barang -->
                    <table style="width: 100%; margin-bottom: 20px; border: 2px solid #000;">
                        <tr>
                            <td style="border: 1px solid #000; padding: 8px; font-size: 12px; font-weight: 600; width: 150px;">Nama Barang</td>
                            <td style="border: 1px solid #000; padding: 8px; font-size: 12px;">: ${data.nama}</td>
                            <td style="border: 1px solid #000; padding: 8px; font-size: 12px; font-weight: 600; width: 120px;">Halaman</td>
                            <td style="border: 1px solid #000; padding: 8px; font-size: 12px;">: ${data.halaman}</td>
                            <td style="border: 1px solid #000; padding: 8px; font-size: 12px; font-weight: 600; width: 120px;">Program</td>
                            <td style="border: 1px solid #000; padding: 8px; font-size: 12px;">: ${data.program}</td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid #000; padding: 8px; font-size: 12px; font-weight: 600;">Kode Barang</td>
                            <td style="border: 1px solid #000; padding: 8px; font-size: 12px;">: ${data.kode}</td>
                            <td style="border: 1px solid #000; padding: 8px; font-size: 12px; font-weight: 600;">Tahun</td>
                            <td style="border: 1px solid #000; padding: 8px; font-size: 12px;" colspan="3">: 2026</td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid #000; padding: 8px; font-size: 12px; font-weight: 600;">Satuan Barang</td>
                            <td style="border: 1px solid #000; padding: 8px; font-size: 12px;" colspan="5">: ${data.satuan}</td>
                        </tr>
                    </table>

                    <!-- Tabel Bulanan -->
                    <table style="width: 100%; margin-bottom: 20px; border: 2px solid #000;">
                        <thead>
                            <tr style="background: #f3f4f6;">
                                <th style="border: 1px solid #000; padding: 8px; font-size: 11px;">Januari</th>
                                <th style="border: 1px solid #000; padding: 8px; font-size: 11px;">Februari</th>
                                <th style="border: 1px solid #000; padding: 8px; font-size: 11px;">Maret</th>
                                <th style="border: 1px solid #000; padding: 8px; font-size: 11px;">April</th>
                                <th style="border: 1px solid #000; padding: 8px; font-size: 11px;">Mei</th>
                                <th style="border: 1px solid #000; padding: 8px; font-size: 11px;">Juni</th>
                                <th style="border: 1px solid #000; padding: 8px; font-size: 11px;">Juli</th>
                                <th style="border: 1px solid #000; padding: 8px; font-size: 11px;">Agustus</th>
                                <th style="border: 1px solid #000; padding: 8px; font-size: 11px;">September</th>
                                <th style="border: 1px solid #000; padding: 8px; font-size: 11px;">Oktober</th>
                                <th style="border: 1px solid #000; padding: 8px; font-size: 11px;">November</th>
                                <th style="border: 1px solid #000; padding: 8px; font-size: 11px;">Desember</th>
                                <th style="border: 1px solid #000; padding: 8px; font-size: 11px;">Jumlah Pengeluaran</th>
                                <th style="border: 1px solid #000; padding: 8px; font-size: 11px;">Stok Awal</th>
                                <th style="border: 1px solid #000; padding: 8px; font-size: 11px;">Stok Akhir</th>
                            </tr>
                            <tr style="background: #f3f4f6;">
                                <th style="border: 1px solid #000; padding: 4px; font-size: 10px;">0</th>
                                <th style="border: 1px solid #000; padding: 4px; font-size: 10px;">0</th>
                                <th style="border: 1px solid #000; padding: 4px; font-size: 10px;">0</th>
                                <th style="border: 1px solid #000; padding: 4px; font-size: 10px;">0</th>
                                <th style="border: 1px solid #000; padding: 4px; font-size: 10px;">0</th>
                                <th style="border: 1px solid #000; padding: 4px; font-size: 10px;">0</th>
                                <th style="border: 1px solid #000; padding: 4px; font-size: 10px;">0</th>
                                <th style="border: 1px solid #000; padding: 4px; font-size: 10px;">0</th>
                                <th style="border: 1px solid #000; padding: 4px; font-size: 10px;">0</th>
                                <th style="border: 1px solid #000; padding: 4px; font-size: 10px;">0</th>
                                <th style="border: 1px solid #000; padding: 4px; font-size: 10px;">0</th>
                                <th style="border: 1px solid #000; padding: 4px; font-size: 10px;">0</th>
                                <th style="border: 1px solid #000; padding: 4px; font-size: 10px;">0</th>
                                <th style="border: 1px solid #000; padding: 4px; font-size: 10px;">${data.stockAwal}</th>
                                <th style="border: 1px solid #000; padding: 4px; font-size: 10px;">${data.stockAwal}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th colspan="3" style="border: 1px solid #000; padding: 8px; font-size: 11px; text-align: left;">No.</th>
                                <th colspan="2" style="border: 1px solid #000; padding: 8px; font-size: 11px; text-align: left;">No. Bon/ Factur</th>
                                <th colspan="2" style="border: 1px solid #000; padding: 8px; font-size: 11px; text-align: left;">Tgl M/K</th>
                                <th colspan="3" style="border: 1px solid #000; padding: 8px; font-size: 11px; text-align: left;">Uraian Pemasukan/ Pengeluaran</th>
                                <th colspan="2" style="border: 1px solid #000; padding: 8px; font-size: 11px; text-align: center;">Harga Satuan (Rp)</th>
                                <th style="border: 1px solid #000; padding: 8px; font-size: 11px; text-align: center;">Masuk (M)</th>
                                <th style="border: 1px solid #000; padding: 8px; font-size: 11px; text-align: center;">Keluar (K)</th>
                                <th style="border: 1px solid #000; padding: 8px; font-size: 11px; text-align: center;">Sisa Barang</th>
                            </tr>
                            <tr>
                                <td colspan="3" style="border: 1px solid #000; padding: 8px; font-size: 11px;">Stock Awal Tahun 2026</td>
                                <td colspan="2" style="border: 1px solid #000; padding: 8px; font-size: 11px;"></td>
                                <td colspan="2" style="border: 1px solid #000; padding: 8px; font-size: 11px;"></td>
                                <td colspan="3" style="border: 1px solid #000; padding: 8px; font-size: 11px;"></td>
                                <td colspan="2" style="border: 1px solid #000; padding: 8px; font-size: 11px; text-align: right;"></td>
                                <td style="border: 1px solid #000; padding: 8px; font-size: 11px; text-align: center;"></td>
                                <td style="border: 1px solid #000; padding: 8px; font-size: 11px; text-align: center;"></td>
                                <td style="border: 1px solid #000; padding: 8px; font-size: 11px; text-align: center; font-weight: 700;">${data.stockAwal}</td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Tanda Tangan -->
                    <div style="display: flex; justify-content: space-between; margin-top: 40px;">
                        <div style="text-align: center; width: 30%;">
                            <div style="font-size: 12px; margin-bottom: 5px;">Mengetahui,</div>
                            <div style="font-size: 11px; margin-bottom: 60px;">Kepala Subbagian Umum</div>
                            <div style="font-size: 12px; font-weight: 700; text-decoration: underline;">IRMA WULANDARI</div>
                            <div style="font-size: 11px;">NIP. 19880128 199403 2-01</div>
                        </div>
                        <div style="text-align: center; width: 30%;">
                            <div style="font-size: 12px; margin-bottom: 5px;">Petugas Persediaan</div>
                            <div style="font-size: 11px; margin-bottom: 60px;"></div>
                            <div style="font-size: 12px; font-weight: 700; text-decoration: underline;">HARTANTO ADISATRIANTO</div>
                            <div style="font-size: 11px;">NIP. 19780922 199126 1-02</div>
                        </div>
                        <div style="text-align: center; width: 30%;">
                            <div style="font-size: 12px; margin-bottom: 5px;">Catat tanggal</div>
                            <div style="font-size: 11px; margin-bottom: 60px;"></div>
                            <div style="font-size: 12px; font-weight: 700;"></div>
                        </div>
                    </div>
                </div>
            `;

            document.getElementById('kartuContent').innerHTML = kartuHTML;
            document.getElementById('resultSection').classList.add('show');
            
            // Scroll to result
            document.getElementById('resultSection').scrollIntoView({ behavior: 'smooth', block: 'start' });
        }

        // Fungsi cetak PDF
        function cetakPDF() {
            window.print();
        }

        // Fungsi export Excel
        // Fungsi export Excel menggunakan SheetJS
        function exportExcel() {
            if (!currentBarangData) {
                alert('Silakan pilih barang terlebih dahulu!');
                return;
            }

            // Import SheetJS dari CDN
            if (typeof XLSX === 'undefined') {
                const script = document.createElement('script');
                script.src = 'https://cdn.sheetjs.com/xlsx-0.20.1/package/dist/xlsx.full.min.js';
                script.onload = function() {
                    generateExcel();
                };
                document.head.appendChild(script);
            } else {
                generateExcel();
            }
        }

        function generateExcel() {
            const data = currentBarangData;
            
            // Buat workbook baru
            const wb = XLSX.utils.book_new();
            
            // Data untuk worksheet
            const wsData = [
                [],
                ['KARTU PERSEDIAAN BARANG HABIS PAKAI (ATK/ARK/CS)'],
                [],
                ['Jl. Inspeksi Kali'],
                ['No. 1 Semarang'],
                [],
                ['Nama Barang', `: ${data.nama}`, '', 'Halaman', `: ${data.halaman}`, '', 'Program', `: ${data.program}`],
                ['Kode Barang', `: ${data.kode}`, '', 'Tahun', ': 2026'],
                ['Satuan Barang', `: ${data.satuan}`],
                [],
                ['Banyaknya Pengeluaran Tiap-Tiap Bulan'],
                ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember', 'Jumlah Pengeluaran', 'Stok Awal', 'Stok Akhir'],
                [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, data.stockAwal, data.stockAwal],
                [],
                ['No.', 'No. Bon/Factur', 'Tgl M/K', 'Uraian Pemasukan/Pengeluaran', 'Harga Satuan (Rp)', 'Masuk (M)', 'Keluar (K)', 'Sisa Barang'],
                ['Stock Awal Tahun 2026', '', '', '', '', '', '', data.stockAwal],
                [],
                [],
                [],
                ['Mengetahui,', '', '', '', 'Petugas Persediaan', '', '', 'Catat tanggal'],
                ['Kepala Subbagian Umum'],
                [],
                [],
                [],
                ['IRMA WULANDARI', '', '', '', 'HARTANTO ADISATRIANTO'],
                ['NIP. 19880128 199403 2-01', '', '', '', 'NIP. 19780922 199126 1-02']
            ];
            
            // Buat worksheet dari data
            const ws = XLSX.utils.aoa_to_sheet(wsData);
            
            // Set lebar kolom
            ws['!cols'] = [
                {wch: 15},  // Kolom A
                {wch: 20},  // Kolom B
                {wch: 12},  // Kolom C
                {wch: 25},  // Kolom D
                {wch: 18},  // Kolom E
                {wch: 12},  // Kolom F
                {wch: 12},  // Kolom G
                {wch: 12}   // Kolom H
            ];
            
            // Merge cells untuk header
            if (!ws['!merges']) ws['!merges'] = [];
            ws['!merges'].push(
                {s: {r: 1, c: 0}, e: {r: 1, c: 7}},  // Merge judul
                {s: {r: 10, c: 0}, e: {r: 10, c: 7}}  // Merge sub-header
            );
            
            // Styling untuk header (bold, center)
            const headerStyle = {
                font: { bold: true, sz: 14 },
                alignment: { horizontal: 'center', vertical: 'center' }
            };
            
            // Apply style ke cell judul
            if (!ws['A2']) ws['A2'] = {};
            ws['A2'].s = headerStyle;
            
            // Tambahkan worksheet ke workbook
            XLSX.utils.book_append_sheet(wb, ws, 'Kartu Kendali');
            
            // Generate file dan download
            XLSX.writeFile(wb, `Kartu_Kendali_${data.kode}_2026.xlsx`);
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