<?php
// Include toast helper
require_once __DIR__ . '/helpers/toast.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 ">
    <!-- TOP NAVBAR -->
    <header class="bg-slate-900 text-white h-14 flex items-center justify-between px-4 ">
        <div class="flex items-center gap-3">
            <!-- Hamburger (Mobile only) -->
            <button onclick="toggleSidebar()" class="md:hidden focus:outline-none">
                ☰
            </button>

            <!-- <h1 class="text-lg font-semibold">Admin Dashboard</h1> -->
            <h1 class="font-semibold text-sm md:text-lg">
                Admin Dashboard
            </h1>


        </div>


        <!-- <div class="text-sm">XYZ</div> -->

        <div class="relative inline-block text-left">

            <!-- Button -->
            <button id="dropdownBtn"
                class="flex items-center gap-2 text-sm font-medium text-white-700  focus:outline-none">
                <div class="text-sm"> <?= htmlspecialchars($_SESSION['name']) ?></div>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </button>

            <!-- Dropdown Menu -->
            <div id="dropdownMenu" class="hidden absolute right-0 mt-2 w-40 bg-white border rounded shadow-md z-50">

                <a href="/ishiclinic/logout.php" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">
                    Logout
                </a>
            </div>
        </div>

        <script>
            const btn = document.getElementById('dropdownBtn');
            const menu = document.getElementById('dropdownMenu');

            btn.addEventListener('click', () => {
                menu.classList.toggle('hidden');
            });

            // click outside close
            document.addEventListener('click', (e) => {
                if (!btn.contains(e.target) && !menu.contains(e.target)) {
                    menu.classList.add('hidden');
                }
            });
            // Prevent back button caching
            window.addEventListener("pageshow", function (event) {
                if (event.persisted) {
                    window.location.reload();
                }
            });
        </script>



    </header>