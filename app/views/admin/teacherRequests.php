<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Youdemy | Teacher Requests</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://unpkg.com/lucide@latest"></script>
  </head>
<body class="bg-gray-50">
     <!-- navbar -->
     <?php
        include_once __dir__ ."/../partials/profileNav.php";
    ?>
    <!-- Main Content -->
    <div class="flex-1 flex flex-col overflow-hidden">
        <!-- Top Navigation -->
        <header class="bg-white shadow-sm border-b border-gray-200">
            <div class="px-6 py-4 flex justify-between items-center max-w-7xl mx-auto">
                <div class="flex items-center">
                    <button class="md:hidden mr-4">
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                    <h2 class="text-2xl font-bold text-gray-800">Teacher Requests</h2>
                </div>
                <div class="flex items-center">
                    <button class="flex items-center space-x-3 px-4 py-2 rounded-lg bg-gray-50 hover:bg-gray-100 border border-gray-200 transition duration-200">
                        <span class="hidden md:inline text-sm font-medium text-gray-700"><?= $admin["full_name"]; ?></span>
                    </button>
                </div>
            </div>
        </header>

        <!-- Main Content Area -->
        <main class="flex-1 overflow-y-auto p-6 max-w-7xl mx-auto w-full">
            <!-- Pending Teachers Section -->
            <div class="bg-white rounded-xl shadow-sm p-6 mb-8 border border-gray-100">
                <div class="flex justify-between items-center mb-6">
                    <div>
                        <h3 class="text-xl font-bold text-gray-900">Pending Teacher Approvals</h3>
                        <p class="text-sm text-gray-500 mt-1">Review and manage teacher applications</p>
                    </div>
                    <span class="px-4 py-2 bg-yellow-50 text-yellow-700 rounded-full text-sm font-medium">Pending</span>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider bg-gray-50">Name</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider bg-gray-50">Email</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider bg-gray-50">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                            <?php foreach ($pteachers as $teacher): ?>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                           
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900"><?=$teacher['full_name']; ?></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600"><?=$teacher['email']; ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <div class="flex space-x-3">
                                            <a href="status?id=<?=$teacher['user_id']?>&type=accept" class="text-green-600 hover:text-green-900" title="Accept">
                                                <i data-lucide="check-circle" class="w-5 h-5"></i>
                                            </a>
                                            <a href="status?id=<?=$teacher['user_id']?>&type=delete" class="text-red-600 hover:text-red-900" title="Delete">
                                                <i data-lucide="trash-2" class="w-5 h-5"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Accepted Teachers Section -->
            <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                <div class="flex justify-between items-center mb-6">
                    <div>
                        <h3 class="text-xl font-bold text-gray-900">Accepted Teachers</h3>
                        <p class="text-sm text-gray-500 mt-1">List of all approved teachers</p>
                    </div>
                    <span class="px-4 py-2 bg-green-50 text-green-700 rounded-full text-sm font-medium">Active</span>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider bg-gray-50">Name</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider bg-gray-50">Email</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider bg-gray-50">Courses</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider bg-gray-50">Join Date</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider bg-gray-50">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="h-10 w-10 flex-shrink-0">
                                            <div class="h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center">
                                                <span class="text-blue-600 font-medium text-sm">JD</span>
                                            </div>
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">John Doe</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">john.doe@example.com</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">5 courses</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">Jan 15, 2024</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-3 py-1 bg-green-50 text-green-700 rounded-full text-xs font-medium">Active</span>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="h-10 w-10 flex-shrink-0">
                                            <div class="h-10 w-10 rounded-full bg-purple-100 flex items-center justify-center">
                                                <span class="text-purple-600 font-medium text-sm">AS</span>
                                            </div>
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">Alice Smith</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">alice.smith@example.com</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">3 courses</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">Feb 1, 2024</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-3 py-1 bg-green-50 text-green-700 rounded-full text-xs font-medium">Active</span>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="h-10 w-10 flex-shrink-0">
                                            <div class="h-10 w-10 rounded-full bg-orange-100 flex items-center justify-center">
                                                <span class="text-orange-600 font-medium text-sm">RJ</span>
                                            </div>
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">Robert Johnson</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">robert.j@example.com</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">7 courses</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">Dec 20, 2023</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-3 py-1 bg-green-50 text-green-700 rounded-full text-xs font-medium">Active</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

    <script>
        // Initialize Lucide icons
        lucide.createIcons();
    </script>
</body>
</html>