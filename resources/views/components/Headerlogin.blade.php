<header class="navbar text-white p-4 fixed top-0 w-full z-10">
    <div class="container mx-auto px-6 flex justify-between items-center">
        <div class="flex items-center">
            <i class="fas fa-tractor text-orange-400 text-2xl mr-3"></i>
            <h1 class="text-xl font-bold">Peternakan Nusantara</h1>
        </div>
        <a href="{{ route('landing') }}" class="hover:text-orange-400 flex items-center">
            <i class="fas fa-home mr-2"></i>Landing Page
        </a>
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
    </style>

    <script>
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            navbar.classList.toggle('scrolled', window.scrollY > 50);
        });
    </script>
</header>
