<?php
session_start();
include 'connect.php';

// Sign-up functionality
if (isset($_POST['signUp'])) {
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash the password securely
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Check if email already exists
    $stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Email Address Already Exists!";
    } else {
        // Insert the new user into the database
        $insertQuery = $conn->prepare("INSERT INTO users (firstName, lastName, email, password) VALUES (?, ?, ?, ?)");
        $insertQuery->bind_param("ssss", $firstName, $lastName, $email, $hashedPassword);

        if ($insertQuery->execute()) {
            header("Location: index.php");
            exit();  // Always use exit after header redirection
        } else {
            echo "Error: " . $conn->error;
        }
    }
    // Close the prepared statements
    $stmt->close();
    $insertQuery->close();
}

// Sign-in functionality

if (isset($_POST['signIn'])) {
    // Sanitize user input
    $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
    $password = htmlspecialchars($_POST['password']);

    if (empty($email) || empty($password)) {
        echo "Please enter both email and password.";
    } else {
        $stmt = $conn->prepare("SELECT password FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($storedHashedPassword);
            $stmt->fetch();

            if (password_verify($password, $storedHashedPassword)) {
                // Password is correct, login successful
                $_SESSION['email'] = $email;  // Store the email in the session
                header("Location: homepage.php");  // Redirect to homepage
                exit();
            } else {
                echo "Invalid email or password.";
            }
        } else {
            echo "No user found with this email.";
        }

        $stmt->close();
    }
}
// if (isset($_POST["signIn"])) {
//     $email = $_POST["email"];
//     $password = $_POST["password"];
//      $sql = "SELECT * FROM users WHERE email = '$email'";
//      $result = mysqli_query($conn, $sql);
//      $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
//      $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

//      if ($user) {
//          if (password_verify($password, $user['password'])) {
//              session_start();
//              $_SESSION["user"] = "yes";
//              header("Location: homepage.php");
//              die();
//          }else{
//              echo "<div class='alert alert-danger'>Password does not match</div>";
//          }
//      }else{
//          echo "<div class='alert alert-danger'>Email does not match</div>";
//      }
//  }
?>
