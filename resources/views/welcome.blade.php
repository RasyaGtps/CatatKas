<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CatatKas - Solusi Pencatatan Keuangan UMKM</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="bg-[#f8fafc]">
    <!-- Include Navigation -->
    @include('layouts.navigation')

    <!-- Hero Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="text-center mb-12">
            <h1 class="text-2xl font-bold mb-2">Solusi Pencatatan Keuangan</h1>
            <h2 class="text-4xl font-bold mb-4">Platform Pembukuan Digital untuk UMKM Modern</h2>
            <p class="text-gray-600 mb-8">Kelola keuangan bisnis Anda dengan lebih mudah, efisien, dan terintegrasi dengan perhitungan pajak.</p>
            <div class="flex justify-center space-x-4">
                <button class="bg-blue-500 text-white px-6 py-3 rounded-lg">
                    <i class="fas fa-globe mr-2"></i>Coba Sekarang
                </button>
                <button class="border border-blue-500 text-blue-500 px-6 py-3 rounded-lg">
                    <i class="fab fa-android mr-2"></i>Download Aplikasi
                </button>
            </div>
        </div>

        <!-- Feature Image 1 -->
        <div class="bg-blue-100 rounded-xl p-8 mb-12">
            <h3 class="text-2xl font-bold mb-4">
                <i class="fas fa-sync-alt mr-2"></i>Pembukuan Terintegrasi dengan Sistem Pajak
            </h3>
            <p class="text-gray-600 mb-8">Nikmati kemudahan pembukuan yang terhubung langsung dengan sistem perpajakan. Hitung dan bayar pajak secara otomatis berdasarkan transaksi Anda.</p>
            <div class="flex justify-center">
                <div class="text-center">
                    <i class="fas fa-book text-blue-500 text-9xl mb-4"></i>
                    <i class="fas fa-exchange-alt text-blue-500 text-4xl mx-4"></i>
                    <i class="fas fa-calculator text-blue-500 text-9xl"></i>
                </div>
            </div>
        </div>

        <!-- Feature List -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <div class="bg-blue-100 rounded-xl p-8">
                <h3 class="text-2xl font-bold mb-2">
                    <i class="fas fa-tasks mr-2"></i>Sistem Pembukuan yang Fleksibel
                </h3>
                <p class="text-gray-600 mb-4">Pilih metode pencatatan yang sesuai dengan kebutuhan bisnis Anda. Dilengkapi dengan fitur perhitungan pajak otomatis untuk kemudahan pengelolaan keuangan.</p>
                <div class="text-center">
                    <i class="fas fa-file-invoice-dollar text-blue-500 text-8xl"></i>
                </div>
            </div>
            <div class="bg-blue-100 rounded-xl p-8">
                <h3 class="text-2xl font-bold mb-2">
                    <i class="fas fa-mobile-alt mr-2"></i>Akses Dimana Saja, Kapan Saja
                </h3>
                <p class="text-gray-600 mb-4">Kelola pembukuan Anda dengan mudah melalui berbagai perangkat. Tersedia di platform web, mobile, dan tablet untuk fleksibilitas maksimal.</p>
                <div class="text-center">
                    <i class="fas fa-laptop text-blue-500 text-6xl mx-4"></i>
                    <i class="fas fa-tablet-alt text-blue-500 text-6xl mx-4"></i>
                    <i class="fas fa-mobile-alt text-blue-500 text-6xl mx-4"></i>
                </div>
            </div>
        </div>

        <!-- Multi Business Feature -->
        <div class="bg-blue-100 rounded-xl p-8 mb-12">
            <div class="flex items-center justify-between">
                <div class="max-w-xl">
                    <h3 class="text-2xl font-bold mb-2">
                        <i class="fas fa-building mr-2"></i>Kelola Beragam Usaha dalam Satu Platform
                    </h3>
                    <p class="text-gray-600">Miliki lebih dari satu bisnis? CatatKas memungkinkan Anda mengelola pembukuan untuk berbagai jenis usaha dalam satu akun terintegrasi.</p>
                </div>
                <div class="text-right">
                    <i class="fas fa-store text-blue-500 text-8xl"></i>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="text-center mb-12">
            <h2 class="text-blue-500 text-xl font-bold mb-4">
                <i class="fas fa-question-circle mr-2"></i>Panduan CatatKas
            </h2>
            <h3 class="text-[#2D3748] text-3xl font-bold mb-12">Informasi Lengkap Pembukuan Digital<br>dan Layanan CatatKas</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8 text-left">
                <div class="space-y-8">
                    <div>
                        <h4 class="font-bold text-lg mb-2">
                            <i class="fas fa-info-circle mr-2"></i>Mengapa Pembukuan Digital Penting?
                        </h4>
                        <p class="text-gray-600">Pembukuan digital membantu pelaku usaha mengelola keuangan lebih efisien, akurat, dan memudahkan pelaporan pajak. Dengan sistem otomatis, risiko kesalahan perhitungan dapat diminimalisir.</p>
                    </div>
                    <div>
                        <h4 class="font-bold text-lg mb-2">
                            <i class="fas fa-users mr-2"></i>Untuk Siapa CatatKas Dirancang?
                        </h4>
                        <p class="text-gray-600">CatatKas dirancang khusus untuk UMKM, wirausaha, dan pelaku bisnis yang membutuhkan sistem pembukuan sederhana namun powerful dengan integrasi perpajakan.</p>
                    </div>
                    <div>
                        <h4 class="font-bold text-lg mb-2">
                            <i class="fas fa-tags mr-2"></i>Bagaimana dengan Biaya Layanan?
                        </h4>
                        <p class="text-gray-600">Saat ini, CatatKas dapat digunakan secara gratis dengan fitur lengkap. Kami berkomitmen mendukung pertumbuhan UMKM melalui teknologi digital yang terjangkau.</p>
                    </div>
                </div>
                <div class="space-y-8">
                    <div>
                        <h4 class="font-bold text-lg mb-2">
                            <i class="fas fa-sync-alt mr-2"></i>Keunggulan Pembukuan Digital
                        </h4>
                        <p class="text-gray-600">Dibandingkan pembukuan manual, sistem digital menawarkan keamanan data lebih baik, akses dari mana saja, dan kemudahan dalam analisis keuangan bisnis Anda.</p>
                    </div>
                    <div>
                        <h4 class="font-bold text-lg mb-2">
                            <i class="fas fa-chart-line mr-2"></i>Tips Optimalisasi Keuangan Bisnis
                        </h4>
                        <p class="text-gray-600">Manfaatkan fitur analisis dan pelaporan untuk memantau arus kas, identifikasi tren pengeluaran, dan buat keputusan bisnis berdasarkan data akurat.</p>
                    </div>
                    <div>
                        <h4 class="font-bold text-lg mb-2">
                            <i class="fas fa-calculator mr-2"></i>Perhitungan Pajak Otomatis
                        </h4>
                        <p class="text-gray-600">Fitur unggulan kami mencakup perhitungan PPh Final 0.5% secara otomatis, memudahkan Anda memenuhi kewajiban pajak dengan tepat.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Footer -->
    @include('layouts.footer')
</body>

</html>
