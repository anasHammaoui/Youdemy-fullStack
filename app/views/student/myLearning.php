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
                <div class="flex items-center" style="width:140px">
                    <a href="/"> <img src="/img/logo.png" style="max-width:100%" alt="logo"></a>
                       
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <button class="flex items-center text-gray-600 hover:text-gray-900">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                        <span class="ml-2"><?= $_SESSION["full_name"] ?></span>
                    </button>

                   <a href="logout" class="flex items-center text-gray-600 hover:text-gray-900">
                   <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
  <polyline points="16 17 21 12 16 7" />
  <line x1="21" y1="12" x2="9" y2="12" />
</svg> 
                   <span>Logout</span></a>
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
                </div>
            </div>
        </div>

        <!-- Course List -->
        <div class="max-w-7xl mx-auto px-4 py-8">
            <div class="space-y-6">
                <!-- Courses -->
                <?php
                    foreach($myEnrolls as $enroll) { ?>
                    <div class="bg-white rounded-lg shadow-sm p-6">
                    <div class="flex flex-col md:flex-row gap-6">
                        <div class="w-full md:w-52 flex-shrink-0">
                            <img src="<?=$enroll["thumbnail"]?>" alt="Web Development" class="w-full h-40 object-cover rounded-lg">
                        </div>
                        <div class="flex-grow">
                            <div class="flex items-center justify-between mb-2">
                                <h2 class="text-xl font-bold"><?=$enroll["course_name"]?></h2>
                                <span class="text-sm text-gray-500"><?=$enroll["enroll_date"]?></span>
                            </div>
                            <div class="flex items-center mb-4">
                               <h1>Instructor:</h1><span class="ml-2 text-sm text-gray-600"><?=$enroll["full_name"]?></span> <br>
                            </div>
                            <div class="flex items-center mb-4">
                            <h1>Course type: </h1><span class="ml-2 text-sm text-gray-600"><?=$enroll["course_type"]?></span>
                            </div>
                            <div class="flex items-center space-x-4">
                                <a href="details?course=<?=$enroll["course_id"]?>&type=<?= $enroll["course_type"]; ?>" class="inline-flex items-center text-purple-600 hover:text-purple-700 font-semibold">
                                    <span>Continue Learning</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                 <?php   }
                ?>
            </div>
        </div>
    </div>
</body>
</html>