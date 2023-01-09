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

<?php if (isset($_SESSION["ID"])) {
    // Check if the user is an admin
        if ($_SESSION["Admin"] == 1) { ?>
            <a href="admin.php" class="<?php if ($page == 'admin') {
            echo 'active';
            } ?>">&#9881; Admin</a>
        <?php }
    mysqli_close($conn);
} ?>
</nav>