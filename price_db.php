<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Include the database connection
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form inputs
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $date = isset($_POST['event_date']) ? $_POST['event_date'] : '';
    $time = isset($_POST['event_time']) ? $_POST['event_time'] : '';
    $place = isset($_POST['place']) ? $_POST['place'] : '';
    $package = isset($_POST['package']) ? $_POST['package'] : '';
    $eventType = isset($_POST['event_type']) ? $_POST['event_type'] : '';

    // Debugging: Print POST data
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

   

    // Prepare SQL query
    $stmt = $conn2->prepare("INSERT INTO prices(name, place, event_date, event_time, package, event_type) VALUES (?, ?, ?, ?, ?, ?)");
    if ($stmt === false) {
        echo "Error preparing statement: " . $conn2->error;
        exit;
    }

    // Bind parameters
    $stmt->bind_param("ssssss", $name, $place, $date, $time, $package, $eventType);

    // Execute query
    if ($stmt->execute()) {
        echo "Data inserted successfully!";
        header('Location: homepage.php');
        exit;
    } else {
        echo "Error executing query: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn2->close();
}
?>
