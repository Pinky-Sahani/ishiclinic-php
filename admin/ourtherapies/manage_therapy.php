<?php
require_once('../helpers/auth_check.php');
require_once('../../connect.php');
require_once('../adminheader.php');
require_once('../controllers/fetch.php');

$therapies = fetchTherapies($conn);
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
                    Therapies List
                </h2>

                <a href="create.php"
                    class="bg-blue-600 text-white text-sm sm:text-base px-3 sm:px-4 py-2 rounded hover:bg-blue-700 transition">
                    + Add Therapy
                </a>
            </div>

            <!-- TABLE WRAPPER (ONLY TABLE SCROLLS) -->
            <div class="relative bg-white h-[calc(100vh-200px)] overflow-hidden">

                <!-- TABLE SCROLL AREA -->
                <div class="overflow-x-auto overflow-y-auto h-full">

                    <table class="min-w-[800px] w-full border-collapse text-sm sm:text-base">

                        <!-- STICKY TABLE HEADER -->
                        <thead class="bg-gray-200 sticky top-0 z-20 shadow-sm">
                            <tr>
                                <th class="border p-1 text-center whitespace-nowrap">Sr No</th>
                                <th class="border p-1 text-center">Image</th>
                                <th class="border p-1 text-center">Title</th>
                                <th class="border p-1 text-center hidden md:table-cell">Description</th>
                                <th class="border p-1 text-center">Status</th>
                                <th class="border p-1 text-center">Action</th>
                            </tr>
                        </thead>

                        <tbody class="bg-white">
                            <?php foreach ($therapies as $index => $therapy): ?>
                                <tr class="hover:bg-gray-50 transition text-center">

                                    <td class="border p-1">
                                        <?= $index + 1 ?>
                                    </td>

                                    <td class="border p-1">
                                        <img src="../uploads/therapies/<?= $therapy['image']; ?>"
                                            class="w-16 sm:w-20 md:w-24 rounded mx-auto">
                                    </td>

                                    <td class="border p-1 font-medium whitespace-nowrap">
                                        <?= $therapy['title']; ?>
                                    </td>

                                    <td class="border p-1 hidden md:table-cell max-w-xs truncate">
                                        <?= $therapy['description']; ?>
                                    </td>

                                    <td class="border p-1">
                                        <span
                                            class="font-semibold <?= $therapy['status'] == 1 ? 'text-green-600' : 'text-red-600'; ?>">
                                            <?= $therapy['status'] == 1 ? 'Active' : 'Inactive'; ?>
                                        </span>
                                    </td>

                                    <td class="border p-1">
                                        <div class="flex flex-col sm:flex-row gap-2 justify-center">
                                            <a href="update_therapy.php?id=<?= $therapy['id']; ?>"
                                                class="bg-green-600 hover:bg-green-700 text-white text-sm px-4 py-2 rounded text-center transition">
                                                Edit
                                            </a>

                                            <a href="delete_therapy.php?id=<?= $therapy['id']; ?>"
                                                onclick="return confirm('Are you sure you want to delete this?');"
                                                class="bg-red-600 hover:bg-red-700 text-white text-sm px-4 py-2 rounded text-center transition">
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
            <!-- TABLE END -->

        </div>
    </main>
</div>

<!-- FOOTER -->
<?php require_once('../adminfooter.php'); ?>