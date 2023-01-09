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
    <script src="JS/sidebar-toggle.js" type="text/javascript" defer></script>
    <script src="JS/modal.js" type="text/javascript" defer></script>
    <script src="JS/slider.js" type="text/javascript" defer></script>
    <script src="JS/modallogin.js" type="text/javascript" defer></script>
    <script src="JS/countdown.js" type="text/javascript" defer></script>
</head>

<body>
    <div class="grid-wrap">
        <header class="header">
            <?php include 'php/includes/header.php' ?>
        </header>
        <div class="sidebar hidden">
            <?php $page = 'home';
            include 'php/includes/sidebar.php' ?>
        </div>
        <div class="content">
            <section class="welcome-wrap">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide first-slide">
                            <h2 class="welcome-title">Welcome to
                                <br>E-Sport Manager
                            </h2>
                        </div>
                        <div class="swiper-slide second-slide">
                            <h2 class="welcome-title">Act like an
                                <br>E-Sports Manager
                            </h2>
                        </div>
                        <div class="swiper-slide third-slide">
                            <h2 class="welcome-title">Develop your
                                <br>virtual team
                            </h2>
                        </div>
                        <div class="swiper-slide fourth-slide">
                            <h2 class="welcome-title">Become the
                                <br>best team
                            </h2>
                            <button class="start-button">How to start</button>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </section>

            <hr class="main-separator">

            <section class="timer-section">
                <div class="timer-wrapper">
                    <div class="title-wrapper">
                        <h2 class="timer-title">Time Until Release:</h2>
                    </div>
                    <div class="timer main-display_timer">
                        <div class="timer_item block-center">
                            <div class="timer_count timer_days">365</div>
                            <div class="timer_text">Days</div>
                        </div>
                        <div class="timer_item block-center">
                            <div class="timer_count timer_hours">24</div>
                            <div class="timer_text">Hours</div>
                        </div>
                        <div class="timer_item block-center">
                            <div class="timer_count timer_minutes">60</div>
                            <div class="timer_text">Minutes</div>
                        </div>
                        <div class="timer_item block-center">
                            <div class="timer_count timer_seconds">60</div>
                            <div class="timer_text">Seconds</div>
                        </div>
                    </div>
                </div>
            </section>

            <hr class="main-separator">

            <section class="news-section">
                <div class="news-wrap">
                    <div class="news-top">
                        <div class="news-title">
                            <h2>News</h2>
                        </div>
                        <div class="show-all">
                            <a href="allnews.php">Show All</a>
                            <img src="Images/Show-All.svg" alt="Show All">
                        </div>
                    </div>
                    <div class="news-items">
                    <?php include 'php/classes/dbh.classes.php';
                            include 'php/classes/news.classes.php';
                            $n = new News();
                            $n->getLatestNews(); ?>
                    </div>
                </div>
            </section>

            <hr class="main-separator">

            <section class="screenshot-section">
                <div class="screenshot-wrap">
                    <div class="screenshot-title">
                        <h2>Screenshots</h2>
                    </div>
                    <div class="screenshot-items">
                        <div class="screenshot-item big">
                            <img src="Images/Screenshot-Big-1.png" onClick="reply_click(this.id)" id="bigImg"
                                alt="Game screenshot">
                        </div>
                        <div class="small">
                            <div class="screenshot-item">
                                <img src="Images/Screenshot-2.png" onClick="reply_click(this.id)" id="smallImg1"
                                    alt="Game screenshot">
                            </div>
                            <div class="screenshot-item">
                                <img src="Images/Screenshot-3.png" onClick="reply_click(this.id)" id="smallImg2"
                                    alt="Game screenshot">
                            </div>
                            <div class="screenshot-item">
                                <img src="Images/Screenshot-4.png" onClick="reply_click(this.id)" id="smallImg3"
                                    alt="Game screenshot">
                            </div>
                            <div class="screenshot-item">
                                <img src="Images/Screenshot-5.png" onClick="reply_click(this.id)" id="smallImg4"
                                    alt="Game screenshot">
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

    <div class="modal" id="modal">
        <span class="closeBtn">&times;</span>
        <img src="#" class="modal-img" id="modalimg" alt="screenshot">
    </div>
</body>

</html>