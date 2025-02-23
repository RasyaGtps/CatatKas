<x-app-layout>
    <div class="min-h-screen flex bg-gray-50">
        <!-- Sidebar Component -->
        <x-sidebar />

        <!-- Main Content -->
        <div class="flex-1 bg-[#f3f4f6]">
            <div class="py-6 px-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">
                    Dashboard Overview
                </h2>

                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <!-- Total Income -->
                    <div class="bg-white rounded-lg shadow-sm p-6 border-l-4 border-green-500 hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-500">Total Income</p>
                                <h3 class="text-2xl font-bold text-gray-900 mt-1">Rp 5.240.000</h3>
                            </div>
                            <div class="bg-green-100 p-3 rounded-full">
                                <i class="fas fa-money-bill-wave text-green-600 text-xl"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Total Expenses -->
                    <div class="bg-white rounded-lg shadow-sm p-6 border-l-4 border-red-500 hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-500">Total Expenses</p>
                                <h3 class="text-2xl font-bold text-gray-900 mt-1">Rp 3.120.000</h3>
                            </div>
                            <div class="bg-red-100 p-3 rounded-full">
                                <i class="fas fa-credit-card text-red-600 text-xl"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Balance -->
                    <div class="bg-white rounded-lg shadow-sm p-6 border-l-4 border-blue-500 hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-500">Balance</p>
                                <h3 class="text-2xl font-bold text-gray-900 mt-1">Rp 2.120.000</h3>
                            </div>
                            <div class="bg-blue-100 p-3 rounded-full">
                                <i class="fas fa-wallet text-blue-600 text-xl"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Total Transactions -->
                    <div class="bg-white rounded-lg shadow-sm p-6 border-l-4 border-purple-500 hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-500">Total Transactions</p>
                                <h3 class="text-2xl font-bold text-gray-900 mt-1">24</h3>
                            </div>
                            <div class="bg-purple-100 p-3 rounded-full">
                                <i class="fas fa-exchange-alt text-purple-600 text-xl"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Transactions -->
                <div class="bg-white rounded-lg shadow-sm">
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="text-lg font-semibold text-gray-900">Recent Transactions</h3>
                            <a href="#" class="text-sm font-medium text-blue-600 hover:text-blue-700">View All</a>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">23 Feb 2025</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">Product Sale</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">Income</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-green-600">+Rp 750.000</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                Completed
                                            </span>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">22 Feb 2025</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">Office Supplies</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">Expense</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-red-600">-Rp 250.000</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                Completed
                                            </span>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">21 Feb 2025</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">Service Fee</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">Income</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-green-600">+Rp 1.200.000</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                                Pending
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
// Add token to all subsequent requests
document.addEventListener('DOMContentLoaded', function() {
    const token = localStorage.getItem('token');
    if (token) {
        // Add token to all AJAX requests
        const oldXHR = window.XMLHttpRequest;
        function newXHR() {
            const xhr = new oldXHR();
            const send = xhr.send;
            xhr.send = function() {
                xhr.setRequestHeader('Authorization', `Bearer ${token}`);
                return send.apply(xhr, arguments);
            }
            return xhr;
        }
        window.XMLHttpRequest = newXHR;

        // Add token to all fetch requests
        const originalFetch = window.fetch;
        window.fetch = function() {
            let [resource, config] = arguments;
            if (!config) {
                config = {};
            }
            if (!config.headers) {
                config.headers = {};
            }
            config.headers['Authorization'] = `Bearer ${token}`;
            return originalFetch(resource, config);
        };
    }
});
</script>
