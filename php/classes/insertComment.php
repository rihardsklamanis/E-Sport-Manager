<?php
include 'dbh.classes.php';

$dbh = new Dbh();
session_start();

$author = $_SESSION["Username"];
$comment = $_POST['comment-field'];
$fid = $_GET['id'];

$stmt = $dbh->connect()->prepare("INSERT INTO comments (author, comment, news_id) VALUES (?, ?, ?);");

if (!$stmt->execute(array($author, $comment, $fid))) {
    $stmt = null;
    header("location: ../../index.php?error=stmtfailed");
    exit();
}


header("location: ../../article.php?id=$fid");

?>