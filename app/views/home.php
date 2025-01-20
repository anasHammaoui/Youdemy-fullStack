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
    <?php
        if (!isset($_SESSION["user_role"])){?>
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
       <?php }
    ?>
    <!-- video courses -->
    <div class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold my-8">Video courses</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

                <?php
                    foreach($vidCourses as $vidCourse){?>
                    <!-- Course Card 1 -->
                    <div class="bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-lg transition-shadow">
                    <img src="<?= $vidCourse["thumbnail"]; ?>" alt="<?= $vidCourse["course_name"];?>" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg mb-2"><?= $vidCourse["course_name"];?></h3>
                        <p class="text-gray-600 text-sm mb-2"><?= $vidCourse["full_name"];?></p>
                        <div class="flex justify-between">
                        <p class="text-indigo-500 font-medium text-sm bg-indigo-100 inline-block px-2 py-1 rounded">
                            <?= $vidCourse["category_name"]; ?>
                        </p>
                        <?php
                            if (isset($_SESSION["user_role"]) && $_SESSION["user_role"] === "student"){
                            $isEnrolled = 0;
                                foreach($myEnrolls as $enrolled){
                                    if ($vidCourse["course_id"] === $enrolled["course_id"] && $enrolled["enroll_status"] === "accepted" ){
                                        $isEnrolled = 1;
                                        break;
                                    } elseif ($vidCourse["course_id"] === $enrolled["course_id"] && $enrolled["enroll_status"] === "pending" ){
                                        $isEnrolled = 2;
                                        break;
                                    }
                                }
                                if ($isEnrolled === 1) { ?>
                                    <h1 class="bg-green-500 px-3 py-1 rounded text-white hover:bg-green-700 ">Enrolled</h1>
                               <?php } elseif ($isEnrolled ===  0) { ?>
                                  <form action="enroll" method="GET">
                            <input type="text" value="<?= $vidCourse["course_id"] ;?>" class="hidden" name="course_id">
                            <input type="submit" value="Enroll" name="enroll" class="bg-blue-500 px-3 py-1 rounded cursor-pointer text-white hover:bg-blue-700 ">
                        </form>
                              <?php  } else{?>
                                <h1 class="bg-orange-500 px-3 py-1 rounded text-white hover:bg-orange-700 ">Pending</h1>
                             <?php }
                          }
                        ?>
                        </div>
                    </div>
                </div>
                  <?php  }
                ?>

            </div>
             <!-- pagination  -->
             <div class="pagination text-center w-full mt-2">
            <?php
        $total_pages = ceil($total_vids["total_vids"]/ 4);
        $currentPage = isset($_GET['vidPage']) ? (int)$_GET['vidPage'] : 1; 
        for ($i = 1; $i <= $total_pages; $i++) {
            $is_active = ($i == $currentPage) ? 'bg-blue-500 text-white' : 'text-gray-700 hover:bg-gray-300';
            echo "<a href='?vidPage=$i' class='px-3 py-1 rounded-md text-sm mx-2 font-medium $is_active'>$i</a>";
            
        }
        ?>
            </div>
            
        </div>
    </div>
    <!-- Document courses -->
    <div class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold mb-8">Document courses</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

                <?php
                    foreach($docCourses as $docCourse){?>
                    <!-- Course Card 1 -->
                    <div class="bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-lg transition-shadow">
                    <img src="<?= $docCourse["thumbnail"]; ?>" alt="<?= $docCourse["course_name"];?>" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg mb-2"><?= $docCourse["course_name"];?></h3>
                        <p class="text-gray-600 text-sm mb-2"><?= $docCourse["full_name"];?></p>
                        <div class="flex justify-between">
                        <p class="text-indigo-500 font-medium text-sm bg-indigo-100 inline-block px-2 py-1 rounded">
                            <?= $docCourse["category_name"]; ?>
                        </p>
                        <?php
                            if (isset($_SESSION["user_role"]) && $_SESSION["user_role"] === "student"){
                            $isEnrolled = 0;
                                foreach($myEnrolls as $enrolled){
                                    if ($docCourse["course_id"] === $enrolled["course_id"] && $enrolled["enroll_status"] === "accepted" ){
                                        $isEnrolled = 1;
                                        break;
                                    } elseif ($docCourse["course_id"] === $enrolled["course_id"] && $enrolled["enroll_status"] === "pending" ){
                                        $isEnrolled = 2;
                                        break;
                                    }
                                }
                                if ($isEnrolled === 1) { ?>
                                    <h1 class="bg-green-500 px-3 py-1 rounded text-white hover:bg-green-700 ">Enrolled</h1>
                               <?php } elseif ($isEnrolled ===  0) { ?>
                                  <form action="enroll" method="GET">
                            <input type="text" value="<?= $docCourse["course_id"] ;?>" class="hidden" name="course_id">
                            <input type="submit" value="Enroll" name="enroll" class="bg-blue-500 px-3 py-1 rounded cursor-pointer text-white hover:bg-blue-700 ">
                        </form>
                              <?php  } else{?>
                                <h1 class="bg-orange-500 px-3 py-1 rounded text-white hover:bg-orange-700 ">Pending</h1>
                             <?php }
                          }
                        ?>
                        </div>
                    </div>
                </div>
                  <?php  }
                ?>

            </div>
            <div class="pagination text-center w-full mt-2">
            <?php
        $total_pages = ceil($total_docs["total_docs"]/ 4); 
        $currentPage = isset($_GET['docPage']) ? (int)$_GET['docPage'] : 1;
        for ($i = 1; $i <= $total_pages; $i++) {
            $is_active = ($i == $currentPage) ? 'bg-blue-500 text-white' : 'text-gray-700 hover:bg-gray-300';
            echo "<a href='?docPage=$i' class='px-3 py-1 rounded-md text-sm mx-2 font-medium $is_active'>$i</a>";
            
        }
        ?>
            </div>
        </div>
    </div>

<!-- footer -->
 <?php
    include_once "../app/views/partials/footer.php";
 ?>