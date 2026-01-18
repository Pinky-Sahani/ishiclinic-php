<?php

function deleteSlider($conn, $id)
{
    if (!$id) {
        return false;
    }

    $sql = "DELETE FROM sliders WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        header("Location: manage_slider.php");
        exit;
    }

    return false;
}



function deleteTherapy($conn, $id)
{
    if (!$id) {
        return false;
    }

    $sql = "DELETE FROM therapies WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        header("Location: manage_therapy.php");
        exit;
    }

    return false;
}


function deleteChooseUs($conn, $id)
{
    if (!$id) {
        return false;
    }

    $sql = "DELETE FROM chooseus WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    if ($stmt->execute()) {
        header("Location: manage_chooseUs.php");
        exit;
    }

    return false;
}



function deleteTeam($conn, $id)
{
    if (!$id) {
        return false;
    }

    $sql = "DELETE FROM team WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    if ($stmt->execute()) {
        header("Location: manage_ourteam.php");
        exit;
    }

    return false;
}




function deleteFeature($conn, $id)
{
    if (!$id) {
        return false;
    }

    $sql = "DELETE FROM features WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    if ($stmt->execute()) {
        header("Location: manage_ourfeatures.php");
        exit;
    }

    return false;
}

function deleteContactMessage($conn, $id)
{
    try {
        $sql = "DELETE FROM contact WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            header("Location: manage_contactUs.php");
            exit;
        }
    } catch (PDOException $e) {
        die("Unable to delete contact message");
    }
}








?>