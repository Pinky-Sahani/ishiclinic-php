<?php
session_start();
require_once('connect.php');

$error = "";

if (isset($_POST['login'])) {

    $email    = trim($_POST['email']);
    $password = $_POST['password'];

    $sql = "SELECT name, email, password, role
            FROM user
            WHERE email = :email AND role = 'master'";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {

        $_SESSION['name']  = $user['name'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['role']  = $user['role'];

        header("Location: /ishiclinic/admin/dashboard/admin_dashboard.php");
        exit;
    }

    $error = "Only MASTER can login";
}
?>

<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

<form method="POST" class="bg-white p-8 rounded shadow w-96">
    <h2 class="text-2xl font-bold mb-6 text-center">Master Login</h2>

    <?php if ($error): ?>
        <p class="text-red-500 mb-4 text-center"><?= $error ?></p>
    <?php endif; ?>

    <input type="email" name="email" required
           placeholder="Email"
           class="w-full mb-4 p-2 border rounded">

    <input type="password" name="password" required
           placeholder="Password"
           class="w-full mb-4 p-2 border rounded">

    <button name="login"
            class="w-full bg-green-600 text-white py-2 rounded">
        Login
    </button>
</form>

</body>
</html>
