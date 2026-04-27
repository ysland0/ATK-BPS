<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Permohonan Barang - BPS Kota Semarang</title>
    <link rel="stylesheet" href="{{ asset('assets/css/permohonan.css') }}">
</head>
<body>
    <div class="container">
        <a href="/" class="back-link">
            <svg fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd"/>
            </svg>
            Kembali ke Beranda
        </a>

        <div class="form-card">
            <div class="form-header">
                <img src="{{ asset('assets/images/logoBPS.png') }}" alt="Logo BPS" onerror="this.style.display='none'">
                <h1>Form Permohonan Barang</h1>
                <p>BPS Kota Semarang</p>
            </div>

            <div class="form-content">
                <div class="info-box">
                    <p><strong>📋 Informasi:</strong> Form ini digunakan untuk mengajukan permohonan pengadaan barang ATK yang saat ini tidak tersedia atau stok habis. Permohonan akan diproses oleh admin.</p>
                </div>

                <form id="permohonanForm" onsubmit="submitForm(event)">
                    <div class="form-group">
                        <label for="namaPegawai">Nama Pegawai <span>*</span></label>
                        <select id="namaPegawai" required>
                            <option value="">Pilih Nama Pegawai</option>
                            <option value="Ahmad Fauzi">Ahmad Fauzi</option>
                            <option value="Siti Aminah">Siti Aminah</option>
                            <option value="Budi Santoso">Budi Santoso</option>
                            <option value="Dewi Lestari">Dewi Lestari</option>
                            <option value="Eko Prasetyo">Eko Prasetyo</option>
                            <option value="Hartanto Agoestijono">Hartanto Agoestijono</option>
                            <option value="Nita Amaliyah">Nita Amaliyah</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="requestBarang">Request Barang <span>*</span></label>
                        <textarea id="requestBarang" placeholder="Tuliskan detail barang yang Anda butuhkan...&#10;&#10;Contoh:&#10;- Pulpen biru (20 buah)&#10;- Kertas A4 (5 rim)&#10;- Spidol whiteboard hitam (10 buah)" required maxlength="500" oninput="updateCharCount()"></textarea>
                        <div class="char-count">
                            <span id="charCount">0</span>/500 karakter
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn btn-secondary" onclick="resetForm()">
                            <svg fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                            Reset
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <svg fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"/>
                            </svg>
                            Kirim Permohonan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function updateCharCount() {
            const textarea = document.getElementById('requestBarang');
            const charCount = document.getElementById('charCount');
            charCount.textContent = textarea.value.length;
        }

        function resetForm() {
            if (confirm('Apakah Anda yakin ingin mereset form?')) {
                document.getElementById('permohonanForm').reset();
                updateCharCount();
            }
        }

        function submitForm(event) {
            event.preventDefault();
            
            const namaPegawai = document.getElementById('namaPegawai').value;
            const requestBarang = document.getElementById('requestBarang').value;

            if (!namaPegawai || !requestBarang) {
                alert('⚠️ Mohon lengkapi semua field yang wajib diisi!');
                return;
            }

            // Show confirmation
            const confirmation = confirm(
                `Konfirmasi Permohonan Barang:\n\n` +
                `Nama: ${namaPegawai}\n` +
                `Request: ${requestBarang.substring(0, 100)}...\n\n` +
                `Kirim permohonan ini?`
            );

            if (confirmation) {
                // Simulate success
                alert('✅ Permohonan berhasil dikirim!\n\n' +
                      'Permohonan Anda akan segera diproses oleh admin.\n' +
                      'Terima kasih!');
                
                // Reset form
                document.getElementById('permohonanForm').reset();
                updateCharCount();
                
                // Redirect to home after 1 second
                setTimeout(() => {
                    window.location.href = '/';
                }, 1000);
            }
        }
    </script>
</body>
</html>