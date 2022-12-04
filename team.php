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
    <script src="../js/sidebar-toggle.js" type="text/javascript" defer></script>
    <script src="../js/modallogin.js" type="text/javascript" defer></script>
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
            <div class="content-wrapper">
                <div class="team-upper">
                    <div class="title">
                        <h2>Team Name</h2>
                    </div>
                    <div class="players-wrapper">
                        <div class="player">
                            <div class="player-image">
                                <img src="Images/Player-Image.png" alt="Player Image">
                            </div>
                            <div class="player-info">
                                <h3 class="players-name">Name</h3>
                                <h4 class="player-role">Role</h4>
                            </div>
                        </div>
                        <div class="player">
                            <div class="player-image">
                                <img src="Images/Player-Image.png" alt="Player Image">
                            </div>
                            <div class="player-info">
                                <h3 class="players-name">Name</h3>
                                <h4 class="player-role">Role</h4>
                            </div>
                        </div>
                        <div class="player">
                            <div class="player-image">
                                <img src="Images/Player-Image.png" alt="Player Image">
                            </div>
                            <div class="player-info">
                                <h3 class="players-name">Name</h3>
                                <h4 class="player-role">Role</h4>
                            </div>
                        </div>
                        <div class="player">
                            <div class="player-image">
                                <img src="Images/Player-Image.png" alt="Player Image">
                            </div>
                            <div class="player-info">
                                <h3 class="players-name">Name</h3>
                                <h4 class="player-role">Role</h4>
                            </div>
                        </div>
                        <div class="player">
                            <div class="player-image">
                                <img src="Images/Player-Image.png" alt="Player Image">
                            </div>
                            <div class="player-info">
                                <h3 class="players-name">Name</h3>
                                <h4 class="player-role">Role</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-bottom">
                    <div class="team-wrapper">
                        <h2 class="team-info-title">Team Info</h2>
                        <div class="team-info">
                            <div class="top-info">
                                <div class="team-logo">
                                    <img src="Images/Team-Logo.png" alt="Team Logo">
                                </div>
                                <div class="info-items">
                                    <div class="country-info">
                                        <span class="info-country">Country:</span>
                                        <span class="country-name">Latvia</span>
                                    </div>
                                    <div class="prize-info">
                                        <span class="total-prize">Total Prize Money:</span>
                                        <span class="prize-amount">0$</span>
                                    </div>
                                    <div class="creation-info">
                                        <span class="creation-date">Date of creation:</span>
                                        <span class="date">10.03.2020</span>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="bottom-info">
                                <div class="tournament-info">
                                    <div class="achievments">
                                        <h3 class="achievments-title">Achievements</h3>
                                        <div class="placings">
                                            <div class="first-placings">
                                                <p class="first-place">1st Place:</p>
                                                <p class="first-amount">0</p>
                                            </div>
                                            <div class="second-placings">
                                                <p class="second-place">2nd Place:</p>
                                                <p class="second-amount">0</p>
                                            </div>
                                            <div class="third-placings">
                                                <p class="third-place">3rd Place:</p>
                                                <p class="third-amount">0</p>
                                            </div>
                                        </div>
                                        <p class="participation">Participation in tournaments: <span
                                                class="participation-amount">0</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="match-wrapper">
                        <h2 class="match-info-title">Last Matches</h2>
                        <div class="match-info">
                            <div class="match-info-left">
                                <h3 class="match-title">Casual Matches</h3>
                                <div class="match-data">
                                    <div class="match-item">
                                        <p class="item-title">Match Count</p>
                                        <p class="item-amount">0</p>
                                    </div>
                                    <div class="match-item">
                                        <p class="item-title">Won Matches</p>
                                        <p class="item-amount">0</p>
                                    </div>
                                    <div class="match-item">
                                        <p class="item-title">Lost Matches</p>
                                        <p class="item-amount">0</p>
                                    </div>
                                    <div class="match-item">
                                        <p class="item-title">Winrate</p>
                                        <p class="item-amount">-</p>
                                    </div>
                                </div>
                            </div>
                            <div class="vertical-separator"></div>
                            <div class="match-info-right">
                                <div class="match-title">League Matches</div>
                                <div class="match-data">
                                    <div class="match-item">
                                        <p class="item-title">Match Count</p>
                                        <p class="item-amount">0</p>
                                    </div>
                                    <div class="match-item">
                                        <p class="item-title">Won Matches</p>
                                        <p class="item-amount">0</p>
                                    </div>
                                    <div class="match-item">
                                        <p class="item-title">Lost Matches</p>
                                        <p class="item-amount">0</p>
                                    </div>
                                    <div class="match-item">
                                        <p class="item-title">Winrate</p>
                                        <p class="item-amount">-</p>
                                    </div>
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