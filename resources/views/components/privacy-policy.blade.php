<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kebijakan Privasi - CatatKas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-[#f8fafc]">
    <!-- Include Navigation -->
    @include('layouts.navigation')

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Hero Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold mb-4">Kebijakan Privasi</h1>
            <p class="text-gray-600 max-w-2xl mx-auto">Komitmen kami dalam melindungi privasi dan data pengguna CatatKas</p>
        </div>

        <!-- Content -->
        <div class="bg-white rounded-xl shadow-sm p-8 mb-12">
            <div class="prose max-w-none">
                <h2 class="text-2xl font-bold mb-4">1. Informasi yang Kami Kumpulkan</h2>
                <p class="text-gray-600 mb-6">
                    Kami mengumpulkan informasi yang Anda berikan secara langsung kepada kami, termasuk:
                </p>
                <ul class="list-disc list-inside text-gray-600 mb-8">
                    <li>Informasi akun (nama, email, nomor telepon)</li>
                    <li>Data transaksi keuangan</li>
                    <li>Informasi perusahaan atau bisnis</li>
                    <li>Data penggunaan aplikasi</li>
                </ul>

                <h2 class="text-2xl font-bold mb-4">2. Penggunaan Informasi</h2>
                <p class="text-gray-600 mb-6">
                    Informasi yang kami kumpulkan digunakan untuk:
                </p>
                <ul class="list-disc list-inside text-gray-600 mb-8">
                    <li>Menyediakan dan memelihara layanan</li>
                    <li>Meningkatkan pengalaman pengguna</li>
                    <li>Mengirim pembaruan dan informasi penting</li>
                    <li>Kepatuhan terhadap kewajiban hukum</li>
                </ul>

                <h2 class="text-2xl font-bold mb-4">3. Keamanan Data</h2>
                <p class="text-gray-600 mb-6">
                    Kami menerapkan langkah-langkah keamanan yang ketat untuk melindungi data Anda:
                </p>
                <ul class="list-disc list-inside text-gray-600 mb-8">
                    <li>Enkripsi data end-to-end</li>
                    <li>Pemantauan keamanan 24/7</li>
                    <li>Backup data reguler</li>
                    <li>Akses terbatas untuk staf yang berwenang</li>
                </ul>

                <h2 class="text-2xl font-bold mb-4">4. Berbagi Informasi</h2>
                <p class="text-gray-600 mb-6">
                    Kami tidak akan menjual atau menyewakan informasi pribadi Anda kepada pihak ketiga. Informasi hanya dibagikan dalam situasi berikut:
                </p>
                <ul class="list-disc list-inside text-gray-600 mb-8">
                    <li>Dengan persetujuan Anda</li>
                    <li>Untuk kepatuhan hukum</li>
                    <li>Dengan mitra tepercaya yang membantu operasional kami</li>
                </ul>

                <h2 class="text-2xl font-bold mb-4">5. Hak Pengguna</h2>
                <p class="text-gray-600 mb-6">
                    Anda memiliki hak untuk:
                </p>
                <ul class="list-disc list-inside text-gray-600 mb-8">
                    <li>Mengakses data pribadi Anda</li>
                    <li>Memperbarui atau mengoreksi data</li>
                    <li>Meminta penghapusan data</li>
                    <li>Menolak penggunaan data untuk tujuan tertentu</li>
                </ul>

                <h2 class="text-2xl font-bold mb-4">6. Perubahan Kebijakan</h2>
                <p class="text-gray-600 mb-6">
                    Kami dapat memperbarui kebijakan privasi ini dari waktu ke waktu. Perubahan signifikan akan diberitahukan melalui email atau pemberitahuan dalam aplikasi.
                </p>

                <div class="bg-blue-50 p-6 rounded-lg mt-8">
                    <h2 class="text-xl font-bold mb-4">Hubungi Kami</h2>
                    <p class="text-gray-600">
                        Jika Anda memiliki pertanyaan tentang kebijakan privasi kami, silakan hubungi tim support kami di:
                        <a href="mailto:privacy@catatkas.id" class="text-blue-500 hover:text-blue-600">privacy@catatkas.id</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Footer -->
    @include('layouts.footer')
</body>
</html> 