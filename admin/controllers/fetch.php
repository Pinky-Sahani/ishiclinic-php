<?php

// require_once('../../connect.php');

// fetch sliders 
function fetchSliders($conn)
{
    try {
        $sql = "SELECT * FROM sliders ORDER BY id DESC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        // Fetch all data as array
        $sliders = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $sliders; //  return array
    } catch (PDOException $e) {
        // In case of error, return empty array
        return [];
        
    }
}
//  Fetch therapies
function fetchTherapies($conn)
{
    try {
        $sql = "SELECT * FROM therapies ORDER BY id DESC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $therapies = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $therapies; // return array
    } catch (PDOException $e) {
        return [];
    }
}
