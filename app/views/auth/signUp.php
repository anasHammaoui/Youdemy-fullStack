<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp | Users</title>
    <!-- tailwind cdn -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="max-w-4xl max-sm:max-w-lg mx-auto font-[sans-serif] p-6">
      <div class="text-center mb-7 sm:mb-7">
      <div class="flex items-center mx-auto" style="width:200px">
                        <img src="assets/img/logo.png" style="max-width:100%" alt="logo">
                    </div>
        <h4 class="text-gray-600 text-base ">Sign up into your account</h4>
      </div>

      <form>
        <div class="grid gap-6">
          <div>
            <label class="text-gray-600 text-sm mb-2 block">Full Name</label>
            <input name="lname" type="text" class="bg-gray-100 w-full text-gray-800 text-sm px-4 py-3 rounded focus:bg-transparent outline-blue-500 transition-all" placeholder="Enter last name" />
          </div>
          <div>
            <label class="text-gray-600 text-sm mb-2 block">Email</label>
            <input name="email" type="text" class="bg-gray-100 w-full text-gray-800 text-sm px-4 py-3 rounded focus:bg-transparent outline-blue-500 transition-all" placeholder="Enter email" />
          </div>
          <div>
            <label class="text-gray-600 text-sm mb-2 block">Password</label>
            <input name="password" type="password" class="bg-gray-100 w-full text-gray-800 text-sm px-4 py-3 rounded focus:bg-transparent outline-blue-500 transition-all" placeholder="Enter password" />
          </div>
        </div>

        <div class="mt-8">
          <button type="button" class="mx-auto block py-3 px-6 text-sm tracking-wider rounded text-white bg-blue-600 hover:bg-blue-700 focus:outline-none">
            Sign up
          </button>
        </div>
      </form>
    </div>
</body>
</html>