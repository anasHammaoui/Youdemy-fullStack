<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youdemy - Admin Tags</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen">
     <!-- navbar -->
     <?php
        include_once __dir__ ."/../partials/profileNav.php";
    ?>
    
    <div class="flex flex-col md:flex-row  lg:px-32">
        <!-- tags part -->
        <div class="tagsPart w-full">
            <!-- Header -->
    <header class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex items-center space-x-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2H2v10l9.29 9.29c.94.94 2.48.94 3.42 0l6.58-6.58c.94-.94.94-2.48 0-3.42L12 2Z"/><path d="M7 7h.01"/></svg>
                <h1 class="text-2xl font-bold text-gray-900">Tags Management</h1>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="bg-white rounded-lg shadow-md p-6">
            <!-- Bulk Tags Input Section -->
            <div class="mb-8">
                <h2 class="text-lg font-semibold text-gray-900 mb-4">Insert Tags</h2>
                <form class="space-y-4" action="addTags" method="get">
                    <div>
                        <input type="text" 
                        name="tags"
                            rows="4" 
                            placeholder="Enter tags separated by commas (ex: javascript, python, web development)" 
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 placeholder-gray-400"
                        >
                        <p class="mt-2 text-sm text-gray-500">Separate tags with commas</p>
                    </div>
                    <button 
                    name="addTags"
                        type="submit"
                        class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                        Add Tags
                    </button>
                </form>
            </div>

            <!-- Current Tags Section -->
            <div>
                <h2 class="text-lg font-semibold text-gray-900 mb-4">Current tags</h2>
                <div class="border border-gray-200 rounded-lg p-4">
                    <div class="flex flex-wrap gap-2">
                       <?php foreach ($tags as $tag): ?>
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800">
                            <?=$tag["tag_name"]?>
                            <a href="removeTag?id=<?=$tag["tag_id"]?>" class="ml-2 inline-flex text-indigo-600 hover:text-indigo-900">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 6h18"/><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/></svg>
                            </a>
                        </span>
                     <?php endforeach ;  ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
        </div>
        <!-- category part -->
        <div class="categoryPart w-full">
            <!-- Header -->
    <header class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex items-center space-x-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="24" height="24">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10l9-7 9 7v10a2 2 0 01-2 2H5a2 2 0 01-2-2V10z" />
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 21V12h6v9" />
</svg>
                <h1 class="text-2xl font-bold text-gray-900">Categories Management</h1>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="bg-white rounded-lg shadow-md p-6">
            <!-- Bulk Tags Input Section -->
            <div class="mb-8">
                <h2 class="text-lg font-semibold text-gray-900 mb-4">Insert Category</h2>
                <form class="space-y-4" action="addCat" method="get">
                    <div>
                        <input  type="text"
                        name="add-category"
                            rows="4" 
                            placeholder="Enter a category name" 
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 placeholder-gray-400"
                        >
                        <p class="mt-2 text-sm text-gray-500">Type a category</p>
                    </div>
                    <button 
                    name="addCat"
                        type="submit"
                        class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                        Add Category
                    </button>
                </form>
            </div>

            <!-- Current categories Section -->
            <div>
                <h2 class="text-lg font-semibold text-gray-900 mb-4">Current Categories</h2>
                <div class="border border-gray-200 rounded-lg p-4">
                    <div class="flex flex-wrap gap-2">
                       <?php foreach ($categories as $cat): ?>
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800">
                            <?=$cat["category_name"]?>
                            <h3 class="ml-2 inline-flex text-indigo-600 hover:text-indigo-900"><?=$cat["total_courses"]?></h3>
                            <a href="removeCat?id=<?=$cat["category_id"]?>" class="ml-2 inline-flex text-indigo-600 hover:text-indigo-900">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 6h18"/><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/></svg>
                            </a>
                        </span>
                     <?php endforeach ;  ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
        </div>
    </div>
</body>
</html>