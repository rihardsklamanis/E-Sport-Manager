<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/normalize.css">
    <link rel="stylesheet" href="CSS/sidebar-header.css">
    <link rel="stylesheet" href="CSS/leaderboard.css">
    <link rel="icon" href="Images/favicon-16x16.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <title>Leaderboard : E-Sport Manager</title>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="JS/sidebar-toggle.js" type="text/javascript" defer></script>
    <script src="JS/modallogin.js" type="text/javascript" defer></script>
    <script src="JS/filterbyname.js" type="text/javascript" defer></script>
    <script src="JS/filterdropdown.js" type="text/javascript" defer></script>
    
</head>

<body>
    <div class="grid-wrap">
        <header class="header">
            <?php include 'php/includes/header.php' ?>
        </header>
        <div class="sidebar hidden">
            <?php $page = 'leaderboard';
            include 'php/includes/sidebar.php' ?>
        </div>
        <div class="content">
            <section class="leaderboard-wrap">
                <h2 class="leaderboard-title ">Leaderboard</h2>
                <div class="filter">
                    <label for="byName"></label>
                    <input type="text" class="byName" name="byName" id="byName" placeholder="Search by Team...">
                    <label for="leagueOption" class="byLeague"></label>
                    <select name="leagueOption" id="leagueOption" class="leagueOption">
                        <option value="1" class="Bronze">Bronze</option>
                        <option value="2" class="Silver">Silver</option>  
                        <option value="3" class="Gold">Gold</option>  
                        <option value="4" class="Diamond">Diamond</option>
                        <option value="5" class="Master">Master</option>    
                    </select>
                    <?php
                    include "php/classes/dbh.classes.php";
                    include "php/classes/leaderboard.classes.php";
                    $l = new Leaderboard(); ?>
                </div>
                <table class="leaderboard" id="leaderboard">
                    <tr class="leaderboard-header">
                        <th>#</th>
                        <th>Team</th>
                        <th>Win%</th>
                        <th>Match Count</th>
                        <th>Wins</th>
                        <th>Loses</th>
                        <th>Points</th>
                        <th style="display: none;">league</th>
                    </tr>
                    <?php $l->getLeaderboard(); ?>
                </table>
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