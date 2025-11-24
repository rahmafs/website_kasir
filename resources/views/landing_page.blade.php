<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir Toko Alat Tulis</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #6c63ff;
            --secondary-color: #3b3b98;
            --accent-color: #ff6b6b;
            --light-color: #f8f9fa;
            --dark-color: #212529;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--light-color);
            overflow-x: hidden;
        }
        
        /* Animated Background */
        .animated-bg {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: -1;
            background: linear-gradient(120deg, #f8f9fa, #e9ecef);
            overflow: hidden;
        }
        
        .animated-bg::before {
            content: '';
            position: absolute;
            width: 200%;
            height: 200%;
            top: -50%;
            left: -50%;
            background: radial-gradient(circle, rgba(108, 99, 255, 0.05) 0%, rgba(59, 59, 152, 0.05) 50%, transparent 70%);
            animation: rotate 30s linear infinite;
        }
        
        @keyframes rotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        /* Floating Shapes */
        .shape {
            position: absolute;
            opacity: 0.1;
            z-index: -1;
        }
        
        .shape-1 {
            width: 80px;
            height: 80px;
            background-color: var(--primary-color);
            border-radius: 50%;
            top: 20%;
            left: 10%;
            animation: float 15s infinite ease-in-out;
        }
        
        .shape-2 {
            width: 60px;
            height: 60px;
            background-color: var(--accent-color);
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            top: 60%;
            right: 10%;
            animation: float 20s infinite ease-in-out reverse;
        }
        
        .shape-3 {
            width: 100px;
            height: 100px;
            background-color: var(--secondary-color);
            border-radius: 50%;
            bottom: 20%;
            left: 20%;
            animation: float 18s infinite ease-in-out;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(10deg); }
        }
        
        /* Navbar Styles */
        .navbar {
            background-color: rgba(33, 37, 41, 0.95) !important;
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .navbar-brand {
            font-weight: 700;
            color: white !important;
            display: flex;
            align-items: center;
        }
        
        .navbar-brand i {
            margin-right: 8px;
            color: var(--primary-color);
        }
        
        .nav-link {
            font-weight: 500;
            color: rgba(255, 255, 255, 0.8) !important;
            position: relative;
            transition: all 0.3s ease;
            margin: 0 10px;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--primary-color);
            transition: width 0.3s ease;
        }
        
        .nav-link:hover {
            color: white !important;
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 120px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('https://picsum.photos/seed/stationery/1920/800.jpg');
            background-size: cover;
            background-position: center;
            opacity: 0.1;
            z-index: 0;
        }
        
        .hero-content {
            position: relative;
            z-index: 1;
        }
        
        .hero-section h1 {
            font-weight: 700;
            margin-bottom: 20px;
            animation: fadeInUp 1s ease;
        }
        
        .hero-section p {
            font-size: 1.25rem;
            margin-bottom: 30px;
            animation: fadeInUp 1s ease 0.2s;
            animation-fill-mode: both;
        }
        
        .btn-hero {
            background-color: white;
            color: var(--primary-color);
            font-weight: 600;
            padding: 12px 30px;
            border-radius: 50px;
            border: none;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            animation: fadeInUp 1s ease 0.4s;
            animation-fill-mode: both;
        }
        
        .btn-hero:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
            background-color: var(--light-color);
        }
        
        /* Feature Cards */
        .feature-card {
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            height: 100%;
            background-color: white;
            position: relative;
            overflow: hidden;
        }
        
        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.3s ease;
        }
        
        .feature-card:hover::before {
            transform: scaleX(1);
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .feature-icon {
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 20px;
        }
        
        .feature-card h4 {
            font-weight: 600;
            margin-bottom: 15px;
        }
        
        /* Role Cards */
        .role-card {
            border-radius: 15px;
            padding: 40px 30px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            height: 100%;
            background-color: white;
            position: relative;
            overflow: hidden;
        }
        
        .role-card::before {
            content: '';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: rgba(108, 99, 255, 0.1);
            z-index: 0;
        }
        
        .role-card::after {
            content: '';
            position: absolute;
            bottom: -30px;
            left: -30px;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background-color: rgba(108, 99, 255, 0.1);
            z-index: 0;
        }
        
        .role-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .role-icon {
            font-size: 3rem;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
        }
        
        .admin-icon {
            color: var(--primary-color);
        }
        
        .cashier-icon {
            color: #28a745;
        }
        
        .role-card h3 {
            font-weight: 600;
            margin-bottom: 15px;
            position: relative;
            z-index: 1;
        }
        
        .role-card p {
            position: relative;
            z-index: 1;
        }
        
        /* Section Headers */
        .section-title {
            font-weight: 700;
            margin-bottom: 50px;
            position: relative;
            display: inline-block;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            border-radius: 2px;
        }
        
        /* Footer */
        footer {
            background-color: var(--dark-color);
            color: white;
            padding: 40px 0 20px;
            position: relative;
        }
        
        footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
        }
        
        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }
        
        .animate-on-scroll.animated {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .hero-section {
                padding: 80px 0;
            }
            
            .hero-section h1 {
                font-size: 2.5rem;
            }
            
            .feature-card, .role-card {
                margin-bottom: 30px;
            }
        }
    </style>
</head>
<body>
    <!-- Animated Background -->
    <div class="animated-bg"></div>
    <div class="shape shape-1"></div>
    <div class="shape shape-2"></div>
    <div class="shape shape-3"></div>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <i class="fas fa-cash-register"></i>
                Toko ATK Kasir
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#fitur">Fitur</a></li>
                    <li class="nav-item"><a class="nav-link" href="#role">Akses</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section class="hero-section">
        <div class="container hero-content">
            <h1 class="display-4 fw-bold">Sistem Kasir Toko Alat Tulis</h1>
            <p class="lead mt-3">Mengelola penjualan, produk, dan transaksi dengan mudah. Dibuat khusus untuk Admin dan Kasir.</p>
            <a href="{{ route('login') }}" class="btn btn-hero btn-lg mt-4">
                <i class="fas fa-sign-in-alt me-2"></i>Mulai Sekarang
            </a>
        </div>
    </section>

    <!-- FITUR -->
    <section id="fitur" class="py-5">
        <div class="container">
            <h2 class="text-center fw-bold mb-4 section-title animate-on-scroll">Fitur Utama</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card animate-on-scroll">
                        <div class="feature-icon">
                            <i class="fas fa-boxes"></i>
                        </div>
                        <h4 class="fw-bold">Manajemen Produk</h4>
                        <p>Mengatur data barang, harga, dan stok dengan mudah.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card animate-on-scroll">
                        <div class="feature-icon">
                            <i class="fas fa-cash-register"></i>
                        </div>
                        <h4 class="fw-bold">Kasir</h4>
                        <p>Melakukan transaksi penjualan cepat dan efisien.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card animate-on-scroll">
                        <div class="feature-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h4 class="fw-bold">Laporan</h4>
                        <p>Melihat laporan penjualan harian, mingguan, dan bulanan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ROLE AKSES -->
    <section id="role" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center fw-bold mb-4 section-title animate-on-scroll">Akses Pengguna</h2>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="role-card animate-on-scroll">
                        <div class="role-icon admin-icon">
                            <i class="fas fa-user-shield"></i>
                        </div>
                        <h3 class="fw-bold text-primary">Admin</h3>
                        <p>Mengelola produk, kategori, laporan, dan mengatur kasir.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="role-card animate-on-scroll">
                        <div class="role-icon cashier-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <h3 class="fw-bold text-success">Kasir</h3>
                        <p>Fokus pada transaksi penjualan dan input barang keluar.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="mb-0">&copy; 2025 Sistem Kasir Toko Alat Tulis. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JS -->
    <script>
        // Scroll animations
        function animateOnScroll() {
            const elements = document.querySelectorAll('.animate-on-scroll');
            
            elements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const windowHeight = window.innerHeight;
                
                if (elementTop < windowHeight - 100) {
                    element.classList.add('animated');
                }
            });
        }
        
        // Initial check and add event listener
        window.addEventListener('load', animateOnScroll);
        window.addEventListener('scroll', animateOnScroll);
        
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
        
        // Navbar background on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            
            if (window.scrollY > 50) {
                navbar.style.backgroundColor = 'rgba(33, 37, 41, 0.98)';
            } else {
                navbar.style.backgroundColor = 'rgba(33, 37, 41, 0.95)';
            }
        });
    </script>
</body>
</html>