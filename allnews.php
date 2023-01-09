<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/normalize.css">
    <link rel="stylesheet" href="CSS/sidebar-header.css">
    <link rel="stylesheet" href="CSS/news.css">
    <link rel="icon" href="Images/favicon-16x16.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <title>News : E-Sport Manager</title>
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
            <section class="news-section">
                <div class="news-wrap">
                    <div class="news-top">
                        <div class="news-title">
                            <h2>News</h2>
                        </div>
                    </div>
                    <div class="news-items">
                            <?php include 'php/classes/dbh.classes.php';
                            include 'php/classes/news.classes.php';
                            $n = new News();
                            $n->getAllNews(); ?>
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
