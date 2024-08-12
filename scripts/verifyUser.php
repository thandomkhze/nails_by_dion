<?php
require 'input_validation.php';
$email_error = null;
$password_error = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['email']) && isset($_POST['password'])) { ////////////
        // Sanitize user input
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $password = $_POST['password']; 

        // Validate user input
        $email_error = validateEmail($email);
        $password_error = validatePassword($password);

        // Call the loginUser function
        $user = loginUser($email, $password);

        // Check login status
        if ($user !== null) {
            session_start();
            $_SESSION["user"] = $user;
            if ($user['userType'] == "Client")
                header('Location: ../client/index.php');
            else if ($user['userType'] == "Admin")
                header('Location: ../admin/dashboard.php');
                
            exit();
        } else {
            $email_error = "Invalid email or password";
        }
    } else {
        // Display error message if email or password is missing
        if (empty(trim($_POST['email']))) {
            $email_error = "*";
        } 

        if (empty(trim($_POST['password']))) {
            $password_error = "*";
        }
    }
}

function loginUser($email, $pwd) {
    require ('../data/config.php');

    // Prepare the SQL query
    $query = "SELECT * FROM user WHERE email = ?";

    // Prepare the statement
    $stmt = $conn->prepare($query);

    // Bind the email parameter
    $stmt->bind_param("s", $email);

    // Execute the query
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();
    echo "<script>console.log('function called')</script>";

    // Close the statement and connection
    $stmt->close();
    $conn->close();

    // Check if the user exists
    if ($result->num_rows > 0) {
        // Fetch the user data
        $user = $result->fetch_assoc();
        echo "<script>console.log('email matched')</script>";
        // Check if the password is correct
        if (password_verify($pwd, $user['password'])) {
            echo "<script>console.log('password matched')</script>";
            return $user; // Return the user if found
        } else {
            echo "<script>console.log('password not matched')</script>";
            return null; // Return null if password is incorrect
        }
    } else {
        return null; // Return null if user does not exist
    }
}