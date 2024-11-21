<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body 
        {
            background-color: #394956;
        }
    </style>

</head>
<body class="min-h-screen flex items-center justify-center">
    <div class="bg-white shadow-lg rounded-lg w-[1200px] h-[650px] flex relative">
        <div class="absolute top-6 left-10 text-left">
            <h1 class="text-4xl font-bold">Create an account</h1>
            
        </div>

        <div class="w-1/2 h-full p-10 flex flex-col justify-center">
            <!-- Sign Up Form -->
            <form action="#" method="POST" class="space-y-6">
                <!-- Username Input -->
                <div>
                    <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                    <input type="text" name="username" id="username" placeholder="Create a username"
                        class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#394A56]" required>
                </div>

                <!-- Email Address Input -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                    <input type="email" name="email" id="email" placeholder="Example@email.com"
                        class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#394A56]" required>
                </div>

                <!-- Phone Number Input -->

                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                    <input type="text" name="phone" id="phone" placeholder="+1 e.g. 999-999-9999"
                        class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#394A56]" required>
                </div>

                <!-- Password Input -->

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" id="password" placeholder="Create a Password"
                        class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#394A56]" required>
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                    <input type="password" name="password" id="password" placeholder="Confirm Password"
                        class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#394A56]" required>
                </div>

                <!-- Sign Up Button -->

                <div>
                    <button type="submit"
                        class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-[#22303F] hover:bg-[#394A56] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#F9E6E6]">
                        Create An Account
                    </button>
                </div>

                <!-- Already have an account? Login Link -->
                <p class="text-sm text-center text-gray-500 mt-6">
                    Already have an account? <a href="/logintest" class="font-medium text-[#22303F] hover:text-[#394A56]">Login</a>
                </p>
            </form>
        </div>

        <div class="w-1/2 h-full  flex items-center justify-center ">
            <div class="w-full h-full shadow rounded-r bg-[#22303F]">
                <img src="{{asset('img/pic1.png')}}" alt="" class="absolute right-2 w-[55%] h-auto">
            </div>
        </div>
    </div>
</body>

</html>