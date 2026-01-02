<?php
require_once('../../connect.php');
include('../adminheader.php');
require_once('../controllers/update.php');

// Check ID
if (!isset($_GET['id'])) {
    die('Therapy ID not found');
}

$id = $_GET['id'];

// Single function handles fetch + update
$therapy = updateTherapy($conn, $id);

if (!$therapy) {
    die('Therapy not found');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Therapy</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-4 sm:p-6 md:p-10">

<div class="max-w-3xl mx-auto bg-white p-6 rounded-xl shadow">

    <h2 class="text-xl sm:text-2xl font-semibold text-[#7b61ff] mb-6 text-center">
        Update Therapy
    </h2>

    <form method="POST" enctype="multipart/form-data" class="space-y-5">

        <!-- Title -->
        <div>
            <label class="block mb-1 font-medium">Title</label>
            <input type="text" name="title"
                   value="<?= $therapy['title']; ?>"
                   class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#7b61ff]"
                   required>
        </div>

        <!-- Description -->
        <div>
            <label class="block mb-1 font-medium">Description</label>
            <textarea name="description" rows="4"
                      class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#7b61ff]"
                      required><?= $therapy['description']; ?></textarea>
        </div>

        <!-- Image -->
        <div>
            <label class="block mb-1 font-medium">Image</label>
            <input type="file" name="image"
                   class="w-full border rounded-lg px-3 py-2">

            <img src="../uploads/therapies/<?= $therapy['image']; ?>"
                 class="mt-3 h-24 rounded border">
        </div>

        <!-- Status -->
        <div>
            <label class="block mb-1 font-medium">Status</label>
            <select name="status"
                    class="w-full border rounded-lg px-3 py-2">
                <option value="1" <?= $therapy['status'] == 1 ? 'selected' : ''; ?>>Active</option>
                <option value="0" <?= $therapy['status'] == 0 ? 'selected' : ''; ?>>Inactive</option>
            </select>
        </div>

        <!-- Buttons -->
        <div class="flex flex-col sm:flex-row gap-3">
            <button type="submit" name="updatetherapy"
                    class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition">
                Update
            </button>

            <a href="index.php"
               class="bg-gray-500 text-white px-6 py-2 rounded-lg hover:bg-gray-600 transition text-center">
                Cancel
            </a>
        </div>

    </form>

</div>

<?php include('../adminfooter.php'); ?>
</body>
</html>
