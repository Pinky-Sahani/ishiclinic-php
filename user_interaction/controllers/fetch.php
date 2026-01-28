<?php
// admin_dashboard fetch code 
function fetchMasters($conn)
{
    try {
        // Sirf master users lao
        $sql = "SELECT name, email, role FROM user WHERE role = 'master'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        // Fetch all master users
        $masters = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $masters;

    } catch (PDOException $e) {
        return [];
    }
}
//  login fetch code 
function fetchMasterLogin($conn, $email, $password)
{
    try {
        $sql = "SELECT name, email, password, role
                FROM user
                WHERE email = :email AND role = 'master'";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Password verify
        if ($user && password_verify($password, $user['password'])) {
            return $user;   // ✅ login success
        }

        return false;       // ❌ invalid login

    } catch (PDOException $e) {
        return false;
    }
}


?>