<?php
session_start();
require_once('connect.php');
require_once('../ishiclinic/user_interaction/controllers/fetch.php');

$error = "";
// $masters = fetchMasters($conn);
// print_r($masters);

if (isset($_POST['login'])) {

    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $sql = "SELECT name, email, password, role
            FROM user
            WHERE email = :email AND role = 'master'";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {

        $_SESSION['name'] = $user['name'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['role'] = $user['role'];

        header("Location: /ishiclinic/admin/dashboard/admin_dashboard.php");
        exit;
    }

    $error = "Invalid email or password";
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
            Master Login
        </h2>

        <?php if ($error): ?>
            <p class="text-red-500 mb-4 text-center text-sm sm:text-base">
                <?= $error ?>
            </p>
        <?php endif; ?>

        <input type="email" name="email" required placeholder="Email"
            class="w-full mb-4 p-2 sm:p-3 border rounded focus:outline-none focus:ring-2 focus:ring-green-500">

        <input type="password" name="password" required placeholder="Password"
            class="w-full mb-4 p-2 sm:p-3 border rounded focus:outline-none focus:ring-2 focus:ring-green-500">

        <button name="login" class="w-full bg-green-600 hover:bg-green-700
                       text-white py-2 sm:py-3 rounded transition">
            Login
        </button>

        <p class="mt-4 text-sm sm:text-base text-center">
            Don't have account?
            <a href="register.php" class="text-blue-600 hover:underline">
                Register
            </a>
        </p>

    </form>

</body>

</html>