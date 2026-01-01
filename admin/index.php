
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <!-- TOP NAVBAR -->
    <header class="bg-slate-900 text-white h-14 flex items-center justify-between px-6">
        <h1 class="text-lg font-semibold">Admin Dashboard</h1>
        <div class="text-sm">XYZ</div>
    </header>

    <!-- MAIN WRAPPER -->
    <div class="flex min-h-[calc(100vh-56px)]">

        <!-- SIDEBAR -->
        <aside class="w-64 bg-slate-900 text-white">
            <nav class="p-4">
                <ul class="space-y-2">
                    <li>
                        <a href="#" class="flex items-center gap-2 px-4 py-2 rounded hover:bg-slate-700 bg-slate-800">
                            📊 <span>Dashboard</span>
                        </a>
                    </li>

                </ul>
            </nav>
        </aside>
        <!-- CONTENT AREA -->
        <main class="flex-1 p-6">
            <!-- EMPTY CONTENT AREA (LIKE IMAGE) -->
            <div class="bg-white h-[400px] rounded shadow flex items-center justify-center text-gray-400">
                Dashboard Content Area
            </div>

        </main>

    </div>

    <!-- FOOTER -->
    <footer class="text-center text-sm text-gray-500 py-3 bg-gray-100">
        © 2026 Admin Dashboard. All rights reserved.
    </footer>

</body>

</html>