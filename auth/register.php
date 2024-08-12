<?php
    require '../scripts/addUser.php';

    // Initialize error variables
    $name_error = $email_error = $cell_error = $password_error = null;
    $name = $email = $cell = "";

    // Example of checking and handling form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Your form processing code here
        // For example:
        if (empty($_POST["name"])) {
            $name_error = "Name is required";
        } else {
            $name = $_POST["name"];
        }
        if (empty($_POST["email"])) {
            $name_error = "Email is required";
        } else {
            $name = $_POST["email"];
        }
        
        if (empty($_POST["password"])) {
            $name_error = "password is required";
        } else {
            $name = $_POST["password"];
        }

        // Repeat for other fields (email, cell, password)
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="/../styles/client_styles.css">
    <link rel="stylesheet" href="/../styles/main_styles.css">

    <?php if ($name_error != null){?>
        <style>
            #reg-name-error{
                visibility: visible;
            }
        </style>
     <?php } if ($email_error != null){?>
        <style>
            #reg-email-error{
                visibility: visible;
            }
        </style>
    <?php } if ($cell_error != null){?>
        <style>
            #reg-cell-error{
                visibility: visible;
            }
        </style>
    <?php } if ($password_error != null){?>
        <style>
            #reg-password-error{
                visibility: visible;
            }
        </style>
    <?php } ?>  
</head>
<body>

<div class="login_register">
        <div class="login-container">
            <a href="../client/index.php">
                <img class="logo" src="../_images/logo.png" alt="Nails By Dion">
            </a>
            
            <h2>Sign Up</h2>

            <form action="" method="post" autocomplete="off" >
                <span>  
                    <label for="name">Name:</label>
                    <p class="error" id="reg-name-error">
                        <?php echo $name_error; ?>
                    </p>
                </span>
                <input type="text" id="name" name="name" value="<?php echo $name; ?>" required>
                
                <span>  
                    <label for="email">Email:</label>
                    <p class="error" id="reg-email-error">
                        <?php echo $email_error; ?>
                    </p>
                </span>
                <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>

                <span>
                    <label for="cell">Cell Number (optional):</label>
                    <p class="error" id="reg-cell-error">
                        <?php echo $cell_error; ?>
                    </p>
                </span>
                <input type="text" id="cell" name="cell" value="<?php echo $cell; ?>">

                <span>
                    <label for="password">Password:</label>
                    <p class="error" id="reg-password-error">
                        <?php echo $password_error; ?>
                    </p>
                </span>
                <input type="password" id="password" name="password" required>

                <button type="submit" name="submit">Create Account</button>
                <p>Already have an account? <a href="login.php">Login</a></p>
            </form>
        </div>
    </div>
</body>
</html>

