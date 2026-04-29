<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pengambilan Barang - Pencatatan ATK</title>
    <link rel="stylesheet" href="{{ asset('assets/css/laporanPengambilan.css') }}">

    <style>
        .table-container td:nth-child(2), 
        .table-container td:nth-child(6), 
        .signature-cell {                
            text-align: left;
        }

        .view-btn {
            background-color: #e0f2fe;
            color: #0284c7;
            border: 1px solid #bae6fd;
            padding: 5px;
            border-radius: 6px;
            display: inline-flex;
            align-items: center;
            text-decoration: none;
        }
        .view-btn:hover {
            background-color: #0284c7;
            color: white;
        }

        .download-btn {
            background-color: #dcfce7;
            color: #16a34a;
            border: 1px solid #bbf7d0;
            padding: 5px;
            border-radius: 6px;
            display: inline-flex;
            align-items: center;
            text-decoration: none;
        }
        .download-btn:hover {
            background-color: #16a34a;
            color: white;
        }

        .signature-cell .action-buttons {
            display: flex;
            gap: 8px;
            justify-content: flex-start; 
        }
        .modal-zoom {
            display: none;
            position: fixed;
            z-index: 9999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.8);
            backdrop-filter: blur(5px);
        }

        .modal-content-wrapper {
            position: relative;
            margin: auto;
            top: 50%;
            transform: translateY(-50%);
            text-align: center;
            width: 80%;
            max-width: 500px;
        }

        #imgZoom {
            width: 100%;
            background: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
        }

        #captionZoom {
            margin-top: 15px;
            color: white;
            font-size: 18px;
            font-weight: bold;
        }

        .close-zoom {
            position: absolute;
            top: -40px;
            right: 0;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
        }
    </style>

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
            <a href="/laporanPengambilan" class="menu-item active">
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

            <form action="/laporanPengambilan" method="GET" id="formFilter">
                <div class="filter-form">
                    <div class="form-group">
                        <label>Jenis</label>
                        <select id="jenisLaporan" name="jenis" onchange="toggleFilterFields()">
                            <option value="bulanan" {{ request('jenis') == 'bulanan' ? 'selected' : '' }}>Rekap Bulanan</option>
                            <option value="harian" {{ request('jenis') == 'harian' ? 'selected' : '' }}>Laporan Harian (Detail)</option>
                        </select>
                    </div>

                    <div class="form-group" id="bulanGroup">
                        <label>Bulan</label>
                        <select id="bulan" name="bulan">
                            @foreach(range(1, 12) as $m)
                                <option value="{{ $m }}" {{ request('bulan', date('m')) == $m ? 'selected' : '' }}>
                                    {{ \Carbon\Carbon::create()->month($m)->translatedFormat('F') }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group" id="tahunGroup">
                        <label>Tahun</label>
                        <input type="number" id="tahun" name="tahun" value="{{ request('tahun', date('Y')) }}" min="2020" max="2099">
                    </div>

                    <div class="form-group" id="tanggalGroup" style="display: none;">
                        <label>Tanggal</label>
                        <input type="date" id="tanggal" name="tanggal" value="{{ request('tanggal') }}">
                    </div>

                    <div class="filter-buttons">
                        <!-- Tombol Tampilkan sekarang bertipe submit -->
                        <button type="submit" class="btn btn-primary">
                            <svg fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd"/>
                            </svg>
                            Tampilkan
                        </button>
                        <button type="button" class="btn btn-danger" onclick="cetakPDF()">
                            Cetak PDF
                        </button>
                    </div>
                </div>
            </form>
        </div>
    
        <!-- Result Section -->
        <div class="result-section">
            <h2 class="result-header" id="resultTitle">
                REKAP BULAN {{ strtoupper(\Carbon\Carbon::now()->translatedFormat('F Y')) }}
            </h2>

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
                        @foreach($rekapBulanan as $rk)
                        <tr>
                            <td>{{ \Carbon\Carbon::parse($rk->tanggal)->format('d/m/Y') }}</td>
                            <td>{{ $rk->kode_barang ?? '-' }}</td>
                            <td>{{ $rk->nama_barang }}</td>
                            <td>{{ $rk->satuan ?? 'Buah' }}</td>
                            <td style="font-weight: bold;">{{ $rk->total_diambil }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="table-container" id="laporanHarianTable" style="display: none;">
            <table>
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Satuan</th>
                        <th>Banyaknya</th>
                        <th>Nama Pengambil</th>
                        <th>Tanda Tangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pengambilans as $p)
                    <tr>
                        <td>{{ \Carbon\Carbon::parse($p->tanggal)->format('d/m/Y') }}</td>
                        
                        <td style="font-weight: bold; color: #4b5563;">
                        {{ $p->created_at->format('H:i') }} WIB
                        </td>
                        <td>{{ $p->kode_barang }}</td>
                        <td>{{ $p->nama_barang }}</td>
                        <td>Buah</td>
                        <td>{{ $p->jumlah }}</td>
                        <td>{{ $p->nama_pegawai }}</td>
                        <td class="signature-cell">
                            @if($p->tanda_tangan)
                                <div class="action-buttons">
                                    <button type="button" class="action-btn view-btn" 
                                            onclick="openModal('{{ $p->tanda_tangan }}', '{{ $p->nama_pegawai }}')" 
                                            title="Lihat Tanda Tangan">
                                        <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </button>
                                    
                                    <a href="{{ $p->tanda_tangan }}" download="TTD_{{ $p->nama_pegawai }}.png" class="action-btn download-btn" title="Unduh Tanda Tangan">
                                        <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                        </svg>
                                    </a>
                                </div>
                            @else
                                <span style="color: #9ca3af;">-</span>
                            @endif
                        </td>
                        <td>
                            <div class="action-buttons">
                                <button class="action-btn edit-btn" onclick="editItem('{{ $p->id }}')">
                                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>
                        </svg>
                                </button>
                                <form action="/hapus-pengambilan/{{ $p->id }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="action-btn delete-btn" onclick="return confirm('Yakin hapus?')">
                                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"/>
                        </svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
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

    <div id="signatureModal" class="modal-zoom" onclick="closeModal()">
        <div class="modal-content-wrapper">
            <span class="close-zoom">&times;</span>
            <img id="imgZoom" src="" alt="Tanda Tangan">
            <div id="captionZoom"></div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            toggleFilterFields();

            const urlParams = new URLSearchParams(window.location.search);
            const jenis = urlParams.get('jenis') || 'bulanan'; 

            const rekapBulanan = document.getElementById('rekapBulananTable');
            const laporanHarian = document.getElementById('laporanHarianTable');
            const resultTitle = document.getElementById('resultTitle');

            if (jenis === 'harian') {
                rekapBulanan.style.display = 'none';
                laporanHarian.style.display = 'block';
                
                const tanggalInput = document.getElementById('tanggal').value;
                if (tanggalInput) {
                    const dateObj = new Date(tanggalInput);
                    const options = { day: '2-digit', month: 'long', year: 'numeric' };
                    resultTitle.textContent = `Laporan Tanggal: ${dateObj.toLocaleDateString('id-ID', options)}`;
                }
            } else {
                rekapBulanan.style.display = 'block';
                laporanHarian.style.display = 'none';
                
                const bulanSelect = document.getElementById('bulan');
                const namaBulan = bulanSelect.options[bulanSelect.selectedIndex].text;
                const tahun = document.getElementById('tahun').value;
                resultTitle.textContent = `Rekap Bulan ${namaBulan.toUpperCase()} ${tahun}`;
            }
        });


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

        const logoBase64 = 'data:image/png;base64,{!! base64_encode(file_get_contents(public_path("assets/images/logoBPS.png"))) !!}';
            
            function cetakPDF() {
                const jenis = document.getElementById('jenisLaporan').value;
                const tglInput = document.getElementById('tanggal').value;
                const tahunInput = document.getElementById('tahun').value;
                
                // Logika Tanggal (Harian otomatis, Bulanan titik-titik)
                let tanggalIndo = "...........................";
                if (jenis !== 'bulanan') {
                    let dateObj = tglInput ? new Date(tglInput) : new Date();
                    tanggalIndo = dateObj.toLocaleDateString('id-ID', { 
                        day: 'numeric', month: 'long', year: 'numeric' 
                    });
                }

                let tableRows = "";
                // Kita ambil data dari tabel harian untuk mendapatkan detail barang & TTD
                const rows = document.querySelectorAll('#laporanHarianTable tbody tr');
                
                if (rows.length > 0 && rows[0].innerText.trim() !== "Belum ada data") {
                    rows.forEach((row, index) => {
                        const cells = row.querySelectorAll('td');
                        // Urutan Kolom: No, Nama Barang, Satuan, Banyaknya, Pengambil, TTD
                        tableRows += `
                            <tr>
                                <td style="text-align: center;">${index + 1}</td>
                                <td>${cells[3].textContent}</td>
                                <td style="text-align: center;">${cells[4].textContent}</td>
                                <td style="text-align: center;">${cells[5].textContent}</td>
                                <td>${cells[6].textContent}</td>
                                <td style="text-align: center;">
                                    <img src="${cells[7].querySelector('button').getAttribute('onclick').split("'")[1]}" style="height: 25px;">
                                </td>
                            </tr>`;
                    });
                }

                // Baris kosong tambahan (total 10 baris agar mirip surat asli)
                for (let i = rows.length + 1; i <= 10; i++) {
                    tableRows += `<tr><td style="height: 25px; text-align:center;">${i}</td><td></td><td></td><td></td><td></td><td></td></tr>`;
                }

                const printWindow = window.open('', '_blank');
                printWindow.document.write(`
                    <html>
                    <head>
                        <title>Cetak Surat Permintaan ATK</title>
                        <style>
                            body { font-family: Arial, sans-serif; padding: 30px; font-size: 10pt; }
                            .header-container { display: flex; justify-content: space-between; margin-bottom: 5px; }
                            .logo-section { display: flex; align-items: center; gap: 10px; }
                            .logo-print { width: 45px; }
                            .header-text h1 { font-size: 10pt; margin: 0; line-height: 1.2; }
                            .doc-info { font-size: 9pt; line-height: 1.2; text-align: left; }
                            
                            .title { text-align: center; margin: 15px 0; }
                            .title h2 { font-size: 11pt; text-decoration: underline; margin: 0; }
                            .title p { font-size: 9pt; margin: 0; font-weight: bold; }

                            table { width: 100%; border-collapse: collapse; margin-top: 10px; }
                            th, td { border: 1px solid black; padding: 4px 6px; font-size: 9pt; }
                            .col-num td { font-size: 8pt; text-align: center; background: #f0f0f0; }
                            
                            /* --- CSS FOOTER AGAR PEPET --- */
                            .footer { 
                                margin-top: 40px; 
                                display: flex; 
                                justify-content: space-between; 
                                align-items: flex-start;
                            }
                            .sig-box { 
                                text-align: center; 
                                width: 250px; 
                            }
                            .sig-box p { 
                                margin: 0; /* Membuat teks menempel ke atas/bawah */
                                padding: 0;
                                line-height: 1.2; 
                                font-size: 10pt; 
                            }
                            .signature-space { 
                                height: 90px; /* Ruang tanda tangan dilebarkan */
                            }
                            .name-underline { 
                                font-weight: bold; 
                                text-decoration: underline; 
                                text-transform: uppercase; 
                            }
                        </style>
                    </head>
                    <body>
                        <div class="header-container">
                            <div class="logo-section">
                                <img src="${logoBase64}" class="logo-print">
                                <div class="header-text">
                                    <h1>BADAN PUSAT STATISTIK</h1>
                                    <h1>KOTA SEMARANG</h1>
                                </div>
                            </div>
                            <div class="doc-info">
                                No : ......................<br>
                                Tahun : ${tahunInput}
                            </div>
                        </div>

                        <div class="title">
                            <h2>SURAT PERMINTAAN BARANG</h2>
                            <p>ATK/CETAKAN/DLL</p>
                        </div>

                        <table>
                            <thead>
                                <tr>
                                    <th style="width: 5%;">No.</th>
                                    <th style="width: 32%;">Nama Barang</th>
                                    <th style="width: 13%;">Satuan Barang</th>
                                    <th style="width: 10%;">Banyaknya</th>
                                    <th style="width: 25%;">Nama Pengambil Barang</th>
                                    <th style="width: 15%;">Tanda Tangan</th>
                                </tr>
                                <tr class="col-num">
                                    <td>(1)</td><td>(2)</td><td>(3)</td><td>(4)</td><td>(5)</td><td>(6)</td>
                                </tr>
                            </thead>
                            <tbody>${tableRows}</tbody>
                        </table>

                        <div class="footer">
                            <!-- SISI KIRI -->
                            <div class="sig-box">
                                <p>Mengetahui,</p>
                                <p>Kepala Subbagian Umum</p>
                                <div class="signature-space"></div>
                                <p class="name-underline">IRMA WULANDARI</p>
                                <p>NIP. 19880128 199403 2-01</p>
                            </div>

                            <!-- SISI KANAN -->
                            <div class="sig-box">
                                <p>Semarang, ${tanggalIndo}</p> <!-- Semarang baris sendiri -->
                                <p>Petugas Persediaan</p>
                                <div class="signature-space"></div>
                                <p class="name-underline">HARTANTO ADISATRIANTO</p>
                                <p>NIP. 19780922 199126 1-02</p>
                            </div>
                        </div>

                        <script>
                            window.onload = function() { 
                                window.print(); 
                                setTimeout(() => window.close(), 500);
                            }
                        <\/script>
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

        function openModal(imgSrc, nama) {
            const modal = document.getElementById("signatureModal");
            const img = document.getElementById("imgZoom");
            const caption = document.getElementById("captionZoom");

            modal.style.display = "block";
            img.src = imgSrc;
            caption.innerHTML = "Tanda Tangan: " + nama;
        }

        function closeModal() {
            document.getElementById("signatureModal").style.display = "none";
        }

        // Tutup modal kalau user tekan tombol 'Esc' di keyboard
        document.addEventListener('keydown', function(event) {
            if (event.key === "Escape") {
                closeModal();
            }
        });
    </script>
</body>
</html>