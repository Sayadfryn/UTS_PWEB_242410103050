<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peternakan Nusantara - @yield('title', 'Landing Page')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #fef3c7;
        }
        .hero-bg {
            background: linear-gradient(to bottom, rgba(74, 112, 67, 0.8), rgba(249, 115, 22, 0.8)), 
            url('https://www.dbs.id/id/iwov-resources/images/blog/investasi-peternakan-sapi-1404x630.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        .navbar {
            transition: background-color 0.3s ease;
        }
        .navbar.scrolled {
            background: rgba(74, 112, 67, 0.95);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .animate-fade-in {
            animation: fadeIn 1.2s ease-in-out;
        }
        .animate-scale {
            transition: transform 0.3s ease;
        }
        .animate-scale:hover {
            transform: scale(1.05);
        }
        @keyframes fadeIn {
            0% { opacity: 0; transform: translateY(30px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        .btn {
            background: linear-gradient(to right, #f97316, #ea580c);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        @media (max-width: 768px) {
            .navbar-menu {
                display: none;
            }
            .navbar-menu.active {
                display: block;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: rgba(74, 112, 67, 0.95);
                padding: 1rem;
            }
        }
    </style>
</head>
<body>

    <section class="hero-bg min-h-screen flex items-center text-white">
        <div class="container mx-auto px-6 flex flex-col md:flex-row items-center gap-12 animate-fade-in">
            <div class="md:w-1/2">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">
                    Revolusi Peternakan Anda dengan <span class="text-orange-400">Teknologi</span>
                </h2>
                <p class="text-lg md:text-xl mb-8 text-gray-100">
                    Kelola hewan, pakan, dan obat-obatan dengan sistem modern yang mudah dan efisien.
                </p>
                <a href="{{ route('login') }}" class="inline-block text-white px-8 py-3 rounded-full btn">
                    <i class="fas fa-rocket mr-2"></i>Mulai Sekarang
                </a>
            </div>
            <div class="md:w-1/2 animate-scale">
                <img src="https://starfarm.co.id/wp-content/uploads/2023/06/47.-Obat-penyakit-ngorok-pada-kerbau-600x400.jpg" class="rounded-xl shadow-2xl w-full h-auto">
            </div>
        </div>
    </section>

    <section id="features" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">
                <i class="fas fa-star mr-2 text-orange-600"></i>Mengapa Memilih Kami?
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-50 rounded-lg p-6 card text-center animate-fade-in">
                    <i class="fas fa-paw text-4xl text-orange-600 mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Manajemen Hewan</h3>
                    <p class="text-gray-600">Catat dan kelola data hewan dengan mudah, lengkap dengan nama dan keterangan.</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-6 card text-center animate-fade-in" style="animation-delay: 0.2s;">
                    <i class="fas fa-leaf text-4xl text-orange-600 mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Kontrol Pakan</h3>
                    <p class="text-gray-600">Pantau stok dan jenis pakan untuk memastikan kebutuhan ternak terpenuhi.</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-6 card text-center animate-fade-in" style="animation-delay: 0.4s;">
                    <i class="fas fa-capsules text-4xl text-orange-600 mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Kelola Obat</h3>
                    <p class="text-gray-600">Atur obat-obatan untuk menjaga kesehatan hewan Anda.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Siap Mengelola Peternakan Anda?</h2>
            <p class="text-lg text-gray-600 mb-8">Bergabung sekarang dan nikmati kemudahan sistem kami!</p>
            <a href="{{ route('login') }}" class="inline-block bg-orange-600 text-white px-8 py-3 rounded-full btn">
                <i class="fas fa-sign-in-alt mr-2"></i>Login Sekarang
            </a>
        </div>
    </section>

    <x-footer />

    <script>
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            navbar.classList.toggle('scrolled', window.scrollY > 50);
        });

        function toggleMenu() {
            const menu = document.querySelector('.navbar-menu');
            menu.classList.toggle('active');
        }

        document.addEventListener('DOMContentLoaded', () => {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-fade-in');
                    }
                });
            }, { threshold: 0.1 });

            document.querySelectorAll('.card, .animate-scale').forEach(el => {
                observer.observe(el);
            });
        });
    </script>
</body>
</html>