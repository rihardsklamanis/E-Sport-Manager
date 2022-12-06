<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/normalize.css">
    <link rel="stylesheet" href="CSS/sidebar-header.css">
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="icon" href="Images/favicon-16x16.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <title>ESM : E-Sport Manager</title>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/sidebar-toggle.js" type="text/javascript" defer></script>
    <script src="js/modal.js" type="text/javascript" defer></script>
    <script src="js/slider.js" type="text/javascript" defer></script>
    <script src="js/modallogin.js" type="text/javascript" defer></script>
    <script src="js/countdown.js" type="text/javascript" defer></script>
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
                <table class="leaderboard">
                    <tr>
                        <th>#</th>
                        <th>Team</th>
                        <th>Win%</th>
                        <th>Match Count</th>
                        <th>Wins</th>
                        <th>Loses</th>
                        <th>Points</th>
                        <th>Rewards</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>FPX</td>
                        <td>100%</td>
                        <td>109</td>
                        <td>109</td>
                        <td>0</td>
                        <td>2000</td>
                        <td>200.000$</td>
                    </tr>
                </table>
            </section>

        </div>

        <footer class="footer">
            <?php include 'php/includes/footer.php' ?>
        </footer>
    </div>

    <?php include 'php/includes/signup.php' ?>

    <div class="modal" id="modal">
        <span class="closeBtn">&times;</span>
        <img src="#" class="modal-img" id="modalimg" alt="screenshot">

    </div>
</body>

</html>