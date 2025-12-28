<?php
require_once('../../connect.php');
include('../adminheader.php');
require_once('../controllers/fetch.php');

$therapies = fetchTherapies($conn);
// print_r($therapies); // For debugging
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin | Therapies</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen p-8">

    <!-- Page Wrapper -->
    <div class="max-w-7xl mx-auto bg-white rounded-xl shadow p-6">

        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-semibold text-[#7b61ff]">
                Therapies Management
            </h1>

            <a href="create.php" class="bg-[#7b61ff] text-white px-5 py-2 rounded-lg hover:bg-purple-700 transition">
                + Add Therapy
            </a>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="w-full border border-gray-200 rounded-lg">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="p-2 border text-center">Serial No</th>
                        <th class="p-2 border text-center">Image</th>
                        <th class="p-2 border text-center">Title</th>
                        <th class="p-2 border text-center">Description</th>
                        <th class="p-2 border text-center">Status</th>
                        <th class="p-2 border text-center">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($therapies as $index => $row): ?>
                        <tr>
                            <td class="p-4 border text-center"><?= $index + 1; ?></td>
                            <td class="p-4 border text-center">
                                <img src="uploads/<?= $row['image']; ?>" class="h-[70px]"></td>
                            <td class="p-4 border text-center"><?= $row['title']; ?></td>
                            <td class="p-4 border text-center"><?= $row['description']; ?></td>
                            <td class="p-4 border text-center">
                                <?= ($row['status'] = 1) ? 'Active' : 'Inactive'; ?>
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