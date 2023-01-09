<?php

include 'dbh.classes.php';



$dbh = new Dbh();

session_start();



$userID = $_SESSION["ID"];


// Get Users Team_ID
$stmt = $dbh->connect()->prepare("SELECT ID FROM team WHERE User_ID = $userID");



if (!$stmt->execute()) {
    $stmt = null;
    header("location: ../../index.php?error=stmtfailed");
    exit();
}



// Check if statement returns anything
if ($stmt->rowCount() == 0) {
    $stmt = null;
    header("location: ../../index.php?error=teamnotfound");
    exit();

}



$teamInfo = $stmt->fetch(PDO::FETCH_ASSOC);

$teamID = $teamInfo['ID'];

$tourID = $_POST['id'];

$stmt = $dbh->connect()->prepare("SELECT * FROM tournament_teams WHERE Team_ID = $teamID AND Tournament_ID = $tourID");

if (!$stmt->execute()) {
    $stmt = null;
    header("location: ../../index.php?error=stmtfailed");
    exit();
}

// Test if team is already registered
if ($stmt->rowCount() == 0) {
    $stmt = $dbh->connect()->prepare("INSERT INTO tournament_teams (Team_ID, Tournament_ID) VALUES (?, ?);");

    if (!$stmt->execute(array($teamID, $tourID))) {
        $stmt = null;
        header("location: ../../index.php?error=stmtfailed");
        exit();
    }

}

header("location: ../../tournamentinfo.php?id=$tourID");

?>