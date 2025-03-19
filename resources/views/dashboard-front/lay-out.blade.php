<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarSure Mechanics Dashboard</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-500">

    <!-- Sidebar -->
    <div class="flex">
        <div class="w-64 bg-green-600 text-white shadow-lg min-h-screen hidden lg:block">
            <div class="p-6">
                <h1 class="text-xl font-bold">CarSure Mechanics</h1>
            </div>
            <nav class="mt-5">
                <ul>
                    <li class="px-6 py-3 hover:bg-green-700 cursor-pointer"> <a href="{{ route('dashboard') }}"> Dashboard </a></li>
                    <li class="px-6 py-3 hover:bg-green-700 cursor-pointer"> <a href="{{ route('createabout.store') }}" class="text-white">Update About Us</a>                    </li>
                    <li class="px-6 py-3 hover:bg-green-700 cursor-pointer"><a href="">Create Services  </a></li>
                    <li class="px-6 py-3 hover:bg-green-700 cursor-pointer"><a href="">Listed services</a></li>
                    <li class="px-6 py-2 hover:bg-green-700 cursor-pointer">Contect Messagees</li>
                    <li class="px-6 py-3 hover:bg-green-700 cursor-pointer"><a href="{{ route('viewappointments.index') }}"> Appointments</a></li>
                    <li class="px-6 py-3 hover:bg-green-700 cursor-pointer"> <a href="{{ route('profile.update') }}">Setting</a></li>
                </ul>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1">
            <!-- Navbar -->
            <header class="bg-orange-500 shadow-md px-6 py-4 flex justify-between items-center text-white">
                <button class="lg:hidden" onclick="toggleSidebar()">☰</button>
                <h2 class="text-xl font-semibold">Mechanic Dashboard</h2>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">
                        Logout
                    </button>
                </form>

            </header>

            <!-- Content Space -->
            <main class="p-6 text-white">
                @yield('content')
            </main>
        </div>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.querySelector('.w-64');
            sidebar.classList.toggle('hidden');
        }
    </script>

</body>
</html>
