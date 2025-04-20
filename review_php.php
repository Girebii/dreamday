<?php
include 'connect.php';  // Assuming this file contains your database connection setup

// Check if the form data is submitted via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Capture POST data and sanitize it to prevent XSS or other injection attacks
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $comment = isset($_POST['comment']) ? $_POST['comment'] : '';
    $rating = isset($_POST['rating']) ? $_POST['rating'] : '';

    // Sanitize the data
    $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
    $comment = htmlspecialchars($comment, ENT_QUOTES, 'UTF-8');
    $rating = intval($rating); // Convert rating to integer (ensures no non-numeric value is inserted)

    // Check if the required fields are filled
    if (empty($name) || empty($email) || empty($comment) || empty($rating)) {
        echo "All fields are required.";
        exit;
    }

    // Prepare and bind the SQL statement to insert data (no 'id' field in the insert)
    $stmt = $conn1->prepare("INSERT INTO review(name, email, rating, comment) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssis", $name, $email, $rating, $comment); // s = string, i = integer

    // Execute the statement and check if the data was inserted successfully
    if ($stmt->execute()) {
        echo "Review submitted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and the connection
    $stmt->close();
    $conn1->close();
} else {
    echo "Invalid request method.";
}
?>
