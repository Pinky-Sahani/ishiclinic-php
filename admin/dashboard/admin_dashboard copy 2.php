<?php

session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'master') {
    header("Location: /ishiclinic/login.php");
    exit;
}
require_once('../../connect.php');

// Sirf master users lao
$sql = "SELECT name, email, role FROM user WHERE role = 'master'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$masters = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<?php require_once('../adminheader.php'); ?>

<!-- MAIN WRAPPER -->
<div class="flex min-h-[calc(100vh-106px)]">

    <!-- SIDEBAR -->
    <?php require_once('../adminsidebar.php'); ?>

    <!-- CONTENT AREA -->
    <main class="flex-1 p-6">

        <!-- WELCOME BAR -->
        <div class="bg-white rounded shadow p-4 flex justify-between items-center mb-6">
            <h2 class="text-xl font-semibold text-gray-700">
                Welcome, <span class="text-green-600">
                    <?= htmlspecialchars($_SESSION['name']) ?>
                </span> 👋
            </h2>

            <a href="/ishiclinic/logout.php" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                Logout
            </a>
        </div>

        <!-- DASHBOARD CONTENT -->
        <div class="bg-white h-full rounded shadow  justify-center text-gray-800">
            <div class="bg-white rounded shadow p-6">
                <h3 class="text-lg font-semibold mb-4 text-gray-700">
                    Master Users List
                </h3>

                <table class="w-full border border-gray-200">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="border px-4 py-2 text-left">Name</th>
                            <th class="border px-4 py-2 text-left">Email</th>
                            <th class="border px-4 py-2 text-left">Role</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php if ($masters): ?>
                            <?php foreach ($masters as $user): ?>
                                <tr class="hover:bg-gray-50">
                                    <td class="border px-4 py-2">
                                        <?= htmlspecialchars($user['name']) ?>
                                    </td>
                                    <td class="border px-4 py-2">
                                        <?= htmlspecialchars($user['email']) ?>
                                    </td>
                                    <td class="border px-4 py-2 text-green-600 font-semibold">
                                        <?= $user['role'] ?>
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

    </main>
</div>

<!-- FOOTER -->
<?php require_once('../adminfooter.php'); ?>