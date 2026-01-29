<?php
require_once('../helpers/auth_check.php');
require_once('../../connect.php');
require_once('../adminheader.php');
require_once('../controllers/update.php');

// if (!isset($_GET['id'])) {
//     die('ID not found');
// }

// $id = $_GET['id'];

// $choose = updateChooseUs($conn, $id);

// if (!$choose) {
//     die('Record not found');
// }

/* CHECK ID */
if (!isset($_GET['id'])) {
    redirectWithToast(
        'manage_chooseUs.php',
        'error',
        'Choose Us ID missing'
    );
}

$id = (int) $_GET['id'];

if (isset($_POST['updatechoose'])) {

    $isUpdate = updateChooseUs($conn, $id);

    if ($isUpdate) {
        redirectWithToast('manage_chooseUs.php', 'success', 'Choose Us updated successfully');
    } else {
        redirectWithToast('manage_chooseUs.php', 'error', 'Choose Us update failed');
    }
}

$choose = getChooseUsById($conn, $id);
if (!$choose) {
    redirectWithToast('manage_chooseUs.php', 'error', 'Choose Us not found');
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
            <div class="flex items-center justify-between p-3 border-b sticky top-0 bg-white z-20">

                <!-- Title -->
                <h2 class="text-lg sm:text-xl font-bold">
                    Update Why Choose Us
                </h2>

                <!-- Back Button -->
                <a href="manage_chooseUs.php"
                    class="bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700 transition whitespace-nowrap">
                    ← Back
                </a>

            </div>

            <!-- FORM -->
            <form method="POST" class=" mt-6 space-y-4">

                <!-- TITLE -->
                <div>
                    <label class="block font-medium mb-1">Title</label>
                    <input type="text" name="title" value="<?= $choose['title']; ?>" class="w-full border p-2 rounded"
                        required>
                </div>

                <!-- ICON -->
                  <div>
                    <label class="block mb-1 font-medium">Image</label>
                    <input type="file" name="image" class="w-full border rounded px-3 py-2">

                    <img src="../uploads/sliders/<?= $choose['icon']; ?>" class="mt-3 w-32 border rounded">
                </div>
                <!-- <div>
                    <label class="block font-medium mb-1">Icon</label>
                    <input type="text" name="icon" value="<?= $choose['icon']; ?>" class="w-full border p-2 rounded"
                        required>
                </div> -->

                <!-- DESCRIPTION -->
                <div>
                    <label class="block font-medium mb-1">Description</label>
                    <textarea name="description" rows="4"
                        class="w-full border p-2 rounded"><?= $choose['description']; ?></textarea>
                </div>

                <!-- STATUS -->
                <div>
                    <label class="block font-medium mb-1">Status</label>
                    <select name="status" class="w-full border p-2 rounded">
                        <option value="1" <?= $choose['status'] == 1 ? 'selected' : ''; ?>>Active</option>
                        <option value="0" <?= $choose['status'] == 0 ? 'selected' : ''; ?>>Inactive</option>
                    </select>
                </div>

                <div class="flex  gap-3 pt-4">

                    <!-- Update Button -->
                    <button type="submit" name="updatechoose"
                        class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition w-full sm:w-auto  whitespace-nowrap">
                        Update ChooseUs
                    </button>

                    <!-- Cancel Button -->
                    <a href="manage_chooseUs.php"
                        class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition text-center w-full sm:w-auto whitespace-nowrap">
                        Cancel
                    </a>

                </div>

            </form>

        </div>
    </main>
</div>
<?php require_once('../adminfooter.php'); ?>