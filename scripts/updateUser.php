<?php
// Input validation
require_once "../data/config.php";
require "../scripts/input_validation.php";

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name_error = null;
    $email_error = null;
    $cell_error = null;

    $name = trim($_POST['name']);
    $name_error = validateName($name);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $email_error = validateEmail($email);
    $cell = trim($_POST['cell']);
    $cell_error = validateCell($cell);

    if (is_null($email_error) && is_null($name_error) && is_null($cell_error)) {
        updateProfile($name, $email, $cell, $conn);
    }
}

function updateProfile($name, $email, $cell, $conn) {
    $query = "UPDATE user SET name = ?, email = ?, cell = ? WHERE userID = ?";  
    $stmt = $conn->prepare($query);  

    if ($stmt === false) {  
        die("Prepare failed: " . $conn->error);  
    }  

    // Bind parameters  
    $stmt->bind_param("sssi", $name, $email, $cell, $_SESSION['user']['userID']);  

    // Execute the statement  
    if ($stmt->execute()) {  
        if ($stmt->affected_rows > 0) {  
            displaySuccessMessage("Profile updated successfully"); 
            $_SESSION['user']['name'] = $name;
            $_SESSION['user']['email'] = $email;
            $_SESSION['user']['cell'] = $cell;
        } else {  
            displayErrorMessage("Error updating profile: " . $stmt->error);
        }  
    } else {  
        displayErrorMessage("Error executing query: " . $stmt->error);  
    }  

    // Close the statement and connection  
    $stmt->close();  
}

function displaySuccessMessage($message) {
    echo "
        <div class='popup active' id='popup-register'>
            <div class='overlay' ></div>
            <div class='content'>
                <h2>$message</h2>
                <a href='../client/profile.php'>
                    <button>OK</button>
                </a>
            </div>
        </div>
    ";
}

function displayErrorMessage($message) {
    echo "
        <div class='popup active' id='popup-register'>
            <div class='overlay' ></div>
            <div class='content'>
                <h2>Error</h2>
                <p>$message</p>
                <a href='../client/profile.php'>
                    <button> Try Again</button>
                </a>
            </div>
        </div>
    ";
}

