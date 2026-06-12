<div style="font-family: Arial, sans-serif; padding: 10px; background: #fff; color: #000;">

    {{-- ══════════════════════════ HEADER ══════════════════════════ --}}
    <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:15px;">
        <div style="display:flex; align-items:center; gap:12px;">
            <img src="{{ asset('assets/images/logoBPS.png') }}"
                 style="width:50px;height:50px;" alt="Logo BPS"
                 onerror="this.style.display='none'">
            <div>
                <div style="font-weight:700; font-size:13px;">BADAN PUSAT STATISTIK</div>
                <div style="font-weight:700; font-size:13px;">KOTA SEMARANG</div>
                <div style="font-size:11px; color:#333;">Jl. Inspeksi Kali No. 1 Semarang</div>
            </div>
        </div>
        <div style="text-align:center;">
            <div style="font-weight:700; font-size:14px; line-height:1.2;">
                KARTU PERSEDIAAN BARANG HABIS PAKAI<br>(ATK/ARK/CS)
            </div>
        </div>
    </div>

    {{-- ══════════════════════════ INFO BARANG ══════════════════════════ --}}
    @php
        $stokAwal    = (int)($barang->stok_awal ?? 0);
        $totalKeluar = array_sum($bulanan);
        $stokAkhir   = $stokAwal - $totalKeluar;
        // Singkatan bulan agar tabel pas
        $namaBulan   = ['JAN','FEB','MAR','APR','MEI','JUN','JUL','AGU','SEP','OKT','NOV','DES'];
    @endphp

    <table style="width:100%; border-collapse:collapse; margin-bottom:15px; font-size:11px;">
        <tr>
            <td style="border:1px solid #000; padding:5px; font-weight:700; width:15%;">Nama Barang</td>
            <td style="border:1px solid #000; padding:5px; width:45%;">: {{ $barang->nama_barang }}</td>
            <td style="border:1px solid #000; padding:5px; font-weight:700; width:15%;">Halaman</td>
            <td style="border:1px solid #000; padding:5px; width:25%;">: 1</td>
        </tr>
        <tr>
            <td style="border:1px solid #000; padding:5px; font-weight:700;">Kode Barang</td>
            <td style="border:1px solid #000; padding:5px;">: {{ $barang->kode_barang ?? $barang->id }}</td>
            <td style="border:1px solid #000; padding:5px; font-weight:700;">Program</td>
            <td style="border:1px solid #000; padding:5px;">: -</td>
        </tr>
        <tr>
            <td style="border:1px solid #000; padding:5px; font-weight:700;">Satuan Barang</td>
            <td style="border:1px solid #000; padding:5px;">: {{ $barang->satuan ?? '-' }}</td>
            <td style="border:1px solid #000; padding:5px; font-weight:700;">Tahun</td>
            <td style="border:1px solid #000; padding:5px;">: {{ $tahun }}</td>
        </tr>
    </table>

    {{-- ══════════════════════════ TABEL BULANAN ══════════════════════════ --}}
    <div style="font-weight:700; font-size:11px; margin-bottom:3px;">
        Banyaknya Pengeluaran Tiap-Tiap Bulan
    </div>
    <table style="width:100%; border-collapse:collapse; font-size:10px; table-layout: fixed;">
        <thead>
            <tr style="background:#f1f5f9;">
                @foreach($namaBulan as $nb)
                    <th style="border:1px solid #000; padding:4px 2px; text-align:center; width:5.5%;">{{ $nb }}</th>
                @endforeach
                <th style="border:1px solid #000; padding:4px 2px; text-align:center;">Jml Keluar</th>
                <th style="border:1px solid #000; padding:4px 2px; text-align:center;">Stok Awal</th>
                <th style="border:1px solid #000; padding:4px 2px; text-align:center;">Stok Akhir</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @for($m = 1; $m <= 12; $m++)
                    <td style="border:1px solid #000; padding:6px 2px; text-align:center;">
                        {{ $bulanan[$m] ?? 0 }}
                    </td>
                @endfor
                <td style="border:1px solid #000; padding:6px 2px; text-align:center; font-weight:700;">{{ $totalKeluar }}</td>
                <td style="border:1px solid #000; padding:6px 2px; text-align:center; font-weight:700;">{{ $stokAwal }}</td>
                <td style="border:1px solid #000; padding:6px 2px; text-align:center; font-weight:700;">{{ $stokAkhir }}</td>
            </tr>
        </tbody>
    </table>

    <div style="margin-top: 15px;"></div>

    {{-- ══════════════════════════ TABEL TRANSAKSI ══════════════════════════ --}}
    <table style="width:100%; border-collapse:collapse; font-size:10px;">
        <thead>
            <tr style="background:#f1f5f9;">
                <th style="border:1px solid #000; padding:6px 2px; text-align:center; width:30px;">No.</th>
                <th style="border:1px solid #000; padding:6px 2px; text-align:center; width:100px;">No. Bon / Faktur</th>
                <th style="border:1px solid #000; padding:6px 2px; text-align:center; width:70px;">Tgl M/K</th>
                <th style="border:1px solid #000; padding:6px 2px; text-align:center;">Uraian Pemasukan / Pengeluaran</th>
                <th style="border:1px solid #000; padding:6px 2px; text-align:center; width:80px;">Harga Satuan</th>
                <th style="border:1px solid #000; padding:6px 2px; text-align:center; width:50px;">Masuk</th>
                <th style="border:1px solid #000; padding:6px 2px; text-align:center; width:50px;">Keluar</th>
                <th style="border:1px solid #000; padding:6px 2px; text-align:center; width:60px;">Sisa</th>
            </tr>
            <tr style="background:#fafafa; font-size:9px;">
                <th style="border:1px solid #000; text-align:center;">(1)</th>
                <th style="border:1px solid #000; text-align:center;">(2)</th>
                <th style="border:1px solid #000; text-align:center;">(3)</th>
                <th style="border:1px solid #000; text-align:center;">(4)</th>
                <th style="border:1px solid #000; text-align:center;">(5)</th>
                <th style="border:1px solid #000; text-align:center;">(6)</th>
                <th style="border:1px solid #000; text-align:center;">(7)</th>
                <th style="border:1px solid #000; text-align:center;">(8)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="border:1px solid #000; padding:5px; text-align:center;">-</td>
                <td style="border:1px solid #000; padding:5px; text-align:center;">-</td>
                <td style="border:1px solid #000; padding:5px; text-align:center;">-</td>
                <td style="border:1px solid #000; padding:5px; font-weight:700;">Stok Awal Tahun {{ $tahun }}</td>
                <td style="border:1px solid #000; padding:5px; text-align:right;">-</td>
                <td style="border:1px solid #000; padding:5px; text-align:center;">-</td>
                <td style="border:1px solid #000; padding:5px; text-align:center;">-</td>
                <td style="border:1px solid #000; padding:5px; text-align:center; font-weight:700;">{{ $stokAwal }}</td>
            </tr>
            @forelse($logs as $i => $log)
                <tr>
                    <td style="border:1px solid #000; padding:5px; text-align:center;">{{ $i + 1 }}</td>
                    <td style="border:1px solid #000; padding:5px;">{{ $log->bukti ?? '-' }}</td>
                    <td style="border:1px solid #000; padding:5px; text-align:center;">
                        {{ \Carbon\Carbon::parse($log->tanggal)->format('d/m/Y') }}
                    </td>
                    <td style="border:1px solid #000; padding:5px;">{{ $log->uraian ?? '-' }}</td>
                    <td style="border:1px solid #000; padding:5px; text-align:right;">-</td>
                    <td style="border:1px solid #000; padding:5px; text-align:center;">{{ $log->masuk > 0 ? $log->masuk : '' }}</td>
                    <td style="border:1px solid #000; padding:5px; text-align:center;">{{ $log->keluar > 0 ? $log->keluar : '' }}</td>
                    <td style="border:1px solid #000; padding:5px; text-align:center; font-weight:700;">{{ $log->sisa }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" style="border:1px solid #000; padding:15px; text-align:center; color:#666;">
                        Tidak ada transaksi pada tahun {{ $tahun }}
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{-- ══════════════════════════ TANDA TANGAN ══════════════════════════ --}}
    <div style="display:flex; justify-content:space-between; margin-top:30px; font-size:11px;">
        <div style="text-align:center; width:33%;">
            <div style="margin-bottom:2px;">Mengetahui,</div>
            <div style="margin-bottom:60px;">Kepala Subbagian Umum</div>
            <div style="font-weight:700; text-decoration:underline; text-transform:uppercase;">DEWI FENTY EKASARI, SST.,M.Si</div>
            <div>NIP. 198102082003122003</div>
        </div>
        <div style="text-align:center; width:33%;">
            <div style="margin-bottom:2px;">Semarang, {{ \Carbon\Carbon::now()->locale('id')->isoFormat('D MMMM YYYY') }}</div>
            <div style="margin-bottom:60px;">Petugas Persediaan</div>
            <div style="font-weight:700; text-decoration:underline; text-transform:uppercase;">HARTANTO ADISATRIANTO</div>
            <div>NIP. 19780922 199126 1-02</div>
        </div>
    </div>
</div>