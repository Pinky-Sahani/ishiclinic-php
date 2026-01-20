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

            $body = "
                <h3>Hello $name 👋</h3>
                <p>We have received your message.</p>
                <p><b>Your Message:</b></p>
                <p>$message</p>
                <br>
                <p>Regards,<br>Ishi Clinic Team</p>
            ";

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