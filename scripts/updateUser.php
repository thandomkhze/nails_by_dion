<?php
// Input validation
require "input_validation.php";
require "../data/config.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name_error = null;
    $email_error = null;
    $cell_error = null;
    $currentPwd_error = null;
    $newPwd_error = null;
    $confirmPwd_error = null;

    $name = trim($_POST['name']);
    $name_error = validateName($name);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $email_error = validateEmail($email);
    $cell = trim($_POST['cell']);
    $cell_error = validateCell($cell);
    $currentPwd = $_POST['currentPwd'];
    $currentPwd_error = validatePassword($currentPwd);
    $newPwd = $_POST['newPwd'];
    $newPwd_error = validatePassword($newPwd);
    $confirmPwd = $_POST['confirmPwd'];
    $confirmPwd_error = validatePassword($confirmPwd);


    if ($email_error == null && $name_error == null && $cell_error == null && $currentPwd == null && $newPwd == null && $confirmPwd == null) {
        echo "<script>console.log('Profile Info Form submitted successfully')</script>";
        updateProfile($name, $email, $cell, $conn);
    }

    if ($currentPwd_error == null && $newPwd_error == null && $confirmPwd_error == null && $email == null && $name == null && $cell == null) {
        echo "<script>console.log('Password Form submitted successfully')</script>";
        updatePassword($newPwd, $conn);
    }
}

    /*if ($_SESSION['user']['userType'] == "Admin") {

    }*/

function updateProfile($name, $email, $cell, $conn) {

    $stmt = $conn->prepare("UPDATE user SET name = ?, email = ?, cell = ? WHERE id = ?");

    $stmt->bind_param("sssi", $name, $email, $cell, $_SESSION['user']['id']);
    if ($stmt->execute()) {
        displaySuccessMessage("Profile updated successfully");    
    } else {
        displayErrorMessage("Error updating profile: " . $stmt->error);
    }
    $stmt->close(); 
}


function updatePassword($newPwd,$conn) {

    $stmt = $conn->prepare("UPDATE user SET password = ? WHERE id = ?");
    $stmt->bind_param("si", $newPwd, $_SESSION['user']['id']);
    if ($stmt->execute()) {
        displaySuccessMessage("Password updated successfully");    
    } else {
        displayErrorMessage("Error updating password: " . $stmt->error);
    }
    $stmt->close();
}



function displaySuccessMessage($message) {
    echo "
        <div class='popup active' id='popup-register'>
            <div class='overlay' ></div>
            <div class='content'>
                <h2>$message</h2>
                <a href='/../auth/login.php'>
                    <button> Login</button>
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
                <a href='/../auth/register.php'>
                    <button> Try Again</button>
                </a>
            </div>
        </div>
    ";
}