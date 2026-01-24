<?php

session_start();
require_once('connect.php');

if (isset($_POST['login'])) {

    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $sql = "SELECT  name, role, email, password FROM user WHERE email = :email";
    $stmt = $conn->prepare($sql);   // $conn = PDO object
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->execute();

    // ✅ PDO way to get data
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    // print_r($user);
    if ($user && password_verify($password, $user['password'])) {

        $_SESSION['email'] = $user['email'];
        $_SESSION['role'] = $user['role'];
        $_SESSION['name'] = $user['name']; // ✅ store name


        if ($user['role'] === 'admin') {
            // echo "Admin login successful";
            header("Location: /ishiclinic/admin/admin_dashboard.php");
        } else {
            header("Location: index.php");
        }
        exit;
    }
    $error = "Invalid email or password";
}


?>

<!DOCTYPE html>
<html>

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login page</title>
</head>

<body class="bg-gray-100 flex justify-center items-center min-h-screen">

    <form method="POST" class="bg-white p-8 rounded shadow w-96">
        <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>

        <?php if (!empty($error)): ?>
            <p class="text-red-500 mb-3"><?= $error ?></p>
        <?php endif; ?>

        <input type="email" name="email" placeholder="Email" required class="w-full mb-4 p-2 border rounded">

        <input type="password" name="password" placeholder="Password" required class="w-full mb-4 p-2 border rounded">

        <button name="login" class="w-full bg-green-600 text-white py-2 rounded">
            Login
        </button>
    </form>

</body>

</html>