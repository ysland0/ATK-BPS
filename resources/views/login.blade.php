<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - BPS Kota Semarang</title>
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    
</head>
<body>
        <!-- Left Section -->
        <div class="left-section">
            <div class="logo-container">
        <img src="{{ asset('assets/images/logoBPS.png') }}" alt="Logo BPS" class="logo">
            <div class="logo-text">
            BADAN PUSAT STATISTIK<br>
            KOTA SEMARANG
            </div>
        </div>

        <a href="/" class="back-link">
            <svg width="20" height="20" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd"/>
            </svg>
            Kembali ke pengisian
        </a>
    </div>

    <!-- Right Section -->
    <div class="right-section">
        <div class="login-card">
            <h1 class="login-title">ADMIN LOGIN</h1>

            <div id="errorMessage" class="error-message">
                Username atau password salah!
            </div>

            <form id="loginForm">
                <div class="form-group">
                    <label for="username">username</label>
                    <input type="text" id="username" name="username" required autocomplete="off">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <button type="submit" class="login-btn">LOGIN</button>

                <p class="admin-note">Anda masuk sebagai admin</p>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            const errorMessage = document.getElementById('errorMessage');

            // Hapus error message dulu
            errorMessage.classList.remove('show');

            // Validasi username dan password
            if (username === 'admin123' && password === 'password123') {
                // Login berhasil
                alert('Login berhasil!');
                // Redirect ke lqanding page 
                window.location.href = '/landingPage';
            } else {
                // Login gagal
                errorMessage.classList.add('show');
                
                // Goyang form untuk efek error
                const loginCard = document.querySelector('.login-card');
                loginCard.style.animation = 'shake 0.5s';
                setTimeout(() => {
                    loginCard.style.animation = '';
                }, 500);
            }
        });

        // Animasi shake untuk error
        const style = document.createElement('style');
        style.textContent = `
            @keyframes shake {
                0%, 100% { transform: translateX(0); }
                10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
                20%, 40%, 60%, 80% { transform: translateX(5px); }
            }
        `;
        document.head.appendChild(style);
    </script>
</body>
</html>