<?php
session_start();
// print_r($_SESSION);
$email = $_SESSION['email'] ?? '';
$role = $_SESSION['role'] ?? '';
if (empty($email)) {
    header("Location: /ishiclinic/login.php");
    exit;
}
require_once('../adminheader.php');
require_once('../../connect.php');
require_once('../controllers/fetch.php');

$features = fetchFeatures($conn);
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
                    Our Features List
                </h2>

                <a href="create.php"
                   class="bg-blue-600 text-white text-sm sm:text-base px-3 sm:px-4 py-2 rounded hover:bg-indigo-700 transition">
                    + Add Feature
                </a>
            </div>

            <!-- TABLE WRAPPER -->
            <div class="relative bg-white h-[calc(100vh-200px)] overflow-hidden">

                <!-- TABLE SCROLL AREA -->
                <div class="overflow-x-auto overflow-y-auto h-full">

                    <table class="min-w-[900px] w-full border-collapse text-sm sm:text-base">

                        <!-- STICKY TABLE HEADER -->
                        <thead class="bg-gray-200 sticky top-0 z-20 shadow-sm">
                            <tr>
                                <th class="border p-3 text-center whitespace-nowrap">Sr No</th>
                                <th class="border p-3 text-center">Image</th>
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

                            <?php if (!empty($features)): ?>
                                <?php foreach ($features as $index => $feature): ?>
                                    <tr class="hover:bg-gray-50 transition text-center">

                                        <td class="border p-3">
                                            <?= $index + 1 ?>
                                        </td>

                                        <td class="border p-3">
                                            <img src="../uploads/features/<?= $feature['image']; ?>"
                                                 class="w-16 sm:w-20 md:w-24 rounded mx-auto">
                                        </td>

                                        <td class="border p-3 font-medium whitespace-nowrap">
                                            <?= $feature['title']; ?>
                                        </td>

                                        <td class="border p-3 hidden md:table-cell max-w-xs truncate">
                                            <?= $feature['description']; ?>
                                        </td>

                                        <td class="border p-3">
                                            <span class="font-semibold
                                                <?= $feature['status'] == 1 ? 'text-green-600' : 'text-red-600'; ?>">
                                                <?= $feature['status'] == 1 ? 'Active' : 'Inactive'; ?>
                                            </span>
                                        </td>

                                        <td class="border p-3">
                                            <div class="flex flex-col sm:flex-row gap-2 justify-center">

                                                <a href="update_ourfeatures.php?id=<?= $feature['id']; ?>"
                                                   class="bg-green-600 hover:bg-green-700 text-white text-sm px-4 py-2 rounded transition">
                                                    Edit
                                                </a>

                                                <a href="delete_ourfeatures.php?id=<?= $feature['id']; ?>"
                                                   onclick="return confirm('Are you sure you want to delete this feature?');"
                                                   class="bg-red-600 hover:bg-red-700 text-white text-sm px-4 py-2 rounded transition">
                                                    Delete
                                                </a>

                                            </div>
                                        </td>

                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="6" class="border p-4 text-center text-gray-500">
                                        No features found
                                    </td>
                                </tr>
                            <?php endif; ?>

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
