<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motor</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!-- Loading Screen -->
    <div id="loading" class="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-white text-blue-600 text-2xl font-bold">
        Loading...
    </div>

    <!-- Navbar -->
    <nav class="bg-blue-600 p-4 text-white flex justify-between items-center">
        <h1 class="text-xl font-bold">Motor Services</h1>

        <!-- Mobile Menu Button -->
        <button id="menuBtn" class="md:hidden">
            ☰
        </button>

        <!-- Desktop Menu -->
        <ul class="hidden md:flex space-x-4">
            <li><a href="{{ route('home') }}" class="hover:underline">Home</a></li>
            <li><a href="{{ route('aboutus.index') }}" class="hover:underline">About</a></li>
            <li><a href="{{ route('service') }}" class="hover:underline">Services</a></li>
            <li><a href="{{ route('contact') }}" class="hover:underline">Contact</a></li>
        </ul>
    </nav>

    <!-- Mobile Menu (Hidden by Default) -->
    <ul id="mobileMenu" class="hidden bg-blue-600 text-white p-4 space-y-2">
        <li><a href="{{ route('home') }}" class="block hover:underline">Home</a></li>
        <li><a href="{{ route('aboutus.index') }}" class="block hover:underline">About</a></li>
        <li><a href="{{ route('service') }}" class="block hover:underline">Services</a></li>
        <li><a href="{{ route('contact') }}" class="block hover:underline">Contact</a></li>
    </ul>

<!-- Loading Screen -->
<div id="loading-screen" class="fixed inset-0 flex items-center justify-center bg-gray-900 z-50">
    <img src="{{ asset('images/_.jpeg') }}" alt="Loading..." class="w-32 h-32 animate-moveCar">
</div>

    @yield('content')

    <!-- Footer -->
    <footer class="bg-blue-600 text-white text-center p-4 mt-4">
        <p>&copy; 2025 My Website. All rights reserved.</p>
    </footer>

    <!-- JavaScript -->
    <script>
        // Hide loading screen after 2 seconds
        window.onload = function () {
            setTimeout(() => {
                document.getElementById("loading").style.display = "none";
            }, 2000);
        };

        // Toggle mobile menu
        document.getElementById("menuBtn").addEventListener("click", function () {
            document.getElementById("mobileMenu").classList.toggle("hidden");
        });
        //loading-screen
    document.addEventListener("DOMContentLoaded", function () {
        setTimeout(() => {
            document.getElementById("loading-screen").style.display = "none";
        }, 2000);
    });
</script>

<style>
    @keyframes moveCar {
        0% { transform: translateX(-100px); }
        100% { transform: translateX(100px); }
    }
    .animate-moveCar {
        animation: moveCar 1.5s infinite alternate ease-in-out;
    }
</style>
</body>
</html>
