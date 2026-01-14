<?php
require_once('../adminheader.php');
require_once('../../connect.php');
require_once('../controllers/insert.php');

$isInsert = insertSlider($conn);
if ($isInsert) {
    header("Location: manage_slider.php");
    exit;
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
                    Add Slider
                </h2>

        
               <a href="manage_slider.php"
                    class="bg-gray-600 text-white text-sm sm:text-base px-4 py-2 rounded hover:bg-gray-700 transition">
                    ← Back
                </a>
            </div>

            <!-- FORM -->
            <form action="" method="POST" enctype="multipart/form-data" >

                <label class="block mb-2 font-medium mt-4">Title</label>
                <input type="text" name="title" class="w-full border p-2 mb-4 rounded" required>

                <label class="block mb-2 font-medium">Subtitle</label>
                <input type="text" name="subtitle" class="w-full border p-2 mb-4 rounded">

                <label class="block mb-2 font-medium">Description</label>
                <textarea name="description" class="w-full border p-2 mb-4 rounded" rows="4"></textarea>

                <label class="block mb-2 font-medium">Image</label>
                <input type="file" name="image" class="w-full mb-4    w-full border border-gray-300 rounded-lg p-2" required>

                <label class="block mb-2 font-medium">Status</label>
                <select name="status" class="w-full border p-2 mb-6 rounded">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>

                <!-- BUTTON -->
                <button type="submit" name="saveslider"
                    class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700 transition">
                    Save Slider
                </button>

            </form>

        </div>
    </main>
</div>

<!-- FOOTER -->
<?php require_once('../adminfooter.php'); ?>