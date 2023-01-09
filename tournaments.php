<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/normalize.css">
    <link rel="stylesheet" href="CSS/sidebar-header.css">
    <link rel="stylesheet" href="CSS/tournament.css">
    <link rel="icon" href="Images/favicon-16x16.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <title>Tournaments : E-Sport Manager</title>
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
            <?php $page = 'tournaments';
            include 'php/includes/sidebar.php' ?>
        </div>

        <?php
        include 'php/classes/dbh.classes.php';
        include 'php/classes/tournament.classes.php';
        $t = new tournament();
        ?>
        <div class="content">
            <div class="content-wrapper">
                <div class="items-wrapper">
                    <h2 class="tour-title">Upcoming</h2>
                    <div class="tour-items">
                        <?php
                            $t->displayUpcoming();
                        ?>
                    
                    </div>
                </div>
                <div class="items-wrapper">
                    <h2 class="tour-title">Ongoing</h2>
                    <div class="tour-items">
                        <?php
                            $t->displayOngoing();
                        ?>
                    </div>
                </div>
                <div class="items-wrapper">
                    <h2 class="tour-title">Completed</h2>
                    <div class="tour-items">
                        <?php
                            $t->displayCompleted();
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <?php include 'php/includes/footer.php' ?>
        </footer>
    </div>

    <?php include 'php/includes/signup.php' ?>
    <?php include 'php/includes/preloader.php' ?>   

</body>

</html>