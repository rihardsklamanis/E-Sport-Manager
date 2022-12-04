<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/normalize.css">
    <link rel="stylesheet" href="CSS/sidebar-header.css">
    <link rel="stylesheet" href="CSS/contact.css">
    <link rel="icon" href="Images/favicon-16x16.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <title>Contact Us : E-Sport Manager</title>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="../js/sidebar-toggle.js" type="text/javascript" defer></script>
    <script src="../js/modallogin.js" type="text/javascript" defer></script>
</head>

<body>
    <div class="grid-wrap">

        <header class="header">
            <?php include 'php/includes/header.php' ?>
        </header>

        <div class="sidebar hidden">
            <?php $page = 'contact';
            include 'php/includes/sidebar.php' ?>
        </div>

        <div class="content">
            <div class="content-wrapper">
                <h1 class="contact-title">Contact Us</h1>
                <p class="contact-text">Got a question? We’d love to hear from you. Send us a message and we’ll respond
                    as soon as posible.</p>
            </div>

            <div class="form-wrapper">

                <form method="post" action="mail.php" class="contact-form" id="contact">
                    <label for="username">Username</label>
                    <input id="username" name="username" type="text" required>

                    <label for="email">E-Mail</label>
                    <input id="email" name="email" type="email" required>

                    <label for="subject">Subject</label>
                    <input id="subject" name="subject" type="text" required>

                    <label for="message">Message</label>
                    <textarea id="message" name="message" cols="30" rows="10" required></textarea>

                    <button class="ContactBtn">Send Message</button>
                </form>

            </div>

        </div>
        <footer class="footer">
            <?php include 'php/includes/footer.php' ?>
        </footer>
    </div>

    <?php include 'php/includes/signup.php' ?>

</body>

</html>