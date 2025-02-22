<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syarat dan Ketentuan - CatatKas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-[#f8fafc]">
    <!-- Include Navigation -->
    @include('layouts.navigation')

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Hero Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold mb-4">Syarat dan Ketentuan</h1>
            <p class="text-gray-600 max-w-2xl mx-auto">Ketentuan penggunaan layanan CatatKas untuk pengguna</p>
        </div>

        <!-- Content -->
        <div class="bg-white rounded-xl shadow-sm p-8 mb-12">
            <div class="prose max-w-none">
                <h2 class="text-2xl font-bold mb-4">1. Ketentuan Umum</h2>
                <p class="text-gray-600 mb-6">
                    Dengan menggunakan layanan CatatKas, Anda menyetujui untuk terikat dengan syarat dan ketentuan ini. 
                    Jika Anda tidak setuju dengan ketentuan ini, mohon untuk tidak menggunakan layanan kami.
                </p>

                <h2 class="text-2xl font-bold mb-4">2. Pendaftaran Akun</h2>
                <ul class="list-disc list-inside text-gray-600 mb-8">
                    <li>Pengguna wajib memberikan informasi yang akurat dan lengkap</li>
                    <li>Satu email hanya untuk satu akun</li>
                    <li>Pengguna bertanggung jawab atas keamanan akun</li>
                    <li>Pengguna wajib berusia minimal 17 tahun</li>
                </ul>

                <h2 class="text-2xl font-bold mb-4">3. Penggunaan Layanan</h2>
                <ul class="list-disc list-inside text-gray-600 mb-8">
                    <li>Layanan hanya untuk keperluan pembukuan dan manajemen keuangan</li>
                    <li>Dilarang menggunakan layanan untuk kegiatan ilegal</li>
                    <li>Pengguna bertanggung jawab atas keakuratan data yang diinput</li>
                    <li>CatatKas berhak membatasi atau menghentikan akses jika terjadi pelanggaran</li>
                </ul>

                <h2 class="text-2xl font-bold mb-4">4. Biaya dan Pembayaran</h2>
                <ul class="list-disc list-inside text-gray-600 mb-8">
                    <li>Saat ini layanan dapat digunakan secara gratis</li>
                    <li>Jika ada perubahan kebijakan, akan diberitahukan minimal 30 hari sebelumnya</li>
                    <li>Pembayaran dilakukan di muka untuk layanan premium (jika ada)</li>
                </ul>

                <h2 class="text-2xl font-bold mb-4">5. Hak Kekayaan Intelektual</h2>
                <p class="text-gray-600 mb-6">
                    Seluruh konten, logo, dan materi dalam aplikasi CatatKas adalah milik CatatKas dan dilindungi 
                    hak cipta. Pengguna dilarang menyalin, memodifikasi, atau mendistribusikan tanpa izin tertulis.
                </p>

                <h2 class="text-2xl font-bold mb-4">6. Batasan Tanggung Jawab</h2>
                <ul class="list-disc list-inside text-gray-600 mb-8">
                    <li>CatatKas tidak bertanggung jawab atas kerugian yang timbul dari penggunaan layanan</li>
                    <li>Pengguna menggunakan layanan atas risiko sendiri</li>
                    <li>Kami tidak menjamin layanan akan bebas dari gangguan atau error</li>
                </ul>

                <h2 class="text-2xl font-bold mb-4">7. Perubahan Ketentuan</h2>
                <p class="text-gray-600 mb-6">
                    CatatKas berhak mengubah syarat dan ketentuan ini sewaktu-waktu. Perubahan akan 
                    diinformasikan melalui email atau notifikasi dalam aplikasi.
                </p>

                <h2 class="text-2xl font-bold mb-4">8. Penghentian Layanan</h2>
                <ul class="list-disc list-inside text-gray-600 mb-8">
                    <li>Pengguna dapat menghentikan penggunaan layanan kapan saja</li>
                    <li>CatatKas berhak menghentikan layanan dengan pemberitahuan terlebih dahulu</li>
                    <li>Data akan disimpan sesuai kebijakan privasi</li>
                </ul>

                <div class="bg-blue-50 p-6 rounded-lg mt-8">
                    <h2 class="text-xl font-bold mb-4">Hubungi Kami</h2>
                    <p class="text-gray-600">
                        Jika Anda memiliki pertanyaan tentang syarat dan ketentuan ini, silakan hubungi kami di:
                        <a href="mailto:legal@catatkas.id" class="text-blue-500 hover:text-blue-600">legal@catatkas.id</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Footer -->
    @include('layouts.footer')
</body>
</html> 