<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel Pajak - CatatKas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-[#f8fafc]">
    <!-- Include Navigation -->
    @include('layouts.navigation')

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Hero Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold mb-4">Artikel Pajak</h1>
            <p class="text-gray-600 max-w-2xl mx-auto">Informasi terkini seputar perpajakan untuk UMKM</p>
        </div>

        <!-- Article List -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
            <!-- Article 1 -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                <div class="aspect-w-16 aspect-h-9">
                    <img src="https://picsum.photos/600/400?random=1" alt="Random Image" class="w-full h-48 object-cover">
                </div>
                <div class="p-6">
                    <h3 class="font-bold text-xl mb-2">Panduan PPh Final 0.5% untuk UMKM</h3>
                    <p class="text-gray-600 mb-4">Memahami cara perhitungan dan pelaporan PPh Final untuk usaha dengan omzet di bawah 4.8 miliar per tahun.</p>
                    <a href="#" class="text-blue-500 font-medium hover:text-blue-600">
                        Baca selengkapnya <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>

            <!-- Article 2 -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                <div class="aspect-w-16 aspect-h-9">
                    <img src="https://picsum.photos/600/400?random=2" alt="Random Image" class="w-full h-48 object-cover">
                </div>
                <div class="p-6">
                    <h3 class="font-bold text-xl mb-2">Cara Membuat e-Faktur Pajak</h3>
                    <p class="text-gray-600 mb-4">Langkah-langkah praktis dalam pembuatan e-Faktur untuk transaksi bisnis Anda.</p>
                    <a href="#" class="text-blue-500 font-medium hover:text-blue-600">
                        Baca selengkapnya <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>

            <!-- Article 3 -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                <div class="aspect-w-16 aspect-h-9">
                    <img src="https://picsum.photos/600/400?random=3" alt="Random Image" class="w-full h-48 object-cover">
                </div>
                <div class="p-6">
                    <h3 class="font-bold text-xl mb-2">Strategi Tax Planning untuk UMKM</h3>
                    <p class="text-gray-600 mb-4">Tips mengoptimalkan pembayaran pajak secara legal dan efisien untuk bisnis Anda.</p>
                    <a href="#" class="text-blue-500 font-medium hover:text-blue-600">
                        Baca selengkapnya <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Newsletter Section -->
        <div class="bg-blue-100 rounded-xl p-8 text-center">
            <h2 class="text-2xl font-bold mb-4">Dapatkan Update Artikel Terbaru</h2>
            <p class="text-gray-600 mb-6">Berlangganan newsletter kami untuk mendapatkan informasi perpajakan terkini</p>
            <div class="max-w-md mx-auto flex gap-4">
                <input type="email" placeholder="Masukkan email Anda" class="flex-1 px-4 py-2 rounded-lg border focus:outline-none focus:ring-2 focus:ring-blue-500">
                <button class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600">
                    Berlangganan
                </button>
            </div>
        </div>
    </div>

    <!-- Include Footer -->
    @include('layouts.footer')
</body>
</html> 