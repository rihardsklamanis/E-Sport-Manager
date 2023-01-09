<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/normalize.css">
    <link rel="stylesheet" href="CSS/sidebar-header.css">
    <link rel="stylesheet" href="CSS/admin.css">
    <link rel="icon" href="Images/favicon-16x16.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <title>Admin Panel : E-Sport Manager</title>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="JS/sidebar-toggle.js" type="text/javascript" defer></script>
    <script src="JS/accordion.js" type="text/javascript" defer></script>
</head>

<body>
    <div class="grid-wrap">

        <header class="header">
            <?php include 'php/includes/header.php' ?>
        </header>

        <div class="sidebar hidden">
            <?php $page = 'admin';
            include 'php/includes/sidebar.php' ?>
        </div>

        <div class="content">
        <?php if (isset($_SESSION["ID"])) {           
            // Check if the user is an admin
            if ($_SESSION["Admin"] == 1) {
                include 'php/includes/adminpanel.php';
            } else { 
                echo '<p class="error-admin"><span class="error-span">Access Denied:</span>User does not have an admin rights.</p>';
            }
        } ?>
            <section class="redirect-wrapper">
                <h3 class="redirect-title">Return To Main Page</h3>
                <a href="index.php"><button class="redirect-button">Return</button></a>
            </section>
        </div>
        <footer class="footer">
            <?php include 'php/includes/footer.php' ?>
        </footer>
    </div>

    <?php include 'php/includes/signup.php' ?>
    <?php include 'php/includes/preloader.php' ?>   
</body>

</html>