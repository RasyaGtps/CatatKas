<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konsultasi Pajak - CatatKas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-[#f8fafc]">
    <!-- Include Navigation -->
    @include('layouts.navigation')

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Hero Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold mb-4">Konsultasi Pajak</h1>
            <p class="text-gray-600 max-w-2xl mx-auto">Solusi perpajakan yang sesuai dengan regulasi untuk bisnis Anda</p>
        </div>

        <!-- Service Details -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <div class="bg-white rounded-xl shadow-sm p-8">
                <h2 class="text-2xl font-bold mb-6">Layanan Konsultasi</h2>
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <i class="fas fa-calculator text-blue-500 mt-1 mr-3"></i>
                        <div>
                            <h3 class="font-bold mb-1">Perencanaan Pajak</h3>
                            <p class="text-gray-600">Strategi optimalisasi pajak yang legal dan sesuai regulasi</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-file-invoice text-blue-500 mt-1 mr-3"></i>
                        <div>
                            <h3 class="font-bold mb-1">Review Laporan Pajak</h3>
                            <p class="text-gray-600">Pemeriksaan dan evaluasi laporan pajak untuk memastikan kepatuhan</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-book text-blue-500 mt-1 mr-3"></i>
                        <div>
                            <h3 class="font-bold mb-1">Konsultasi Regulasi</h3>
                            <p class="text-gray-600">Pemahaman mendalam tentang peraturan perpajakan terkini</p>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-sm p-8">
                <h2 class="text-2xl font-bold mb-6">Keunggulan Layanan</h2>
                <ul class="space-y-4">
                    <li class="flex items-center">
                        <i class="fas fa-check-circle text-green-500 mr-3"></i>
                        <span class="text-gray-600">Konsultan berpengalaman dan tersertifikasi</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check-circle text-green-500 mr-3"></i>
                        <span class="text-gray-600">Update regulasi pajak terbaru</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check-circle text-green-500 mr-3"></i>
                        <span class="text-gray-600">Solusi yang disesuaikan dengan bisnis Anda</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check-circle text-green-500 mr-3"></i>
                        <span class="text-gray-600">Pendampingan penuh dalam pelaporan pajak</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="bg-white rounded-xl shadow-sm p-8">
            <h2 class="text-2xl font-bold mb-6">Hubungi Konsultan Pajak</h2>
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
                    <label class="block text-gray-700 mb-2">Deskripsi Kebutuhan</label>
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