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
            header("Location: manage_slider.php");
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
    // print_r($therapy);

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
            header("Location: manage_therapy.php");
            exit;
        }
    }

    // Return therapy data for form
    return $therapy;
}

function updateChooseUs($conn, $id)
{
    try {

        /* FETCH RECORD */
        $sql = "SELECT * FROM chooseus WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $choose = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$choose) {
            return false;
        }

        /* UPDATE LOGIC */
        if (isset($_POST['updatechoose'])) {

            $title = $_POST['title'];
            $icon = $_POST['icon'];
            $description = $_POST['description'];
            $status = $_POST['status'];

            $updateSql = "UPDATE chooseus SET
                            title = :title,
                            icon = :icon,
                            description = :description,
                            status = :status
                          WHERE id = :id";

            $updateStmt = $conn->prepare($updateSql);
            $updateStmt->bindParam(':title', $title);
            $updateStmt->bindParam(':icon', $icon);
            $updateStmt->bindParam(':description', $description);
            $updateStmt->bindParam(':status', $status);
            $updateStmt->bindParam(':id', $id, );

            if ($updateStmt->execute()) {
                header("Location: manage_chooseUs.php");
                exit;
            }
        }

        /* RETURN DATA FOR FORM */
        return $choose;

    } catch (PDOException $e) {
        echo "ChooseUs Update Error: " . $e->getMessage();
        return false;
    }
}


function updateTeam($conn, $id)
{
    try {

        /* FETCH RECORD */
        $sql = "SELECT * FROM team WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $team = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$team) {
            return false;
        }

        /* UPDATE LOGIC */
        if (isset($_POST['updateteam'])) {

            $name = $_POST['name'];
            $status = $_POST['status'];

            // Image handling
            $imageName = $team['image'];

            if (!empty($_FILES['image']['name'])) {

                $imageName = time() . '_' . $_FILES['image']['name'];
                $imageTmp = $_FILES['image']['tmp_name'];

                move_uploaded_file(
                    $imageTmp,
                    "../uploads/team/" . $imageName
                );
            }

            $updateSql = "UPDATE team SET
                            name = :name,
                            image = :image,
                            status = :status
                          WHERE id = :id";

            $updateStmt = $conn->prepare($updateSql);
            $updateStmt->bindParam(':name', $name);
            $updateStmt->bindParam(':image', $imageName);
            $updateStmt->bindParam(':status', $status);
            $updateStmt->bindParam(':id', $id);

            if ($updateStmt->execute()) {
                header("Location: manage_ourteam.php");
                exit;
            }
        }

        /* RETURN DATA FOR FORM */
        return $team;

    } catch (PDOException $e) {
        echo "Team Update Error: " . $e->getMessage();
        return false;
    }
}




