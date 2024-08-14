<?php
// Input validation
require_once "../data/config.php";
require "input_validation.php";


error_reporting(E_ALL);  
ini_set('display_errors', 1);

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    var_dump($_POST);  // debugging purposes
    $name_error = null;
    $email_error = null;
    $cell_error = null;
    $currentPwd_error = null;
    $newPwd_error = null;
    $confirmPwd_error = null;

    if (isset($_POST['email'])){
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

    if (isset($_POST['currentPwd'])){
        $currentPwd = $_POST['currentPwd'];
        $currentPwd_error = validatePassword($currentPwd);
        $newPwd = $_POST['newPwd'];
        $newPwd_error = validatePassword($newPwd);
        $confirmPwd = $_POST['confirmPwd'];
        $confirmPwd_error = validatePassword($confirmPwd);

        if (is_null($currentPwd_error) && is_null($newPwd_error) && is_null($confirmPwd_error)) {
            if (password_verify($currentPwd, $_SESSION['user']['password'])) {
                if ($newPwd == $confirmPwd) {
                    updatePassword($newPwd, $conn);
                    displaySuccessMessage("Password updated successfully");
                }else{
                    displayErrorMessage("The new password and confirm password do not match");
                }
            }else{
                displayErrorMessage("The current password is incorrect");
            }
        }
    }

    $conn -> close();
}

function updateProfile($name, $email, $cell, $conn) {
    $query = "UPDATE user SET name = ?, email = ?, cell = ? WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssi", $name, $email, $cell, $_SESSION['user']['id']);
    if ($stmt->execute()) {
        $_SESSION['user']['name'] = $name;
        $_SESSION['user']['email'] = $email;
        $_SESSION['user']['cell'] = $cell;
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
        $_SESSION['user']['password'] = $newPwd;
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
