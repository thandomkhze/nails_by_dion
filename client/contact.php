<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <link rel="stylesheet" href="/../styles/client_styles.css">
    <link rel="stylesheet" href="/../styles/main_styles.css">
</head>
<body>
    <?php $page = 'contact'; include '../partial/header.php';?>
    <div class="contact_container">
        <div>
            <h1>Get in Touch</h1>
            <form class action="">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="email">Message:</label>
                    <input type="text" id="message" name="message" required>
                </div>

                <div class="form-group buttons">
                    <button type="submit">Submit</button>
                    <button type="reset">Reset</button>
                </div>  
            </form>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14339.86752880609!2d28.008808!3d-26.0346396!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e957776603887f9%3A0x6dbf6dc5babb84d6!2sNailsbydion!5e0!3m2!1sen!2sza!4v1715089163620!5m2!1sen!2sza" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" style="filter: grayscale(100%) invert(100%);"></iframe>
    </div>
    <?php include '../partial/footer.php';?>
</body>
</html>