 <!-- Navigation -->
 <nav class="bg-white border-b border-gray-200 w-full ">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-8">
                <div class="flex items-center" style="width:140px">
                    <a href="/"> <img src="/img/logo.png" style="max-width:100%" alt="logo"></a>
                       
                    </div>
                </div>
               <?php
                if ($_SESSION["user_role"] === "teacher" || $_SESSION["user_role"] === "student"){?>
                     <div class="flex items-center space-x-4">
                    <a href="/myLearning" class="flex items-center text-gray-600 hover:text-gray-900">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                        <span class="ml-2"><?= $_SESSION["full_name"] ?></span>
                    </a>

                   <a href="logout" class="flex items-center text-gray-600 hover:text-gray-900">
                   <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
  <polyline points="16 17 21 12 16 7" />
  <line x1="21" y1="12" x2="9" y2="12" />
</svg> 
                   <span>Logout</span></a>
                </div>
               <?php } elseif ($_SESSION["user_role"] === "admin"){?>
                <div class="flex items-center space-x-4">
                   <a href="tagsCats" class="flex items-center text-gray-600 hover:text-gray-900">Management</a>  
                   <a href="users" class="flex items-center text-gray-600 hover:text-gray-900">Users</a>  
                    <a href="/admin" class="flex items-center text-gray-600 hover:text-gray-900">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                        <span class="ml-2"><?= $_SESSION["full_name"] ?></span>
                    </a>

                   <a href="logout" class="flex items-center text-gray-600 hover:text-gray-900">
                   <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
  <polyline points="16 17 21 12 16 7" />
  <line x1="21" y1="12" x2="9" y2="12" />
</svg> 
                   <span>Logout</span></a>
                </div>
               <?php }
               ?>
            </div>
        </div>
    </nav>