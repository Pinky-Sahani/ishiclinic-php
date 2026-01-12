<?php
require_once('../adminheader.php');
require_once('../../connect.php');
require_once('../controllers/fetch.php');

$sliders = fetchSliders($conn);
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
                    Slider List
                </h2>

                <a href="create.php"
                    class="bg-blue-600 text-white text-sm sm:text-base px-3 sm:px-4 py-2 rounded hover:bg-blue-700 transition">
                    + Add Slider
                </a>
            </div>

            <!-- TABLE SCROLL AREA -->
            <!-- TABLE WRAPPER (controls scrolling) -->
            <div class="relative bg-white rounded shadow h-[calc(100vh-200px)] overflow-hidden">

                        <!-- TABLE SCROLL AREA -->
                        <div class="overflow-x-auto overflow-y-auto h-full">

                    <table class="min-w-[900px] w-full border-collapse text-sm sm:text-base">

                    
                        <!-- STICKY HEADER -->
                        <thead class="bg-gray-200 sticky top-0 z-20 shadow-sm">
                            <tr>
                                <th class="border p-3 text-center text-nowrap">Sr No</th>
                                <th class="border p-3 text-center">Image</th>
                                <th class="border p-3 text-center">Title</th>
                                <th class="border p-3 text-center whitespace-nowrap hidden md:table-cell">Subtitle</th> 
                               <th class="border p-3 text-center whitespace-nowrap hidden lg:table-cell">Description</th> 
                                <th class="border p-3 text-center">Status</th>
                                <th class="border p-3 text-center">Action</th>
                            </tr>
                        </thead>

                        <tbody class="bg-white">
                            <?php foreach ($sliders as $index => $slider): ?>
                                <tr class="hover:bg-gray-50 transition">

                                    <td class="border p-3"><?= $index + 1 ?></td>

                                    <td class="border p-3">
                                        <img src="../uploads/sliders/<?= $slider['image'] ?>"
                                            class="w-16 sm:w-20 md:w-24 rounded mx-auto">
                                    </td>

                                    <td class="border p-3 font-medium whitespace-nowrap">
                                        <?= $slider['title'] ?>
                                    </td>

                                    <td class="border p-3 hidden md:table-cell">
                                        <?= $slider['subtitle'] ?>
                                    </td>

                                    <td class="border p-3 hidden lg:table-cell max-w-xs truncate">
                                        <?= $slider['description_text'] ?>
                                    </td>

                                    <td class="border p-3">
                                        <span
                                            class="font-semibold <?= $slider['status'] ? 'text-green-600' : 'text-red-600' ?>">
                                            <?= $slider['status'] ? 'Active' : 'Inactive' ?>
                                        </span>
                                    </td>

                                    <td class="border p-3">
                                        <div class="flex flex-col sm:flex-row gap-2 justify-center">
                                            <a href="update_slider.php?id=<?= $slider['id'] ?>"
                                                class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded text-sm text-center">
                                                Edit
                                            </a>

                                            <a href="delete_slider.php?id=<?= $slider['id'] ?>"
                                                onclick="return confirm('Are you sure?');"
                                                class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded text-sm text-center">
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
            <!-- table end here   -->
        </div>
    </main>
</div>

<!-- FOOTER -->
<?php require_once('../adminfooter.php'); ?>