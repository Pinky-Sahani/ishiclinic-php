<?php
require_once('../helpers/auth_check.php');
require_once('../../connect.php');
require_once('../adminheader.php');
require_once('../controllers/insert.php');

$isInsert = insertFeature($conn);
if ($isInsert) {
    header("Location: manage_ourfeatures.php");
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

            <!-- PAGE HEADER -->
            <div class="flex justify-between items-center gap-4 p-3 border-b bg-white sticky top-0 z-20">

                <h1 class="text-lg sm:text-xl md:text-2xl font-bold text-black">
                    Add Feature
                </h1>

                <a href="manage_ourfeatures.php"
                   class="bg-gray-600 text-white text-sm sm:text-base px-4 py-2 rounded hover:bg-gray-700 transition">
                    ← Back
                </a>

            </div>

            <!-- FORM -->
            <form method="POST" enctype="multipart/form-data"
                  class="space-y-6">

                <!-- Feature Title -->
                <div>
                    <label class="block mb-2 font-medium mt-4">
                        Feature Title
                    </label>
                    <input type="text" name="title" required
                           placeholder="Enter feature title"
                           class="w-full border border-gray-300 rounded-lg p-3
                                  focus:ring-2 focus:ring-[#7b61ff] focus:outline-none">
                </div>

                <!-- Description -->
                <div>
                    <label class="block mb-2 font-medium">
                        Description
                    </label>
                    <textarea name="description" rows="4" required
                              placeholder="Enter feature description"
                              class="w-full border border-gray-300 rounded-lg p-3
                                     focus:ring-2 focus:ring-[#7b61ff] focus:outline-none"></textarea>
                </div>

                <!-- Feature Image -->
                <div>
                    <label class="block mb-2 font-medium">
                        Feature Image
                    </label>
                    <input type="file" name="image" required
                           class="w-full border border-gray-300 rounded-lg p-2 bg-white">
                </div>

                <!-- Status -->
                <div>
                    <label class="block mb-2 font-medium">
                        Status
                    </label>
                    <select name="status"
                            class="w-full border border-gray-300 rounded-lg p-3
                                   focus:ring-2 focus:ring-[#7b61ff] focus:outline-none">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>

                <!-- BUTTONS -->
                <div class="pt-4 flex gap-3">
                    <button type="submit" name="savefeature"
                        class="bg-green-600 text-white px-6 py-3 rounded-lg
                               hover:bg-indigo-700 transition">
                        Save Feature
                    </button>

                </div>

            </form>

        </div>
    </main>
</div>

<!-- FOOTER -->
<?php require_once('../adminfooter.php'); ?>
