<?php
class leagueMatch extends Dbh {


    function getLeagueStats($tID) {
        if (isset($_SESSION["ID"])) {
            $stmt = $this->connect()->prepare("SELECT
            (SELECT COUNT(*) FROM league_match WHERE (Team1_ID = $tID OR Team2_ID = $tID) AND Winner_ID = $tID) AS 'Won Matches',
            (SELECT COUNT(*) FROM league_match WHERE (Team1_ID = $tID OR Team2_ID = $tID) AND Winner_ID != $tID) AS 'Lost Matches',
            (SELECT COUNT(*) FROM league_match WHERE Team1_ID = $tID OR Team2_ID = $tID) AS 'All Matches',
            ROUND(((SELECT COUNT(*) FROM league_match WHERE (Team1_ID = $tID OR Team2_ID = $tID) AND Winner_ID = $tID) / (SELECT COUNT(*) FROM `league_match` WHERE Team1_ID = $tID OR Team2_ID = $tID)) * 100, 0) AS 'Win Rate';");

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
                $leagueMatch = $stmt->fetchAll(PDO::FETCH_ASSOC);
                foreach ($leagueMatch as $leagueMatchStats) { ?>
                    <div class="match-data">
                        <div class="match-item">
                            <p class="item-title">Match Count</p>
                            <p class="item-amount"><?php echo $leagueMatchStats["All Matches"] ?></p>
                        </div>
                        <div class="match-item">
                            <p class="item-title">Won Matches</p>
                            <p class="item-amount"><?php echo $leagueMatchStats["Won Matches"] ?></p>
                        </div>
                        <div class="match-item">
                            <p class="item-title">Lost Matches</p>
                            <p class="item-amount"><?php echo $leagueMatchStats["Lost Matches"] ?></p>
                        </div>
                        <div class="match-item">
                            <p class="item-title">Winrate</p>
                            <p class="item-amount"><?php echo $leagueMatchStats["Win Rate"] ?>%</p>
                        </div>
                    </div>
                <?php }

            }
        }
    }

    function getleaderboardStats($tID)
    {
        $stmt = $this->connect()->prepare("SELECT
        (SELECT COUNT(*) FROM league_match WHERE (Team1_ID = $tID OR Team2_ID = $tID) AND Winner_ID = $tID) AS 'Won Matches',
        (SELECT COUNT(*) FROM league_match WHERE (Team1_ID = $tID OR Team2_ID = $tID) AND Winner_ID != $tID) AS 'Lost Matches',
        (SELECT COUNT(*) FROM league_match WHERE Team1_ID = $tID OR Team2_ID = $tID) AS 'All Matches',
        ROUND(((SELECT COUNT(*) FROM league_match WHERE (Team1_ID = $tID OR Team2_ID = $tID) AND Winner_ID = $tID) / (SELECT COUNT(*) FROM league_match WHERE Team1_ID = $tID OR Team2_ID = $tID)) * 100, 0) AS 'Win Rate';");

        // Test if statement executed
        if (!$stmt->execute()) {
            $stmt = null;
            header("location: ../../index.php?error=stmtfailed");
            exit();
        }
        $leagueMatch = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($leagueMatch as $leagueMatchStats) { ?>
            <td><?php echo $leagueMatchStats["Win Rate"] ?></td>
            <td><?php echo $leagueMatchStats["All Matches"] ?></td>
            <td><?php echo $leagueMatchStats["Won Matches"] ?></td>
            <td><?php echo $leagueMatchStats["Lost Matches"] ?></td>
        <?php }   
    }   
}
?>