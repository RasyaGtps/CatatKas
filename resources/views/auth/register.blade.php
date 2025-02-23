<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Register - CatatKas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="bg-[#f8fafc]">
    <!-- Include Navigation -->
    @include('layouts.navigation')

    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <!-- Logo dan Judul -->
            <div class="text-center mb-10">
                <div class="mx-auto w-24 h-24 bg-blue-500 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-user-plus text-white text-4xl"></i>
                </div>
                <h2 class="text-3xl font-extrabold text-gray-900">
                    Daftar Akun Baru
                </h2>
            </div>

            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="space-y-4">
                    <!-- Nama -->
                    <div class="relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-user text-gray-400 text-lg w-6 text-center"></i>
                        </div>
                        <input type="text" 
                               name="name" 
                               value="{{ old('name') }}" 
                               required 
                               class="block w-full pl-12 pr-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                               placeholder="Nama Lengkap">
                        @error('name')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-envelope text-gray-400 text-lg w-6 text-center"></i>
                        </div>
                        <input type="email" 
                               name="email" 
                               value="{{ old('email') }}" 
                               required 
                               class="block w-full pl-12 pr-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                               placeholder="Email">
                        @error('email')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-lock text-gray-400 text-lg w-6 text-center"></i>
                        </div>
                        <input type="password" 
                               name="password" 
                               required 
                               class="block w-full pl-12 pr-12 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                               placeholder="Password">
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer toggle-password">
                            <i class="fas fa-eye text-gray-400 text-lg"></i>
                        </div>
                        @error('password')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Konfirmasi Password -->
                    <div class="relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-lock text-gray-400 text-lg w-6 text-center"></i>
                        </div>
                        <input type="password" 
                               name="password_confirmation" 
                               required 
                               class="block w-full pl-12 pr-12 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                               placeholder="Konfirmasi Password">
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer toggle-password">
                            <i class="fas fa-eye text-gray-400 text-lg"></i>
                        </div>
                    </div>

                    <button type="submit" 
                            class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Daftar
                    </button>
                </div>
            </form>

            <!-- Link ke Login -->
            <div class="text-center mt-8">
                <p class="text-sm text-gray-600">
                    Sudah punya akun?
                    <a href="{{ route('login') }}" class="font-medium text-blue-600 hover:text-blue-500">
                        Masuk sekarang
                    </a>
                </p>
            </div>
        </div>
    </div>

    <!-- Include Footer -->
    @include('layouts.footer')

    <script>
    // Toggle password visibility
    document.querySelectorAll('.toggle-password').forEach(button => {
        button.addEventListener('click', function() {
            const input = this.parentElement.querySelector('input');
            const icon = this.querySelector('i');
            
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
    });
    </script>
</body>

</html>