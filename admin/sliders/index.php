<?php
require_once('../../connect.php');
include('../adminheader.php');
// include function file
require_once('../controllers/fetch.php');
// call function
$sliders = fetchSliders($conn);
// print_r($sliders); // For debugging
?>

<!DOCTYPE html>
<html>

<head>
    <title>Slider List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-10">

    <div class="max-w-6xl mx-auto bg-white p-6 rounded shadow">

        <div class="flex justify-between mb-4">
            <h2 class="text-xl font-bold">Slider List</h2>
            <a href="create.php" class="bg-blue-600 text-white px-4 py-2 rounded">
                + Add Slider
            </a>
        </div>

        <table class="w-full border">
            <thead class="bg-gray-200">
                <tr>
                    <th class="border p-2">Serial no</th>
                    <th class="border p-2">Image</th>
                    <th class="border p-2">Title</th>
                    <th class="border p-2">Subtitle</th>
                    <th class="border p-2">Description</th>
                    <th class="border p-2">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sliders as $index => $slider): ?>
                    <tr>
                        <td class="border p-2"><?= $index + 1; ?></td>

                        <td class="border p-2">
                            <img src="uploads/<?= $slider['image']; ?>" width="100">
                        </td>

                        <td class="border p-2"><?= $slider['title']; ?></td>

                        <td class="border p-2"><?= $slider['subtitle']; ?></td>
                        <td class="border p-2"><?= $slider['description_text']; ?></td>

                        <td class="border p-2">
                            <?= ($slider['status'] == 1) ? 'Active' : 'Inactive'; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
    <?php include('../adminfooter.php'); ?>

</body>

</html>