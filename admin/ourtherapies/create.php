<?php
require_once('../adminheader.php');
require_once('../../connect.php');
require_once('../controllers/insert.php');

// Call function
$isInsert = insertTherapy($conn);
if ($isInsert) {
    header("Location: manage_therapy.php");
    exit;
}
?>

<!-- MAIN WRAPPER -->
<div class="flex min-h-[calc(100vh-106px)]">

    <!-- SIDEBAR -->
    <?php require_once('../adminsidebar.php'); ?>

    <!-- CONTENT AREA -->
    <main class="flex-1 p-2">
        <div class="bg-white h-full rounded shadow p-8">

            <!-- Page Header -->
             <div class="flex justify-between items-center gap-4 p-3 border-b bg-white sticky top-0 z-20">
            
                <h1 class="text-lg sm:text-2xl md:text-2xl font-bold text-black">
                    Add Therapy
                </h1>
                <a href="manage_therapy.php"
                    class="bg-gray-600 text-white text-sm sm:text-base px-4 py-2 rounded hover:bg-gray-700 transition">
                    ← Back
                </a>

            </div>

            <!-- FORM -->
            <form method="POST" enctype="multipart/form-data" class="max-w-3xl space-y-6">

                <!-- Title -->
                <div>
                    <label class="block mb-2 font-medium mt-4">Therapy Title</label>
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

                <!-- Buttons -->
                <div class="pt-4 flex gap-3">
                    <button type="submit" name="savetherapy"
                        class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 transition">
                        Save Therapy
                    </button>

                   
                </div>

            </form>

        </div>
    </main>
</div>

<!-- FOOTER -->
<?php require_once('../adminfooter.php'); ?>