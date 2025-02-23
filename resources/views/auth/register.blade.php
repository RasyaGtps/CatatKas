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

            <form id="registerForm" class="space-y-4">
                <!-- Nama -->
                <div class="relative rounded-md shadow-sm">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-user text-gray-400 text-lg w-6 text-center"></i>
                    </div>
                    <input type="text" 
                           name="name" 
                           id="name"
                           required 
                           class="block w-full pl-12 pr-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                           placeholder="Nama Lengkap">
                    <p class="mt-1 text-sm text-red-500 name-error"></p>
                </div>

                <!-- Email -->
                <div class="relative rounded-md shadow-sm">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-envelope text-gray-400 text-lg w-6 text-center"></i>
                    </div>
                    <input type="email" 
                           name="email" 
                           id="email"
                           required 
                           class="block w-full pl-12 pr-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                           placeholder="Email">
                    <p class="mt-1 text-sm text-red-500 email-error"></p>
                </div>

                <!-- Password -->
                <div class="relative rounded-md shadow-sm">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-lock text-gray-400 text-lg w-6 text-center"></i>
                    </div>
                    <input type="password" 
                           name="password" 
                           id="password"
                           required 
                           class="block w-full pl-12 pr-12 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                           placeholder="Password">
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer toggle-password">
                        <i class="fas fa-eye text-gray-400 text-lg"></i>
                    </div>
                    <p class="mt-1 text-sm text-red-500 password-error"></p>
                </div>

                <!-- Konfirmasi Password -->
                <div class="relative rounded-md shadow-sm">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-lock text-gray-400 text-lg w-6 text-center"></i>
                    </div>
                    <input type="password" 
                           name="password_confirmation" 
                           id="password_confirmation"
                           required 
                           class="block w-full pl-12 pr-12 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                           placeholder="Konfirmasi Password">
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer toggle-password">
                        <i class="fas fa-eye text-gray-400 text-lg"></i>
                    </div>
                </div>

                <div>
                    <button type="submit"
                            class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <i class="fas fa-user-plus text-blue-500 group-hover:text-blue-400"></i>
                        </span>
                        Daftar
                    </button>
                </div>
            </form>

            <div class="text-center">
                <p class="text-sm text-gray-600">
                    Sudah punya akun?
                    <a href="{{ route('login') }}" class="font-medium text-blue-600 hover:text-blue-500">
                        Login di sini
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
            document.querySelectorAll('.toggle-password').forEach(function(toggle) {
                toggle.addEventListener('click', function() {
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

            // Handle form submission
            const form = document.getElementById('registerForm');
            form.addEventListener('submit', async function(e) {
                e.preventDefault();
                
                // Clear previous errors
                document.querySelectorAll('.text-red-500').forEach(error => error.textContent = '');
                
                const formData = {
                    name: document.getElementById('name').value,
                    email: document.getElementById('email').value,
                    password: document.getElementById('password').value,
                    password_confirmation: document.getElementById('password_confirmation').value
                };

                try {
                    const response = await fetch('/api/register', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest'
                        },
                        body: JSON.stringify(formData)
                    });

                    const data = await response.json();

                    if (response.ok) {
                        // Store the token
                        localStorage.setItem('token', data.data.access_token);
                        
                        // Redirect to dashboard or home
                        window.location.href = '/dashboard';
                    } else {
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
                    console.error('Registration error:', error);
                    alert('An error occurred during registration. Please try again.');
                }
            });
        });
    </script>
</body>

</html>