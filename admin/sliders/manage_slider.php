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
            <div class="flex-1 overflow-auto">

                <table class="min-w-max w-full border text-sm sm:text-base">

                    <!-- STICKY TABLE HEADER -->
                    <thead class="bg-gray-200 sticky top-0 z-10 shadow">
                        <tr>
                            <th class="border p-2 ">Sr No</th>
                            <th class="border p-2 ">Image</th>
                            <th class="border p-2">Title</th>
                            <th class="border p-2">Subtitle</th>
                            <th class="border p-2 ">Description</th>
                            <th class="border p-2 ">Status</th>
                            <th class="border p-2">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($sliders as $index => $slider): ?>
                            <tr class="text-center">

                                <td class="border p-2"><?= $index + 1 ?></td>

                                <td class="border p-2">
                                    <img src="../uploads/sliders/<?= $slider['image'] ?>"
                                        class="mx-auto w-16 sm:w-20 md:w-24">
                                </td>

                                <td class="border p-2 whitespace-nowrap">
                                    <?= $slider['title'] ?>
                                </td>

                                <td class="border p-2 hidden md:table-cell">
                                    <?= $slider['subtitle'] ?>
                                </td>

                                <td class="border p-2 hidden lg:table-cell">
                                    <?= $slider['description_text'] ?>
                                </td>

                                <td class="border p-2">
                                    <span class="<?= $slider['status'] ? 'text-green-600' : 'text-red-600' ?>">
                                        <?= $slider['status'] ? 'Active' : 'Inactive' ?>
                                    </span>
                                </td>

                                <td class="border p-2">
                                    <div class="flex flex-col sm:flex-row gap-2 justify-center">
                                        <a href="update_slider.php?id=<?= $slider['id'] ?>"
                                            class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded text-sm">
                                            Edit
                                        </a>

                                        <a href="delete_slider.php?id=<?= $slider['id'] ?>"
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
    </main>
</div>

<!-- FOOTER -->
<?php require_once('../adminfooter.php'); ?>