<?php
class Player extends Dbh {
    
    function getPlayers($tID) {
        if (isset($_SESSION["ID"])) {
            $stmt = $this->connect()->prepare("SELECT Nickname, Name, Role, Age, Nationality, Status, Skill, PotentialSkill FROM players WHERE Team_ID = $tID AND Status = 'Active' LIMIT 5;");

            // Test if statement executed
            if (!$stmt->execute()) {
                $stmt = null;
                header("location: ../../index.php?error=stmtfailed");
                exit();
            }

            // Check if statement returns anything
            if ($stmt->rowCount() == 0) {
                $stmt = null; ?>
                <div class="content-wrapper">
                    <div class="Error-Message">
                        <p class="Message">
                            Your team has no active players.<br> You can get players and set them as active in-game.
                        </p>
                    </div>
                </div>
                <?php
            } else {
                // Fetch all results into $players array
                $players = $stmt->fetchAll(PDO::FETCH_ASSOC);
                ?>
                <div class="players-wrapper">
                    <?php foreach ($players as $players) { ?>
                        <div class="player">
                            <div class="player-image">
                                <img src="Images/Player-Image.png" alt="Player Image">
                            </div>
                            <div class="player-info">
                                <h3 class="players-name"><?php echo $players["Nickname"] ?></h3>
                                <h4 class="player-role"><?php echo $players["Role"] ?></h4>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                        
            <?php }
        }

    }
}

?>