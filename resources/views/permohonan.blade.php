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
                    @csrf
                    <div class="form-group">
                        <label for="namaPegawai">Nama Pegawai <span>*</span></label>
                        <select id="namaPegawai" name="nama_pegawai" required>
                            <option value="">Pilih Nama Pegawai</option>
                            @foreach($pegawais as $p)
                                <option value="{{ $p->nama }}">{{ $p->nama }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="requestBarang">Request Barang <span>*</span></label>
                        <textarea id="requestBarang" name="request_barang" placeholder="Tuliskan detail barang yang Anda butuhkan..." required maxlength="500" oninput="updateCharCount()"></textarea>
                        <div class="char-count">
                            <span id="charCount">0</span>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn btn-secondary" onclick="resetForm()">Reset</button>
                        <button type="submit" class="btn btn-primary">Kirim Permohonan</button>
                    </div>
                </form>

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

                    async function submitForm(event) {
                        event.preventDefault();
                        
                        const form = event.target;
                        const namaPegawai = document.getElementById('namaPegawai').value;
                        const requestBarang = document.getElementById('requestBarang').value;

                        const confirmation = confirm(`Kirim permohonan atas nama ${namaPegawai}?`);

                        if (confirmation) {
                            try {
                                // Mengirim data ke server
                                const response = await fetch("{{ route('permohonan.store') }}", {
                                    method: "POST",
                                    body: new FormData(form),
                                    headers: {
                                        "X-CSRF-TOKEN": "{{ csrf_token() }}",
                                        "Accept": "application/json"
                                    }
                                });

                                const result = await response.json();

                                if (response.ok) {
                                    alert('✅ Permohonan berhasil dikirim!');
                                    form.reset();
                                    updateCharCount();
                                    window.location.href = '/';
                                } else {
                                    alert('❌ Gagal mengirim: ' + (result.message || 'Terjadi kesalahan'));
                                }
                            } catch (error) {
                                console.error(error);
                                alert('❌ Terjadi kesalahan koneksi ke server.');
                            }
                        }
                    }
                </script>
</body>
</html>