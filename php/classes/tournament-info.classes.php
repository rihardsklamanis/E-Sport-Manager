<?php

class tournamentInfo extends Dbh {
    function outputInfo() {
        $id = $_GET['id'];
        $stmt = $this->connect()->prepare("SELECT * FROM tournament WHERE ID = $id");

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
            <div class="Error-Message">
                <h2 class="Message">ERROR: Tournament not found!</h2>
            </div>
            <?php exit();
        }

        $tournamentInfo = $stmt->fetch(PDO::FETCH_ASSOC);

        $stmt = null;
            ?>
        
            <div class="info-content-wrapper">
                <div class="tournament-image">
                    <img src="Images/<?php echo $tournamentInfo['ImageUrl']; ?>" alt="Tournament Image" class="tournament-image">
                </div>
                <div class="tournament-middle">
                    <div class="tournament-title">
                        <h3 class="tournament-name"><?php echo $tournamentInfo['Name']; ?></h3>
                        <hr>
                    </div>
                    <div class="middle-bottom-info">
                        <div class="tournament-prizepool">
                            <p class="prizepool">Prize Pool:</p>
                            <p class="prizepool-amount"><?php echo $tournamentInfo['PrizePool']; ?>$</p>
                        </div>
                        <div class="tournament-playercount">
                            <p class="playercount">Player Count:</p>
                            <p class="player-amount">0/<?php echo $tournamentInfo['TeamLimit']; ?></p>
                        </div>
                    </div>
                    <?php  $current_timestamp = time();
                    if (isset($_SESSION["ID"])) {
                        if (strtotime($tournamentInfo['StartDate']) < strtotime(date("Y-m-d", $current_timestamp)) ) { ?>
                            <h2 class="join-tournament" style="font-size: 24px; color: green;">Tournament Already Started</h2>
                        <?php } else { ?>
                            <form action="php/classes/jointournament.php" class="join-tournament" method="POST">
                                <input type="hidden" class="hidden-id" name="id" value="<?php echo $tournamentInfo['ID']; ?>" >
                                <input type="submit" class="joinBtn" value="Join">
                            </form>
                        <?php } 
                    } else { ?>
                        <h2 class="join-tournament" style="font-size: 24px; color: red;">You have to be logged in to join tournament</h2>
                    <?php }?>
                </div>
                <div class="tournament-right">
                    <div class="vl"></div>
                    <div class="date-info">
                        <div class="tournament-startdate">
                            <p class="startdate">Start Date:</p>
                            <p class="date"><?php echo $tournamentInfo['StartDate']; ?></p>
                        </div>
                        <div class="tournament-enddate">
                            <p class="enddate">End Date:</p>
                            <p class="date"><?php echo $tournamentInfo['EndDate']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php
    }
}

?>