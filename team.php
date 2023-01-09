<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/normalize.css">
    <link rel="stylesheet" href="CSS/sidebar-header.css">
    <link rel="stylesheet" href="CSS/team.css">
    <link rel="icon" href="Images/favicon-16x16.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <title>Team : E-Sport Manager</title>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="JS/sidebar-toggle.js" type="text/javascript" defer></script>
    <script src="JS/modallogin.js" type="text/javascript" defer></script>
</head>

<body>
    <div class="grid-wrap">
        <header class="header">
            <?php include 'php/includes/header.php' ?>
        </header>
        <div class="sidebar hidden">
            <?php $page = 'team';
            include 'php/includes/sidebar.php' ?>
        </div>

        <div class="content">
        <?php 
            include 'php/classes/dbh.classes.php';
            include 'php/classes/team.classes.php';
            $t = new Team();
            $t->getTeamInfo(); ?>
        </div>

        <footer class="footer">
            <?php include 'php/includes/footer.php' ?>
        </footer>
    </div>

    <?php include 'php/includes/signup.php' ?>
    <?php include 'php/includes/preloader.php' ?>   

</body>

</html>