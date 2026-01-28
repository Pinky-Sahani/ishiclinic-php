<?php
require_once __DIR__ . '/../../config/smtp.php';  
function insertContactMessage($conn)
{
    // 1️⃣ Check form submit
    if (!isset($_POST['send_message'])) {
        return [
            'status' => false,
            'errors' => []
        ];
    }

    $errors = [];

    // 2️⃣ Get & sanitize data
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    // 3️⃣ Validation
    if (empty($name)) {
        $errors[] = "Name is required";
    }

    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }

    if (empty($message)) {
        $errors[] = "Message is required";
    } elseif (strlen($message) < 10) {
        $errors[] = "Message must be at least 10 characters";
    }

    // ❌ If validation failed
    if (!empty($errors)) {
        return [
            'status' => false,
            'errors' => $errors
        ];
    }

    // 4️⃣ Insert + Email
    try {
        $sql = "INSERT INTO contact (name, email, message)
                VALUES (:name, :email, :message)";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':message', $message);

        if ($stmt->execute()) {

            // 📧 Send Email
            $subject = "Thank you for contacting us";

             //  Load email template
            $templatePath = __DIR__ . '/../email_template/email_template.html';
            $body = file_get_contents($templatePath);

            //  Replace placeholders
            $body = str_replace('{{name}}', htmlspecialchars($name), $body);
            $body = str_replace('{{message}}', nl2br(htmlspecialchars($message)), $body);
            $body = str_replace('{{action_url}}', 'https://ishiclinic.com', $body);
            
            smtp_mailer($email, $subject, $body);

            return [
                'status' => true,
                'errors' => []
            ];
        }

        return [
            'status' => false,
            'errors' => ['Something went wrong. Please try again.']
        ];

    } catch (PDOException $e) {
        return [
            'status' => false,
            'errors' => ['Database error occurred']
        ];
    }
}
// register.php insert code 
function insertUser($conn)
{
    
    try {

        // Register button check
        if (!isset($_POST['register'])) {
            return false;
        }

        $name     = trim($_POST['name']);
        $email    = trim($_POST['email']);
        $role     = $_POST['role'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $sql = "INSERT INTO user (name, email, role, password)
                VALUES (:name, :email, :role, :password)";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':role', $role);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        return true;

    } catch (PDOException $e) {
        echo "User Insert Error: " . $e->getMessage();
        return false;
    }
}
