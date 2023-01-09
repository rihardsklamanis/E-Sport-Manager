<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/normalize.css">
    <link rel="stylesheet" href="CSS/sidebar-header.css">
    <link rel="stylesheet" href="CSS/tournamentinfo.css">
    <link rel="icon" href="Images/favicon-16x16.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <title>Tournament Info : E-Sport Manager</title>
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
            <?php include 'php/includes/sidebar.php' ?>
        </div>

        <div class="content">
            <section class="tournament-info">
                <div class="tournament-info-wrapper">
                    <h2 class="tournament-info-title">Tournament Info:</h2>
                    <?php include 'php/classes/dbh.classes.php';
                    include 'php/classes/tournament-info.classes.php';
                    $ti = new tournamentInfo();
                    $ti->outputInfo(); ?>
                </div>
            </section>
            <section class="tournament-brackets">
                <div class="tournament-brackets-wrapper">
                    <h2 class="tournament-brackets-title">Brackets:</h2>
                    <div class="brackets">
                        <div class="round1">
                            <h3 class="round-title">Round Of 16</h3>
                            <div class="match">
                                <div class="team">
                                    TBD
                                </div>
                                <div class="team">
                                    TBD
                                </div>
                            </div>
                            <div class="match">
                                <div class="team">
                                    TBD
                                </div>
                                <div class="team">
                                    TBD
                                </div>
                            </div>
                            <div class="match">
                                <div class="team">
                                    TBD
                                </div>
                                <div class="team">
                                    TBD
                                </div>
                            </div>
                            <div class="match">
                                <div class="team">
                                    TBD
                                </div>
                                <div class="team">
                                    TBD
                                </div>
                            </div>
                            <div class="match">
                                <div class="team">
                                    TBD
                                </div>
                                <div class="team">
                                    TBD
                                </div>
                            </div>
                            <div class="match">
                                <div class="team">
                                    TBD
                                </div>
                                <div class="team">
                                    TBD
                                </div>
                            </div>
                            <div class="match">
                                <div class="team">
                                    TBD
                                </div>
                                <div class="team">
                                    TBD
                                </div>
                            </div>
                            <div class="match">
                                <div class="team">
                                    TBD
                                </div>
                                <div class="team">
                                    TBD
                                </div>
                            </div>
                        </div>
                        <div class="round2">
                        <h3 class="round-title">Round Of 8</h3>
                            <div class="match">
                                <div class="team">
                                    TBD
                                </div>
                                <div class="team">
                                    TBD
                                </div>
                            </div>
                            <div class="match">
                                <div class="team">
                                    TBD
                                </div>
                                <div class="team">
                                    TBD
                                </div>
                            </div>
                            <div class="match">
                                <div class="team">
                                    TBD
                                </div>
                                <div class="team">
                                    TBD
                                </div>
                            </div>
                            <div class="match">
                                <div class="team">
                                    TBD
                                </div>
                                <div class="team">
                                    TBD
                                </div>
                            </div>
                        </div>
                        <div class="round3">
                        <h3 class="round-title">Semi-Finals</h3>
                            <div class="match">
                                <div class="team">
                                    TBD
                                </div>
                                <div class="team">
                                    TBD
                                </div>
                            </div>
                            <div class="match">
                                <div class="team">
                                    TBD
                                </div>
                                <div class="team">
                                    TBD
                                </div>
                            </div>
                        </div>
                        <div class="round4">
                        <h3 class="round-title">Finals</h3
                            <div class="match">
                                <div class="team">
                                    TBD
                                </div>
                                <div class="team">
                                    TBD
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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