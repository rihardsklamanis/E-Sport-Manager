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
    <script src="../js/sidebar-toggle.js" type="text/javascript" defer></script>
    <script src="../js/modallogin.js" type="text/javascript" defer></script>
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

        <div class="content">
            <div class="content-wrapper">
                <div class="items-wrapper">
                    <h2 class="tour-title">Upcoming</h2>
                    <div class="tour-items">
                        <div class="tour-item">
                            <div class="tour-image">
                                <img src="Images/Tournament-Item-1.png" alt="Tournament Image">
                            </div>
                            <div class="tour-description">
                                <div class="description-upper">
                                    <h3 class="tour-name">Blast Premier Spring Final</h3>
                                    <div class="description-item">
                                        <p class="prize-pool">100.000$</p>
                                        <p class="tour-places">0/16</p>
                                    </div>
                                </div>
                                <hr class="tour-separator">
                                <div class="description-bottom">
                                    <p class="tour-date">11/08/2022 12:00</p>
                                </div>
                            </div>
                        </div>
                        <div class="tour-item">
                            <div class="tour-image">
                                <img src="Images/Tournament-Item-2.png" alt="Tournament Image">
                            </div>
                            <div class="tour-description">
                                <div class="description-upper">
                                    <h3 class="tour-name">Intel Extreme Masters</h3>
                                    <div class="description-item">
                                        <p class="prize-pool">100.000$</p>
                                        <p class="tour-places">0/16</p>
                                    </div>
                                </div>
                                <hr class="tour-separator">
                                <div class="description-bottom">
                                    <p class="tour-date">11/08/2022 12:00</p>
                                </div>
                            </div>
                        </div>
                        <div class="tour-item">
                            <div class="tour-image">
                                <img src="Images/Tournament-Item-3.png" alt="Tournament Image">
                            </div>
                            <div class="tour-description">
                                <div class="description-upper">
                                    <h3 class="tour-name">Pinnacle Cup III</h3>
                                    <div class="description-item">
                                        <p class="prize-pool">100.000$</p>
                                        <p class="tour-places">0/16</p>
                                    </div>
                                </div>
                                <hr class="tour-separator">
                                <div class="description-bottom">
                                    <p class="tour-date">11/08/2022 12:00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="items-wrapper">
                    <h2 class="tour-title">Ongoing</h2>
                    <div class="tour-items">
                        <div class="tour-item">
                            <div class="tour-image">
                                <img src="Images/Tournament-Item-1.png" alt="Tournament Image">
                            </div>
                            <div class="tour-description">
                                <div class="description-upper">
                                    <h3 class="tour-name">Blast Premier Spring Final</h3>
                                    <div class="description-item">
                                        <p class="prize-pool">100.000$</p>
                                        <p class="tour-places">0/16</p>
                                    </div>
                                </div>
                                <hr class="tour-separator">
                                <div class="description-bottom">
                                    <p class="tour-date">11/08/2022 12:00</p>
                                </div>
                            </div>
                        </div>
                        <div class="tour-item">
                            <div class="tour-image">
                                <img src="Images/Tournament-Item-2.png" alt="Tournament Image">
                            </div>
                            <div class="tour-description">
                                <div class="description-upper">
                                    <h3 class="tour-name">Intel Extreme Masters</h3>
                                    <div class="description-item">
                                        <p class="prize-pool">100.000$</p>
                                        <p class="tour-places">0/16</p>
                                    </div>
                                </div>
                                <hr class="tour-separator">
                                <div class="description-bottom">
                                    <p class="tour-date">11/08/2022 12:00</p>
                                </div>
                            </div>
                        </div>
                        <div class="tour-item">
                            <div class="tour-image">
                                <img src="Images/Tournament-Item-3.png" alt="Tournament Image">
                            </div>
                            <div class="tour-description">
                                <div class="description-upper">
                                    <h3 class="tour-name">Pinnacle Cup III</h3>
                                    <div class="description-item">
                                        <p class="prize-pool">100.000$</p>
                                        <p class="tour-places">0/16</p>
                                    </div>
                                </div>
                                <hr class="tour-separator">
                                <div class="description-bottom">
                                    <p class="tour-date">11/08/2022 12:00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="items-wrapper">
                    <h2 class="tour-title">Completed</h2>
                    <div class="tour-items">
                        <div class="tour-item">
                            <div class="tour-image">
                                <img src="Images/Tournament-Item-1.png" alt="Tournament Image">
                            </div>
                            <div class="tour-description">
                                <div class="description-upper">
                                    <h3 class="tour-name">Blast Premier Spring Final</h3>
                                    <div class="description-item">
                                        <p class="prize-pool">100.000$</p>
                                        <p class="tour-places">0/16</p>
                                    </div>
                                </div>
                                <hr class="tour-separator">
                                <div class="description-bottom">
                                    <p class="tour-date">11/08/2022 12:00</p>
                                </div>
                            </div>
                        </div>
                        <div class="tour-item">
                            <div class="tour-image">
                                <img src="Images/Tournament-Item-2.png" alt="Tournament Image">
                            </div>
                            <div class="tour-description">
                                <div class="description-upper">
                                    <h3 class="tour-name">Intel Extreme Masters</h3>
                                    <div class="description-item">
                                        <p class="prize-pool">100.000$</p>
                                        <p class="tour-places">0/16</p>
                                    </div>
                                </div>
                                <hr class="tour-separator">
                                <div class="description-bottom">
                                    <p class="tour-date">11/08/2022 12:00</p>
                                </div>
                            </div>
                        </div>
                        <div class="tour-item">
                            <div class="tour-image">
                                <img src="Images/Tournament-Item-3.png" alt="Tournament Image">
                            </div>
                            <div class="tour-description">
                                <div class="description-upper">
                                    <h3 class="tour-name">Pinnacle Cup III</h3>
                                    <div class="description-item">
                                        <p class="prize-pool">100.000$</p>
                                        <p class="tour-places">0/16</p>
                                    </div>
                                </div>
                                <hr class="tour-separator">
                                <div class="description-bottom">
                                    <p class="tour-date">11/08/2022 12:00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <?php include 'php/includes/footer.php' ?>
        </footer>
    </div>

    <?php include 'php/includes/signup.php' ?>

</body>

</html>