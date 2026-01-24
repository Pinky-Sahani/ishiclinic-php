<?php
require_once('connect.php');

if (isset($_POST['register'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $role = $_POST['role'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO user (name, email, role, password) VALUES (:name, :email, :role, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email); 
    $stmt->bindParam(':role', $role);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
        header("Location: login.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Register page</title>
</head>

<body class="bg-gray-100 flex justify-center items-center min-h-screen">

    <form method="POST" class="bg-white p-8 rounded shadow w-96">
        <h2 class="text-2xl font-bold mb-6 text-center">Register</h2>

        <input type="text" name="name" placeholder="Name" required class="w-full mb-4 p-2 border rounded">

        <input type="email" name="email" placeholder="Email" required class="w-full mb-4 p-2 border rounded">

        <select name="role" class="w-full mb-4 p-2 border rounded">
            <option value="user">User</option>
            <option value="admin">master</option>
        </select>

        <input type="password" name="password" placeholder="Password" required class="w-full mb-4 p-2 border rounded">

        <button name="register" class="w-full bg-blue-600 text-white py-2 rounded">
            Register
        </button>

        <p class="mt-4 text-sm text-center">
            Already have account? <a href="login.php" class="text-blue-600">Login</a>
        </p>
    </form>

</body>

</html>