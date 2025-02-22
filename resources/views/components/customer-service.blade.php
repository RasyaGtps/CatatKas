<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Pelanggan - CatatKas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-[#f8fafc]">
    <!-- Include Navigation -->
    @include('layouts.navigation')

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Hero Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold mb-4">Layanan Pelanggan</h1>
            <p class="text-gray-600 max-w-2xl mx-auto">Kami siap membantu Anda 24/7. Pilih cara yang paling nyaman untuk menghubungi tim support kami.</p>
        </div>

        <!-- Contact Methods -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
            <!-- WhatsApp -->
            <div class="bg-white p-6 rounded-xl shadow-sm text-center">
                <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fab fa-whatsapp text-green-500 text-3xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-2">WhatsApp</h3>
                <p class="text-gray-600 mb-4">Respon cepat dalam 5 menit</p>
                <a href="https://wa.me/6281234567890" class="inline-flex items-center text-green-500 hover:text-green-600">
                    <i class="fab fa-whatsapp mr-2"></i>Chat Sekarang
                </a>
            </div>

            <!-- Email -->
            <div class="bg-white p-6 rounded-xl shadow-sm text-center">
                <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-envelope text-blue-500 text-3xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-2">Email</h3>
                <p class="text-gray-600 mb-4">Respon dalam 1x24 jam</p>
                <a href="mailto:support@catatkas.id" class="inline-flex items-center text-blue-500 hover:text-blue-600">
                    <i class="fas fa-envelope mr-2"></i>Kirim Email
                </a>
            </div>

            <!-- Call Center -->
            <div class="bg-white p-6 rounded-xl shadow-sm text-center">
                <div class="bg-purple-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-phone-alt text-purple-500 text-3xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-2">Call Center</h3>
                <p class="text-gray-600 mb-4">Senin - Jumat, 09:00 - 17:00</p>
                <a href="tel:+621234567890" class="inline-flex items-center text-purple-500 hover:text-purple-600">
                    <i class="fas fa-phone-alt mr-2"></i>0812-3456-7890
                </a>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="bg-white rounded-xl shadow-sm p-8 mb-12">
            <h2 class="text-2xl font-bold mb-6 text-center">Pertanyaan Yang Sering Diajukan</h2>
            <div class="space-y-4">
                <div class="border-b pb-4">
                    <h3 class="font-bold mb-2">Bagaimana cara memulai menggunakan CatatKas?</h3>
                    <p class="text-gray-600">Anda dapat langsung mendaftar melalui website atau aplikasi mobile kami. Setelah verifikasi email, Anda bisa langsung mulai mencatat transaksi.</p>
                </div>
                <div class="border-b pb-4">
                    <h3 class="font-bold mb-2">Berapa lama proses verifikasi akun?</h3>
                    <p class="text-gray-600">Proses verifikasi akun biasanya selesai dalam waktu maksimal 1x24 jam setelah pendaftaran.</p>
                </div>
                <div class="border-b pb-4">
                    <h3 class="font-bold mb-2">Apakah ada biaya berlangganan?</h3>
                    <p class="text-gray-600">Saat ini CatatKas dapat digunakan secara gratis dengan fitur lengkap untuk mendukung UMKM Indonesia.</p>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="bg-blue-100 rounded-xl p-8">
            <h2 class="text-2xl font-bold mb-6 text-center">Kirim Pesan</h2>
            <form class="max-w-2xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block text-gray-700 mb-2">Nama Lengkap</label>
                        <input type="text" class="w-full px-4 py-2 rounded-lg border focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2">Email</label>
                        <input type="email" class="w-full px-4 py-2 rounded-lg border focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 mb-2">Subjek</label>
                    <input type="text" class="w-full px-4 py-2 rounded-lg border focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 mb-2">Pesan</label>
                    <textarea rows="4" class="w-full px-4 py-2 rounded-lg border focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">
                    Kirim Pesan
                </button>
            </form>
        </div>
    </div>

    <!-- Include Footer -->
    @include('layouts.footer')
</body>
</html> 