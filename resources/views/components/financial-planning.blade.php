<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perencanaan Keuangan - CatatKas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-[#f8fafc]">
    <!-- Include Navigation -->
    @include('layouts.navigation')

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Hero Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold mb-4">Perencanaan Keuangan</h1>
            <p class="text-gray-600 max-w-2xl mx-auto">Optimalkan strategi keuangan bisnis Anda untuk pertumbuhan yang berkelanjutan</p>
        </div>

        <!-- Service Details -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <div class="bg-white rounded-xl shadow-sm p-8">
                <h2 class="text-2xl font-bold mb-6">Layanan Kami</h2>
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <i class="fas fa-chart-line text-blue-500 mt-1 mr-3"></i>
                        <div>
                            <h3 class="font-bold mb-1">Analisis Arus Kas</h3>
                            <p class="text-gray-600">Evaluasi mendalam tentang arus kas masuk dan keluar untuk mengoptimalkan likuiditas bisnis</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-coins text-blue-500 mt-1 mr-3"></i>
                        <div>
                            <h3 class="font-bold mb-1">Perencanaan Investasi</h3>
                            <p class="text-gray-600">Strategi investasi yang disesuaikan dengan tujuan pertumbuhan bisnis Anda</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-wallet text-blue-500 mt-1 mr-3"></i>
                        <div>
                            <h3 class="font-bold mb-1">Manajemen Modal Kerja</h3>
                            <p class="text-gray-600">Optimalisasi pengelolaan modal kerja untuk efisiensi operasional</p>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-sm p-8">
                <h2 class="text-2xl font-bold mb-6">Manfaat</h2>
                <ul class="space-y-4">
                    <li class="flex items-center">
                        <i class="fas fa-check-circle text-green-500 mr-3"></i>
                        <span class="text-gray-600">Peningkatan efisiensi keuangan</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check-circle text-green-500 mr-3"></i>
                        <span class="text-gray-600">Pengambilan keputusan yang lebih baik</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check-circle text-green-500 mr-3"></i>
                        <span class="text-gray-600">Pertumbuhan bisnis yang terencana</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check-circle text-green-500 mr-3"></i>
                        <span class="text-gray-600">Pengelolaan risiko yang lebih baik</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="bg-white rounded-xl shadow-sm p-8">
            <h2 class="text-2xl font-bold mb-6">Jadwalkan Konsultasi</h2>
            <form class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-gray-700 mb-2">Nama Lengkap</label>
                    <input type="text" class="w-full px-4 py-2 rounded-lg border focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block text-gray-700 mb-2">Email</label>
                    <input type="email" class="w-full px-4 py-2 rounded-lg border focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block text-gray-700 mb-2">Nomor Telepon</label>
                    <input type="tel" class="w-full px-4 py-2 rounded-lg border focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block text-gray-700 mb-2">Jenis Usaha</label>
                    <input type="text" class="w-full px-4 py-2 rounded-lg border focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="md:col-span-2">
                    <label class="block text-gray-700 mb-2">Pesan</label>
                    <textarea rows="4" class="w-full px-4 py-2 rounded-lg border focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>
                <div class="md:col-span-2">
                    <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600">
                        Kirim Permintaan
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Include Footer -->
    @include('layouts.footer')
</body>
</html> 