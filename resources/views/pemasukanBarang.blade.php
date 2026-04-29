<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemasukan Barang - Pencatatan ATK</title>
    <link rel="stylesheet" href="{{ asset('assets/css/pemasukanBarang.css') }}">
    <style>
        .main-content {
            background-color: #f8fafc;
        }

        /* Container Tabel */
        .inventory-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            overflow: hidden;
            margin-top: 40px;
            border: 1px solid #e2e8f0;
        }

        .inventory-header {
            background: linear-gradient(135deg, #3749A6 0%, #5b6fc9 100%);
            color: white;
            padding: 18px 25px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        /* Styling Tabel */
        .inventory-table {
            width: 100%;
            border-collapse: collapse;
        }

        .inventory-table th {
            background-color: #f1f5f9;
            color: #475569;
            text-transform: uppercase;
            font-size: 12px;
            font-weight: 700;
            padding: 15px;
            text-align: left;
            border-bottom: 2px solid #e2e8f0;
        }

        .inventory-table td {
            padding: 14px 15px;
            font-size: 14px;
            color: #1e293b;
            border-bottom: 1px solid #f1f5f9;
            vertical-align: middle;
        }

        .inventory-table tr:hover {
            background-color: #f8fafc;
        }

        /* Badge Bulat */
        .badge {
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 600;
            display: inline-block;
            text-transform: uppercase;
        }
        .badge-pembelian { background: #dcfce7; color: #15803d; }
        .badge-transfer { background: #fef9c3; color: #a16207; }

        /* Ikon Aksi */
        .action-buttons {
            display: flex;
            gap: 8px;
            justify-content: center;
            align-items: center;
        }

        /* Base style tombol aksi (Squircle) */
        .btn-action {
            width: 32px;
            height: 32px;
            border-radius: 10px; /* Sudut bulat cantik */
            border: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        /* Warna Tombol Edit (Kuning Soft) */
        .btn-edit {
            background-color: #fef3c7 !important; 
            color: #b45309 !important;
        }

        /* Warna Tombol Delete (Merah Soft) */
        .btn-delete {
            background-color: #fee2e2 !important;
            color: #b91c1c !important;
        }

        /* Efek Hover */
        .action-btn:hover {
            transform: scale(1.1);
            filter: brightness(0.95);
        }

        /* Ukuran Ikon SVG */
        .action-btn svg {
            width: 18px;
            height: 18px;

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
            <a href="/pemasukanBarang" class="menu-item active">
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
            <svg fill="currentColor" viewBox="0 0 20 20">
                <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM14 11a1 1 0 011 1v1h1a1 1 0 110 2h-1v1a1 1 0 11-2 0v-1h-1a1 1 0 110-2h1v-1a1 1 0 011-1z"/>
            </svg>
            <div class="page-header-text">
                <h1>Pemasukan Barang</h1>
                <p>Catat pemasukan barang dari supplier atau pusat</p>
            </div>
        </div>

        <!-- Content Grid -->
        <div class="content-grid">
            <!-- Form Card -->
            <div class="form-card">
                <div class="form-header">
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"/>
                    </svg>
                    <h2>Tambah Pemasukan</h2>
                </div>

                <form id="pemasukanForm" method="POST" action="/simpan-pemasukan">
                    @csrf
                    <!-- Tipe Pemasukan -->
                    <div class="form-group">
                        <label>Tipe Pemasukan</label>
                        <select name="tipe_pemasukan" id="tipePemasukan" onchange="toggleSupplier()" required>
                            <option value="">-- Pilih Tipe --</option>
                            <option value="pembelian">Pembelian</option>
                            <option value="transfer">Transfer Masuk</option>
                        </select>
                    </div>

                    <!-- Supplier -->
                    <div class="form-group" id="supplierGroup" style="display: none;">
                        <label>Supplier</label>
                        <select name="supplier" id="supplier">
                            <option value="">-- Pilih Supplier --</option>
                            
                            <!-- LOOPING DATA ASLI DARI DATABASE -->
                            @foreach($suppliers as $s)
                                <option value="{{ $s->nama_supplier }}">{{ $s->nama_supplier }}</option>
                            @endforeach
                            
                        </select>
                    </div>

                    <!-- No Surat Jalan -->
                    <div class="form-group">
                        <label>No Surat Jalan</label>
                        <input type="text" name="no_surat_jalan" id="noSuratJalan" placeholder="Contoh: SJ-2026-001">
                    </div>

                    <!-- Barang -->
                    <div class="form-group">
                        <label>Barang</label>
                        <select name="barang_id" id="barang" required>
                            <option value="">-- Cari Barang --</option>
                            @foreach($barangs as $barang)
                                <option value="{{ $barang->id }}">{{ $barang->nama_barang }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Jumlah -->
                    <div class="form-group">
                        <label>Jumlah</label>
                        <input type="number" name="jumlah" id="jumlah" placeholder="0" min="1" required>
                    </div>

                    <!-- Satuan Harga -->
                    <div class="form-group" id="hargaGroup" style="display: none;">
                        <label>Satuan Harga</label>
                        <input type="number" name="satuan_harga" id="satuanHarga" value="0">
                        <p class="form-note">Diisi jika tipe Pembelian, isilah harga tanpa koma maupun titik.</p>
                    </div>

                    <!-- Tanggal Pemasukan -->
                    <div class="form-group">
                        <label>Tanggal Pemasukan</label>
                        <input type="date" name="tanggal_pemasukan" id="tanggalPemasukan" required>
                    </div>

                    <!-- Keterangan -->
                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea name="keterangan" id="keterangan" placeholder="Catatan tambahan (opsional)"></textarea>
                    </div>

                    <!-- Buttons -->
                    <div class="form-buttons">
                        <button type="submit" class="btn btn-primary">
                            <svg fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Simpan Pemasukan
                        </button>
                        <button type="button" class="btn btn-secondary" onclick="resetForm()">
                            <svg fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                            Batal
                        </button>
                    </div>
                </form>
            </div>

            <!-- Info Card -->
            <div class="info-card">
                <div class="info-header">
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                    </svg>
                    <h3>Informasi Tipe Pemasukan</h3>
                </div>

                <div class="info-section">
                    <h4>Pembelian:</h4>
                    <p>Barang dibeli dari supplier dengan harga satuan</p>
                </div>

                <div class="info-section">
                    <h4>Transfer Masuk:</h4>
                    <p>Barang diberikan dari pusat BPS (harga opsional)</p>
                </div>
            </div>
        </div>

        <div class="inventory-card">
                <div class="inventory-header">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <h2 style="font-size: 16px; margin: 0;">Riwayat Pemasukan Terbaru</h2>
                </div>
                <table class="inventory-table">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>No Surat Jalan</th>
                            <th>Barang</th>
                            <th style="text-align: center;">Jumlah</th>
                            <th style="text-align: center;">Satuan Harga</th>
                            <th style="text-align: center;">Tipe</th>
                            <th>Supplier</th>
                            <th>Keterangan</th>
                            <th style="text-align: center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($riwayatPemasukan as $r)
                        <tr>
                            <td>{{ \Carbon\Carbon::parse($r->tanggal_pemasukan)->format('d/m/Y') }}</td>
                            <td>{{ $r->no_surat_jalan ?? '-' }}</td>
                            <td>{{ $r->barang->nama_barang ?? $r->nama_barang }}</td>
                            
                            <td style="text-align: center;">
                                <b style="color: #059669;">+{{ $r->jumlah }}</b> 
                                <span style="font-size: 12px; color: #64748b;">{{ $r->barang->satuan ?? 'buah' }}</span>
                            </td>

                            <td style="text-align: center;">
                                <b>Rp {{ number_format($r->satuan_harga, 0, ',', '.') }}</b>
                            </td>

                            <td style="text-align: center;">
                                <span class="badge {{ $r->tipe_pemasukan == 'pembelian' ? 'badge-pembelian' : 'badge-transfer' }}">
                                    {{ $r->tipe_pemasukan }}
                                </span>
                            </td>

                            <td>{{ $r->supplier ?? 'PUSAT' }}</td>

                            <td style="font-size: 13px; color: #64748b; max-width: 150px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;" title="{{ $r->keterangan }}"> {{ $r->keterangan ?? '-' }}</td>

                            <td style="text-align: center;">
                                <div class="action-buttons">
                                    <!-- Tombol Edit (Ikon Pensil SVG) -->
                                    <button class="btn-action btn-edit" title="Edit">
                                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>
                                        </svg>
                                    </button>

                                    <!-- Tombol Hapus (Ikon Tong Sampah SVG) -->
                                    <form action="/hapus-pemasukan/{{ $r->id }}" method="POST" style="margin:0;">
                                        @csrf 
                                        @method('DELETE')
                                        <button type="submit" class="btn-action btn-delete" onclick="return confirm('Hapus riwayat ini?')" title="Hapus">
                                            <svg width="16" height="16" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="9" class="empty-state">Belum ada data pemasukan barang.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    <!-- Logout Modal -->
    <div id="logoutModal" class="modal-overlay" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.6); backdrop-filter: blur(5px); z-index: 9999; justify-content: center; align-items: center;">
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
        // Set tanggal hari ini otomatis
        document.addEventListener('DOMContentLoaded', function() {
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('tanggalPemasukan').value = today;
        });

        // Toggle Supplier & Harga berdasarkan Tipe Pemasukan
        function toggleSupplier() {
            const tipe = document.getElementById('tipePemasukan').value;
            const supplierGroup = document.getElementById('supplierGroup');
            const hargaGroup = document.getElementById('hargaGroup');
            
            if (tipe === 'pembelian') {
                supplierGroup.style.display = 'block';
                hargaGroup.style.display = 'block';
            } else if (tipe === 'transfer') {
                supplierGroup.style.display = 'none';
                hargaGroup.style.display = 'none';
            } else {
                supplierGroup.style.display = 'none';
                hargaGroup.style.display = 'none';
            }
        }


        // Reset Form
        function resetForm() {
            document.getElementById('pemasukanForm').reset();
            document.getElementById('supplierGroup').style.display = 'none';
            document.getElementById('hargaGroup').style.display = 'none';
            
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('tanggalPemasukan').value = today;
        }

        // Logout Modal Functions
        function showLogoutModal() {
            document.getElementById('logoutModal').style.display = 'flex';
        }

        function closeLogoutModal() {
            document.getElementById('logoutModal').style.display = 'none';
        }

        function confirmLogout() {
            window.location.href = '/';
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            const modal = document.getElementById('logoutModal');
            if (event.target === modal) {
                closeLogoutModal();
            }
        }
    </script>
</body>
</html>