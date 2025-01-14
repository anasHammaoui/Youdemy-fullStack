<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Youdemy</title>
    <!-- tailwind cdn -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white border-b border-gray-200 fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-8">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
                        <span class="ml-2 text-xl font-bold">LearnHub</span>
                    </div>
                    <div class="hidden md:block">
                        <button class="text-gray-600 hover:text-gray-900">Categories</button>
                    </div>
                </div>
                <div class="flex-1 max-w-2xl px-6">
                    <div class="relative">
                        <input type="text" placeholder="Search for anything" class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-full focus:outline-none focus:border-purple-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-3 top-2.5 h-5 w-5 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <button class="text-gray-600 hover:text-gray-900">Log in</button>
                    <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700">Sign up</button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="pt-16">
        <div class="relative bg-gray-900 h-[500px]">
            <div class="absolute inset-0">
                <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" class="w-full h-full object-cover opacity-20" alt="Hero background">
            </div>
            <div class="relative max-w-7xl mx-auto px-4 py-24 sm:px-6 lg:px-8">
                <div class="max-w-2xl">
                    <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl md:text-6xl">
                        Learn without limits
                    </h1>
                    <p class="mt-6 text-xl text-gray-300">
                        Start, switch, or advance your career with thousands of courses from expert instructors.
                    </p>
                    <div class="mt-10">
                        <button class="bg-purple-600 text-white px-8 py-3 rounded-lg text-lg font-semibold hover:bg-purple-700">
                            Start learning now
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Popular Categories -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <h2 class="text-2xl font-bold mb-8">Top Categories</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-600 mb-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8a6 6 0 0 0-6-6 6 6 0 0 0-6 6c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
                <h3 class="font-semibold text-lg mb-2">Development</h3>
                <p class="text-gray-600">Python, Web Development, JavaScript</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-600 mb-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
                <h3 class="font-semibold text-lg mb-2">Business</h3>
                <p class="text-gray-600">Finance, Marketing, Entrepreneurship</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-600 mb-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/></svg>
                <h3 class="font-semibold text-lg mb-2">IT & Software</h3>
                <p class="text-gray-600">AWS, Cyber Security, Network</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-600 mb-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
                <h3 class="font-semibold text-lg mb-2">Design</h3>
                <p class="text-gray-600">UI/UX, Graphic Design, 3D</p>
            </div>
        </div>
    </div>

    <!-- Featured Courses -->
    <div class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold mb-8">Featured Courses</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Course Card 1 -->
                <div class="bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-lg transition-shadow">
                    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Web Development" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg mb-2">Complete Web Development Bootcamp</h3>
                        <p class="text-gray-600 text-sm mb-2">John Smith</p>
                        <div class="flex items-center mb-2">
                            <span class="text-yellow-400 font-bold">4.8</span>
                            <div class="flex text-yellow-400 ml-1">
                                ★★★★★
                            </div>
                            <span class="text-gray-500 text-sm ml-1">(2,945)</span>
                        </div>
                        <p class="font-bold">$89.99</p>
                    </div>
                </div>

                <!-- Course Card 2 -->
                <div class="bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-lg transition-shadow">
                    <img src="https://images.unsplash.com/photo-1526378800651-c1c6b5b27aea?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Digital Marketing" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg mb-2">Digital Marketing Masterclass</h3>
                        <p class="text-gray-600 text-sm mb-2">Sarah Johnson</p>
                        <div class="flex items-center mb-2">
                            <span class="text-yellow-400 font-bold">4.7</span>
                            <div class="flex text-yellow-400 ml-1">
                                ★★★★★
                            </div>
                            <span class="text-gray-500 text-sm ml-1">(1,832)</span>
                        </div>
                        <p class="font-bold">$79.99</p>
                    </div>
                </div>

                <!-- Course Card 3 -->
                <div class="bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-lg transition-shadow">
                    <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Data Science" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg mb-2">Data Science Fundamentals</h3>
                        <p class="text-gray-600 text-sm mb-2">Michael Brown</p>
                        <div class="flex items-center mb-2">
                            <span class="text-yellow-400 font-bold">4.9</span>
                            <div class="flex text-yellow-400 ml-1">
                                ★★★★★
                            </div>
                            <span class="text-gray-500 text-sm ml-1">(3,421)</span>
                        </div>
                        <p class="font-bold">$94.99</p>
                    </div>
                </div>

                <!-- Course Card 4 -->
                <div class="bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-lg transition-shadow">
                    <img src="https://images.unsplash.com/photo-1542744094-3a31f272c490?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="UI Design" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg mb-2">UI/UX Design Essentials</h3>
                        <p class="text-gray-600 text-sm mb-2">Emma Wilson</p>
                        <div class="flex items-center mb-2">
                            <span class="text-yellow-400 font-bold">4.6</span>
                            <div class="flex text-yellow-400 ml-1">
                                ★★★★★
                            </div>
                            <span class="text-gray-500 text-sm ml-1">(1,567)</span>
                        </div>
                        <p class="font-bold">$69.99</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Become an Instructor -->
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-r from-purple-600 to-indigo-600 rounded-2xl p-8 md:p-12">
                <div class="md:flex md:items-center md:justify-between">
                    <div class="md:w-2/3">
                        <h2 class="text-3xl font-bold text-white mb-4">Become an instructor</h2>
                        <p class="text-purple-100 text-lg mb-6">
                            Join thousands of instructors and earn money sharing your knowledge.
                        </p>
                        <button class="bg-white text-purple-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100">
                            Start teaching today
                        </button>
                    </div>
                    <div class="hidden md:block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-32 w-32 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-white font-semibold mb-4">LearnHub Business</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-white">Get the app</a></li>
                        <li><a href="#" class="hover:text-white">About us</a></li>
                        <li><a href="#" class="hover:text-white">Contact us</a></li>
                        <li><a href="#" class="hover:text-white">Careers</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-white font-semibold mb-4">Teach</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-white">Become an instructor</a></li>
                        <li><a href="#" class="hover:text-white">Teaching academy</a></li>
                        <li><a href="#" class="hover:text-white">Partner with us</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-white font-semibold mb-4">Community</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-white">Blog</a></li>
                        <li><a href="#" class="hover:text-white">Help and Support</a></li>
                        <li><a href="#" class="hover:text-white">Affiliate</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-white font-semibold mb-4">More</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-white">Terms</a></li>
                        <li><a href="#" class="hover:text-white">Privacy policy</a></li>
                        <li><a href="#" class="hover:text-white">Cookie settings</a></li>
                        <li><a href="#" class="hover:text-white">Sitemap</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
                    <span class="ml-2 text-xl font-bold text-white">LearnHub</span>
                </div>
                <p class="mt-4 md:mt-0">© 2024 LearnHub, Inc. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>