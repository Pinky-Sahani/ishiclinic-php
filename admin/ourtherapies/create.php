<?php
require_once('../../connect.php');
require_once('../controllers/insert.php');

// Call function
$isInsert = insertTherapy($conn);
if ($isInsert) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin | Add Therapy</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen p-8">

    <div class="max-w-3xl mx-auto bg-white rounded-xl shadow p-8">

        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-semibold text-[#7b61ff]">
                Add New Therapy
            </h1>
            <a href="index.php" class="text-[#7b61ff] hover:underline">
                ← Back to List
            </a>
        </div>

        <!-- Form -->
        <form method="POST" enctype="multipart/form-data" class="space-y-6">

            <!-- Title -->
            <div>
                <label class="block mb-2 font-medium">Therapy Title</label>
                <input type="text" name="title" required class="w-full border border-gray-300 rounded-lg p-3">
            </div>

            <!-- Description -->
            <div>
                <label class="block mb-2 font-medium">Description</label>
                <textarea name="description" rows="4" required
                    class="w-full border border-gray-300 rounded-lg p-3"></textarea>
            </div>

            <!-- Image -->
            <div>
                <label class="block mb-2 font-medium">Therapy Image</label>
                <input type="file" name="image" required class="w-full border border-gray-300 rounded-lg p-2">
            </div>

            <!-- Status -->
            <div>
                <label class="block mb-2 font-medium">Status</label>
                <select name="status" class="w-full border border-gray-300 rounded-lg p-3">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>

            <!-- Button -->
            <div class="pt-4">
                <button type="submit" name="savetherapy"
                    class="bg-[#7b61ff] text-white px-6 py-3 rounded-lg hover:bg-purple-700">
                    Save Therapy
                </button>
            </div>

        </form>

    </div>

</body>

</html>