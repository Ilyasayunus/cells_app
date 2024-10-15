<div x-data="{ open: false }" class="flex h-screen">
    <!-- Sidebar -->
    <div :class="open ? 'block' : 'hidden lg:block'" class="bg-blue-900 text-white w-64 h-full shadow-lg transition-all duration-300 lg:flex-shrink-0">
        <!-- Sidebar Header (Pusatkan secara vertikal dan horizontal) -->
        <div class="p-6 flex justify-center items-center">
            <h2 class="text-2xl font-semibold text-left">CELLS - UPI</h2>
        </div>

        <!-- Sidebar Navigation -->
        <nav class="mt-10 flex flex-col items-center space-y-6"> <!-- space-y-6 menambah jarak antar item -->
            <a href="{{ route('admin.dashboard') }}" class="w-full flex items-center py-2.5 px-4 rounded hover:bg-blue-700 transition duration-300">
                <i class="fas fa-tachometer-alt mr-3"></i>
                <span class="text-left">Dashboard</span>
            </a>
            <a href="{{ route('admin.corousels') }}" class="w-full flex items-center py-2.5 px-4 rounded hover:bg-blue-700 transition duration-300">
                <i class="fas fa-image mr-3"></i>
                <span class="text-left">Corousels</span>
            </a>
            <a href="{{ route('admin.news') }}" class="w-full flex items-center py-2.5 px-4 rounded hover:bg-blue-700 transition duration-300">
                <i class="fas fa-newspaper mr-3"></i>
                <span class="text-left">News</span>
            </a>
            <a href="{{ route('admin.profile') }}" class="w-full flex items-center py-2.5 px-4 rounded hover:bg-blue-700 transition duration-300">
                <i class="fas fa-info-circle mr-3"></i>
                <span class="text-left">Profile</span>
            </a>
        </nav>

        <!-- Menambahkan jarak sebelum tombol Logout -->
        <div class="mt-20 p-6 flex justify-center items-center"> <!-- mt-20 menambahkan jarak vertikal -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full flex justify-center items-center py-2 px-4 rounded bg-blue-700 hover:bg-blue-500 transition duration-300">
                    <i class="fas fa-sign-out-alt mr-3"></i>
                    Logout
                </button>
            </form>
        </div>
    </div>
</div>

<!-- Load Font Awesome for icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
