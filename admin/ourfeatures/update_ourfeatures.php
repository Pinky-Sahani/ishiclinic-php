<?php
require_once('../adminheader.php');
require_once('../../connect.php');
require_once('../controllers/update.php');

/* CHECK ID */
if (!isset($_GET['id'])) {
    die('Feature ID not found');
}

$id = $_GET['id'];

/* FETCH + UPDATE */
$feature = updateFeature($conn, $id);

if (!$feature) {
    die('Feature not found');
}
?>

<!-- MAIN WRAPPER -->
<div class="flex min-h-[calc(100vh-106px)]">

    <!-- SIDEBAR -->
    <?php require_once('../adminsidebar.php'); ?>

    <!-- CONTENT AREA -->
    <main class="flex-1 p-2">
        <div class="bg-white h-full rounded shadow p-6 sm:p-8">

            <!-- PAGE HEADER -->
            <div class="flex justify-between items-center gap-4 p-3 border-b bg-white sticky top-0 z-20">
                <h2 class="text-lg sm:text-xl md:text-2xl font-bold">
                    Update Feature
                </h2>

                <a href="manage_ourfeatures.php"
                   class="bg-gray-600 text-white text-sm sm:text-base px-4 py-2 rounded hover:bg-gray-700 transition">
                    ← Back
                </a>
            </div>

            <!-- FORM -->
            <form method="POST" enctype="multipart/form-data"
                  class=" space-y-5">

                <!-- Title -->
                <div>
                    <label class="block mb-1 font-medium mt-4">Title</label>
                    <input type="text" name="title"
                           value="<?= $feature['title']; ?>"
                           class="w-full border rounded-lg px-3 py-2
                                  focus:outline-none focus:ring-2 focus:ring-[#7b61ff]"
                           required>
                </div>

                <!-- Description -->
                <div>
                    <label class="block mb-1 font-medium">Description</label>
                    <textarea name="description" rows="4"
                        class="w-full border rounded-lg px-3 py-2
                               focus:outline-none focus:ring-2 focus:ring-[#7b61ff]"
                        required><?= $feature['description']; ?></textarea>
                </div>

                <!-- Image -->
                <div>
                    <label class="block mb-1 font-medium">Image</label>
                    <input type="file" name="image"
                           class="w-full border rounded-lg px-3 py-2">

                    <img src="../uploads/features/<?= $feature['image']; ?>"
                         class="mt-3 h-24 rounded border">
                </div>

                <!-- Status -->
                <div>
                    <label class="block mb-1 font-medium">Status</label>
                    <select name="status"
                            class="w-full border rounded-lg px-3 py-2">
                        <option value="1" <?= $feature['status'] == 1 ? 'selected' : ''; ?>>
                            Active
                        </option>
                        <option value="0" <?= $feature['status'] == 0 ? 'selected' : ''; ?>>
                            Inactive
                        </option>
                    </select>
                </div>

                <!-- BUTTONS -->
                <div class="flex gap-3 pt-4">
                    <button type="submit" name="updatefeature"
                        class="bg-green-600 text-white px-2 py-2 rounded hover:bg-green-700 transition">
                        Update Feature
                    </button>

                    <a href="manage_ourfeatures.php"
                       class="bg-red-600 text-white px-6 py-2 rounded hover:bg-red-700 transition">
                        Cancel
                    </a>
                </div>

            </form>

        </div>
    </main>
</div>

<!-- FOOTER -->
<?php require_once('../adminfooter.php'); ?>
