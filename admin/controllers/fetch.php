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


function fetchWhyChooseUs($conn)
{
    try {
        $sql = "SELECT * FROM chooseus ORDER BY id DESC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        // Fetch all records
        $chooseUs = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $chooseUs; // return array
    } catch (PDOException $e) {
        // On error return empty array
        return [];
    }
}

function fetchTeam($conn)
{
    try {
        $sql = "SELECT * FROM team ORDER BY id DESC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        // Fetch all team members
        $team = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // print_r($team);

        return $team;
    } catch (PDOException $e) {
        return [];
    }
}


function fetchFeatures($conn)
{
    try {
        $sql = "SELECT * FROM features ORDER BY id DESC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        // Fetch all features
        $features = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $features;

    } catch (PDOException $e) {
        return [];
    }
}

function fetchContacts($conn)
{
    try {
        $sql = "SELECT * FROM contact ORDER BY id DESC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        return [];
    }
}







