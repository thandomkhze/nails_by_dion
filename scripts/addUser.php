<?php
// Include database connection file
require_once('../data/config.php');
require 'input_validation.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name_error = null;
    $email_error = null;
    $cell_error = null;
    $password_error = null;

    $name = trim($_POST['name']);
    $name_error = validateName($name);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $email_error = validateEmail($email);
    $cell = trim($_POST['cell']);
    $cell_error = validateCell($cell);
    $password = $_POST['password'];
    $password_error = validatePassword($password);

    if ($email_error == null && $name_error == null && $cell_error == null && $password_error == null) {
        echo "<script>console.log('Form submitted successfully')</script>";
        registerUser($name, $email, $cell, $password, $conn);
    }
}

// Register new user
function registerUser($name, $email, $cell, $password, $conn) {
    if (checkExistingUser($email, $conn)) {
        displayAccountExistMessage();  
        return;
    }

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO user (name, email, cell, password) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssss", $name, $email, $cell, $passwordHash);
    if ($stmt->execute()) {
        displaySuccessMessage();  
    } else {
        displayErrorMessage("Error registering user: " . $conn->error);
    }
    // Close statement and connection
    $stmt->close();
    $conn->close();
}

// Check if user is already registered
function checkExistingUser($email, $conn) {
    $query = "SELECT * FROM user WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->num_rows > 0;
}

// display messages
function displaySuccessMessage() {
    echo "
        <div class='popup active' id='popup-register'>
            <div class='overlay' ></div>
            <div class='content'>
                <h2>Registration Successful</h2>
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

function displayAccountExistMessage() {
    echo "
        <div class='popup active' id='popup-register'>
            <div class='overlay' ></div>
            <div class='content'>
                <h2>Account Already Exists</h2>
                <a href='/../auth/login.php'>
                    <button> Login</button>
                </a>
            </div>
        </div>
    ";
}
