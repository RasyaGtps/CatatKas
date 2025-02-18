<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body class="bg-[#ecf3f9]">
    <div class="min-h-screen flex items-center justify-center">
        <div class="max-w-md w-full space-y-8 p-8 bg-white rounded-3xl shadow-sm">
            <!-- Profile Icon -->
            <div class="flex justify-center">
                <div class="w-16 h-16 bg-[#2d6bb3] rounded-full flex items-center justify-center">
                    <i class="fas fa-user text-white text-2xl"></i>
                </div>
            </div>

            <!-- Title -->
            <h2 class="text-center text-3xl font-bold text-[#2d6bb3]">
                Masuk ke Akun Anda
            </h2>

            <form class="mt-8 space-y-4" action="{{ route('login') }}" method="POST">
                @csrf

                <!-- Email/Username Input -->
                <div class="rounded-2xl border border-gray-200 overflow-hidden relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-4">
                        <i class="fas fa-user text-[#2d6bb3]"></i>
                    </span>
                    <input id="login" name="login" type="text" required
                        class="w-full pl-12 pr-4 py-4 text-gray-700 focus:outline-none"
                        placeholder="Masukkan email atau username">
                </div>

                <!-- Password Input -->
                <div class="rounded-2xl border border-gray-200 overflow-hidden relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-4">
                        <i class="fas fa-lock text-[#2d6bb3]"></i>
                    </span>
                    <input id="password" name="password" type="password" required
                        class="w-full pl-12 pr-12 py-4 text-gray-700 focus:outline-none"
                        placeholder="Masukkan password">
                    <button type="button" class="absolute right-4 top-1/2 transform -translate-y-1/2" onclick="togglePassword()">
                        <i class="fas fa-eye-slash text-[#2d6bb3]"></i>
                    </button>
                </div>

                <!-- Login Button -->
                <button type="submit"
                    class="w-full py-4 px-4 bg-[#2d6bb3] text-white rounded-2xl font-medium hover:bg-[#245a96] transition-colors duration-200 mt-6 relative">
                    <span class="absolute left-4 inset-y-0 flex items-center">
                        <i class="fas fa-sign-in-alt"></i>
                    </span>
                    <span class="pl-6">Masuk</span>
                </button>
            </form>

            <!-- Register Link -->
            <div class="text-center mt-6">
                <a href="{{ route('register') }}" class="text-[#2d6bb3] hover:text-[#245a96] transition-colors duration-200 flex items-center justify-center gap-2">
                    <i class="fas fa-user-plus"></i>
                    <span>Belum punya akun? Daftar</span>
                </a>
            </div>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.querySelector('.fa-eye-slash, .fa-eye');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            } else {
                passwordInput.type = 'password';
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            }
        }
    </script>
</body>

</html>