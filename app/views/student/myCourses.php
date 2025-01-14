<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Learning - Youdemy</title>
    <!-- tailwind cdn -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white border-b border-gray-200 fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-8">
                    <a href="index.html" class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
                        <span class="ml-2 text-xl font-bold">LearnHub</span>
                    </a>
                </div>
                <div class="flex items-center space-x-4">
                    <button class="flex items-center text-gray-600 hover:text-gray-900">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                        <span class="ml-2">John Doe</span>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="pt-16">
        <!-- Header -->
        <div class="bg-white border-b">
            <div class="max-w-7xl mx-auto px-4 py-8">
                <h1 class="text-3xl font-bold">My Learning</h1>
                <div class="mt-4 flex space-x-4">
                    <button class="text-purple-600 font-semibold border-b-2 border-purple-600 pb-4">All Courses</button>
                    <button class="text-gray-600 hover:text-gray-900 pb-4">In Progress</button>
                    <button class="text-gray-600 hover:text-gray-900 pb-4">Completed</button>
                </div>
            </div>
        </div>

        <!-- Course List -->
        <div class="max-w-7xl mx-auto px-4 py-8">
            <div class="space-y-6">
                <!-- Course 1 -->
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <div class="flex flex-col md:flex-row gap-6">
                        <div class="w-full md:w-64 flex-shrink-0">
                            <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Web Development" class="w-full h-40 object-cover rounded-lg">
                        </div>
                        <div class="flex-grow">
                            <div class="flex items-center justify-between mb-2">
                                <h2 class="text-xl font-bold">Complete Web Development Bootcamp</h2>
                                <span class="text-sm text-gray-500">Last accessed: 2 days ago</span>
                            </div>
                            <div class="flex items-center mb-4">
                                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Instructor" class="w-6 h-6 rounded-full">
                                <span class="ml-2 text-sm text-gray-600">John Smith</span>
                            </div>
                            <div class="mb-4">
                                <div class="flex items-center justify-between mb-1">
                                    <span class="text-sm font-medium text-gray-700">Progress</span>
                                    <span class="text-sm font-medium text-purple-600">45%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-purple-600 h-2 rounded-full" style="width: 45%"></div>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <a href="course-detail.html" class="inline-flex items-center text-purple-600 hover:text-purple-700 font-semibold">
                                    <span>Continue Learning</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                                </a>
                                <span class="text-sm text-gray-500">12/24 lessons completed</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Course 2 -->
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <div class="flex flex-col md:flex-row gap-6">
                        <div class="w-full md:w-64 flex-shrink-0">
                            <img src="https://images.unsplash.com/photo-1526378800651-c1c6b5b27aea?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Digital Marketing" class="w-full h-40 object-cover rounded-lg">
                        </div>
                        <div class="flex-grow">
                            <div class="flex items-center justify-between mb-2">
                                <h2 class="text-xl font-bold">Digital Marketing Masterclass</h2>
                                <span class="text-sm text-gray-500">Last accessed: 5 days ago</span>
                            </div>
                            <div class="flex items-center mb-4">
                                <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Instructor" class="w-6 h-6 rounded-full">
                                <span class="ml-2 text-sm text-gray-600">Sarah Johnson</span>
                            </div>
                            <div class="mb-4">
                                <div class="flex items-center justify-between mb-1">
                                    <span class="text-sm font-medium text-gray-700">Progress</span>
                                    <span class="text-sm font-medium text-purple-600">75%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-purple-600 h-2 rounded-full" style="width: 75%"></div>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <a href="course-detail.html" class="inline-flex items-center text-purple-600 hover:text-purple-700 font-semibold">
                                    <span>Continue Learning</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                                </a>
                                <span class="text-sm text-gray-500">18/24 lessons completed</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Course 3 -->
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <div class="flex flex-col md:flex-row gap-6">
                        <div class="w-full md:w-64 flex-shrink-0">
                            <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Data Science" class="w-full h-40 object-cover rounded-lg">
                        </div>
                        <div class="flex-grow">
                            <div class="flex items-center justify-between mb-2">
                                <h2 class="text-xl font-bold">Data Science Fundamentals</h2>
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                    <span class="ml-1 text-sm text-green-500 font-medium">Completed</span>
                                </div>
                            </div>
                            <div class="flex items-center mb-4">
                                <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Instructor" class="w-6 h-6 rounded-full">
                                <span class="ml-2 text-sm text-gray-600">Michael Brown</span>
                            </div>
                            <div class="mb-4">
                                <div class="flex items-center justify-between mb-1">
                                    <span class="text-sm font-medium text-gray-700">Progress</span>
                                    <span class="text-sm font-medium text-green-500">100%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-green-500 h-2 rounded-full w-full"></div>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <a href="course-detail.html" class="inline-flex items-center text-purple-600 hover:text-purple-700 font-semibold">
                                    <span>Review Course</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                                </a>
                                <span class="text-sm text-gray-500">Certificate earned</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>