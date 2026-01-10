<?php
require_once('../adminheader.php');
require_once('../../connect.php');
require_once('../controllers/fetch.php');

$teamMembers = fetchTeam($conn);
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
                    Our Team List
                </h2>

                <a href="create.php"
                    class="bg-blue-600 text-white text-sm sm:text-base px-3 sm:px-4 py-2 rounded hover:bg-blue-700 transition">
                    + Add Team Member
                </a>
            </div>

            <!-- TABLE WRAPPER -->
            <div class="relative bg-white rounded shadow h-[calc(100vh-200px)] overflow-hidden">

                <div class="overflow-x-auto overflow-y-auto h-full">

                    <table class="min-w-[900px] w-full border-collapse text-sm sm:text-base">

                        <!-- STICKY HEADER -->
                        <thead class="bg-gray-200 sticky top-0 z-20 shadow-sm">
                            <tr>
                                <th class="border p-3 text-center">Sr No</th>
                                <th class="border p-3 text-center">Photo</th>
                                <th class="border p-3 text-center">Name</th>
                                <th class="border p-3 text-center">Status</th>
                                <th class="border p-3 text-center">Action</th>
                            </tr>
                        </thead>

                        <tbody class="bg-white">
                            <?php foreach ($teamMembers as $index => $member): ?>
                                <tr class="hover:bg-gray-50 transition">

                                    <td class="border p-3 text-center">
                                        <?= $index + 1 ?>
                                    </td>

                                    <td class="border p-3 text-center">
                                        <img src="../uploads/team/<?= $member['image'] ?>"
                                            class="w-16 h-16 rounded-full object-cover mx-auto">
                                    </td>

                                    <td class="border p-3 font-medium text-center">
                                        <?= $member['name'] ?>
                                    </td>

                                   

                                    <td class="border p-3 text-center">
                                        <span
                                            class="font-semibold <?= $member['status'] ? 'text-green-600' : 'text-red-600' ?>">
                                            <?= $member['status'] ? 'Active' : 'Inactive' ?>
                                        </span>
                                    </td>

                                    <td class="border p-3">
                                        <div class="flex flex-col sm:flex-row gap-2 justify-center">
                                            <a href="update_ourteam.php?id=<?= $member['id'] ?>"
                                                class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded text-sm">
                                                Edit
                                            </a>

                                            <a href="delete_ourteam.php?id=<?= $member['id'] ?>"
                                                onclick="return confirm('Are you sure?');"
                                                class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded text-sm">
                                                Delete
                                            </a>
                                        </div>
                                    </td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>

                    </table>

                </div>
            </div>
            <!-- table end -->
        </div>
    </main>
</div>

<!-- FOOTER -->
<?php require_once('../adminfooter.php'); ?>