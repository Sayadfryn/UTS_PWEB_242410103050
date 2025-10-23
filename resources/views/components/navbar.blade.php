<header class="navbar text-white p-4 fixed top-0 w-full z-10">
    <div class="container mx-auto px-6 flex justify-between items-center">
        <div class="flex items-center">
            <i class="fas fa-tractor text-orange-400 text-2xl mr-3"></i>
            <h1 class="text-xl font-bold">Peternakan Nusantara</h1>
        </div>

        <button onclick="toggleMenu()" class="md:hidden text-orange-400">
            <i class="fas fa-bars text-2xl"></i>
        </button>

        <nav class="navbar-menu hidden md:flex items-center space-x-6">
            <a href="{{ route('dashboard') }}" class="hover:text-orange-400"><i class="fas fa-home mr-1"></i>Dashboard</a>
            <a href="{{ route('dashboardHewan') }}" class="hover:text-orange-400"><i class="fas fa-paw mr-1"></i>Hewan</a>
            <a href="{{ route('dashboardPakan') }}" class="hover:text-orange-400"><i class="fas fa-leaf mr-1"></i>Pakan</a>
            <a href="{{ route('dashboardObat') }}" class="hover:text-orange-400"><i class="fas fa-capsules mr-1"></i>Obat</a>
            <a href="{{ route('profile') }}" class="hover:text-orange-400"><i class="fas fa-user mr-1"></i>Profil</a>
            <x-button href="{{ route('logout') }}" class="bg-red-600 hover:bg-red-700 px-4 py-2 rounded-full btn">
                <i class="fas fa-sign-out-alt mr-1"></i>Logout
            </x-button>
        </nav>
    </div>

    <style>
        .navbar {
            background: linear-gradient(to right, #4a7043, #2f855a);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }
        .navbar.scrolled {
            background: rgba(74, 112, 67, 0.95);
        }
        @media (max-width: 768px) {
            .navbar-menu {
                display: none;
            }
            .navbar-menu.active {
                display: block;
                margin-top: 10px;
            }
        }
    </style>

    <script>
        function toggleMenu() {
            const menu = document.querySelector('.navbar-menu');
            menu.classList.toggle('active');
        }

        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            navbar.classList.toggle('scrolled', window.scrollY > 50);
        });
    </script>
</header>
