<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Youdemy | Teacher Dash</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
  </head>
  <body class="bg-gray-100">
    <!-- navbar -->
     <?php
        include_once __dir__ ."/../partials/profileNav.php";
     ?>
    <div class=" mx-auto px-8 md:px-36 py-8">
      <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold text-gray-900">My Courses</h1>
                <!-- add courses -->
        <!-- Modal toggle -->
        <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700" type="button">
        Add New Course
        </button>

        <!-- Main modal -->
        <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            Create New Course
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form class="p-4 md:p-5" action="addcourse" method="get">
                       <!-- course content -->
                       <div class="grid gap-4 mb-4 grid-cols-2">
                        <!-- course name -->
                    <div class="col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Course Name</label>
                        <input type="text" name="courseName" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="Type course name" required="">
                    </div>
                        <!-- course cdn -->
                    <div class="col-span-2">
                        <label for="cdn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Course CDN</label>
                        <input type="text" name="courseCdn" id="cdn" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="Enter course cdn" required="">
                    </div>
                        <!-- course Thumbnail -->
                    <div class="col-span-2">
                        <label for="Thumbnail" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Course Thumbnail</label>
                        <input type="text" name="courseThm" id="Thumbnail" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="Enter course Thumbnail" required="">
                    </div>
                    <!-- course type  -->
                    <div class="col-span-2 sm:col-span-1">
                        <label for="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Content type</label>
                        <select id="type" name="courseType" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 ">
                            <option selected="video" value="video">Video</option>
                            <option value="document">Document</option>
                        </select>
                    </div>
                    <!-- category -->
                    <div class="col-span-2 sm:col-span-1">
                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                        <select name="courseCat" id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " required>
                        <!-- categories -->
                             <?php
                                foreach ($cats as $cat){ ?>
                                 <option value="<?= $cat["category_id"] ?>"><?= $cat["category_name"] ?></option>
                              <?php  }
                             ?>
                        </select>
                    </div>
                    <!-- tags -->
                    <div class="col-span-2">
                    <label for="tags" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">tags</label>
                        <select id="tags" name="courseTags[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " required multiple>
                        <!-- categories -->
                             <?php
                                foreach ($tags as $tag){ ?>
                                 <option value="<?= $tag["tag_id"] ?>"><?= $tag["tag_name"] ?></option>
                              <?php  }
                             ?>
                        </select>                
                    </div>
                    <!-- desciption -->
                    <div class="col-span-2">
                        <label for="description"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Course Description</label>
                        <textarea id="description" name="courseDesc" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write product description here"></textarea>                    
                    </div>
                </div>
                <!-- end content -->
                        <button name="addCourse" type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                            Add new Course
                        </button>
                    </form>
                </div>
            </div>
        </div> 

      </div>
      
      <!-- Stats Overview -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6">
          <div class="text-gray-500 text-sm">Total Students</div>
          <div class="text-2xl font-bold text-gray-900">470</div>

        </div>
        <div class="bg-white rounded-lg shadow p-6">
          <div class="text-gray-500 text-sm">Total Revenue</div>
          <div class="text-2xl font-bold text-gray-900">$21,947</div>
        </div>
        <div class="bg-white rounded-lg shadow p-6">
          <div class="text-gray-500 text-sm">Total courses</div>
          <div class="text-2xl font-bold text-gray-900"><?= $total["total"];?></div>
        </div>
      </div>

      <!-- Courses Table -->
      <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Course</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Students</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            <!-- show courses  -->
           <?php
            foreach($courses as $course){ ?>
                 <tr>
              <td class="px-6 py-4">
                <div class="flex items-center">
                  <div class="h-10 w-10 flex-shrink-0">
                    <img class="h-10 w-10 rounded object-cover" src="<?= $course["thumbnail"];?>" alt="">
                  </div>
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900"><?= $course["course_name"];?></div>
                    <div class="text-sm text-gray-500"><?= $course["category_name"];?></div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4">
                <div class="text-sm text-gray-900"><?= $course["students"];?></div>
              </td>
              <td class="px-6 py-4 text-sm font-medium">
                <button class="text-indigo-600 hover:text-indigo-900 mr-3">✏️</button>
                <button class="text-red-600 hover:text-red-900">🗑️</button>
              </td>
            </tr>
          <?php  }
           ?>
          </tbody>
        </table>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
  </body>
</html>