<?php
require_once('adminheader.php');
?>
<!-- MAIN WRAPPER -->
<div class="flex min-h-[calc(100vh-106px)]">
    <!-- SIDEBAR -->
    <?php require_once('adminsidebar.php'); ?>

    <!-- CONTENT AREA -->
    <main class="flex-1 p-6">
        <!-- EMPTY CONTENT AREA (LIKE IMAGE) -->
        <div class="bg-white h-full rounded shadow flex items-center justify-center text-gray-400">
            Dashboard Content Area
        </div>

    </main>

</div>

<!-- FOOTER -->
<?php require_once('adminfooter.php'); ?>