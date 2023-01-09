<?php

class News extends Dbh
{
    function getAllNews()
    {
        $stmt = $this->connect()->prepare('SELECT ID, ImageUrl, Title, PostDate, TextArea FROM news ORDER BY ID DESC;');

        // Test if statement executed
        if (!$stmt->execute()) {
            $stmt = null;
            header("location: ../../index.php?error=stmtfailed");
            exit();
        }

        // Check if statement returns anything
        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: ../../index.php?error=newsnotfound");
            exit();
        }

        // Fetch all results into $news array
        $news = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Free result from memory
        $stmt = null;

        foreach($news as $newsitem){ ?>
            <div class="news-item" style='background: url(../Images/<?php echo $newsitem['ImageUrl'] ?>)' no-repeat;>
                <div class="news-item-container">
                    <div class="news-item-top">
                        <div class="news-item-title">
                            <a href="#"><?php echo htmlspecialchars($newsitem['Title']) ?></a>
                        </div>
                        <div class="news-item-date">
                            <?php echo htmlspecialchars($newsitem['PostDate']) ?>
                        </div>
                    </div>
                    <div>
                        <div class="news-description"><?php 
                        $truncatedContent = substr(htmlspecialchars($newsitem['TextArea']), 0, 140);
                        
                        echo $truncatedContent .= '.... <a class="modal-btn" href="article.php?id=' . $newsitem["ID"] . '">Read More</a>';
                        ?></div>
                    </div>
                </div>
            </div>
        <?php }
    }

    function getlatestnews() {
        $stmt = $this->connect()->prepare('SELECT ID, ImageUrl, Title, PostDate, TextArea FROM news ORDER BY ID DESC LIMIT 4;');

        // Test if statement executed
        if (!$stmt->execute()) {
            $stmt = null;
            header("location: ../../index.php?error=stmtfailed");
            exit();
        }

        // Check if statement returns anything
        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: ../../index.php?error=newsnotfound");
            exit();
        }

        // Fetch all results into $news array
        $news = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Free result from memory
        $stmt = null;

        foreach($news as $newsitem){ ?>
            <div class="news-item" style='background: url(../Images/<?php echo $newsitem['ImageUrl'] ?>)' no-repeat;>
                <div class="news-item-container">
                    <div class="news-item-top">
                        <div class="news-item-title">
                            <a href="#"><?php echo htmlspecialchars($newsitem['Title']) ?></a>
                        </div>
                        <div class="news-item-date">
                            <?php echo htmlspecialchars($newsitem['PostDate']) ?>
                        </div>
                    </div>
                    <div>
                        <div class="news-description"><?php 
                        $truncatedContent = substr(htmlspecialchars($newsitem['TextArea']), 0, 140);
                        
                        echo $truncatedContent .= '.... <a class="modal-btn" href="article.php?id=' . $newsitem["ID"] . '">Read More</a>';
                        ?></div>
                    </div>
                </div>
            </div>
        <?php }
    }

    function getArticle() {
        $id = $_GET['id'];

        $stmt = $this->connect()->prepare("SELECT ID, ImageUrl, Title, PostDate, TextArea, Author FROM news WHERE id=$id");

        // Test if statement executed
        if (!$stmt->execute()) {
            $stmt = null;
            header("location: ../../index.php?error=stmtfailed");
            exit();
        }

        // Check if statement returns anything
        if ($stmt->rowCount() == 0) {
            $stmt = null;
            ?>
            <div class="article-header">
                <h2 class="article-title">ERROR: Article is not found!</h2>
            </div>
            <?php exit();
        }

        // Fetch all results into $news array
        $news = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Free result from memory
        $stmt = null; 
        
        foreach($news as $news_item){ ?>
            <div class="article-header">
                <h2 class="article-title"><?php echo $news_item['Title']; ?></h2>
                <span class="article-postdate"><?php echo $news_item['PostDate']; ?></span>
            </div>
            <div class="article-content">
                <img src="../Images/<?php echo $news_item['ImageUrl'] ?>" alt="Picture for article" class="article-image">
                <p class="article-text"><?php echo $news_item['TextArea']; ?></p>
                <div class="article-bottom">
                    <div class="author-wrap">
                        <p class="author">Author: <?php echo $news_item['Author']; ?></p>
                    </div>
                    <div class="backtoall">
                        <a href="allnews.php" class="returnbtn">Return</a>
                    </div>
                </div>
            </div>
        <?php }
    }

    function outputComments() {
        $id = $_GET['id'];

        $stmt = $this->connect()->prepare("SELECT ID, author, comment, posttime, news_id FROM comments WHERE news_id=$id ORDER BY posttime DESC");

        // Test if statement executed
        if (!$stmt->execute()) {
            $stmt = null;
            header("location: ../../index.php?error=stmtfailed");
            exit();
        }

        // Check if statement returns anything
        if ($stmt->rowCount() == 0) {
            $stmt = null;
            ?>
            <div class="Comment-Error">
                <h2 class="Error-Text">There is no comments yet!</h2>
            </div>
            <?php exit();
        }

        // Fetch all results into $news array
        $comments = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Free result from memory
        $stmt = null;

        foreach($comments as $comment_item){ ?>
            <div class="comment-item">
                <div class="text-wrapper">
                    <div class="comment-upper">
                        <h2 class="author"><?php echo $comment_item['author']; ?></h2>
                        <p class="posttime"><?php echo $comment_item['posttime']; ?></p>
                    </div>
                    <hr class="comment-hr">
                    <div class="comment-text">
                        <p class="text">
                            <?php echo $comment_item['comment']; ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php } 
    }
} ?>