<?php
    require ('../scripts/verifyUser.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/../styles/client_styles.css">
    <link rel="stylesheet" href="/../styles/main_styles.css">
    <?php if ($email_error != null){?>
        <style>
            #login-email-error{
                visibility: visible;
            }
        </style>
    <?php } if ($password_error != null){?>
        <style>
            #login-password-error{
                visibility: visible;
            }
        </style>
    <?php } ?>  
        

</head>
<body>
    <div class="login-container">
        <a href="../client/index.php">
            <img class="logo" src="../_images/logo.png" alt="Nails By Dion">
        </a>
           
        <h>Login</h>

        <form action="" method="post" autocomplete="off">
            <span>
                <label for="email">Email:</label>
                <p class="error" id="login-email-error">
                    <?php echo $email_error; ?>
                </p>
            </span>
            <input class="login_input" type="email" id="email" name="email" required>

            <span>  
                <label for="password">Password:</label>
                <p class="error" id="login-password-error">
                    <?php echo $password_error; ?>
                </p>
            </span>
            <input class="login_input" type="password" id="password" name="password" required>
        
            <button type="submit">Login</button>
            <p>Don't have an account? <a href="register.php">Sign up</a></p>
        </form>
    </div>
</body>
</html>


