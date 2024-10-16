<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body 
        {
            background-color: #F9E6E6;
            ;
        }
    </style>
</head>

<body class="min-h-screen flex items-center justify-center">
    <div class="bg-white shadow-lg rounded-lg w-[1200px] h-[650px] flex relative">
        <div class="mt-10 absolute top-6 left-10 text-left">
            <h1 class="text-4xl font-bold">Login</h1>
            <p class="text-gray-800 text-lg">Welcome Back!</p>
        </div>

        <div class="w-1/2 h-full p-10 flex flex-col justify-center">
            <form action="#" method="POST" class="space-y-6">

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter Email"
                        class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#F9E6E6]" required>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter Password"
                        class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#F9E6E6]" required>
                </div>

                <!-- Remember Me Checkbox & Forgot Password Link -->
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember-me" name="remember-me" type="checkbox"
                            class="h-4 w-4 text-[#F9E6E6] focus:ring-[#F9E6E6] border-gray-300 rounded">
                        <label for="remember-me" class="ml-2 text-sm text-gray-900">Remember me</label>
                    </div>
                    <div class="text-sm">
                        <a href="#" class="font-medium text-[#F0A8D0] hover:text-pink-500">Forgot your password?</a>
                    </div>
                </div>

                <!-- Sign In Button -->
                <div>
                    <button type="submit"
                        class="w-full flex justify-center py-2 px-4 border rounded-md shadow-sm text-sm font-medium text-black bg-[#F0A8D0] hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#F9E6E6]">
                        Sign In
                    </button>
                </div>
                
                
                <p class="text-sm text-center text-black mt-6">
                    Don't have an account? <a href="{{route('signup')}}" class="font-medium text-[#F0A8D0] hover:text-pink-500">Sign up</a>
                </p>
            </form>
        </div>
        
        <div class="w-1/2 h-full p-10 flex items-center justify-center ">
            <div class="w-full h-full rounded-lg shadow bg-[#F0A8D0]">
                <img src="{{asset('img/pic1.png')}}" alt="" class="absolute right-2 w-[55%] h-auto">
            </div>
        </div>
    </div>
</body>

</html>