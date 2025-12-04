
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ishi Clinic Center</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- google fonts links -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body class="font-['Roboto']"></body>


<nav class="w-full bg-violet-500 shadow">
    <div class="h-16 flex justify-between items-center px-4 md:px-10">

        <!-- Logo -->
        <div class="text-2xl text-white font-bold">Ishi Clinic</div>

        <!-- Desktop Menu -->
        <ul class="hidden md:flex text-white space-x-10 font-semibold">
            <li><a href="about.php" class="hover:text-gray-200">About</a></li>
            <li><a href="#" class="hover:text-gray-200">Therapies</a></li>
            <li><a href="#" class="hover:text-gray-200">Why Us</a></li>
            <li><a href="#" class="hover:text-gray-200">Team</a></li>
            <li><a href="#" class="hover:text-gray-200">Contact</a></li>
        </ul>

        <!-- Desktop Button -->
        <div class="hidden md:block">
            <a href="#" class="px-6 py-2 rounded-full bg-purple-400 text-white font-semibold hover:text-gray-200">
                Book Appointment
            </a>
        </div>
        <!-- Mobile Hamburger -->
        <button id="menuBtn" class="md:hidden text-white text-4xl">&#8801;</button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden md:hidden bg-purple-300 text-white font-semibold space-y-4 py-4 px-6">
        <a href="#" class="block hover:text-gray-200">About</a>
        <a href="#" class="block hover:text-gray-200">Therapies</a>
        <a href="#" class="block hover:text-gray-200">Why Us</a>
        <a href="#" class="block hover:text-gray-200">Team</a>
        <a href="#" class="block hover:text-gray-200">Contact</a>
        <a href="#" class="block mt-4 px-4 py-2 bg-purple-400 rounded-full text-center hover:bg-purple-500">
            Book Appointment
        </a>
    </div>
</nav>