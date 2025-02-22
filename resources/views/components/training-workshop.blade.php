<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training & Workshop - CatatKas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-[#f8fafc]">
    <!-- Include Navigation -->
    @include('layouts.navigation')

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Hero Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold mb-4">Training & Workshop</h1>
            <p class="text-gray-600 max-w-2xl mx-auto">Tingkatkan kemampuan manajemen keuangan dan perpajakan UMKM Anda bersama para ahli</p>
        </div>

        <!-- Training Programs -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
            <!-- Basic Financial Management -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                <img src="https://picsum.photos/600/400?random=1" alt="Financial Management" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Manajemen Keuangan Dasar</h3>
                    <p class="text-gray-600 mb-4">Pelajari dasar-dasar pengelolaan keuangan untuk UMKM</p>
                    <ul class="space-y-2 mb-4">
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-clock text-blue-500 mr-2"></i>
                            Durasi: 2 hari
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-users text-blue-500 mr-2"></i>
                            Maksimal 20 peserta
                        </li>
                    </ul>
                    <a href="{{ route('customer.service') }}" class="block text-center bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">
                        Daftar Sekarang
                    </a>
                </div>
            </div>

            <!-- Tax Management -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                <img src="https://picsum.photos/600/400?random=2" alt="Tax Management" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Manajemen Pajak UMKM</h3>
                    <p class="text-gray-600 mb-4">Pahami perpajakan dan pelaporan untuk UMKM</p>
                    <ul class="space-y-2 mb-4">
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-clock text-blue-500 mr-2"></i>
                            Durasi: 3 hari
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-users text-blue-500 mr-2"></i>
                            Maksimal 15 peserta
                        </li>
                    </ul>
                    <a href="{{ route('customer.service') }}" class="block text-center bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">
                        Daftar Sekarang
                    </a>
                </div>
            </div>

            <!-- Digital Accounting -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                <img src="https://picsum.photos/600/400?random=3" alt="Digital Accounting" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Akuntansi Digital</h3>
                    <p class="text-gray-600 mb-4">Optimalkan pembukuan dengan teknologi digital</p>
                    <ul class="space-y-2 mb-4">
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-clock text-blue-500 mr-2"></i>
                            Durasi: 2 hari
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-users text-blue-500 mr-2"></i>
                            Maksimal 20 peserta
                        </li>
                    </ul>
                    <a href="{{ route('customer.service') }}" class="block text-center bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">
                        Daftar Sekarang
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Footer -->
    @include('layouts.footer')
</body>
</html> 