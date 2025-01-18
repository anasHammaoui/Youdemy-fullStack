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
    <!-- navigation -->
<?php include_once "../app/views/partials/profileNav.php"; ?>

    <!-- Course Header -->
    <div class="flex justify-center items-center h-screen bg-gray-900">
        <div class=" text-white">
            <div class="max-w-7xl mx-auto px-4 py-12">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div>
                        <span class="bg-purple-100 text-purple-800 text-xs font-semibold px-2.5 py-0.5 rounded"><?= $details["category_name"] ?></span>
                        <h1 class="text-4xl font-bold mt-4"><?= $details["course_name"]  ?></h1>
                        <p class="mt-4 text-gray-300"><?= $details["course_desc"] ?></p>
                        <div class="flex items-center mt-6">
                            <div >
                            <h1>Instructor:</h1><span class="ml-2 text-sm text-gray-400"><?=$details["full_name"]?></span> <br>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4 mt-6">
                           
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                                <span class="ml-1"><?= $details["course_type"] ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="lg:pl-8">
                        <div class="bg-white rounded-lg p-6 text-gray-900">
                            <!-- <div class="aspect-w-16 aspect-h-9 mb-6">
                                <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" alt="Course Preview" class="rounded-lg w-full">
                            </div> -->
                         <?php
                            if ($details["course_type"] === "video"){ ?>
                                <video src="<?= $details["course_cdn"]?>" class="w-full" controls></video>
                           <?php } elseif ($details["course_type"] === "document"){?>
                            <iframe src="https://docs.google.com/gview?url=<?= $details["course_cdn"]?>&embedded=true" class="w-full h-96" frameborder="0"></iframe>
                          <?php }
                         ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>