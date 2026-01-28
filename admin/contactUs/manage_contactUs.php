<?php
require_once('../helpers/auth_check.php');
require_once('../../connect.php');
require_once('../adminheader.php');
require_once('../controllers/fetch.php');

$contacts = fetchContacts($conn);
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
                    Contact Messages
                </h2>
            </div>
            <!-- TABLE WRAPPER -->
            <div class="relative bg-white h-[calc(100vh-200px)] overflow-hidden">

                <div class="overflow-x-auto overflow-y-auto h-full">

                    <table class="min-w-[1000px] w-full border-collapse text-sm sm:text-base">

                        <!-- STICKY HEADER -->
                        <thead class="bg-gray-200 sticky top-0 z-20 shadow-sm">
                            <tr>
                                <th class="border p-3 text-center">Sr No</th>
                                <th class="border p-3 text-center">Name</th>
                                <th class="border p-3 text-center">Email</th>
                                <th class="border p-3 text-center">Message</th>
                                <th class="border p-3 text-center">Action</th>
                            </tr>
                        </thead>

                        <!-- TABLE BODY -->
                        <tbody class="bg-white">

                        <?php if (!empty($contacts)): ?>
                            <?php foreach ($contacts as $index => $contact): ?>
                                <tr class="hover:bg-gray-50 transition text-center">

                                    <td class="border p-3">
                                        <?= $index + 1 ?>
                                    </td>

                                    <td class="border p-3 font-medium">
                                        <?= htmlspecialchars($contact['name']); ?>
                                    </td>

                                    <td class="border p-3">
                                        <?= htmlspecialchars($contact['email']); ?>
                                    </td>

                                    <td class="border p-3 max-w-xs truncate">
                                        <?= htmlspecialchars($contact['message']); ?>
                                    </td>

                                    <td class="border p-3">
                                        <div class="flex flex-col sm:flex-row gap-2 justify-center">

                                            <!-- DELETE -->
                                            <a href="delete_contactUs.php?id=<?= $contact['id']; ?>"
                                               onclick="return confirm('Are you sure you want to delete this message?');"
                                               class="bg-red-600 hover:bg-red-700 text-white text-sm px-4 py-2 rounded transition">
                                                Delete
                                            </a>

                                        </div>
                                    </td>

                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="7" class="border p-4 text-center text-gray-500">
                                    No contact messages found
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
