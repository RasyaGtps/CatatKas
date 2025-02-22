<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan - CatatKas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-[#f8fafc]">
    <!-- Include Navigation -->
    @include('layouts.navigation')

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Hero Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold mb-4">Layanan CatatKas</h1>
            <p class="text-gray-600 max-w-2xl mx-auto">Solusi lengkap untuk membantu pertumbuhan bisnis UMKM Anda</p>
        </div>

        <!-- Service Packages -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
            <!-- Basic Package -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                <div class="p-6 bg-gray-50">
                    <h3 class="text-xl font-bold text-center">Basic</h3>
                    <div class="text-center my-4">
                        <span class="text-3xl font-bold">Gratis</span>
                        <span class="text-gray-600">/bulan</span>
                    </div>
                </div>
                <div class="p-6">
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span class="text-gray-600">Pencatatan transaksi dasar</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span class="text-gray-600">Laporan keuangan bulanan</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span class="text-gray-600">1 Pengguna</span>
                        </li>
                    </ul>
                    <a href="{{ route('register') }}" class="mt-6 block text-center bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">
                        Mulai Sekarang
                    </a>
                </div>
            </div>

            <!-- Pro Package -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden border-2 border-blue-500">
                <div class="p-6 bg-blue-500 text-white">
                    <h3 class="text-xl font-bold text-center">Pro</h3>
                    <div class="text-center my-4">
                        <span class="text-3xl font-bold">Rp 99.000</span>
                        <span>/bulan</span>
                    </div>
                </div>
                <div class="p-6">
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span class="text-gray-600">Semua fitur Basic</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span class="text-gray-600">Manajemen stok</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span class="text-gray-600">Laporan pajak otomatis</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span class="text-gray-600">5 Pengguna</span>
                        </li>
                    </ul>
                    <a href="{{ route('register') }}" class="mt-6 block text-center bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">
                        Coba Gratis 14 Hari
                    </a>
                </div>
            </div>

            <!-- Enterprise Package -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                <div class="p-6 bg-gray-50">
                    <h3 class="text-xl font-bold text-center">Enterprise</h3>
                    <div class="text-center my-4">
                        <span class="text-3xl font-bold">Custom</span>
                    </div>
                </div>
                <div class="p-6">
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span class="text-gray-600">Semua fitur Pro</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span class="text-gray-600">API Integration</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span class="text-gray-600">Dedicated support</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span class="text-gray-600">Unlimited pengguna</span>
                        </li>
                    </ul>
                    <a href="{{ route('customer.service') }}" class="mt-6 block text-center bg-gray-800 text-white py-2 rounded-lg hover:bg-gray-700">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>

        <!-- Additional Services -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <div class="bg-white p-6 rounded-xl shadow-sm">
                <h3 class="text-xl font-bold mb-4">
                    <i class="fas fa-graduation-cap text-blue-500 mr-2"></i>
                    Training & Workshop
                </h3>
                <p class="text-gray-600 mb-4">Dapatkan pelatihan langsung dari tim ahli kami tentang manajemen keuangan dan perpajakan UMKM.</p>
                <a href="{{ route('training.workshop') }}" class="text-blue-500 hover:text-blue-600">
                    Pelajari lebih lanjut <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-sm">
                <h3 class="text-xl font-bold mb-4">
                    <i class="fas fa-hands-helping text-blue-500 mr-2"></i>
                    Konsultasi Bisnis
                </h3>
                <p class="text-gray-600 mb-4">Konsultasikan masalah bisnis Anda dengan konsultan berpengalaman kami.</p>
                <a href="{{ route('business.consultation') }}" class="text-blue-500 hover:text-blue-600">
                    Pelajari lebih lanjut <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="bg-white rounded-xl shadow-sm p-8">
            <h2 class="text-2xl font-bold mb-6 text-center">Pertanyaan Umum</h2>
            <div class="space-y-4">
                <div class="border-b pb-4">
                    <h3 class="font-bold mb-2">Apakah ada biaya tersembunyi?</h3>
                    <p class="text-gray-600">Tidak ada biaya tersembunyi. Semua fitur sudah termasuk dalam harga paket yang dipilih.</p>
                </div>
                <div class="border-b pb-4">
                    <h3 class="font-bold mb-2">Bagaimana jika saya ingin membatalkan?</h3>
                    <p class="text-gray-600">Anda dapat membatalkan langganan kapan saja tanpa biaya penalti.</p>
                </div>
                <div class="border-b pb-4">
                    <h3 class="font-bold mb-2">Apakah data saya aman?</h3>
                    <p class="text-gray-600">Ya, kami menggunakan enkripsi tingkat tinggi dan backup reguler untuk menjaga keamanan data Anda.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Footer -->
    @include('layouts.footer')
</body>
</html>