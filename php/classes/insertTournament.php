<?php

include 'dbh.classes.php';



$dbh = new Dbh();



$name = $_POST['name'];

$startdate = $_POST['startdate'];

$enddate = $_POST["enddate"];

$prize = $_POST["prize"];

$target_dir = "../../Images/";

$target_file = $target_dir . basename($_FILES["imageToUpload"]["name"]);



move_uploaded_file($_FILES["imageToUpload"]["tmp_name"], $target_file);



$imageUrl = basename($_FILES["imageToUpload"]["name"]);



$stmt = $dbh->connect()->prepare('INSERT INTO tournament (Name, ImageUrl, StartDate, EndDate, PrizePool) VALUES (?, ?, ?, ?, ?);');



if (!$stmt->execute(array($name, $imageUrl, $startdate, $enddate, $prize))) {

    $stmt = null;

    header("location: ../../index.php?error=stmtfailed");

    exit();

}



header("location: ../../admin.php?TournamentInserted");



mysqli_close($conn);

?>