<footer class="bg-white border-t">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex justify-between items-center">
            <div class="flex items-center">
                <i class="fas fa-book-open text-blue-500 text-3xl"></i>
                <span class="ml-2 text-xl font-bold">CatatKas</span>
            </div>
            <div class="flex space-x-8">
                <div>
                    <h5 class="font-bold mb-2">
                        <i class="fas fa-info-circle mr-2"></i>Tentang
                    </h5>
                    <ul class="space-y-2">
                        <li><a href="{{ route('articles.tax') }}" class="text-gray-600 hover:text-blue-500">
                            <i class="fas fa-file-alt mr-2"></i>Artikel Pajak
                        </a></li>
                        <li><a href="{{ route('customer.service') }}" class="text-gray-600 hover:text-blue-500">
                            <i class="fas fa-headset mr-2"></i>Layanan Pelanggan
                        </a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="font-bold mb-2">
                        <i class="fas fa-gavel mr-2"></i>Legal
                    </h5>
                    <ul class="space-y-2">
                        <li><a href="{{ route('privacy.policy') }}" class="text-gray-600 hover:text-blue-500">
                            <i class="fas fa-shield-alt mr-2"></i>Kebijakan Privasi
                        </a></li>
                        <li><a href="{{ route('terms.conditions') }}" class="text-gray-600 hover:text-blue-500">
                            <i class="fas fa-file-contract mr-2"></i>Syarat dan Ketentuan
                        </a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="font-bold mb-2">
                        <i class="fas fa-share-alt mr-2"></i>Media Sosial
                    </h5>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-600 hover:text-blue-500">
                            <i class="fab fa-facebook mr-2"></i>Facebook
                        </a></li>
                        <li><a href="#" class="text-gray-600 hover:text-blue-500">
                            <i class="fab fa-instagram mr-2"></i>Instagram
                        </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer> 