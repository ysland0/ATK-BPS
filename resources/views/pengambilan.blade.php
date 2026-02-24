<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengambilan Barang</title>
    <link rel="stylesheet" href="{{ asset('assets/css/pengambilan.css') }}"></head>
    
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
           <img src="{{ asset('assets/images/logoBPS.png') }}" alt="Logo BPS" class="logo">
            <h1>BADAN PUSAT STATISTIK KOTA SEMARANG</h1>
        </div>

        <!-- Page Title -->
        <h2 class="page-title">Form Pengambilan Barang Alat Tulis Kantor</h2>

        <!-- Form Card -->
        <div class="form-card">
            <form id="pengambilanForm" method="POST" action="#">
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
                            <select id="namaPegawai" name="pegawai_id" required>
                                <option value="">Nama Pegawai</option>
                                <option value="1">Ahmad Fauzi</option>
                                <option value="2">Siti Aminah</option>
                                <option value="3">Budi Santoso</option>
                                <option value="4">Dewi Lestari</option>
                                <option value="5">Eko Prasetyo</option>
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
                    <div class="form-row">
                        <div class="form-group">
                            <label for="listBarang">List Barang</label>
                            <select id="listBarang" name="barang_id" required>
                                <option value="">Nama Barang</option>
                                <option value="1">Pulpen Biru</option>
                                <option value="2">Pensil 2B</option>
                                <option value="3">Penghapus</option>
                                <option value="4">Kertas A4</option>
                                <option value="5">Spidol Hitam</option>
                                <option value="6">Lem Kertas</option>
                                <option value="7">Staples</option>
                                <option value="8">Paper Clip</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="jumlah">Jumlah</label>
                            <div class="number-input-wrapper">
                                <input type="number" id="jumlah" name="jumlah" value="0" min="0" required>
                                <div class="number-controls">
                                </div>
                            </div>
                        </div>
                    </div>
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

       <!-- Admin Login Button -->
        <div class="admin-login">
            <button class="admin-login-btn" onclick="window.location.href='/login'">Login Admin</button>
            <p>masuk sebagai admin</p>
        </div>

    <script>
        // Set tanggal hari ini otomatis
        document.addEventListener('DOMContentLoaded', function() {
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('tanggal').value = today;
        });

        // Fungsi untuk jumlah increment/decrement
        function incrementJumlah() {
            const input = document.getElementById('jumlah');
            input.value = parseInt(input.value) + 1;
        }

        function decrementJumlah() {
            const input = document.getElementById('jumlah');
            if (parseInt(input.value) > 0) {
                input.value = parseInt(input.value) - 1;
            }
        }

        // Canvas untuk tanda tangan
        const canvas = document.getElementById('signatureCanvas');
        const ctx = canvas.getContext('2d');
        let isDrawing = false;

        // Set canvas size
        function resizeCanvas() {
            const container = canvas.parentElement;
            canvas.width = container.offsetWidth;
            canvas.height = container.offsetHeight;
        }
        resizeCanvas();
        window.addEventListener('resize', resizeCanvas);

        // Mouse events
        canvas.addEventListener('mousedown', startDrawing);
        canvas.addEventListener('mousemove', draw);
        canvas.addEventListener('mouseup', stopDrawing);
        canvas.addEventListener('mouseout', stopDrawing);

        // Touch events untuk mobile
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
            // Save signature data
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

        // Form submission
        document.getElementById('pengambilanForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Validasi tanda tangan
            if (!document.getElementById('tandaTanganData').value) {
                alert('Silakan tanda tangan terlebih dahulu!');
                return;
            }

            // Di sini nanti kamu bisa tambahkan AJAX atau biarkan submit normal ke Laravel
            alert('Form berhasil disubmit! (Ini masih demo)');
            
            // Untuk submit ke Laravel, uncomment baris ini:
            // this.submit();
        });
    </script>
    
</body>
</html>
