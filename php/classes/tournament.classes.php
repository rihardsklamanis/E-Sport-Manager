<?php
class tournament extends Dbh {
    // Display upcoming tournaments
    function displayUpcoming() {
        include 'tournamentmatches.classes.php';
        $tm = new tournamentMatch();
        $stmt = $this->connect()->prepare("SELECT * FROM tournament WHERE StartDate > CURRENT_DATE;");

        // Test if statement executed
        if (!$stmt->execute()) {
            $stmt = null;
            header("location: ../../index.php?error=stmtfailed");
            exit();
        }

        // Check if statement returns anything
        if ($stmt->rowCount() == 0) {
            $stmt = null;
        } else {
            // Fetch all results into $upcomingTournaments array
            $upcomingTournament = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Free result from memory
            $stmt = null;
            foreach ($upcomingTournament as $upcomingItem) { ?>
                <div class="tour-item">
                    <div class="tour-image">
                        <img src="../../Images/<?php echo $upcomingItem["ImageUrl"] ?>" alt="Tournament Image">
                    </div>
                    <div class="tour-description">
                        <div class="description-upper">
                            <a href="tournamentinfo.php?id=<?php echo $upcomingItem["ID"] ?>" class="tour-name"><?php echo $upcomingItem["Name"] ?></a>
                            <div class="description-item">
                                <p class="prize-pool"><?php echo $upcomingItem["PrizePool"] ?>$</p>
                                <p class="tour-places"><?php $tm->getPlayerCount($upcomingItem["ID"]) ?>/<?php echo $upcomingItem["TeamLimit"] ?></p>
                            </div>
                        </div>
                        <hr class="tour-separator">
                        <div class="description-bottom">
                            <p class="tour-date"><?php echo $upcomingItem["StartDate"] ?></p>
                        </div>
                    </div>
                </div>
            <?php }
        }
    }

    // Display ongoing tournaments
    function displayOngoing() {
        $tm = new tournamentMatch();
        $stmt = $this->connect()->prepare("SELECT * FROM tournament WHERE StartDate <= CURRENT_DATE AND EndDate >= CURRENT_DATE;");

        // Test if statement executed
        if (!$stmt->execute()) {
            $stmt = null;
            header("location: ../../index.php?error=stmtfailed");
            exit();
        }

        // Check if statement returns anything
        if ($stmt->rowCount() == 0) {
            $stmt = null;   
        } else {
            // Fetch all results into $ongoingTournaments array
            $ongoingTournament = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Free result from memory
            $stmt = null;
            foreach ($ongoingTournament as $ongoingItem) { ?>
                <div class="tour-item">
                    <div class="tour-image">
                        <img src="../../Images/<?php echo $ongoingItem["ImageUrl"] ?>" alt="Tournament Image">
                    </div>
                    <div class="tour-description">
                        <div class="description-upper">
                            <a href="tournamentinfo.php?id=<?php echo $ongoingItem["ID"] ?>" class="tour-name"><?php echo $ongoingItem["Name"] ?></a>
                            <div class="description-item">
                                <p class="prize-pool"><?php echo $ongoingItem["PrizePool"] ?>$</p>
                                <p class="tour-places"><?php $tm->getPlayerCount($ongoingItem["ID"]) ?>/<?php echo $ongoingItem["TeamLimit"] ?></p>
                            </div>
                        </div>
                        <hr class="tour-separator">
                        <div class="description-bottom">
                            <p class="tour-date"><?php echo $ongoingItem["StartDate"] ?></p>
                        </div>
                    </div>
                </div>
            <?php }
        }
    }

    // Display completed tournaments
    function displayCompleted() {
        $tm = new tournamentMatch();
        $stmt = $this->connect()->prepare("SELECT * FROM tournament WHERE EndDate < CURRENT_DATE;");

        // Test if statement executed
        if (!$stmt->execute()) {
            $stmt = null;
            header("location: ../../index.php?error=stmtfailed");
            exit();
        }

        // Check if statement returns anything
        if ($stmt->rowCount() == 0) {
            $stmt = null;
        } else {
            // Fetch all results into $completedTournaments array
            $completedTournament = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Free result from memory
            $stmt = null;
            foreach ($completedTournament as $completedItem) { ?>
                <div class="tour-item">
                    <div class="tour-image">
                        <img src="../../Images/<?php echo $completedItem["ImageUrl"] ?>" alt="Tournament Image">
                    </div>
                    <div class="tour-description">
                        <div class="description-upper">
                            <a href="tournamentinfo.php?id=<?php echo $completedItem["ID"] ?>" class="tour-name"><?php echo $completedItem["Name"] ?></a>
                            <div class="description-item">
                                <p class="prize-pool"><?php echo $completedItem["PrizePool"] ?>$</p>
                                <p class="tour-places"><?php $tm->getPlayerCount($completedItem["ID"]) ?>/<?php echo $completedItem["TeamLimit"] ?></p>
                            </div>
                        </div>
                        <hr class="tour-separator">
                        <div class="description-bottom">
                            <p class="tour-date"><?php echo $completedItem["StartDate"] ?></p>
                        </div>
                    </div>
                </div>
            <?php } 
        }
    }
}

?>