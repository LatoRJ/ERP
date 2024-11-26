<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body class="bg-gray-100">

    <!-- Navbar Section -->
    <header class="bg-white shadow-md py-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-2xl font-bold text-[#22303F]">
                <a href="#">AppleVerse</a>
            </div>

            <!-- Search Bar -->
            <div class="w-1/3 relative">
                <i class='bx bx-search absolute left-2 top-2 text-xl text-gray-400'></i>
                <input type="text" placeholder="Search for anything..." class="w-full py-2 px-10 border border-gray-300  focus:outline-none">
                <button class="absolute right-1 top-1 text-white bg-[#22303F] px-4 py-1">Search</button>
            </div>

            <!-- Icons (Cart, Wishlist, Profile) -->
            <div class="flex items-center space-x-6">
                <a href="#" class="text-gray-600 hover:text-[#394A56] relative">
                    <i class='bx bx-cart text-2xl'></i>
                    <span class="absolute top-0 right-0 bg-pink-500 text-white text-xs rounded-full"></span>
                </a>
                <a href="#" class="text-gray-600 hover:text-[#394A56]">
                    <i class='bx bx-heart text-2xl'></i>
                </a>

                <!-- User Icon with Dropdown -->
                <div class="relative">
                    <!-- User Icon -->
                    <button onclick="toggleDropdown()" class="flex items-center focus:outline-none">
                        <i class='bx bx-user text-2xl'></i>
                    </button>

                    <!-- Dropdown Menu -->
                    <div id="userDropdown" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">
                            Log Out
                            </button>
                        </form>
                    </div>
                </div>
            <!-- JS for Toggle Dropdown -->
            <script>
            function toggleDropdown()
            {
            const dropdown = document.getElementById('userDropdown');
            dropdown.classList.toggle('hidden');
            }

            window.addEventListener('click', function(event) 
            {
            const dropdown = document.getElementById('userDropdown');
            const button = event.target.closest('button');

            if (!dropdown.contains(event.target) && !button)
                {
                dropdown.classList.add('hidden');
                }
            });
        </script>
            </div>
        </div>
    </header>

    <!-- Main Content Section -->
    <div class=" container h-screen mt-8 flex fixed">
        <!-- Sidebar -->
        <div class="w-[20%] h-[100%] bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-lg font-bold mb-4 text-gray-700">Category</h2>
            <ul class="space-y-2">
                <li>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox">
                        <span>iPhone</span>
                    </label>
                </li>
                <li>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox">
                        <span>Computer & Laptop</span>
                    </label>
                </li>
                <li>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox">
                        <span>AirPods</span>
                    </label>
                </li>
                <li>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox">
                        <span>iPad</span>
                    </label>
                </li>
                <li>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox">
                        <span>MacBook</span>
                    </label>
                </li>
                <li>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox">
                        <span>Apple Watch</span>
                    </label>
                </li>
                <li>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox">
                        <span>Accessories</span>
                    </label>
                </li>
                <li>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox">
                        <span>Apple Gift Card</span>
                    </label>
                </li>
            </ul>

            <!-- Price Range -->
            <h2 class="text-lg font-bold mt-8 mb-4 text-gray-700">Price Range</h2>
            <div class="space-y-2">
                <label class="flex items-center space-x-2">
                    <input type="radio" name="price">
                    <span>All Price</span>
                </label>
                <label class="flex items-center space-x-2">
                    <input type="radio" name="price">
                    <span>Under $20</span>
                </label>
                <label class="flex items-center space-x-2">
                    <input type="radio" name="price">
                    <span>$25 to $100</span>
                </label>
                <label class="flex items-center space-x-2">
                    <input type="radio" name="price">
                    <span>$100 to $300</span>
                </label>
                <label class="flex items-center space-x-2">
                    <input type="radio" name="price">
                    <span>$300 to $500</span>
                </label>
            </div>
        </div>

        <!-- Product Grid -->
        <div class="w-4/5 p-6 bg-gray-200">
            <div class="text-center text-gray-500">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti est veniam odit unde? Doloribus voluptates consequuntur exercitationem ducimus, totam nam ipsa numquam culpa modi eos, neque iure. Minus, iste laudantium?.</p>
            </div>
        </div>
    </div>

</body>
</html>