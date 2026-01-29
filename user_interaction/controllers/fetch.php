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

?>