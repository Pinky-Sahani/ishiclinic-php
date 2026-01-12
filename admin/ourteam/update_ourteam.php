<?php
require_once('../adminheader.php');
require_once('../../connect.php');
require_once('../controllers/update.php');

// Check ID
if (!isset($_GET['id'])) {
    die('Team ID not found');
}

$id = $_GET['id'];

// Fetch + Update handled in one function
$team = updateTeam($conn, $id);

if (!$team) {
    die('Team member not found');
}
?>

<!-- MAIN WRAPPER -->
<div class="flex min-h-[calc(100vh-106px)]">

    <!-- SIDEBAR -->
    <?php require_once('../adminsidebar.php'); ?>

    <!-- CONTENT AREA -->
    <main class="flex-1 p-2">
        <div class="bg-white h-full rounded shadow p-6">

            <!-- PAGE HEADER -->
            <div class="flex justify-between items-center gap-4 p-3 border-b bg-white sticky top-0 z-20">
                <h2 class="text-lg sm:text-xl md:text-2xl font-bold">
                    Update Team 
                </h2>

                <a href="manage_ourteam.php"
                    class="bg-gray-600 text-white text-sm sm:text-base px-4 py-2 rounded hover:bg-gray-700 transition">
                    ← Back
                </a>
            </div>

            <!-- FORM -->
            <form method="POST" enctype="multipart/form-data" class="max-w-3xl space-y-4">

                <!-- Name -->
                <div>
                    <label class="block mb-1 font-medium mt-4">Name</label>
                    <input type="text" name="name" value="<?= $team['name']; ?>"
                        class="w-full border rounded px-3 py-2" required>
                </div>

                <!-- Image -->
                <div>
                    <label class="block mb-1 font-medium mt-6">Image</label>
                    <input type="file" name="image" class="w-full border rounded px-3 py-2">

                    <?php if ($team['image']) : ?>
                        <img src="../uploads/team/<?= $team['image']; ?>"
                            class="mt-3 w-32 border rounded">
                    <?php endif; ?>
                </div>

                <!-- Status -->
                <div>
                    <label class="block mb-1 font-medium mt-6">Status</label>
                    <select name="status" class="w-full border rounded px-3 py-2">
                        <option value="1" <?= $team['status'] == 1 ? 'selected' : ''; ?>>Active</option>
                        <option value="0" <?= $team['status'] == 0 ? 'selected' : ''; ?>>Inactive</option>
                    </select>
                </div>

                <!-- Buttons -->
                <div class="flex gap-3 pt-4">
                    <button type="submit" name="updateteam"
                        class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">
                        Update Team
                    </button>

                    <a href="manage_ourteam.php"
                        class="bg-red-600 text-white px-8 py-2 rounded hover:bg-red-700 transition">
                        Cancel
                    </a>
                </div>

            </form>

        </div>
    </main>
</div>

<?php require_once('../adminfooter.php'); ?>
