<?php

class Team extends Dbh
{
    function getTeamInfo()
    {
        if (isset($_SESSION["ID"])) {
            $userID = $_SESSION["ID"];
            $stmt = $this->connect()->prepare("SELECT ID, Name, ImagePath, Country, DATE_FORMAT(CreationDate,'%Y-%m-%d') AS CreationDate, PrizeMoney, 1stPlace, 2ndPlace, 3rdPlace, TournamentCount FROM team WHERE User_ID = $userID");

            // Test if statement executed
            if (!$stmt->execute()) {
                $stmt = null;
                header("location: ../../index.php?error=stmtfailed");
                exit();
            }

            // Check if statement returns anything
            if ($stmt->rowCount() == 0) {
                $stmt = null; ?>
                <div class="content-wrapper" style="min-height: 800px;">
                    <div class="Error-Message">
                        <p class="Message" >
                            You don't have a team yet.<br> To see this page you have to create a team in-game.<br>
                            How to start game you can see below:
                        </p>
                        <button type="button" class="ButtonTeam"><a href="faq.php" class="faq-redirect">How To Start</a></button>
                    </div>
                </div>
                <?php exit();
            }

            // Fetch all results into $teamInfo array
            $teamInfo = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Free result from memory
            $stmt = null;
            foreach ($teamInfo as $teamInfo) { ?>
                <div class="content-wrapper">
                    <div class="team-upper">
                        <div class="title">
                            <h2><?php echo $teamInfo['Name']; ?></h2>
                        </div>
                        <div class="players-wrapper">
                            <?php include 'player.classes.php';
                            $p = new Player();
                            $p->getPlayers($teamInfo['ID']); ?>
                        </div>
                    </div>
                    <div class="team-bottom">
                        <div class="team-wrapper">
                            <h2 class="team-info-title">Team Info</h2>
                            <div class="team-info">
                                <div class="top-info">
                                    <div class="team-logo">
                                        <img src="../Images/<?php echo $teamInfo['ImagePath']; ?>" alt="Team Logo">
                                    </div>
                                    <div class="info-items">
                                        <div class="country-info">
                                            <span class="info-country">Country:</span>
                                            <span class="country-name"><?php echo $teamInfo['Country']; ?></span>
                                        </div>
                                        <div class="prize-info">
                                            <span class="total-prize">Total Prize Money:</span>
                                            <span class="prize-amount"><?php echo $teamInfo['PrizeMoney']; ?>$</span>
                                        </div>
                                        <div class="creation-info">
                                            <span class="creation-date">Date of creation:</span>
                                            <span class="date"><?php echo $teamInfo['CreationDate']; ?></span>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="bottom-info">
                                    <div class="tournament-info">
                                        <div class="achievments">
                                            <h3 class="achievments-title">Achievements</h3>
                                            <div class="placings">
                                                <div class="first-placings">
                                                    <p class="first-place">1st Place:</p>
                                                    <p class="first-amount"><?php echo $teamInfo['1stPlace']; ?></p>
                                                </div>
                                                <div class="second-placings">
                                                    <p class="second-place">2nd Place:</p>
                                                    <p class="second-amount"><?php echo $teamInfo['2ndPlace']; ?></p>
                                                </div>
                                                <div class="third-placings">
                                                    <p class="third-place">3rd Place:</p>
                                                    <p class="third-amount"><?php echo $teamInfo['3rdPlace']; ?></p>
                                                </div>
                                            </div>
                                            <p class="participation">Participation in tournaments: <span
                                                    class="participation-amount"><?php echo $teamInfo['TournamentCount']; ?></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="match-wrapper">
                            <h2 class="match-info-title">Last Matches</h2>
                            <div class="match-info">
                                <div class="match-info-left">
                                    <div class="match-title">Tournament Matches</div>
                                    <?php include 'tournamentmatches.classes.php';
                                        $tm = new tournamentMatch();
                                        $tm->getTournamentStats($teamInfo['ID']); ?>
                                </div>
                                <div class="vertical-separator"></div>
                                <div class="match-info-right">
                                    <div class="match-title">League Matches</div>
                                    <?php include 'leaguematch.classes.php';
                                        $lm = new leagueMatch();
                                        $lm->getLeagueStats($teamInfo['ID']); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }    


        } else { ?>
            <div class="content-wrapper">
                <div class="Error-Message">
                    <p class="Message">
                        To see this page you have to be logged in.
                    </p>
                    <button type="button" class="ButtonTeam">Sign In</button>
                </div>
            </div>
        <?php }
    }
} ?>