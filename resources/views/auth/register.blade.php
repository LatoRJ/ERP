<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-color: #394956;
        }
    </style>
</head>

<body class="min-h-screen flex items-center justify-center">
    <div class="bg-[#E7E8E7] shadow-lg rounded-lg w-[1200px] h-[650px] flex relative">
        
        <!-- Image Container -->
        <div class="w-1/2 h-full bg-[#22303F] rounded-l-lg flex items-center justify-center">
            <!-- You can add an image or logo here -->
            <!-- Example: <img src="/path/to/image.png" alt="Signup Illustration" class="w-[80%] h-auto"> -->
        </div>

        <!-- Form Container -->
        <div class="w-1/2 h-full p-12 flex flex-col justify-center relative">
            <div class="absolute top-0 left-0 right-0 flex items-center justify-center mt-6">
                <div class="text-center">
                    <h1 class="text-4xl font-bold mb-2">Create an Account</h1>
                    <p class="text-gray-600">Enter your details below</p>
                </div>
            </div>

            <!-- Registration Form -->
            <form method="POST" action="{{ route('register') }}" class="space-y-5 mt-28">
                @csrf

                <!-- Name Input -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Username</label>
                    <input type="text" name="name" id="name" placeholder="Create a username"
                        value="{{ old('name') }}" required autofocus autocomplete="name"
                        class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#394A56]">
                    @error('name')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email Input -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                    <input type="email" name="email" id="email" placeholder="Example@email.com"
                        value="{{ old('email') }}" required autocomplete="username"
                        class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#394A56]">
                    @error('email')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password Input -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" id="password" placeholder="Create a password"
                        required autocomplete="new-password"
                        class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#394A56]">
                    @error('password')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Confirm Password Input -->
                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation"
                        placeholder="Confirm your password" required autocomplete="new-password"
                        class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#394A56]">
                    @error('password_confirmation')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Register Button -->
                <div>
                    <button type="submit"
                        class="w-full py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-[#22303F] hover:bg-[#394A56] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#F9E6E6]">
                        Create An Account
                    </button>
                </div>
            </form>

            <!-- Login Link -->
            <p class="text-sm text-center text-gray-500 mt-6">
                Already have an account? 
                <a href="{{ route('login') }}" class="font-medium text-[#22303F] hover:text-[#394A56]">
                    Login
                </a>
            </p>
        </div>
    </div>
</body>

</html>