<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gmail Signup</title>
    <link rel="stylesheet" href="./src/css/gmailsignup.css">
    <script src="./src/script/gmailsignup.js"></script>
</head>
<body>
    <div class="gmailsignup_container">
        <div class="signup_container">
            <div class="singup_image_container">
                <img src="/uploads/signup.webp" alt="">
            </div>
            <div class="signup_form_container">
                <h2 class="header">Signup</h2>
                <?php
                if (!empty($errors)) {
                    echo '<div class="error-messages">';
                    foreach ($errors as $error) {
                        echo '<p>' . $error . '</p>';
                    }
                    echo '</div>';
                }
                ?>
                <form action="../model/gmailsignup.php" method="post">
                    <div class= "formcontainer">
                        <div class="formlable">
                            <label for="name"><strong>Name</strong></label><br>
                            <input type="text" id="name" name="name" value="<?php echo $name; ?>" required><br><br>
                        </div>
                    <label for="email"><strong>Email</strong></label><br>
                    <input type="email" id="email" name="email" value="<?php echo $email; ?>" required><br><br>

                    <div class="tooltip">
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password" required>
                <div class="tooltiptext" id="password-tooltip">
                    <p>Password must contain:</p>
                    <ul>
                        <li>At least 8 characters</li>
                        <li>One uppercase letter</li>
                        <li>One lowercase letter</li>
                        <li>number</li>
                        <li>One special character</li>
                    </ul>
                </div>
            </div><br><br>

                    <label for="confirm-password"><strong>Confirm Password</strong></label><br>
                    <input type="password" id="confirm-password" name="confirm-password" required><br><br>

                    <button class="signupbutton" type="submit">Signup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>