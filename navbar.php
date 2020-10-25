<ul class="navbar">
    <li><a href="dashboard.php" <?php if(preg_match("/\S*(dashboard.php?show=def)\S*/", $_SERVER['REQUEST_URI'])){echo 'class="active"';}?>><i class="fas fa-home"></i> Home</a></li>
    <?php if($_SESSION['role'] === "1") : ?>
        <li><a href="addChoco.php" <?php if(preg_match("/\S*(addChoco.php)\S*/", $_SERVER['REQUEST_URI'])){echo 'class="active"';}?>><i class="fas fa-plus"></i> Add Choco</a></li>
    <?php else : ?>
        <li><a href="history.php" <?php if(preg_match("/\S*(history.php)\S*/", $_SERVER['REQUEST_URI'])){echo 'class="active"';}?>><i class="fas fa-history"></i> History</a></li>
    <?php endif; ?>
    <li class="search">
        <form action="dashboard.php" method="GET">
            <input type="text" placeholder="Search" name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </li>
    <li style="float:right; width:110px;"><a href="assets/php/logoutprocess.php" style="text-align: right;"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
</ul>