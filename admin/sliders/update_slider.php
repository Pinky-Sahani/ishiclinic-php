<?php
require_once('../../connect.php');
require_once('../controllers/update.php');

// Check ID
if (!isset($_GET['id'])) {
    die('Slider ID not found');
}

$id = $_GET['id'];

// Single function handles fetch + update
$slider = updateSlider($conn, $id);

if (!$slider) {
    die('Slider not found');
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Update Slider</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-4 sm:p-6 md:p-10">

    <div class="max-w-3xl mx-auto bg-white p-6 rounded shadow">

        <h2 class="text-xl font-bold mb-6">Update Slider</h2>

        <form method="POST" enctype="multipart/form-data" class="space-y-4">

            <!-- Title -->
            <div>
                <label class="block mb-1 font-medium">Title</label>
                <input type="text" name="title" value="<?= $slider['title']; ?>" class="w-full border rounded px-3 py-2"
                    required>
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

                <img src="../uploads/sliders/<?= $slider['image']; ?>" class="mt-2 w-32 border rounded">
            </div>

            <!-- Status -->
            <div>
                <label class="block mb-1 font-medium">Status</label>
                <select name="status" class="w-full border rounded px-3 py-2">
                    <option value="1" <?= $slider['status'] == 1 ? 'selected' : ''; ?>>Active</option>
                    <option value="0" <?= $slider['status'] == 0 ? 'selected' : ''; ?>>Inactive</option>
                </select>
            </div>

            <!-- Buttons -->
            <div class="flex gap-3">
                <button type="submit" name="updateslider"
                    class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700 transition">
                    Update
                </button>

            </div>

        </form>

    </div>

    <?php include('../adminfooter.php'); ?>
</body>

</html>