<?php
require_once('../adminheader.php');
require_once('../../connect.php');
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
        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4 mb-6">
        
            <h1
                class=" text-lg sm:text-xl md:text-2xl lg:text-3xl font-semibold text-[#7b61ff] text-center sm:text-left">
                Therapies Management
            </h1>

            <a href="create.php"
                class=" bg-[#7b61ff]  text-white text-sm sm:text-base  px-3 sm:px-4  py-2 rounded-lg hover:bg-purple-700 transition text-center">
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
                                <img src="../uploads/therapies/<?= $row['image']; ?>" class="h-[70px]">
                            </td>
                            <td class="p-4 border text-center"><?= $row['title']; ?></td>
                            <td class="p-4 border text-center"><?= $row['description']; ?></td>
                            <td class="p-4 border text-center">
                                <?= ($row['status'] == 1) ? 'Active' : 'Inactive'; ?>
                            </td>
                             <td class="py-3 px-4 border-b">
                                <div class="flex flex-col sm:flex-row sm:justify-end gap-2">

                                    <a href="update_therapy.php?id=<?= $row['id'] ?>"
                                        class="bg-green-600 hover:bg-green-700 text-white text-sm px-4 py-2 rounded text-center transition">
                                        Edit
                                    </a>

                                    <a href="delete_therapy.php?id=<?= $row['id'] ?>"
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
    <?php include('../adminfooter.php'); ?>
</body>

</html>