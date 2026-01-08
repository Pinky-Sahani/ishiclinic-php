<?php
require_once('../adminheader.php');
require_once('../../connect.php');
require_once('../controllers/insert.php');

$isInsert = insertWhyChooseUs($conn);

if ($isInsert) {
    header("Location: manage_chooseUs.php");
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

            <!-- PAGE HEADER -->
            <div class="flex justify-between items-center gap-4 p-3 border-b bg-white sticky top-0 z-20">
                <h2 class="text-lg sm:text-xl md:text-2xl font-bold">
                    Add Why Choose Us
                </h2>

                <a href="manage_chooseUs.php"
                   class="bg-gray-600 text-white text-sm sm:text-base px-4 py-2 rounded hover:bg-gray-700 transition">
                    ← Back
                </a>
            </div>

            <!-- FORM -->
            <form method="POST" class="max-w-xl mt-6">

                <!-- TITLE -->
                <label class="block mb-2 font-medium">Title</label>
                <input type="text" name="title" required
                       class="w-full border p-2 mb-4 rounded focus:ring-2 focus:ring-blue-500"
                       placeholder="Enter title">

                <!-- ICON -->
                <label class="block mb-2 font-medium">Icon</label>
                <input type="text" name="icon" required
                       class="w-full border p-2 mb-4 rounded focus:ring-2 focus:ring-blue-500"
                       placeholder="Enter icon name (e.g. user, heart, shield)">

                <!-- DESCRIPTION -->
                <label class="block mb-2 font-medium">Description</label>
                <textarea name="description" rows="4" required
                          class="w-full border p-2 mb-4 rounded focus:ring-2 focus:ring-blue-500"
                          placeholder="Enter description"></textarea>

                <!-- STATUS -->
                <label class="block mb-2 font-medium">Status</label>
                <select name="status"
                        class="w-full border p-2 mb-6 rounded focus:ring-2 focus:ring-blue-500">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>

                <!-- BUTTON -->
                <button type="submit" name="submit"
                        class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700 transition">
                    Save
                </button>

            </form>

        </div>
    </main>
</div>

<!-- FOOTER -->
<?php require_once('../adminfooter.php'); ?>
