<?php

require __DIR__ . "/data.php";

?>

<table>
    <tr>
        <th>Team</th>
        <th>League</th>
        <th>Champions</th>
        <th>City</th>
        <th>Website</th>
        <th>Nickname</th>
    </tr>
    <?php foreach ($teams as $key => $team) : ?>
        <tr>
            <td><?= $key ?></td>
            <td><?= $team['league'] ?></td>
            <td><?= $team['last-time-champions'] ?></td>
            <td><?= $team['city'] ?></td>
            <td><a href="<?= $team['url'] ?>"><?= $key ?></td>
            <?php if (array_key_exists('nickname', $team)) : ?>
                <td><?= $team['nickname'] ?></td>
            <?php endif; ?>
        </tr>
    <?php endforeach; ?>
</table>