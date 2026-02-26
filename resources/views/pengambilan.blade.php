<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengambilan Barang</title>
    <link rel="stylesheet" href="{{ asset('assets/css/pengambilan.css') }}">
</head>
    
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
                            <select id="listBarang" name="barang_id" required onchange="checkStock()">
                                <option value="">Nama Barang</option>
                                <option value="1" data-stock="50" data-nama="Pulpen Biru Standard">Pulpen Biru Standard</option>
                                <option value="2" data-stock="100" data-nama="Kertas A4 80gsm">Kertas A4 80gsm</option>
                                <option value="3" data-stock="3" data-nama="Spidol Whiteboard">Spidol Whiteboard</option>
                                <option value="4" data-stock="0" data-nama="Penghapus">Penghapus</option>
                                <option value="5" data-stock="25" data-nama="Staples">Staples</option>
                                <option value="6" data-stock="2" data-nama="Paper Clip">Paper Clip</option>
                                <option value="7" data-stock="0" data-nama="Lem Kertas">Lem Kertas</option>
                                <option value="8" data-stock="150" data-nama="Map Plastik">Map Plastik</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="jumlah">Jumlah</label>
                            <div class="number-input-wrapper">
                                <input type="number" id="jumlah" name="jumlah" value="0" min="0" required oninput="checkStock()" onchange="checkStock()">
                                <div class="number-controls">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Alert Box untuk Status Stok -->
                    <div id="stockAlert" style="display: none; margin-top: 15px; padding: 12px 15px; border-radius: 8px; font-size: 14px; font-weight: 600;">
                        <div style="display: flex; align-items: center; gap: 10px;">
                            <svg id="alertIcon" width="20" height="20" fill="currentColor" viewBox="0 0 20 20"></svg>
                            <span id="alertMessage"></span>
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
    </div>

    <script>
        // Set tanggal hari ini otomatis
        document.addEventListener('DOMContentLoaded', function() {
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('tanggal').value = today;
        });

        // Fungsi untuk cek stok barang
        function checkStock() {
            const barangSelect = document.getElementById('listBarang');
            const jumlahInput = document.getElementById('jumlah');
            const alertBox = document.getElementById('stockAlert');
            const alertIcon = document.getElementById('alertIcon');
            const alertMessage = document.getElementById('alertMessage');

            if (!barangSelect.value) {
                alertBox.style.display = 'none';
                return;
            }

            const selectedOption = barangSelect.options[barangSelect.selectedIndex];
            const stock = parseInt(selectedOption.getAttribute('data-stock'));
            const namaBarang = selectedOption.getAttribute('data-nama');
            const jumlahDiminta = parseInt(jumlahInput.value) || 0;

            // Reset display
            alertBox.style.display = 'block';

            // Stok habis (0)
            if (stock === 0) {
                alertBox.style.background = '#fee2e2';
                alertBox.style.border = '2px solid #ef4444';
                alertBox.style.color = '#991b1b';
                alertIcon.innerHTML = '<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>';
                alertMessage.innerHTML = `<strong>❌ STOK HABIS!</strong><br>Barang "${namaBarang}" tidak tersedia (stok: 0). Silakan hubungi admin untuk pengadaan barang.`;
                jumlahInput.value = 0;
                jumlahInput.disabled = true;
                return;
            } 
            // Stok hampir habis (1-5)
            else if (stock >= 1 && stock <= 5) {
                if (jumlahDiminta > stock) {
                    alertBox.style.background = '#fee2e2';
                    alertBox.style.border = '2px solid #ef4444';
                    alertBox.style.color = '#991b1b';
                    alertIcon.innerHTML = '<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>';
                    alertMessage.innerHTML = `<strong>⚠️ STOK TIDAK MENCUKUPI!</strong><br>Stok "${namaBarang}" hanya tersisa <strong>${stock}</strong>. Jumlah diminta: <strong>${jumlahDiminta}</strong>. Silakan kurangi jumlah pengambilan.`;
                    jumlahInput.value = stock;
                } else {
                    alertBox.style.background = '#fef3c7';
                    alertBox.style.border = '2px solid #fbbf24';
                    alertBox.style.color = '#92400e';
                    alertIcon.innerHTML = '<path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>';
                    alertMessage.innerHTML = `<strong>⚠️ PERINGATAN: STOK HAMPIR HABIS!</strong><br>Barang "${namaBarang}" tersisa <strong>${stock}</strong> unit. Segera lakukan pengadaan ulang!`;
                }
                jumlahInput.disabled = false;
            }
            // Stok cukup (> 5)
            else {
                if (jumlahDiminta > stock) {
                    alertBox.style.background = '#fee2e2';
                    alertBox.style.border = '2px solid #ef4444';
                    alertBox.style.color = '#991b1b';
                    alertIcon.innerHTML = '<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>';
                    alertMessage.innerHTML = `<strong>⚠️ STOK TIDAK MENCUKUPI!</strong><br>Stok "${namaBarang}" tersedia: <strong>${stock}</strong>. Jumlah diminta: <strong>${jumlahDiminta}</strong>. Silakan kurangi jumlah pengambilan.`;
                    jumlahInput.value = stock;
                } else if (jumlahDiminta > 0) {
                    alertBox.style.background = '#d1fae5';
                    alertBox.style.border = '2px solid #10b981';
                    alertBox.style.color = '#065f46';
                    alertIcon.innerHTML = '<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>';
                    alertMessage.innerHTML = `<strong>✅ STOK TERSEDIA!</strong><br>Barang "${namaBarang}" tersedia <strong>${stock}</strong> unit. Pengambilan <strong>${jumlahDiminta}</strong> unit dapat diproses.`;
                } else {
                    alertBox.style.display = 'none';
                }
                jumlahInput.disabled = false;
            }
        }

        // Fungsi untuk jumlah increment/decrement
        function incrementJumlah() {
            const input = document.getElementById('jumlah');
            const barangSelect = document.getElementById('listBarang');
            
            if (!barangSelect.value) {
                alert('Silakan pilih barang terlebih dahulu!');
                return;
            }

            const selectedOption = barangSelect.options[barangSelect.selectedIndex];
            const stock = parseInt(selectedOption.getAttribute('data-stock'));

            if (stock === 0) {
                alert('Barang ini tidak tersedia (stok habis)!');
                return;
            }

            const currentValue = parseInt(input.value) || 0;
            if (currentValue < stock) {
                input.value = currentValue + 1;
                checkStock();
            } else {
                alert(`Stok barang hanya tersedia ${stock} unit!`);
            }
        }

        function decrementJumlah() {
            const input = document.getElementById('jumlah');
            const currentValue = parseInt(input.value) || 0;
            if (currentValue > 0) {
                input.value = currentValue - 1;
                checkStock();
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
            
            // Validasi barang dipilih
            const barangSelect = document.getElementById('listBarang');
            if (!barangSelect.value) {
                alert('Silakan pilih barang terlebih dahulu!');
                return;
            }

            // Validasi stok
            const selectedOption = barangSelect.options[barangSelect.selectedIndex];
            const stock = parseInt(selectedOption.getAttribute('data-stock'));
            const namaBarang = selectedOption.getAttribute('data-nama');
            const jumlahDiminta = parseInt(document.getElementById('jumlah').value) || 0;

            if (stock === 0) {
                alert(`❌ TIDAK DAPAT DIPROSES!\n\nBarang "${namaBarang}" tidak tersedia (stok: 0).\nSilakan hubungi admin untuk pengadaan barang.`);
                return;
            }

            if (jumlahDiminta > stock) {
                alert(`⚠️ STOK TIDAK MENCUKUPI!\n\nStok tersedia: ${stock}\nJumlah diminta: ${jumlahDiminta}\n\nSilakan kurangi jumlah pengambilan.`);
                return;
            }

            if (jumlahDiminta <= 0) {
                alert('Jumlah pengambilan harus lebih dari 0!');
                return;
            }

            // Validasi tanda tangan
            if (!document.getElementById('tandaTanganData').value) {
                alert('Silakan tanda tangan terlebih dahulu!');
                return;
            }

            // Konfirmasi pengambilan
            const konfirmasi = confirm(`Konfirmasi Pengambilan Barang:\n\nBarang: ${namaBarang}\nJumlah: ${jumlahDiminta}\nStok Tersisa: ${stock - jumlahDiminta}\n\nApakah data sudah benar?`);
            
            if (konfirmasi) {
                alert('✅ Form berhasil disubmit!\n\nPengambilan barang telah dicatat.');
                
                // Reset form
                this.reset();
                clearSignature();
                document.getElementById('stockAlert').style.display = 'none';
                document.getElementById('jumlah').disabled = false;
                
                // Set tanggal ke hari ini lagi
                const today = new Date().toISOString().split('T')[0];
                document.getElementById('tanggal').value = today;
                
                // Untuk submit ke Laravel, uncomment baris ini:
                // this.submit();
            }
        });
    </script>
</body>
</html>