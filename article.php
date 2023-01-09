<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/normalize.css">
    <link rel="stylesheet" href="CSS/sidebar-header.css">
    <link rel="stylesheet" href="CSS/article.css">
    <link rel="icon" href="Images/favicon-16x16.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <title>Article : E-Sport Manager </title>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="JS/sidebar-toggle.js" type="text/javascript" defer></script>
    <script src="JS/modallogin.js" type="text/javascript" defer></script>
    <script src="JS/textarearesize.js" type="text/javascript" defer></script>
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
            <div class="article-container">
            <?php include 'php/classes/dbh.classes.php';
                            include 'php/classes/news.classes.php';
                            $n = new News();
                            $n->getArticle();
                            $id = $_GET['id']; ?>
            </div>
            <div class="comment-container">
                <div class="comment-form-container">
                    <h2 class="comment-title">Comments:</h2>
                    <form action="php/classes/insertComment.php?id=<?php echo $id; ?>" method="POST" class="comment-form">
                        <label for="comment-field">Enter Your Comment:</label>
                        <?php if (isset($_SESSION["ID"])) {?>
                            <textarea name="comment-field" id="comment-field" class="comment-field" placeholder="Enter your comment here..."></textarea>
                            <input type="submit" value="Post">
                        <?php } else { ?>
                            <textarea style="margin-bottom: 25px;" name="comment-field" id="comment-field" class="comment-field" readonly>User have to be logged in to write comment</textarea>
                        <?php } ?>
                    </form>
                </div>
                <div class="comments-items">
                    <?php $n->outputComments(); ?>
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