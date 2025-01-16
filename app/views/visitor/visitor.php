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

    <!-- navbar -->
     <?php include_once "../app/views/partials/navbar.php"; ?>
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
                        <a href="signup" class="bg-purple-600 text-white px-8 py-3 rounded-lg text-lg font-semibold hover:bg-purple-700">
                            Start learning now
                        </a >
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

    <!-- All courses -->
    <div class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold mb-8">All courses</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

                <?php
                    var_dump($allCourses);
                ?>

            </div>
        </div>
    </div>

<!-- footer -->
 <?php
    include_once "../app/views/partials/footer.php";
 ?>