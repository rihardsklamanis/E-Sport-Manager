<?php
class tournamentMatch extends Dbh
{
    function getTournamentStats($tID)
    {
        if (isset($_SESSION["ID"])) {
            $stmt = $this->connect()->prepare("SELECT 
            (SELECT COUNT(*) FROM tournament_match WHERE Team1_ID = $tID OR Team2_ID = $tID) AS 'All Matches',
            (SELECT COUNT(*) FROM tournament_match WHERE (Team1_ID = $tID OR Team2_ID = $tID) AND Winner_ID = $tID) AS 'Won Matches',
            (SELECT COUNT(*) FROM tournament_match WHERE (Team1_ID = $tID OR Team2_ID = $tID) AND Winner_ID != $tID) AS 'Lost Matches',
            ROUND(((SELECT COUNT(*) FROM tournament_match WHERE (Team1_ID = $tID OR Team2_ID = $tID) AND Winner_ID = $tID) / (SELECT COUNT(*) FROM tournament_match WHERE Team1_ID = $tID OR Team2_ID = $tID)) * 100, 0) AS 'Win Rate';");

            // Test if statement executed
            if (!$stmt->execute()) {
                $stmt = null;
                header("location: ../../index.php?error=stmtfailed");
                exit();
            }

            // Check if statement returns anything
            if ($stmt->rowCount() == 0) {
                $stmt = null; ?>
                <div class="match-data">
                    <div class="match-item">
                        <p class="item-title">Match Count</p>
                        <p class="item-amount">0</p>
                    </div>
                    <div class="match-item">
                        <p class="item-title">Won Matches</p>
                        <p class="item-amount">0</p>
                    </div>
                    <div class="match-item">
                        <p class="item-title">Lost Matches</p>
                        <p class="item-amount">0</p>
                    </div>
                    <div class="match-item">
                        <p class="item-title">Winrate</p>
                        <p class="item-amount">-</p>
                    </div>
                </div>
                <?php
            } else {
                $tournamentMatch = $stmt->fetchAll(PDO::FETCH_ASSOC);
                foreach ($tournamentMatch as $tournamentMatchStats) { ?>
                    <div class="match-data">
                        <div class="match-item">
                            <p class="item-title">Match Count</p>
                            <p class="item-amount"><?php echo $tournamentMatchStats["All Matches"] ?></p>
                        </div>
                        <div class="match-item">
                            <p class="item-title">Won Matches</p>
                            <p class="item-amount"><?php echo $tournamentMatchStats["Won Matches"] ?></p>
                        </div>
                        <div class="match-item">
                            <p class="item-title">Lost Matches</p>
                            <p class="item-amount"><?php echo $tournamentMatchStats["Lost Matches"] ?></p>
                        </div>
                        <div class="match-item">
                            <p class="item-title">Winrate</p>
                            <p class="item-amount"><?php echo $tournamentMatchStats["Win Rate"] ?>%</p>
                        </div>
                    </div>
                <?php }

            }
        }
    }
    function getPlayerCount($tID) {
        $stmt = $this->connect()->prepare("SELECT COUNT(*) AS 'Player Count' FROM tournament_teams WHERE Tournament_ID = $tID;");

        // Test if statement executed
        if (!$stmt->execute()) {
            $stmt = null;
            header("location: ../../index.php?error=stmtfailed");
            exit();
        }

        $playerCount = $stmt->fetch(PDO::FETCH_ASSOC);

        // Free result from memory
        $stmt = null;

        echo $playerCount["Player Count"];
    }
}