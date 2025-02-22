<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-[#ecf3f9]">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <div class="w-64 bg-white shadow-lg">
            <!-- Logo -->
            <div class="h-16 flex items-center justify-center bg-[#2d6bb3]">
                <span class="text-white text-xl font-bold">Dashboard</span>
            </div>
            
            <!-- Navigation -->
            <nav class="mt-6">
                <div class="px-4 py-2">
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                            <i class="fas fa-search text-gray-500"></i>
                        </span>
                        <input type="text" class="w-full pl-10 pr-4 py-2 border rounded-lg text-sm focus:outline-none focus:border-[#2d6bb3]" placeholder="Search...">
                    </div>
                </div>

                <ul class="mt-4">
                    <li class="px-4 py-2">
                        <a href="{{ route('dashboard') }}" class="flex items-center text-[#2d6bb3] hover:bg-[#e3f0ff] rounded-lg p-2 transition-colors duration-200">
                            <i class="fas fa-home w-6"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="px-4 py-2">
                        <a href="#" class="flex items-center text-gray-600 hover:bg-[#e3f0ff] rounded-lg p-2 transition-colors duration-200">
                            <i class="fas fa-user w-6"></i>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li class="px-4 py-2">
                        <a href="#" class="flex items-center text-gray-600 hover:bg-[#e3f0ff] rounded-lg p-2 transition-colors duration-200">
                            <i class="fas fa-cog w-6"></i>
                            <span>Settings</span>
                        </a>
                    </li>
                    <li class="px-4 py-2">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="flex items-center w-full text-gray-600 hover:bg-[#e3f0ff] rounded-lg p-2 transition-colors duration-200">
                                <i class="fas fa-sign-out-alt w-6"></i>
                                <span>Logout</span>
                            </button>
                        </form>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 overflow-x-hidden overflow-y-auto">
            <!-- Top Navigation -->
            <header class="bg-white shadow-sm">
                <div class="flex items-center justify-between h-16 px-6">
                    <h2 class="text-xl font-semibold text-gray-800">Welcome, {{ Auth::user()->name }}</h2>
                    <div class="flex items-center">
                        <span class="text-sm text-gray-600 mr-4">{{ Auth::user()->email }}</span>
                        <img class="h-8 w-8 rounded-full" src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}" alt="Profile">
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="p-6">
                {{ $slot }}
            </main>
        </div>
    </div>
</body>
</html> 