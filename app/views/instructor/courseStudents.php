

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
     <!-- requests -->
    <div class=" mx-auto px-8 md:px-36 py-8">
      <div class="flex justify-between items-center ">
        <h1 class="text-3xl font-bold text-gray-900">Enrollment Requests</h1>
      </div>
    </div>
    <!-- all students requests -->
       <div class=" rounded-xl shadow-sm p-6 mb-8 px-8 md:px-36">
    <div class="overflow-x-auto bg-white">
        <table class="min-w-full border" id="enrollmentTable">
            <thead>
                <tr class="bg-gray-50">
                    <th
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                        Student
                    </th>
                    <th
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                        Course
                    </th>
                    <th
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                        Request Date
                    </th>
                    <th
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
        <!-- enrollement requests -->
                <?php foreach ($requests as $request): ?>
                    <tr>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="h-10 w-10 flex-shrink-0">
                                   
                                </div>
                                <div class="">
                                    <div class="text-sm font-medium text-gray-900">
                                        <?= $request["full_name"] ?>
                                    </div>
                                    <div class="text-sm text-gray-500">
                                        <?= $request["email"] ?>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4"><?= $request["course_name"] ?></td>
                        <td class="px-6 py-4"><?= $request["enroll_date"] ?></td>
                        <td class="px-6 py-4">
                            <div class="flex space-x-3">
                                <a
                                    href="acceptStudents?id=<?= $request["enroll_id"] ?>"
                                    class="text-green-600 cursor-pointer hover:text-green-900" title="accept">
                                    <svg
                                        class="w-5 h-5"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                </a>
                                <a
                                    href="declineStudent?id=<?= $request["enroll_id"] ?>"
                                    class="text-red-600 cursor-pointer hover:text-red-900" title="reject">
                                    <svg
                                        class="w-5 h-5"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
            </tbody>
        <?php endforeach ?>
        </table>
    </div>
</div>
    <!-- accepted enrollements -->
    <div class=" mx-auto px-8 md:px-36 py-8">
      <div class="flex justify-between items-center ">
        <h1 class="text-3xl font-bold text-gray-900">Accepted students</h1>
      </div>
    </div>
    <!-- all enrellements -->
    <div class=" rounded-xl shadow-sm p-6 mb-8 px-8 md:px-36">
    <div class="overflow-x-auto bg-white">
        <table class="min-w-full border" id="enrollmentTable">
            <thead>
                <tr class="bg-gray-50">
                    <th
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                        Student
                    </th>
                    <th
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                        Course
                    </th>
                    <th
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                        Request Date
                    </th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
        <!-- enrollement accepted -->
                <?php foreach ($enrollements as $enrolled): ?>
                    <tr>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="h-10 w-10 flex-shrink-0">
                                   
                                </div>
                                <div class="">
                                    <div class="text-sm font-medium text-gray-900">
                                        <?= $enrolled["full_name"] ?>
                                    </div>
                                    <div class="text-sm text-gray-500">
                                        <?= $enrolled["email"] ?>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4"><?= $enrolled["course_name"] ?></td>
                        <td class="px-6 py-4"><?= $enrolled["enroll_date"] ?></td>
                       
                    </tr>
            </tbody>
        <?php endforeach ?>
        </table>
    </div>
</div>
</body>
</html>