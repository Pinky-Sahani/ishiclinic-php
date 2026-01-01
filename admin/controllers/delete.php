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
        header("Location: index.php");
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
        header("Location: index.php");
        exit;
    }

    return false;
}


?>