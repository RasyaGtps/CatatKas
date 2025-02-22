<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - CatatKas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-[#f8fafc]">
    <!-- Include Navigation -->
    @include('layouts.navigation')

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Hero Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold mb-4">Tentang CatatKas</h1>
            <p class="text-gray-600 max-w-2xl mx-auto">Solusi pembukuan digital terpercaya untuk UMKM Indonesia. Kami berkomitmen membantu pelaku usaha mengelola keuangan dengan lebih efisien.</p>
        </div>

        <!-- Vision Mission -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <div class="bg-blue-100 rounded-xl p-8">
                <h3 class="text-2xl font-bold mb-4">
                    <i class="fas fa-eye mr-2"></i>Visi Kami
                </h3>
                <p class="text-gray-600">Menjadi platform pembukuan digital terdepan yang mendukung pertumbuhan UMKM di Indonesia melalui teknologi yang inovatif dan mudah digunakan.</p>
            </div>
            <div class="bg-blue-100 rounded-xl p-8">
                <h3 class="text-2xl font-bold mb-4">
                    <i class="fas fa-bullseye mr-2"></i>Misi Kami
                </h3>
                <p class="text-gray-600">Menyediakan solusi pembukuan yang terintegrasi, memudahkan pelaku UMKM dalam mengelola keuangan dan kepatuhan pajak.</p>
            </div>
        </div>

        <!-- Why Choose Us -->
        <div class="mb-12">
            <h2 class="text-3xl font-bold text-center mb-8">Mengapa Memilih CatatKas?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <i class="fas fa-shield-alt text-blue-500 text-4xl mb-4"></i>
                    <h4 class="text-xl font-bold mb-2">Aman & Terpercaya</h4>
                    <p class="text-gray-600">Data Anda tersimpan dengan aman menggunakan teknologi enkripsi terkini.</p>
                </div>
                <div class="text-center">
                    <i class="fas fa-clock text-blue-500 text-4xl mb-4"></i>
                    <h4 class="text-xl font-bold mb-2">Hemat Waktu</h4>
                    <p class="text-gray-600">Otomatisasi pembukuan membantu Anda fokus pada pengembangan bisnis.</p>
                </div>
                <div class="text-center">
                    <i class="fas fa-headset text-blue-500 text-4xl mb-4"></i>
                    <h4 class="text-xl font-bold mb-2">Dukungan 24/7</h4>
                    <p class="text-gray-600">Tim support kami siap membantu Anda kapan saja.</p>
                </div>
            </div>
        </div>

        <!-- Team -->
        <div class="text-center">
            <h2 class="text-3xl font-bold mb-8">Tim Kami</h2>
            <p class="text-gray-600 max-w-2xl mx-auto mb-8">Didukung oleh tim profesional yang berpengalaman dalam teknologi, keuangan, dan perpajakan.</p>
            <a href="{{ route('customer.service') }}" class="bg-blue-500 text-white px-6 py-3 rounded-lg inline-flex items-center hover:bg-blue-600">
                <i class="fas fa-envelope mr-2"></i>Hubungi Kami
            </a>
        </div>
    </div>

    <!-- Include Footer -->
    @include('layouts.footer')
</body>
</html> 