<?php
require_once('../adminheader.php');
require_once('../../connect.php');
require_once('../controllers/fetch.php');

$contacts = fetchContacts($conn);
?>

<!-- MAIN WRAPPER -->
<div class="flex min-h-[calc(100vh-106px)]">

    <!-- SIDEBAR -->
    <?php require_once('../adminsidebar.php'); ?>

    <!-- CONTENT AREA -->
    <main class="flex-1 h-[calc(100vh-106px)] overflow-hidden p-2">

        <div class="bg-white h-full rounded shadow flex flex-col">

            <!-- FIXED PAGE HEADER -->
            <div class="flex justify-between items-center gap-4 p-3 border-b bg-white sticky top-0 z-20">
                <h2 class="text-lg sm:text-xl md:text-2xl font-bold">
                    Contact Messages
                </h2>
            </div>

            <!-- TABLE WRAPPER -->
            <div class="relative bg-white rounded shadow h-[calc(100vh-200px)] overflow-hidden">

                <div class="overflow-x-auto overflow-y-auto h-full">

                    <table class="min-w-[1000px] w-full border-collapse text-sm sm:text-base">

                        <!-- STICKY HEADER -->
                        <thead class="bg-gray-200 sticky top-0 z-20 shadow-sm">
                            <tr>
                                <th class="border p-3 text-center">Sr No</th>
                                <th class="border p-3 text-center">Name</th>
                                <th class="border p-3 text-center">Email</th>
                                <th class="border p-3 text-center">Message</th>
                                <th class="border p-3 text-center">Status</th>
                                <th class="border p-3 text-center">Date</th>
                                <th class="border p-3 text-center">Action</th>
                            </tr>
                        </thead>
                    </table>

                </div>
            </div>
            <!-- table end -->
        </div>
    </main>
</div>

<!-- FOOTER -->
<?php require_once('../adminfooter.php'); ?>