<div class="inner_header">
    <div class="header_left">
        <div class="greeting login">
            <?php
            session_start();
            if (isset($_SESSION["ID"])) {
            ?>
            <div class="greeting-container">
                <p class="greeting-text">Welcome,</p>
                <p class="player-name">
                   <?php echo $_SESSION["Username"]; ?>
                </p>
            </div>
            <form class="logout-form" action="php/includes/logout.php" method="POST">
                <input type="Submit" class="logout-btn" value="Logout">
            </form>
            <?php
            } else {
            ?>
            <button type="button" class="LoginBtn">SignIn/SignUp</button>
            <?php
            }
            ?>
        </div>
    </div>
    <div class="header_center">
        <input type="image" src="Images/sidebar-4.png" name="Sidebar toggle" alt="Sidebar toggle"
            class="sidebar-toggle toggle-hidden">
    </div>
    <div class="header_right">
        <a href="/Download/ExampleOfDownload.txt" class="download-link" download>Download game</a>
        <div class="Header-Logo">
            <img src="Images/ESM-Header.png" alt="ESM-Logo" class="logo-header">
        </div>
    </div>
</div>