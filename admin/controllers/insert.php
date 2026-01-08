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
        $icon = $_POST['icon'];
        $description = $_POST['description'];
        $status = $_POST['status'];

        $sql = "INSERT INTO chooseus (title, icon, description, status)
                VALUES (:title, :icon, :description, :status)";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':icon', $icon);
        $stmt->bindParam(':description', $description);
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
        $designation = $_POST['designation'];
        $description = $_POST['description'];
        $status = $_POST['status'];

        /* IMAGE UPLOAD */
        $imageName = '';
        if (!empty($_FILES['image']['name'])) {
            $imageName = time() . '_' . $_FILES['image']['name'];
            $tmpName = $_FILES['image']['tmp_name'];

            move_uploaded_file($tmpName, "../uploads/team/" . $imageName);
        }

        /* SQL INSERT */
        $sql = "INSERT INTO team (name, designation, description, image, status)
                VALUES (:name, :designation, :description, :image, :status)";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':designation', $designation);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':image', $imageName);
        $stmt->bindParam(':status', $status);

        $stmt->execute();

        return true;

    } catch (PDOException $e) {
        echo "Team Insert Error: " . $e->getMessage();
        return false;
    }
}




