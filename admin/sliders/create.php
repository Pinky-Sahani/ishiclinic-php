<?php
require_once('../../connect.php');
require_once('../controllers/insert.php');

$isInsert = insertSlider($conn);

if ($isInsert) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Add Slider</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-10">

    <div class="max-w-xl mx-auto bg-white p-6 rounded shadow">

        <h2 class="text-xl font-bold mb-4">Add Slider</h2>

        <form action="" method="POST" enctype="multipart/form-data">

            <label class="block mb-2">Title</label>
            <input type="text" name="title" class="w-full border p-2 mb-4" required>

            <label class="block mb-2">Subtitle</label>
            <input type="text" name="subtitle" class="w-full border p-2 mb-4">

            <label class="block mb-2">Description</label>
            <textarea name="description" class="w-full border p-2 mb-4"></textarea>

            <label class="block mb-2">Image</label>
            <input type="file" name="image" class="w-full mb-4" required>

            <label class="block mb-2">Status</label>
            <select name="status" class="w-full border p-2 mb-4">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>

            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">
                Save Slider
            </button>



        </form>

    </div>

</body>

</html>