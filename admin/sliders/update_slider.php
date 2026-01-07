<?php
require_once('../adminheader.php');
require_once('../../connect.php');
require_once('../controllers/update.php');

// Check ID
if (!isset($_GET['id'])) {
    die('Slider ID not found');
}

$id = $_GET['id'];

// Fetch + Update handled in one function
$slider = updateSlider($conn, $id);

if (!$slider) {
    die('Slider not found');
}
?>

<!-- MAIN WRAPPER -->
<div class="flex min-h-[calc(100vh-106px)]">

    <!-- SIDEBAR -->
    <?php require_once('../adminsidebar.php'); ?>

    <!-- CONTENT AREA -->
    <main class="flex-1 p-2">
        <div class="bg-white h-full rounded shadow p-6">

            <!-- Page Header -->
    
                 <div class="flex justify-between items-center gap-4 p-3 border-b bg-white sticky top-0 z-20">
                <h2 class="text-lg sm:text-xl md:text-2xl font-bold">
                    Update Slider
                </h2>

                <a href="manage_slider.php"
                    class="bg-gray-600 text-white text-sm sm:text-base px-4 py-2 rounded hover:bg-gray-700 transition">
                    ← Back
                </a>
            </div>

            <!-- FORM -->
            <form method="POST" enctype="multipart/form-data" class="max-w-3xl space-y-4">

                <!-- Title -->
                <div>
                    <label class="block mb-1 font-medium mt-4">Title</label>
                    <input type="text" name="title" value="<?= $slider['title']; ?>"
                        class="w-full border rounded px-3 py-2" required>
                </div>

                <!-- Subtitle -->
                <div>
                    <label class="block mb-1 font-medium">Subtitle</label>
                    <input type="text" name="subtitle" value="<?= $slider['subtitle']; ?>"
                        class="w-full border rounded px-3 py-2">
                </div>

                <!-- Description -->
                <div>
                    <label class="block mb-1 font-medium">Description</label>
                    <textarea name="description" rows="4"
                        class="w-full border rounded px-3 py-2"><?= $slider['description_text']; ?></textarea>
                </div>

                <!-- Image -->
                <div>
                    <label class="block mb-1 font-medium">Image</label>
                    <input type="file" name="image" class="w-full border rounded px-3 py-2">

                    <img src="../uploads/sliders/<?= $slider['image']; ?>" class="mt-3 w-32 border rounded">
                </div>

                <!-- Status -->
                <div>
                    <label class="block mb-1 font-medium">Status</label>
                    <select name="status" class="w-full border rounded px-3 py-2">
                        <option value="1" <?= $slider['status'] == 1 ? 'selected' : ''; ?>>
                            Active
                        </option>
                        <option value="0" <?= $slider['status'] == 0 ? 'selected' : ''; ?>>
                            Inactive
                        </option>
                    </select>
                </div>

                <!-- Buttons -->
                <div class="flex gap-3 pt-4">
                    <button type="submit" name="updateslider"
                        class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">
                        Update Slider
                    </button>

                    <a href="manage_slider.php"
                        class="bg-red-600 text-white px-8 py-2 rounded hover:bg-red-700 transition">
                        Cancel
                    </a>
                </div>

            </form>

        </div>
    </main>
</div>

<!-- FOOTER -->
<?php require_once('../adminfooter.php'); ?>