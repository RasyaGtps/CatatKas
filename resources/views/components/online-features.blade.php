<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitur Online - CatatKas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-[#f8fafc]">
    <!-- Include Navigation -->
    @include('layouts.navigation')

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Hero Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold mb-4">Fitur Online CatatKas</h1>
            <p class="text-gray-600 max-w-2xl mx-auto">Kelola keuangan bisnis Anda dengan mudah menggunakan fitur-fitur unggulan kami</p>
        </div>

        <!-- Features Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
            <!-- Pencatatan Keuangan -->
            <div class="bg-white p-6 rounded-xl shadow-sm">
                <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mb-4">
                    <i class="fas fa-calculator text-blue-500 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-2">Pencatatan Keuangan</h3>
                <p class="text-gray-600">Catat pemasukan dan pengeluaran dengan mudah. Kategorisasi otomatis dan laporan real-time.</p>
                <ul class="mt-4 space-y-2 text-gray-600">
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Input transaksi cepat</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Kategorisasi otomatis</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Laporan real-time</li>
                </ul>
            </div>

            <!-- Manajemen Stok -->
            <div class="bg-white p-6 rounded-xl shadow-sm">
                <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mb-4">
                    <i class="fas fa-box text-green-500 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-2">Manajemen Stok</h3>
                <p class="text-gray-600">Pantau stok barang dengan mudah. Notifikasi stok minimum dan analisis perputaran barang.</p>
                <ul class="mt-4 space-y-2 text-gray-600">
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Tracking stok realtime</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Alert stok minimum</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Analisis perputaran</li>
                </ul>
            </div>

            <!-- Laporan Pajak -->
            <div class="bg-white p-6 rounded-xl shadow-sm">
                <div class="bg-purple-100 w-16 h-16 rounded-full flex items-center justify-center mb-4">
                    <i class="fas fa-file-invoice-dollar text-purple-500 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-2">Laporan Pajak</h3>
                <p class="text-gray-600">Perhitungan pajak otomatis. Generate laporan pajak sesuai ketentuan perpajakan.</p>
                <ul class="mt-4 space-y-2 text-gray-600">
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Hitung PPh otomatis</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Laporan siap cetak</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Update regulasi</li>
                </ul>
            </div>
        </div>

        <!-- Additional Features -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <div class="bg-white p-6 rounded-xl shadow-sm">
                <h3 class="text-xl font-bold mb-4">
                    <i class="fas fa-mobile-alt text-blue-500 mr-2"></i>
                    Akses Mobile
                </h3>
                <p class="text-gray-600">Kelola bisnis dari mana saja menggunakan aplikasi mobile CatatKas. Tersedia untuk Android dan iOS.</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-sm">
                <h3 class="text-xl font-bold mb-4">
                    <i class="fas fa-cloud text-blue-500 mr-2"></i>
                    Cloud Backup
                </h3>
                <p class="text-gray-600">Data Anda tersimpan aman di cloud dengan enkripsi tingkat tinggi dan backup otomatis.</p>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="bg-blue-500 text-white rounded-xl p-8 text-center">
            <h2 class="text-2xl font-bold mb-4">Mulai Gunakan CatatKas Sekarang</h2>
            <p class="mb-6">Daftar gratis dan nikmati semua fitur premium selama 14 hari</p>
            <a href="{{ route('register') }}" class="bg-white text-blue-500 px-6 py-3 rounded-lg inline-flex items-center hover:bg-blue-50">
                <i class="fas fa-user-plus mr-2"></i>
                Daftar Sekarang
            </a>
        </div>
    </div>

    <!-- Include Footer -->
    @include('layouts.footer')
</body>
</html> 