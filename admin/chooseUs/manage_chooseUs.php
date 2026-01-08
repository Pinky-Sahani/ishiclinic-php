<?php
require_once('../adminheader.php');
require_once('../../connect.php');
require_once('../controllers/fetch.php');

$whyChooseList = fetchWhyChooseUs($conn);

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
                    Why Choose Us
                </h2>

                <a href="create.php"
                   class="bg-blue-600 text-white text-sm sm:text-base px-3 sm:px-4 py-2 rounded hover:bg-blue-700 transition">
                    + Add Item
                </a>
            </div>

            <!-- TABLE CONTAINER -->
            <div class="relative bg-white rounded shadow h-[calc(100vh-200px)] overflow-hidden">

                <!-- SCROLL AREA -->
                <div class="overflow-x-auto overflow-y-auto h-full">

                    <table class="min-w-[800px] w-full border-collapse text-sm sm:text-base">

                        <!-- STICKY HEADER -->
                        <thead class="bg-gray-200 sticky top-0 z-20 shadow-sm">
                            <tr>
                                <th class="border p-3 text-center whitespace-nowrap">Sr No</th>
                                <th class="border p-3 text-center">Icon</th>
                                <th class="border p-3 text-center">Title</th>
                                <th class="border p-3 text-center hidden md:table-cell">
                                    Description
                                </th>
                                <th class="border p-3 text-center">Status</th>
                                <th class="border p-3 text-center">Action</th>
                            </tr>
                        </thead>

                        <!-- TABLE BODY -->
                        <tbody class="bg-white">
                            <?php if (count($whyChooseList) > 0): ?>
                                <?php foreach ($whyChooseList as $index => $row): ?>
                                    <tr class="hover:bg-gray-50 transition">

                                        <td class="border p-3 text-center">
                                            <?= $index + 1 ?>
                                        </td>

                                        <td class="border p-3 text-center">
                                            <span class="px-2 py-1 text-xs bg-gray-200 rounded capitalize">
                                                <?= $row['icon'] ?>
                                            </span>
                                        </td>

                                        <td class="border p-3 font-medium whitespace-nowrap">
                                            <?= $row['title'] ?>
                                        </td>

                                        <td class="border p-3 hidden md:table-cell max-w-xs truncate">
                                            <?= $row['description'] ?>
                                        </td>

                                        <td class="border p-3 text-center">
                                            <span class="font-semibold
                                                <?= $row['status'] ? 'text-green-600' : 'text-red-600' ?>">
                                                <?= $row['status'] ? 'Active' : 'Inactive' ?>
                                            </span>
                                        </td>

                                        <td class="border p-3">
                                            <div class="flex flex-col sm:flex-row gap-2 justify-center">
                                                <a href="update_chooseUs.php?id=<?= $row['id'] ?>"
                                                   class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded text-sm">
                                                    Edit
                                                </a>

                                                <a href="delete_chooseUs.php?id=<?= $row['id'] ?>"
                                                   onclick="return confirm('Are you sure?')"
                                                   class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded text-sm">
                                                    Delete
                                                </a>
                                            </div>
                                        </td>

                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="6" class="text-center p-6 text-gray-500">
                                        No records found
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>

                    </table>

                </div>
            </div>

        </div>
    </main>
</div>

<!-- FOOTER -->
<?php require_once('../adminfooter.php'); ?>
