<?php
session_start();
$is_logged_in = isset($_SESSION['username']);

$current_page = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar navbar-expand-lg" style="-webkit-box-shadow: 0 5.5px 10px 3px #dddddd;
-moz-box-shadow: 0 5.5px 10px 3px #dddddd;
box-shadow: 0 5.5px 10px 3px #dddddd; background-color: red;" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="./index.php">SecondHadry</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?= ($current_page == 'index.php') ? 'active' : '' ?>" aria-current="page" href="./index.php">Home</a>
                </li>
                <?php if (!$is_logged_in): ?>
                    <li class="nav-item">
                        <a class="nav-link <?= ($current_page == 'login.php') ? 'active' : '' ?>" href="./login.php">Přihlásit se</a>
                    </li>
                <?php endif; ?>
                <?php if ($is_logged_in): ?>
                    <li class="nav-item">
                        <a class="nav-link <?= ($current_page == 'addItem.php') ? 'active' : '' ?>" href="./addItem.php">Moje inzeráty</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./phpscripts/logout.php">Odhlásit se</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
