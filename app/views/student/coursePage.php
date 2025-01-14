<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Web Development Bootcamp - LearnHub</title>
    <link href="/src/index.css" rel="stylesheet">
    <!-- tailwind cdn -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white border-b border-gray-200 fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-8">
                    <a href="student-dashboard.html" class="flex items-center">
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

    <!-- Course Header -->
    <div class="pt-16">
        <div class="bg-gray-900 text-white">
            <div class="max-w-7xl mx-auto px-4 py-12">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div>
                        <span class="bg-purple-100 text-purple-800 text-xs font-semibold px-2.5 py-0.5 rounded">Development</span>
                        <h1 class="text-4xl font-bold mt-4">Complete Web Development Bootcamp</h1>
                        <p class="mt-4 text-gray-300">Learn web development from scratch with HTML, CSS, JavaScript, React, Node.js, and more. Perfect for beginners and intermediate developers looking to expand their skillset.</p>
                        <div class="flex items-center mt-6">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Instructor" class="w-12 h-12 rounded-full">
                            <div class="ml-4">
                                <p class="font-semibold">John Smith</p>
                                <p class="text-sm text-gray-300">Senior Web Developer & Instructor</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4 mt-6">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <span class="ml-1 font-bold">4.8</span>
                                <span class="ml-1 text-gray-300">(2,945 ratings)</span>
                            </div>
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
                                <span class="ml-1">120 hours</span>
                            </div>
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                                <span class="ml-1">Downloadable resources</span>
                            </div>
                        </div>
                    </div>
                    <div class="lg:pl-8">
                        <div class="bg-white rounded-lg p-6 text-gray-900">
                            <div class="aspect-w-16 aspect-h-9 mb-6">
                                <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" alt="Course Preview" class="rounded-lg w-full">
                            </div>
                            <div class="text-3xl font-bold mb-4">$89.99</div>
                            <button class="w-full bg-purple-600 text-white py-3 rounded-lg font-semibold hover:bg-purple-700 mb-4">Enroll Now</button>
                            <div class="space-y-4 text-sm">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                    <span class="ml-2">Full lifetime access</span>
                                </div>
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                    <span class="ml-2">Certificate of completion</span>
                                </div>
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                    <span class="ml-2">30-day money-back guarantee</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Course Content -->
    <div class="max-w-7xl mx-auto px-4 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <!-- What you'll learn -->
                <div class="bg-white rounded-lg p-6 mb-8">
                    <h2 class="text-2xl font-bold mb-4">What you'll learn</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mt-1" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span class="ml-2">Build modern responsive websites with HTML5 and CSS3</span>
                        </div>
                        <div class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mt-1" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span class="ml-2">Master JavaScript including ES6+ features</span>
                        </div>
                        <div class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mt-1" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span class="ml-2">Create full-stack applications with React and Node.js</span>
                        </div>
                        <div class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mt-1" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span class="ml-2">Learn database design with MongoDB</span>
                        </div>
                    </div>
                </div>

                <!-- Course Content -->
                <div class="bg-white rounded-lg p-6 mb-8">
                    <h2 class="text-2xl font-bold mb-4">Course Content</h2>
                    <div class="space-y-4">
                        <!-- Section 1 -->
                        <div class="border rounded-lg">
                            <button class="w-full flex items-center justify-between p-4">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                                    <span class="ml-2 font-semibold">1. Introduction to Web Development</span>
                                </div>
                                <span class="text-sm text-gray-500">6 lectures • 45 min</span>
                            </button>
                            <div class="p-4 border-t bg- gray-50">
                                <div class="space-y-2">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polygon points="10 8 16 12 10 16 10 8"/></svg>
                                        <span class="ml-2">Welcome to the Course (5 min)</span>
                                    </div>
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polygon points="10 8 16 12 10 16 10 8"/></svg>
                                        <span class="ml-2">How the Internet Works (10 min)</span>
                                    </div>
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                                        <span class="ml-2">Setting Up Your Development Environment (PDF)</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Section 2 -->
                        <div class="border rounded-lg">
                            <button class="w-full flex items-center justify-between p-4">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                                    <span class="ml-2 font-semibold">2. HTML Fundamentals</span>
                                </div>
                                <span class="text-sm text-gray-500">8 lectures • 1.5 hours</span>
                            </button>
                        </div>

                        <!-- Section 3 -->
                        <div class="border rounded-lg">
                            <button class="w-full flex items-center justify-between p-4">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                                    <span class="ml-2 font-semibold">3. CSS Styling</span>
                                </div>
                                <span class="text-sm text-gray-500">12 lectures • 2.5 hours</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Requirements -->
                <div class="bg-white rounded-lg p-6 mb-8">
                    <h2 class="text-2xl font-bold mb-4">Requirements</h2>
                    <ul class="list-disc list-inside space-y-2 text-gray-600">
                        <li>Basic computer knowledge</li>
                        <li>A computer with internet access</li>
                        <li>No prior programming experience needed</li>
                        <li>Willingness to learn and practice</li>
                    </ul>
                </div>

                <!-- Description -->
                <div class="bg-white rounded-lg p-6">
                    <h2 class="text-2xl font-bold mb-4">Description</h2>
                    <div class="prose max-w-none">
                        <p class="mb-4">Welcome to the Complete Web Development Bootcamp! This comprehensive course is designed to take you from beginner to professional web developer. Whether you're looking to learn web development for a career change or to enhance your current skill set, this course covers everything you need to know.</p>
                        <p class="mb-4">Throughout this course, you'll learn:</p>
                        <ul class="list-disc list-inside mb-4">
                            <li>Front-end development with HTML, CSS, and JavaScript</li>
                            <li>Modern JavaScript (ES6+) features and best practices</li>
                            <li>React.js for building user interfaces</li>
                            <li>Node.js and Express for server-side development</li>
                            <li>MongoDB for database management</li>
                            <li>Authentication, API development, and deployment</li>
                        </ul>
                        <p>By the end of this course, you'll have built several real-world projects that you can add to your portfolio, and you'll have the skills needed to create your own web applications from scratch.</p>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <div class="sticky top-24">
                    <div class="bg-white rounded-lg p-6 shadow-sm">
                        <h3 class="text-xl font-bold mb-4">Course Features</h3>
                        <div class="space-y-4">
                            <div class="flex items-center justify-between">
                                <span class="text-gray-600">Lectures</span>
                                <span class="font-semibold">42</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-gray-600">Duration</span>
                                <span class="font-semibold">120 hours</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-gray-600">Skill level</span>
                                <span class="font-semibold">All levels</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-gray-600">Languages</span>
                                <span class="font-semibold">English</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-gray-600">Deadline</span>
                                <span class="font-semibold">Lifetime access</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>