
<?php
require("./view/pratials/header.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gmail-like Layout</title>
    <link rel="stylesheet" href="./view/src/css/homepage.css">
</head>
<body>
        <header class="header">
        <div class="logo">
            <img src="/uploads/gmail_logo.png" alt="Gmail Logo">
        </div>
        <div class="header-buttons">
            <button class="compose-btn">Compose</button>
        </div>
    </header>

    <!-- Main Section with Sidebar and Inbox -->
    <div class="main-content">
        <!-- Sidebar Section -->
        <aside class="sidebar">
            <ul>
                <li><a href="#">Inbox</a></li>
                <li><a href="#">Starred</a></li>
                <li><a href="#">Snoozed</a></li>
                <li><a href="#">Sent</a></li>
                <li><a href="#">Drafts</a></li>
                <li><a href="#">More</a></li>
            </ul>
        </aside>

        <!-- Inbox Section -->
        <section class="inbox">
            <div class="inbox-header">
                <h2>Primary</h2>
            </div>
            <div class="inbox-content">
                <?php
                $emails = [
                    ['from' => 'LinkedIn', 'subject' => 'Job Alert', 'date' => '10 Sept'],
                    ['from' => 'Zircly', 'subject' => 'Sign-Out Reminder', 'date' => '10 Sept'],
                    ['from' => 'Vignesh M', 'subject' => 'Invitation: Weekly Sync Call', 'date' => '9 Sept']
                ];

                foreach ($emails as $email) {
                    echo "<div class='email'>
                            <div class='email-info'>
                                <span>{$email['from']}</span>
                                <span>{$email['subject']}</span>
                            </div>
                            <div class='email-date'>
                                <span>{$email['date']}</span>
                            </div>
                          </div>";
                }
                ?>
            </div>
        </section>
    </div>

</body>
</html>
