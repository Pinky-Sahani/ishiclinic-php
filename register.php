<?php
require_once('connect.php');

$error = "";

if (isset($_POST['register'])) {

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $role = $_POST['role'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO user (name, email, role, password)
            VALUES (:name, :email, :role, :password)";

    $stmt = $conn->prepare($sql);

    if (
        $stmt->execute([
            ':name' => $name,
            ':email' => $email,
            ':role' => $role,
            ':password' => $password
        ])
    ) {
        header("Location: login.php");
        exit;
    }

    $error = "Registration failed";
}
?>

<!DOCTYPE html>
<html>

<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex justify-center items-center min-h-screen">

    <form method="POST" class="bg-white p-8 rounded shadow w-96">
        <h2 class="text-2xl font-bold mb-6 text-center">Register</h2>

        <?php if ($error): ?>
            <p class="text-red-500 mb-3 text-center"><?= $error ?></p>
        <?php endif; ?>

        <input type="text" name="name" required placeholder="Name" class="w-full mb-4 p-2 border rounded">

        <input type="email" name="email" required placeholder="Email" class="w-full mb-4 p-2 border rounded">

        <!-- ✅ FIXED -->
        <select name="role" class="w-full mb-4 p-2 border rounded">
            <option value="master">Master</option>
        </select>

        <input type="password" name="password" required placeholder="Password" class="w-full mb-4 p-2 border rounded">

        <button name="register" class="w-full bg-blue-600 text-white py-2 rounded">
            Register
        </button>

        <p class="mt-4 text-sm text-center">
            Already have account?
            <a href="login.php" class="text-blue-600">Login</a>
        </p>
    </form>

</body>

</html>