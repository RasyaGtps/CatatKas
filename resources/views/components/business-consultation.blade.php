<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konsultasi Bisnis - CatatKas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-[#f8fafc]">
    <!-- Include Navigation -->
    @include('layouts.navigation')

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Hero Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold mb-4">Konsultasi Bisnis</h1>
            <p class="text-gray-600 max-w-2xl mx-auto">Dapatkan solusi untuk permasalahan bisnis Anda dari konsultan berpengalaman</p>
        </div>

        <!-- Consultation Services -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <!-- Financial Planning -->
            <div class="bg-white rounded-xl shadow-sm p-6">
                <div class="flex items-center mb-4">
                    <div class="bg-blue-100 w-12 h-12 rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-chart-line text-blue-500 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold">Perencanaan Keuangan</h3>
                </div>
                <p class="text-gray-600 mb-4">Konsultasikan strategi keuangan untuk pertumbuhan bisnis yang berkelanjutan</p>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-center text-gray-600">
                        <i class="fas fa-check text-green-500 mr-2"></i>
                        Analisis arus kas
                    </li>
                    <li class="flex items-center text-gray-600">
                        <i class="fas fa-check text-green-500 mr-2"></i>
                        Perencanaan investasi
                    </li>
                    <li class="flex items-center text-gray-600">
                        <i class="fas fa-check text-green-500 mr-2"></i>
                        Manajemen modal kerja
                    </li>
                </ul>
                <a href="{{ route('financial.planning') }}" class="text-blue-500 hover:text-blue-600 flex items-center">
                    Konsultasi Sekarang <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>

            <!-- Tax Consultation -->
            <div class="bg-white rounded-xl shadow-sm p-6">
                <div class="flex items-center mb-4">
                    <div class="bg-green-100 w-12 h-12 rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-file-invoice-dollar text-green-500 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold">Konsultasi Pajak</h3>
                </div>
                <p class="text-gray-600 mb-4">Optimalkan strategi perpajakan dan kepatuhan regulasi bisnis Anda</p>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-center text-gray-600">
                        <i class="fas fa-check text-green-500 mr-2"></i>
                        Perencanaan pajak
                    </li>
                    <li class="flex items-center text-gray-600">
                        <i class="fas fa-check text-green-500 mr-2"></i>
                        Review laporan pajak
                    </li>
                    <li class="flex items-center text-gray-600">
                        <i class="fas fa-check text-green-500 mr-2"></i>
                        Konsultasi regulasi
                    </li>
                </ul>
                <a href="{{ route('tax.consultation') }}" class="text-blue-500 hover:text-blue-600 flex items-center">
                    Konsultasi Sekarang <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="bg-blue-500 text-white rounded-xl p-8 text-center">
            <h2 class="text-2xl font-bold mb-4">Butuh Konsultasi Khusus?</h2>
            <p class="mb-6">Tim konsultan kami siap membantu permasalahan bisnis Anda</p>
            <a href="{{ route('customer.service') }}" class="bg-white text-blue-500 px-6 py-3 rounded-lg inline-flex items-center hover:bg-blue-50">
                <i class="fas fa-phone-alt mr-2"></i>
                Hubungi Kami
            </a>
        </div>
    </div>

    <!-- Include Footer -->
    @include('layouts.footer')
</body>
</html> 