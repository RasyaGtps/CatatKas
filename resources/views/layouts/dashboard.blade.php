<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - CatatKas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="bg-white w-64 shadow-sm">
            <!-- Logo -->
            <div class="p-4 border-b">
                <div class="flex items-center">
                    <i class="fas fa-book text-blue-500 text-3xl"></i>
                    <span class="ml-2 text-xl font-bold">CatatKas</span>
                </div>
            </div>
            
            <!-- Navigation -->
            <nav class="mt-4">
                <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100">
                    <i class="fas fa-home w-5"></i>
                    <span class="ml-2">Dashboard</span>
                </a>
                <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100">
                    <i class="fas fa-chart-bar w-5"></i>
                    <span class="ml-2">Laporan</span>
                </a>
                <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100">
                    <i class="fas fa-wallet w-5"></i>
                    <span class="ml-2">Transaksi</span>
                </a>
                <a href="{{ route('profile.edit') }}" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100">
                    <i class="fas fa-user w-5"></i>
                    <span class="ml-2">Profil</span>
                </a>
                <form method="POST" action="{{ route('logout') }}" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 cursor-pointer">
                    @csrf
                    <i class="fas fa-sign-out-alt w-5"></i>
                    <button type="submit" class="ml-2">Keluar</button>
                </form>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 overflow-auto">
            <!-- Top Bar -->
            <div class="bg-white shadow-sm p-4">
                <div class="flex justify-between items-center">
                    <h1 class="text-xl font-semibold">Dashboard</h1>
                    <div class="flex items-center">
                        <span class="text-gray-600 mr-2">{{ Auth::user()->name }}</span>
                        <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}" alt="profile" class="w-8 h-8 rounded-full">
                    </div>
                </div>
            </div>

            <!-- Page Content -->
            <div class="p-6">
                {{ $slot }}
            </div>
        </div>
    </div>
</body>
</html> 