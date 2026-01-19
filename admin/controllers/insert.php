<?php
require_once __DIR__ . '/../../config/smtp.php';

function insertSlider($conn)
{
    try {

        if (!isset($_POST['saveslider'])) {
            return false;
        }

        $title = $_POST['title'];
        $subtitle = $_POST['subtitle'];
        $description = $_POST['description'];
        $status = $_POST['status'];

        // Image upload
        $imageName = $_FILES['image']['name'];
        $tmpName = $_FILES['image']['tmp_name'];

        move_uploaded_file($tmpName, "../uploads/sliders/" . $imageName);

        $sql = "INSERT INTO sliders (title, subtitle, description_text, image, status)
            VALUES (:title, :subtitle, :description, :image, :status)";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':subtitle', $subtitle);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':image', $imageName);
        $stmt->bindParam(':status', $status);
        $stmt->execute();

        return true;

    } catch (PDOException $e) {
        echo "Slider Insert Error: " . $e->getMessage();
        return false;
    }
}


function insertTherapy($conn)
{
    try {

        if (!isset($_POST['savetherapy'])) {
            return false;
        }

        $title = $_POST['title'];
        $description = $_POST['description'];
        $status = $_POST['status'];

        // Image upload
        $imageName = $_FILES['image']['name'];
        $tmpName = $_FILES['image']['tmp_name'];


        move_uploaded_file($tmpName, "../uploads/therapies/" . $imageName);

        // Insert query
        $sql = "INSERT INTO therapies (title, description, image, status)
                VALUES (:title, :description, :image, :status)";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':image', $imageName);
        $stmt->bindParam(':status', $status);

        $stmt->execute();

        return true;

    } catch (PDOException $e) {
        echo "Therapy Insert Error: " . $e->getMessage();
        return false;
    }
}


function insertWhyChooseUs($conn)
{
    try {

        // Check submit button
        if (!isset($_POST['submit'])) {
            return false;
        }

        $title = $_POST['title'];
        $description = $_POST['description'];
        $status = $_POST['status'];


        // Image upload
        $imageName = $_FILES['icon']['name'];
        $tmpName = $_FILES['icon']['tmp_name'];




        move_uploaded_file($tmpName, "../uploads/icon/" . $imageName);

        $sql = "INSERT INTO chooseus (title, description, icon, status)
                VALUES (:title, :description, :icon, :status)";



        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':icon', $imageName);
        $stmt->bindParam(':status', $status, PDO::PARAM_INT);

        $stmt->execute();

        return true;

    } catch (PDOException $e) {
        echo "Why Choose Us Insert Error: " . $e->getMessage();
        return false;
    }
}


function insertTeam($conn)
{
    try {

        // Check submit button
        if (!isset($_POST['saveteam'])) {
            return false;
        }

        $name = $_POST['name'];
        $status = $_POST['status'];

        /* IMAGE UPLOAD */
        $imageName = '';
        if (!empty($_FILES['image']['name'])) {
            $imageName = time() . '_' . $_FILES['image']['name'];
            $tmpName = $_FILES['image']['tmp_name'];

            move_uploaded_file($tmpName, "../uploads/team/" . $imageName);
        }

        /* SQL INSERT */
        $sql = "INSERT INTO team (name,   image, status)
                VALUES (:name,   :image, :status)";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':image', $imageName);
        $stmt->bindParam(':status', $status);

        $stmt->execute();

        return true;

    } catch (PDOException $e) {
        echo "Team Insert Error: " . $e->getMessage();
        return false;
    }
}



function insertFeature($conn)
{
    try {

        // Check submit button
        if (!isset($_POST['savefeature'])) {
            return false;
        }

        $title = $_POST['title'];
        $description = $_POST['description'];
        $status = $_POST['status'];

        /* IMAGE UPLOAD */
        $imageName = '';
        if (!empty($_FILES['image']['name'])) {

            $imageName = time() . '_' . $_FILES['image']['name'];
            $tmpName = $_FILES['image']['tmp_name'];

            move_uploaded_file($tmpName, "../uploads/features/" . $imageName);
        }

        /* SQL INSERT */
        $sql = "INSERT INTO features (title, description, image, status)
                VALUES (:title, :description, :image, :status)";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':image', $imageName);
        $stmt->bindParam(':status', $status);

        $stmt->execute();

        return true;

    } catch (PDOException $e) {
        echo "Feature Insert Error: " . $e->getMessage();
        return false;
    }
}



function insertContactMessageOLD($conn)
{


    if (!isset($_POST['send_message'])) {
        return false;
    }

    try {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $sql = "INSERT INTO contact (name, email, message)
                VALUES (:name, :email, :message)";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':message', $message);

        if ($stmt->execute()) {

            // SEND EMAIL
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

            return true;
        }

        return false;


    } catch (PDOException $e) {
        return false;
    }
}


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

