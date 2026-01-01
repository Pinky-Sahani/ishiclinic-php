<?php

function updateSlider($conn, $id)
{
    // Fetch slider
    $sql = "SELECT * FROM sliders WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $slider = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$slider) {
        return false;
    }

    // Update logic
    if (isset($_POST['updateslider'])) {

        $title = $_POST['title'];
        $subtitle = $_POST['subtitle'];
        $description = $_POST['description'];
        $status = $_POST['status'];

        // Image handling
        if (!empty($_FILES['image']['name'])) {
            $imageName = time() . '_' . $_FILES['image']['name'];
            $tmpName = $_FILES['image']['tmp_name'];
            move_uploaded_file($tmpName, "../uploads/sliders/" . $imageName);
        } else {
            $imageName = $slider['image']; // keep old image
        }

        $updateSql = "UPDATE sliders SET
                        title = :title,
                        subtitle = :subtitle,
                        description_text = :description,
                        image = :image,
                        status = :status
                      WHERE id = :id";

        $updateStmt = $conn->prepare($updateSql);
        $updateStmt->bindParam(':title', $title);
        $updateStmt->bindParam(':subtitle', $subtitle);
        $updateStmt->bindParam(':description', $description);
        $updateStmt->bindParam(':image', $imageName);
        $updateStmt->bindParam(':status', $status);
        $updateStmt->bindParam(':id', $id);

        // Redirect if success
        if ($updateStmt->execute()) {
            header("Location: index.php");
            exit;
        }
    }

    // Return slider data for form
    return $slider;
}

function updateTherapy($conn, $id)
{
    // Fetch therapy
    $sql = "SELECT * FROM therapies WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $therapy = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$therapy) {
        return false;
    }

    // Update logic
    if (isset($_POST['updatetherapy'])) {

        $title = $_POST['title'];
        $description = $_POST['description'];
        $status = $_POST['status'];

        // Image upload
        if (!empty($_FILES['image']['name'])) {
            $imageName = time() . '_' . $_FILES['image']['name'];
            $tmpName = $_FILES['image']['tmp_name'];
            move_uploaded_file($tmpName, "../uploads/therapies/" . $imageName);
        } else {
            $imageName = $therapy['image']; // keep old image
        }

        $updateSql = "UPDATE therapies SET
                        title = :title,
                        description = :description,
                        image = :image,
                        status = :status
                      WHERE id = :id";

        $updateStmt = $conn->prepare($updateSql);
        $updateStmt->bindParam(':title', $title);
        $updateStmt->bindParam(':description', $description);
        $updateStmt->bindParam(':image', $imageName);
        $updateStmt->bindParam(':status', $status);
        $updateStmt->bindParam(':id', $id);

        // Redirect if success
        if ($updateStmt->execute()) {
            header("Location: index.php");
            exit;
        }
    }

    // Return therapy data for form
    return $therapy;
}



