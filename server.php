<?php
    require __DIR__ . '/partials/database.php';
    header('Content-Type: application/json');
    // echo json_encode($database);

    // bonus
    $filter = $_GET['artist'];
    if ($filter != '') {
        $filtered = [];
        foreach ($database as $album) {
            if ($album['author'] == $filter) {
                $filtered[] = $album;
            };
        };
        $database = $filtered;
    };

    echo json_encode($database);
?>