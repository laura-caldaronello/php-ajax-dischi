<?php
    include __DIR__ . '/../database.php';
    include __DIR__ . '/../vars.php';
?>

<main>
    <ul id="music-container">
    <?php
        foreach ($database as $k => $album) {
    ?>
            <li>
                <img src="
                    <?php
                        echo $album['poster'];
                    ?>
                ">
                <h3>
                    <?php
                        echo $album['title'];
                    ?>
                </h3>
                <h4>
                    <?php
                        echo $album['author'];
                    ?>
                    <br>
                    <?php
                        echo $album['year'];
                    ?>
                </h4>
            </li>
    <?php
        };
    ?>
    </ul>
</main>
