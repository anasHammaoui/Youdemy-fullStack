

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Youdemy | AdminDash</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
  </head>
<body>
        <!-- navbar -->
     <?php
        include_once __dir__ ."/../partials/profileNav.php";
     ?>
    <!-- Main Content -->
<div class="flex-1 flex flex-col overflow-hidden">
        <!-- Top Navigation -->
        <header class="bg-white shadow">
            <div class="px-6 py-4 flex justify-between items-center">
                <div class="flex items-center">
                    <button class="md:hidden mr-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                    <h2 class="text-xl font-semibold">Admin Dashboard</h2>
                </div>
                <div class="flex items-center">
                    <button class="flex items-center space-x-3 px-3 py-2 rounded-lg bg-gray-100 hover:bg-gray-200 focus:ring-2 focus:ring-blue-500 transition duration-200">

                        <span class="hidden md:inline text-sm font-medium text-gray-800"><?= $admin["full_name"]; ?></span>
                    </button>
                </div>
            </div>
        </header>

        <!-- Main Content Area -->
        <main class="flex-1 overflow-y-auto p-6">
            <!-- Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-gray-500 text-sm">Total Courses</h3>
                        <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">Active</span>
                    </div>
                    <p class="text-3xl font-bold mt-2"><?= $courseNum["count_courses"] ?></p>
                </div>
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-gray-500 text-sm">Pending Teachers</h3>
                        <span class="bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded-full">Review</span>
                    </div>
                    <p class="text-3xl font-bold mt-2"><?= $pendingTeachers["count_pending"] ?></p>
                </div>
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-gray-500 text-sm">Categories</h3>
                        <span class="bg-purple-100 text-purple-800 text-xs px-2 py-1 rounded-full">Active</span>
                    </div>
                    <p class="text-3xl font-bold mt-2"><?= $categoryNum["total_cats"] ?></p>
                </div>
            </div>

          
        </main>
    </div>
</div>

</body>
</html>