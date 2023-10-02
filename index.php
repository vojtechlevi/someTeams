<?php
require __DIR__ . "/header.php";
?>

<h1>Some Teams</h1>
<main class="container">

    <p>Total number of teams: <?php require __DIR__ . "/teams.php" ?></p>

    <?php require __DIR__ . "/table.php" ?>
    <div class="cities-container"><?php require __DIR__ . "/cities.php" ?></div>

</main>
</body>

</html>