<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengambilan Barang</title>
    <link rel="stylesheet" href="{{ asset('assets/css/pengambilan.css') }}">
    <style>
        select, option {
            color: #333 !important; 
            background-color: #fff !important; 
        }
        select:focus {
            color: #333 !important;
        }

        .tambah-item-btn {
            width: 100%;
            margin-top: 15px;
            padding: 14px;
            background: transparent;
            color: #6366f1;
            border: 2px dashed #6366f1;
            border-radius: 10px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
        }
        .tambah-item-btn:hover {
            background: #eef2ff;
        }
    </style>
</head>
    
<body>

    <div class="container">
        <a href="/" class="back-link">
            <svg fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd"/>
            </svg>
            Kembali ke Beranda
        </a>
    <div class="container">
        <!-- Header -->
        <div class="header">
           <img src="{{ asset('assets/images/logoBPS.png') }}" alt="Logo BPS" class="logo">
            <h1>BADAN PUSAT STATISTIK KOTA SEMARANG</h1>
        </div>

        @if(session('success'))
            <div style="background: #d1fae5; color: #065f46; padding: 15px; border-radius: 8px; margin-bottom: 20px; text-align: center; border: 1px solid #10b981;">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div style="background: #fee2e2; color: #991b1b; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Page Title -->
        <h2 class="page-title">Form Pengambilan Barang Alat Tulis Kantor</h2>

        <!-- Form Card -->
        <div class="form-card">
            <form id="pengambilanForm" method="POST" action="/simpan-pengambilan">
                @csrf
                <!-- Data Pengambilan Barang Section -->
                <div class="section-header">
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                    </svg>
                    DATA PENGAMBILAN BARANG
                </div>

                <div class="form-section">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="namaPegawai">Nama Pegawai</label>
                            <select id="namaPegawai" name="nama_pegawai" required>
                                <option value="">Pilih Nama Pegawai</option>
                                @foreach($pegawais as $p) 
                                    <option value="{{ $p->nama }}">{{ $p->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" id="tanggal" name="tanggal" required>
                        </div>
                    </div>
                </div>

                    <!-- Unit Barang Section -->
                    <div class="section-header">UNIT BARANG</div>

                    <div class="form-section">
                        <div id="itemBarangContainer">
                            <div class="item-barang" data-index="0">
                                <div class="form-row">
                                    <div class="form-group">
                                        <label>Nama Barang</label>
                                        <select name="nama_barang[]" required onchange="checkStock(this)">
                                            <option value="">Pilih Nama Barang</option>
                                            @foreach($barangs as $b)
                                                <option value="{{ $b->nama_barang }}" 
                                                        data-stock="{{ $b->stok }}" 
                                                        data-nama="{{ $b->nama_barang }}">
                                                    {{ $b->nama_barang }} 
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Jumlah</label>
                                        <input type="number" name="jumlah[]" value="0" min="0" required 
                                            oninput="checkStock(this.closest('.item-barang').querySelector('select'))">
                                    </div>
                                </div>
                                <div class="stockAlert" style="display:none; margin-top:15px; padding:12px 15px; border-radius:8px; font-size:14px; font-weight:600;"></div>
                            </div>
                        </div>

                        <button type="button" class="tambah-item-btn" onclick="tambahItem()">
                            + Tambah Item Barang
                        </button>
                    </div>

                <!-- Tanda Tangan Section -->
                <div class="section-header">TANDA TANGAN</div>

                <div class="signature-section">
                    <div class="signature-header">
                        <span></span>
                        <button type="button" class="reset-btn" onclick="clearSignature()">
                            <svg width="16" height="16" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd"/>
                            </svg>
                            Reset
                        </button>
                    </div>
                    <div class="signature-canvas-wrapper">
                        <canvas id="signatureCanvas"></canvas>
                    </div>
                    <input type="hidden" name="tanda_tangan" id="tandaTanganData">
                </div>

                <!-- Submit Button -->
                <button type="submit" class="submit-btn">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"/>
                    </svg>
                    Simpan
                </button>
            </form>
        </div>

    <script>
        // Set tanggal hari ini otomatis
        document.addEventListener('DOMContentLoaded', function() {
            const now = new Date();
            const wib = new Date(now.getTime() + (7 * 60 * 60 * 1000));
            const today = wib.toISOString().split('T')[0];
            document.getElementById('tanggal').value = today;
        });

        // Cek stok per item
        function checkStock(selectEl) {
            const itemEl = selectEl.closest('.item-barang');
            const jumlahInput = itemEl.querySelector('input[name="jumlah[]"]');
            const alertBox = itemEl.querySelector('.stockAlert');

            if (!selectEl.value) {
                alertBox.style.display = 'none';
                return;
            }

            const selectedOption = selectEl.options[selectEl.selectedIndex];
            const stock = parseInt(selectedOption.getAttribute('data-stock'));
            const namaBarang = selectedOption.getAttribute('data-nama');
            const jumlahDiminta = parseInt(jumlahInput.value) || 0;

            alertBox.style.display = 'block';

            if (stock === 0) {
                alertBox.style.background = '#fee2e2';
                alertBox.style.border = '2px solid #ef4444';
                alertBox.style.color = '#991b1b';
                alertBox.innerHTML = `<strong>❌ STOK HABIS!</strong><br>Barang "${namaBarang}" tidak tersedia (stok: 0).`;
                jumlahInput.value = 0;
                jumlahInput.disabled = true;
            } else if (stock >= 1 && stock <= 5) {
                jumlahInput.disabled = false;
                if (jumlahDiminta > stock) {
                    alertBox.style.background = '#fee2e2';
                    alertBox.style.border = '2px solid #ef4444';
                    alertBox.style.color = '#991b1b';
                    alertBox.innerHTML = `<strong>⚠️ STOK TIDAK MENCUKUPI!</strong><br>Stok "${namaBarang}" hanya tersisa <strong>${stock}</strong>. Jumlah diminta: <strong>${jumlahDiminta}</strong>.`;
                    jumlahInput.value = stock;
                } else {
                    alertBox.style.background = '#fef3c7';
                    alertBox.style.border = '2px solid #fbbf24';
                    alertBox.style.color = '#92400e';
                    alertBox.innerHTML = `<strong>⚠️ STOK HAMPIR HABIS!</strong><br>Barang "${namaBarang}" tersisa <strong>${stock}</strong> unit.`;
                }
            } else {
                jumlahInput.disabled = false;
                if (jumlahDiminta > stock) {
                    alertBox.style.background = '#fee2e2';
                    alertBox.style.border = '2px solid #ef4444';
                    alertBox.style.color = '#991b1b';
                    alertBox.innerHTML = `<strong>⚠️ STOK TIDAK MENCUKUPI!</strong><br>Stok tersedia: <strong>${stock}</strong>. Jumlah diminta: <strong>${jumlahDiminta}</strong>.`;
                    jumlahInput.value = stock;
                } else if (jumlahDiminta > 0) {
                    alertBox.style.background = '#d1fae5';
                    alertBox.style.border = '2px solid #10b981';
                    alertBox.style.color = '#065f46';
                    alertBox.innerHTML = `<strong>✅ STOK TERSEDIA!</strong><br>Pengambilan <strong>${jumlahDiminta}</strong> dari <strong>${stock}</strong> unit dapat diproses.`;
                } else {
                    alertBox.style.display = 'none';
                }
            }
        }

        // Tambah item baru
        function tambahItem() {
            const template = document.getElementById('itemTemplate');
            const clone = template.content.cloneNode(true);
            document.getElementById('itemBarangContainer').appendChild(clone);
        }

        // Hapus item
        function hapusItem(btnEl) {
            btnEl.closest('.item-barang').remove();
        }

        // Canvas tanda tangan
        const canvas = document.getElementById('signatureCanvas');
        const ctx = canvas.getContext('2d');
        let isDrawing = false;

        function resizeCanvas() {
            const container = canvas.parentElement;
            canvas.width = container.offsetWidth;
            canvas.height = container.offsetHeight;
        }
        resizeCanvas();
        window.addEventListener('resize', resizeCanvas);

        canvas.addEventListener('mousedown', startDrawing);
        canvas.addEventListener('mousemove', draw);
        canvas.addEventListener('mouseup', stopDrawing);
        canvas.addEventListener('mouseout', stopDrawing);
        canvas.addEventListener('touchstart', handleTouch);
        canvas.addEventListener('touchmove', handleTouch);
        canvas.addEventListener('touchend', stopDrawing);

        function startDrawing(e) {
            isDrawing = true;
            const rect = canvas.getBoundingClientRect();
            ctx.beginPath();
            ctx.moveTo(e.clientX - rect.left, e.clientY - rect.top);
        }

        function draw(e) {
            if (!isDrawing) return;
            const rect = canvas.getBoundingClientRect();
            ctx.lineTo(e.clientX - rect.left, e.clientY - rect.top);
            ctx.strokeStyle = '#000';
            ctx.lineWidth = 2;
            ctx.lineCap = 'round';
            ctx.stroke();
        }

        function stopDrawing() {
            isDrawing = false;
            document.getElementById('tandaTanganData').value = canvas.toDataURL();
        }

        function handleTouch(e) {
            e.preventDefault();
            const touch = e.touches[0];
            const mouseEvent = new MouseEvent(e.type === 'touchstart' ? 'mousedown' : 'mousemove', {
                clientX: touch.clientX,
                clientY: touch.clientY
            });
            canvas.dispatchEvent(mouseEvent);
        }

        function clearSignature() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            document.getElementById('tandaTanganData').value = '';
        }

        // Submit form
        document.getElementById('pengambilanForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // Validasi semua item
            const items = document.querySelectorAll('.item-barang');
            for (const item of items) {
                const select = item.querySelector('select');
                const jumlahInput = item.querySelector('input[name="jumlah[]"]');
                const jumlahDiminta = parseInt(jumlahInput.value) || 0;

                if (!select.value) {
                    alert('Silakan pilih barang untuk semua item!');
                    return;
                }

                const stock = parseInt(select.options[select.selectedIndex].getAttribute('data-stock'));
                const namaBarang = select.options[select.selectedIndex].getAttribute('data-nama');

                if (stock === 0) {
                    alert(`❌ Barang "${namaBarang}" stok habis!`);
                    return;
                }
                if (jumlahDiminta <= 0) {
                    alert(`Jumlah untuk "${namaBarang}" harus lebih dari 0!`);
                    return;
                }
                if (jumlahDiminta > stock) {
                    alert(`⚠️ Stok "${namaBarang}" tidak mencukupi!\nTersedia: ${stock}, diminta: ${jumlahDiminta}`);
                    return;
                }
            }

            // Validasi tanda tangan
            if (!document.getElementById('tandaTanganData').value) {
                alert('Silakan tanda tangan terlebih dahulu!');
                return;
            }

            this.submit();
        });
    </script>

    <template id="itemTemplate">
    <div class="item-barang" style="margin-top: 15px; padding: 15px; border: 2px solid #6366f1; border-radius: 10px;">
        <div class="form-row">
            <div class="form-group">
                <label>Nama Barang</label>
                <select name="nama_barang[]" required onchange="checkStock(this)">
                    <option value="">Pilih Nama Barang</option>
                    @foreach($barangs as $b)
                        <option value="{{ $b->nama_barang }}" 
                                data-stock="{{ $b->stok }}" 
                                data-nama="{{ $b->nama_barang }}">
                            {{ $b->nama_barang }} 
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Jumlah</label>
                <input type="number" name="jumlah[]" value="0" min="0" required 
                       oninput="checkStock(this.closest('.item-barang').querySelector('select'))">
            </div>
        </div>
        <div class="stockAlert" style="display:none; margin-top:15px; padding:12px 15px; border-radius:8px; font-size:14px; font-weight:600;"></div>
        <button type="button" onclick="hapusItem(this)" 
                style="margin-top:10px; background:#fee2e2; color:#991b1b; border:none; padding:8px 12px; border-radius:8px; cursor:pointer;">
            🗑️
        </button>
    </div>
</template>
</body>
</html>