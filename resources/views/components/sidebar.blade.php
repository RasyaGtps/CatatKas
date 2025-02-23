<div class="w-64 bg-[#1e40af] min-h-screen p-6 flex flex-col">
    <!-- Header -->
    <div class="flex items-center mb-8">
        <i class="fa-solid fa-book text-white text-2xl mr-3"></i>
        <div>
            <h1 class="text-xl font-bold text-white">CatatKas</h1>
            <p class="text-sm text-blue-200">Pembukuan Digital UMKM</p>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="mt-8 space-y-2 flex-grow">
        <a href="#" class="flex items-center text-white px-4 py-3 rounded-lg {{ request()->is('dashboard') ? 'bg-blue-700' : 'hover:bg-blue-700' }}">
            <i class="fas fa-chart-line w-5 h-5 mr-3"></i>
            <span>Dashboard</span>
        </a>

        <div class="my-6"></div> <!-- Spacer -->

        <a href="#" class="flex items-center text-white/80 px-4 py-3 rounded-lg hover:bg-blue-700 hover:text-white">
            <i class="fas fa-credit-card w-5 h-5 mr-3"></i>
            <span>Transaksi</span>
        </a>

        <div class="my-6"></div> <!-- Spacer -->

        <a href="#" class="flex items-center text-white/80 px-4 py-3 rounded-lg hover:bg-blue-700 hover:text-white">
            <i class="fas fa-book w-5 h-5 mr-3"></i>
            <span>Pembukuan</span>
        </a>

        <div class="my-6"></div> <!-- Spacer -->

        <a href="#" class="flex items-center text-white/80 px-4 py-3 rounded-lg hover:bg-blue-700 hover:text-white">
            <i class="fas fa-file-invoice w-5 h-5 mr-3"></i>
            <span>Pajak</span>
        </a>

        <div class="my-6"></div> <!-- Spacer -->

        <a href="#" class="flex items-center text-white/80 px-4 py-3 rounded-lg hover:bg-blue-700 hover:text-white">
            <i class="fas fa-chart-bar w-5 h-5 mr-3"></i>
            <span>Laporan</span>
        </a>
    </nav>

    <!-- Logout Button -->
    <div class="mt-auto pt-6 border-t border-blue-600">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" 
                    class="flex items-center text-white/80 px-4 py-3 rounded-lg w-full hover:bg-red-600 hover:text-white transition-colors">
                <i class="fas fa-sign-out-alt w-5 h-5 mr-3"></i>
                <span>Logout</span>
            </button>
        </form>
    </div>
</div> 