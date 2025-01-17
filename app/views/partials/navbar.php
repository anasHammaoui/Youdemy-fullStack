    <!-- Navigation -->
    <nav class="bg-white border-b border-gray-200 fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-8">
                    <div class="flex items-center" style="width:140px">
                        <img src="/img/logo.png" style="max-width:100%" alt="logo">
                    </div>
                  
                </div>
                <div class="flex-1 max-w-2xl px-6">
                    <div class="relative">
                        <input type="text" placeholder="Search for anything" class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-full focus:outline-none focus:border-purple-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-3 top-2.5 h-5 w-5 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                    </div>
                </div>
                <?php
                    if (!isset($_SESSION["user_role"])){ ?>
                        <div class="flex items-center space-x-4">
                    <a class="text-gray-600 hover:text-gray-900" href="signin">Log in</a>
                    <a class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700" href="signup">Sign up</a>
                </div>
                  <?php  } elseif (isset($_SESSION["user_role"]) && $_SESSION["user_role"] === "student") { ?>
                    <div class="flex items-center space-x-4">
                    <a class="text-gray-600 hover:text-gray-900" href="myLearning">My Learning</a>
                    <a class="text-gray-600 hover:text-gray-900" href="logout">Logout</a>
                </div>
                 <?php }
                ?>
            </div>
        </div>
    </nav>