<?php
require_once('../helpers/auth_check.php');
require_once('../../connect.php');
require_once('../../admin/controllers/fetch.php');
$masters = fetchMasters($conn);
?>

<?php if (isset($_SESSION['toast'])): ?>
    <div id="toast" class="fixed top-6 right-6 z-50
               px-4 py-3
               min-w-[250px] min-h-[60px]
               flex items-center justify-center
               text-center
               rounded shadow-lg
               text-white text-sm font-medium
               <?= $_SESSION['toast']['type'] === 'success' ? 'bg-green-600' : 'bg-red-600' ?>">
        <?= $_SESSION['toast']['message'] ?>
    </div>

    <?php unset($_SESSION['toast']); ?>
<?php endif; ?>

<?php require_once('../adminheader.php'); ?>

<!-- MAIN WRAPPER -->
<div class="flex min-h-[calc(100vh-106px)] ">

    <!-- SIDEBAR -->
    <?php require_once('../adminsidebar.php'); ?>

    <!-- CONTENT AREA -->
    <main class="flex-1 p-6 overflow-hidden p-2">

        <!-- WELCOME BAR -->
        <div class="bg-white rounded shadow p-4 flex justify-between items-center mb-6">
            <h2 class="text-xl font-semibold text-gray-700">
                Welcome, <span class="text-green-600">
                    <?= htmlspecialchars($_SESSION['name']) ?>
                </span> 👋
            </h2>

        </div>

        <!-- DASHBOARD CONTENT -->
        <div class="bg-white h-full rounded shadow text-gray-800">

            <div class="bg-white rounded shadow p-4 sm:p-6">
                <h3 class="text-base sm:text-lg font-semibold mb-4 text-gray-700">
                    Master Users List
                </h3>

                <!-- RESPONSIVE TABLE WRAPPER -->
                <div class="overflow-x-auto">
                    <table class="min-w-full border border-gray-200 text-sm sm:text-base">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="border px-3 sm:px-4 py-2 text-center whitespace-nowrap">
                                    Name
                                </th>
                                <th class="border px-3 sm:px-4 py-2 text-center whitespace-nowrap">
                                    Email
                                </th>
                                <th class="border px-3 sm:px-4 py-2 text-center whitespace-nowrap">
                                    Role
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php if ($masters): ?>
                                <?php foreach ($masters as $user): ?>
                                    <tr class="hover:bg-gray-50">
                                        <td class="border px-3 sm:px-4 py-2 text-center whitespace-nowrap">
                                            <?= htmlspecialchars($user['name']) ?>
                                        </td>
                                        <td class="border px-3 text-center sm:px-4 py-2">
                                            <?= htmlspecialchars($user['email']) ?>
                                        </td>
                                        <td
                                            class="border px-3 sm:px-4 py-2 text-center text-green-600 font-semibold whitespace-nowrap">
                                            <?= htmlspecialchars($user['role']) ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="3" class="text-center py-4 text-gray-400">
                                        No master users found
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