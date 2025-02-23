<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - CatatKas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="bg-[#f8fafc]">
    <!-- Include Navigation -->
    @include('layouts.navigation')

    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <!-- Logo dan Judul -->
            <div class="text-center mb-10">
                <div class="mx-auto w-24 h-24 bg-blue-500 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-user text-white text-4xl"></i>
                </div>
                <h2 class="text-3xl font-extrabold text-gray-900">
                    Masuk ke Akun Anda
                </h2>
            </div>

            <div id="error-message" class="hidden mb-4 p-4 text-sm text-red-700 bg-red-100 rounded-lg"></div>

            <form class="mt-8 space-y-6" id="login-form">
                <!-- Input fields dengan icon -->
                <div class="space-y-4">
                    <!-- Email -->
                    <div class="relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-envelope text-gray-400 text-lg w-6 text-center"></i>
                        </div>
                        <input type="email" id="email" name="email" required
                            class="block w-full pl-12 pr-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Email">
                        <p class="mt-1 text-sm text-red-500 email-error"></p>
                    </div>

                    <!-- Password -->
                    <div class="relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-lock text-gray-400 text-lg w-6 text-center"></i>
                        </div>
                        <input type="password" id="password" name="password" required
                            class="block w-full pl-12 pr-12 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Password">
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer toggle-password">
                            <i class="fas fa-eye text-gray-400 text-lg"></i>
                        </div>
                        <p class="mt-1 text-sm text-red-500 password-error"></p>
                    </div>
                </div>

                <!-- Remember Me dan Lupa Password -->
                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center">
                        <input type="checkbox" id="remember_me" name="remember"
                            class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                            Ingat saya
                        </label>
                    </div>
                    <a href="{{ route('password.request') }}" class="text-sm font-medium text-blue-600 hover:text-blue-500">
                        Lupa password?
                    </a>
                </div>

                <!-- Tombol Login -->
                <button type="submit"
                    class="w-full flex items-center justify-center px-4 py-3 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 mt-6">
                    <i class="fas fa-sign-in-alt mr-2"></i>
                    Masuk
                </button>
            </form>

            <!-- Link ke Register -->
            <div class="text-center mt-8">
                <p class="text-sm text-gray-600">
                    Belum punya akun?
                    <a href="{{ route('register') }}" class="font-medium text-blue-600 hover:text-blue-500">
                        Daftar sekarang
                    </a>
                </p>
            </div>
        </div>
    </div>

    <!-- Include Footer -->
    @include('layouts.footer')

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Toggle password visibility
        document.querySelector('.toggle-password').addEventListener('click', function() {
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

        // Handle form submission
        const form = document.getElementById('login-form');
        const errorMessage = document.getElementById('error-message');

        form.addEventListener('submit', async function(e) {
            e.preventDefault();
            
            // Clear previous errors
            document.querySelectorAll('.text-red-500').forEach(error => error.textContent = '');
            errorMessage.classList.add('hidden');
            
            const formData = {
                email: document.getElementById('email').value,
                password: document.getElementById('password').value,
                remember: document.getElementById('remember_me').checked
            };

            try {
                // Get CSRF token
                const csrfToken = document.querySelector('meta[name="csrf-token"]').content;

                // First get the sanctum CSRF cookie
                await fetch('/sanctum/csrf-cookie', {
                    headers: {
                        'Accept': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    credentials: 'include'
                });

                // Then attempt login
                const response = await fetch('/api/login', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    credentials: 'include',
                    body: JSON.stringify(formData)
                });

                const data = await response.json();
                console.log('Login response:', data);

                if (response.ok) {
                    // Store the token
                    if (data.data && data.data.access_token) {
                        localStorage.setItem('token', data.data.access_token);
                    }
                    
                    // Redirect to dashboard
                    window.location.href = '/dashboard';
                } else {
                    // Show error message
                    if (data.message) {
                        errorMessage.textContent = data.message;
                        errorMessage.classList.remove('hidden');
                    }
                    
                    // Handle validation errors
                    if (data.errors) {
                        Object.keys(data.errors).forEach(key => {
                            const errorElement = document.querySelector(`.${key}-error`);
                            if (errorElement) {
                                errorElement.textContent = data.errors[key][0];
                            }
                        });
                    }
                }
            } catch (error) {
                console.error('Login error:', error);
                errorMessage.textContent = error.message || 'An error occurred during login. Please try again.';
                errorMessage.classList.remove('hidden');
            }
        });
    });
    </script>
</body>

</html>
