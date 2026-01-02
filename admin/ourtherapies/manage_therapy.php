<?php
require_once('../adminheader.php');
require_once('../../connect.php');
require_once('../controllers/fetch.php');

$therapies = fetchTherapies($conn);
?>

<!-- MAIN WRAPPER -->
<div class="flex min-h-[calc(100vh-106px)]">

    <!-- SIDEBAR -->
    <?php require_once('../adminsidebar.php'); ?>

    <!-- CONTENT AREA -->
    <main class="flex-1 p-2">
        <div class="bg-white h-full rounded shadow p-4">

            <!-- Header -->
            <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4 mb-4">
                <h2 class="text-lg sm:text-xl md:text-2xl font-bold text-center sm:text-left">
                    Therapies List
                </h2>

                <a href="create.php"
                    class="bg-blue-600 text-white text-sm sm:text-base px-3 sm:px-4 py-2 rounded text-center hover:bg-blue-700 transition">
                    + Add Therapy
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
                            <th class="border p-2 hidden md:table-cell">Description</th>
                            <th class="border p-2">Status</th>
                            <th class="border p-2">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($therapies as $index => $therapy): ?>
                            <tr class="text-center">

                                <td class="border p-2"><?= $index + 1; ?></td>

                                <td class="border p-2">
                                    <img src="../uploads/therapies/<?= $therapy['image']; ?>"
                                        class="mx-auto w-16 sm:w-20 md:w-24">
                                </td>

                                <td class="border p-2"><?= $therapy['title']; ?></td>

                                <td class="border p-2 hidden md:table-cell">
                                    <?= $therapy['description']; ?>
                                </td>

                                <td class="border p-2">
                                    <span class="<?= $therapy['status'] == 1 ? 'text-green-600' : 'text-red-600'; ?>">
                                        <?= $therapy['status'] == 1 ? 'Active' : 'Inactive'; ?>
                                    </span>
                                </td>

                                <td class="py-3 px-4 border-b">
                                    <div class="flex flex-col sm:flex-row sm:justify-end gap-2">

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
    </main>

</div>

<!-- FOOTER -->
<?php require_once('../adminfooter.php'); ?>
