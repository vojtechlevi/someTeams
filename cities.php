<?php

require __DIR__ . "/data.php";

$cities = array();

foreach ($teams as $team) {
    $cities[] = $team['city'];
}

$uniqueCities = array_unique($cities);

?>

<h2>Cities</h2>
<hr>
<div class="cities">
    <?php foreach ($uniqueCities as $city) : ?>
        <p><?= $city ?></p>
    <?php endforeach; ?>
</div>