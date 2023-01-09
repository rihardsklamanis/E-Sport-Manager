<?php

session_start();

include 'dbh.classes.php';

$dbh = new Dbh();


$title = $_POST['title'];

$textarea = $_POST['textarea'];

$author = $_SESSION["Username"];

$target_dir = "../../Images/";

$target_file = $target_dir . basename($_FILES["imageToUpload"]["name"]);



move_uploaded_file($_FILES["imageToUpload"]["tmp_name"], $target_file);



$imageUrl = basename($_FILES["imageToUpload"]["name"]);


$stmt = $dbh->connect()->prepare('INSERT INTO news (ImageUrl, Title, TextArea, Author) VALUES (?, ?, ?, ?);');



if (!$stmt->execute(array($imageUrl ,$title, $textarea, $author))) {
    $stmt = null;

    header("location: ../../index.php?error=stmtfailed");

    exit();
}


header("location: ../../admin.php?ArticleInserted");

mysqli_close($conn);

?>