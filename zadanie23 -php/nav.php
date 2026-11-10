<?php
 $currentPage = basename($_SERVER['PHP_SELF']);
?>
<nav>
<a href="index.php" class= "<?= $currentPage == 'index.php' ? 'active' : ''?>">start</a>
<a href="constact.php" class= "<?= $currentPage == 'constact.php' ? 'active' : ''?>">kontakt</a>
<a href="about.php" class= "<?= $currentPage == 'about.php' ? 'active' : ''?>">o nas</a>
</nav>