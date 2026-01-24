<?php
session_start();

if (!isset($_SESSION['email']) || $_SESSION['role'] !== 'admin') {
    header("Location: /ishiclinic/login.php");
    exit;
}

require_once('adminheader.php');
?>

<!-- MAIN WRAPPER -->
<div class="flex min-h-[calc(100vh-106px)]">

    <!-- SIDEBAR -->
    <?php require_once('adminsidebar.php'); ?>

    <!-- CONTENT AREA -->
    <main class="flex-1 p-6">

        <!-- WELCOME BAR -->
        <div class="bg-white rounded shadow p-4 flex justify-between items-center mb-6">
            <h2 class="text-xl font-semibold text-gray-700">
                Welcome, <span class="text-green-600">
                    <?= htmlspecialchars($_SESSION['name']) ?>
                </span> 👋
            </h2>

            <a href="/ishiclinic/logout.php"
               class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                Logout
            </a>
        </div>

        <!-- DASHBOARD CONTENT -->
        <div class="bg-white h-full rounded shadow flex items-center justify-center text-gray-400">
            Dashboard Content Area
        </div>

    </main>
</div>

<!-- FOOTER -->
<?php require_once('adminfooter.php'); ?>
