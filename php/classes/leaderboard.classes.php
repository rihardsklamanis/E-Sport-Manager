<?php

class Leaderboard extends Dbh
{
    function getleaderboard()
    {
        $stmt = $this->connect()->prepare("SELECT t.ID, t.Name, l.Points, l.League FROM league AS l
        INNER JOIN league_ranking AS lr 
        ON l.League = lr.ID
        INNER JOIN team AS t
        ON l.Team_ID = t.ID
        ORDER BY l.Points DESC;");

        // Test if statement executed
        if (!$stmt->execute()) {
            $stmt = null;
            header("location: ../../index.php?error=stmtfailed");
            exit();
        }

        // Check if statement returns anything
        if ($stmt->rowCount() == 0) {
            $stmt = null;

            exit();
        }

        $leaderboard = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Free result from memory
        $stmt = null;
        $i = 1;
        include 'leaguematch.classes.php';
        $lm = new leagueMatch();
        foreach ($leaderboard as $row) { 
            ?>
            <tr class="leaderboard-text">
                <td><?php echo $i ?></td>
                <td><?php echo $row['Name']; ?></td>
                <?php $lm->getleaderboardStats($row['ID']); ?>
                <td><?php echo $row['Points']; ?></td>
                <td style="display: none;" id="leagueID"><?php echo $row['League']; ?></td>
            </tr>
        <?php $i += 1;
        }
    }
}
?>