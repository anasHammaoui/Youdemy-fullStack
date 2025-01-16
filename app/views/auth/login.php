<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn | Youdemy</title>
    <!-- tailwind cdn -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="font-[sans-serif]">
      <div class="min-h-screen flex fle-col items-center justify-center py-6 px-4">
        <div class="grid md:grid-cols-2 items-center gap-10 max-w-6xl max-md:max-w-md w-full">
          <div>
            <h2 class="lg:text-5xl text-3xl font-extrabold lg:leading-[55px] text-gray-800">
              Your favorite place to learn!
            </h2>
            <p class="text-sm mt-6 text-gray-800">login now and get acccess to hundered of courses made for you career.</p>
            <p class="text-sm mt-12 text-gray-800">Don't have an account <a href="signup" class="text-purple-600 font-semibold hover:underline ml-1">Register here</a></p>
          </div>

          <form class="max-w-md md:ml-auto w-full">
            <h3 class="text-gray-800 text-3xl font-extrabold mb-8">
              Sign in
            </h3>

            <div class="space-y-4">
              <div>
                <input name="email" type="email" autocomplete="email" required class="bg-gray-100 w-full text-sm text-gray-800 px-4 py-3.5 rounded-md outline-blue-600 focus:bg-transparent" placeholder="Email address" />
              </div>
              <div>
                <input name="password" type="password" autocomplete="current-password" required class="bg-gray-100 w-full text-sm text-gray-800 px-4 py-3.5 rounded-md outline-blue-600 focus:bg-transparent" placeholder="Password" />
              </div>
              
            </div>

            <div class="!mt-8">
              <button type="button" class="w-full shadow-xl py-2.5 px-4 text-sm font-semibold rounded text-white bg-purple-600 hover:bg-purple-700 focus:outline-none">
                Log in
              </button>
            </div>

           

         
          </form>
        </div>
      </div>
    </div>
</body>
</html>