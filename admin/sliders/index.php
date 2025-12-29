<?php
require_once('../../connect.php');
include('../adminheader.php');
require_once('../controllers/fetch.php');

$sliders = fetchSliders($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Slider List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-4 sm:p-6 md:p-10">

<div class="max-w-6xl mx-auto bg-white p-4 sm:p-6 rounded shadow">

    <!-- Header -->
    <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4 mb-4">
        <h2 class="text-lg sm:text-xl md:text-2xl font-bold text-center sm:text-left">
            Slider List
        </h2>

        <a href="create.php" class="bg-blue-600 text-white text-sm sm:text-base px-3 sm:px-4 py-2 rounded text-center hover:bg-blue-700 transition">
            + Add Slider
        </a>
    </div>

    <!-- Responsive Table -->
    <div class="overflow-x-auto">
        <table class="w-full border text-sm sm:text-base">
            <thead class="bg-gray-200">
                <tr>
                    <th class="border p-2 text-nowrap">Sr No</th>
                    <th class="border p-2">Image</th>
                    <th class="border p-2">Title</th>
                    <th class="border p-2 hidden md:table-cell">Subtitle</th>
                    <th class="border p-2 hidden lg:table-cell">Description</th>
                    <th class="border p-2">Status</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($sliders as $index => $slider): ?>
                <tr class="text-center">
                    <td class="border p-2"><?= $index + 1; ?></td>

                    <td class="border p-2">
                        <img src="../uploads/sliders/<?= $slider['image']; ?>" class="mx-auto w-16 sm:w-20 md:w-24">
                    </td>

                    <td class="border p-2"><?= $slider['title']; ?></td>

                    <td class="border p-2 hidden md:table-cell">
                        <?= $slider['subtitle']; ?>
                    </td>

                    <td class="border p-2 hidden lg:table-cell">
                        <?= $slider['description_text']; ?>
                    </td>

                    <td class="border p-2">
                        <span class="<?= $slider['status'] == 1 ? 'text-green-600' : 'text-red-600'; ?>">
                            <?= $slider['status'] == 1 ? 'Active' : 'Inactive'; ?>
                        </span>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>

<?php include('../adminfooter.php'); ?>
</body>
</html>
