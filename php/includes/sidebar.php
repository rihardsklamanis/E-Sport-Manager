<div class="sidebar-logo">
    <a href="index.php"><img src="Images/ESM-Sidebar.png" alt="ESM-Logo" class="logo-sidebar"></a>
</div>
<nav class="navbar">
    <a href="index.php" class="<?php if ($page == 'home') {
        echo 'active';
    } ?>">Home</a>
    <a href="leaderboard.php" class="<?php if ($page == 'leaderboard') {
        echo 'active';
    } ?>">Leaderboard</a>
    <a href="team.php" class="<?php if ($page == 'team') {
        echo 'active';
    } ?>">Team</a>
    <a href="tournaments.php" class="<?php if ($page == 'tournaments') {
        echo 'active';
    } ?>">Tournaments</a>
    <a href="faq.php" class="<?php if ($page == 'faq') {
        echo 'active';
    } ?>">FAQ</a>
    <a href="contact.php" class="<?php if ($page == 'contact') {
        echo 'active';
    } ?>">Contact Us</a>
</nav>