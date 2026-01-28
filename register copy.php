<?php
require_once('connect.php');
require_once('../ishiclinic/user_interaction/controllers/insert.php');

$error = "";

$isInsert = insertUser($conn);

if ($isInsert) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center px-4">

    <form method="POST" class="bg-white w-full max-w-sm sm:max-w-md md:max-w-lg
                 p-6 sm:p-8 rounded-lg shadow-lg">

        <h2 class="text-xl sm:text-2xl font-bold mb-6 text-center">
            Register
        </h2>

        <?php if ($error): ?>
            <p class="text-red-500 mb-4 text-center text-sm sm:text-base">
                <?= $error ?>
            </p>
        <?php endif; ?>

        <input type="text" name="name" required placeholder="Name" class="w-full mb-4 p-2 sm:p-3 border rounded
                      focus:outline-none focus:ring-2 focus:ring-blue-500">

        <input type="email" name="email" required placeholder="Email" class="w-full mb-4 p-2 sm:p-3 border rounded
                      focus:outline-none focus:ring-2 focus:ring-blue-500">

        <!-- ROLE (fixed as master) -->
        <input type="hidden" name="role" value="master">


        <input type="password" name="password" required placeholder="Password" class="w-full mb-4 p-2 sm:p-3 border rounded
                      focus:outline-none focus:ring-2 focus:ring-blue-500">

        <button name="register" class="w-full bg-blue-600 hover:bg-blue-700
                       text-white py-2 sm:py-3 rounded transition">
            Register
        </button>

        <p class="mt-4 text-sm sm:text-base text-center">
            Already have account?
            <a href="login.php" class="text-blue-600 hover:underline">
                Login
            </a>
        </p>

    </form>

</body>

</html>