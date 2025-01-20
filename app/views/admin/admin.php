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
                    <h2 class="text-2xl font-bold text-gray-800">Admin Dashboard</h2>
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
            <!-- Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition-shadow">
                    <div class="flex items-center justify-between">
                        <h3 class="text-gray-600 font-medium">Total Courses</h3>
                        <span class="bg-green-50 text-green-700 text-xs px-3 py-1 rounded-full font-medium">Active</span>
                    </div>
                    <p class="text-4xl font-bold text-gray-900 mt-4"><?= $courseNum["count_courses"] ?></p>
                </div>
                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition-shadow">
                    <div class="flex items-center justify-between">
                        <h3 class="text-gray-600 font-medium">Pending Teachers</h3>
                        <span class="bg-yellow-50 text-yellow-700 text-xs px-3 py-1 rounded-full font-medium">Review</span>
                    </div>
                    <p class="text-4xl font-bold text-gray-900 mt-4"><?= $pendingTeachers["count_pending"] ?></p>
                </div>
                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition-shadow">
                    <div class="flex items-center justify-between">
                        <h3 class="text-gray-600 font-medium">Categories</h3>
                        <span class="bg-purple-50 text-purple-700 text-xs px-3 py-1 rounded-full font-medium">Active</span>
                    </div>
                    <p class="text-4xl font-bold text-gray-900 mt-4"><?= $categoryNum["total_cats"] ?></p>
                </div>
            </div>

            <!-- Teachers Approval Section -->
            <div class="bg-white rounded-xl shadow-sm p-6 mb-8 border border-gray-100">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-xl font-bold text-gray-900">Pending Teacher Approvals</h3>
                    <a href="#" class="text-blue-600 hover:text-blue-700 font-medium text-sm">View All</a>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider bg-gray-50">Name</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider bg-gray-50">Email</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                            <?php foreach ($pteachers as $teacher): ?>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><?php echo $teacher['full_name']; ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600"><?php echo $teacher['email']; ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Top Performing Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                    <h3 class="text-xl font-bold text-gray-900 mb-6">Top 3 Teachers</h3>
                    <div class="space-y-4">
                        <?php foreach ($topTeachers as $teacher): ?>
                            <div class="flex items-center justify-between p-4 rounded-lg bg-gray-50 hover:bg-gray-100 transition-colors">
                                <div class="flex items-center space-x-3">
                                    <div class="flex-shrink-0 w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center">
                                        <span class="text-blue-600 font-semibold"><?= substr($teacher['full_name'], 0, 1); ?></span>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-gray-900"><?= $teacher['full_name']; ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                    <h3 class="text-xl font-bold text-gray-900 mb-6">Most Popular Course</h3>
                    <div class="rounded-lg overflow-hidden border border-gray-200 hover:shadow-lg transition-shadow">
                        <img src="<?= $topCourse["thumbnail"]; ?>" alt="<?= $topCourse["course_name"];?>" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg text-gray-900 mb-2"><?= $topCourse["course_name"];?></h3>
                            <div class="flex items-center space-x-2">
                                <span class="px-3 py-1 bg-blue-50 text-blue-700 rounded-full text-sm font-medium">Most Popular</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>