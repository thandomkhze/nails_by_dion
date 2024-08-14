<?php
// Input validation
require_once "../data/config.php";
require "../scripts/input_validation.php";

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $currentPwd_error = null;
    $newPwd_error = null;
    $confirmPwd_error = null;

    $currentPwd = $_POST['current_password'];
    $currentPwd_error = validatePassword($currentPwd);
    $newPwd = $_POST['new_password'];
    $newPwd_error = validatePassword($newPwd);
    $confirmPwd = $_POST['confirm_password'];
    $confirmPwd_error = validatePassword($confirmPwd);

    if (is_null($currentPwd_error) && is_null($newPwd_error) && is_null($confirmPwd_error)) {
        if (password_verify($currentPwd, $_SESSION['user']['password'])) {
            if ($newPwd == $confirmPwd) {
                $newPwd = password_hash($newPwd, PASSWORD_DEFAULT);
                updatePassword($newPwd, $conn);
                displaySuccessMessage("Password updated successfully");
            }else{
                $confirmPwd_error = "Passwords do not match";
                echo "<script> console.log('Passwords do not match'); </script>";
            }
        }else{
            $currentPwd_error = "Invalid password";
            echo "<script> console.log('Invalid password'); </script>";
        }
    }
    $conn -> close();
    
}

function updatePassword($newPwd,$conn) {
    $query = "UPDATE user SET password = ? WHERE userID = ?";
    $stmt = $conn->prepare($query);

    if ($stmt === false) {  
        die("Prepare failed: " . $conn->error);  
    }  


    $stmt->bind_param("si", $newPwd, $_SESSION['user']['userID']);

    if ($stmt->execute()) {
        if ($stmt->affected_rows > 0) {
            $_SESSION['user']['password'] = $newPwd;
            displaySuccessMessage("Password updated successfully");    
        } else {
            displayErrorMessage("Error updating password: No rows affected");
        }
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

