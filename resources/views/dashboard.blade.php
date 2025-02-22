<x-dashboard-layout>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Stats Card 1 -->
        <div class="bg-white rounded-xl shadow-sm p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-[#e3f0ff] text-[#2d6bb3]">
                    <i class="fas fa-users text-xl"></i>
                </div>
                <div class="ml-4">
                    <h3 class="text-gray-500 text-sm">Total Users</h3>
                    <p class="text-2xl font-semibold text-gray-800">1,234</p>
                </div>
            </div>
        </div>

        <!-- Stats Card 2 -->
        <div class="bg-white rounded-xl shadow-sm p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-[#e3f0ff] text-[#2d6bb3]">
                    <i class="fas fa-chart-line text-xl"></i>
                </div>
                <div class="ml-4">
                    <h3 class="text-gray-500 text-sm">Total Sales</h3>
                    <p class="text-2xl font-semibold text-gray-800">$12,345</p>
                </div>
            </div>
        </div>

        <!-- Stats Card 3 -->
        <div class="bg-white rounded-xl shadow-sm p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-[#e3f0ff] text-[#2d6bb3]">
                    <i class="fas fa-shopping-cart text-xl"></i>
                </div>
                <div class="ml-4">
                    <h3 class="text-gray-500 text-sm">Orders</h3>
                    <p class="text-2xl font-semibold text-gray-800">567</p>
                </div>
            </div>
        </div>

        <!-- Stats Card 4 -->
        <div class="bg-white rounded-xl shadow-sm p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-[#e3f0ff] text-[#2d6bb3]">
                    <i class="fas fa-star text-xl"></i>
                </div>
                <div class="ml-4">
                    <h3 class="text-gray-500 text-sm">Reviews</h3>
                    <p class="text-2xl font-semibold text-gray-800">4.8</p>
                </div>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="col-span-1 md:col-span-2 lg:col-span-4 bg-white rounded-xl shadow-sm p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Recent Activity</h3>
            <div class="space-y-4">
                <div class="flex items-center">
                    <div class="w-8 h-8 rounded-full bg-[#e3f0ff] flex items-center justify-center text-[#2d6bb3]">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm text-gray-600">New user registered</p>
                        <p class="text-xs text-gray-400">2 minutes ago</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="w-8 h-8 rounded-full bg-[#e3f0ff] flex items-center justify-center text-[#2d6bb3]">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm text-gray-600">New order received</p>
                        <p class="text-xs text-gray-400">15 minutes ago</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="w-8 h-8 rounded-full bg-[#e3f0ff] flex items-center justify-center text-[#2d6bb3]">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm text-gray-600">New review added</p>
                        <p class="text-xs text-gray-400">1 hour ago</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout>
