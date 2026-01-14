<?php

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



function insertContact($conn)
{
    try {

        // Check submit button
        if (!isset($_POST['savecontact'])) {
            return false;
        }
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $sql = "INSERT INTO contact (name, email, message)
                VALUES (:name, :email, :message, )";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':message', $message);
        $stmt->execute();
        return true;

    } catch (PDOException $e) {
        echo "Contact Insert Error: " . $e->getMessage();
        return false;
    }
}



function insertContactMessage($conn)
{
    if (!isset($_POST['send_message'])) {
        return false;
    }

    try {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $message = trim($_POST['message']);

        $sql = "INSERT INTO contact (name, email, message)
                VALUES (:name, :email, :message)";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':message', $message);

        if ($stmt->execute()) {
            return true;   
        }

        return false;      

    } catch (PDOException $e) {
        return false;
    }
}
