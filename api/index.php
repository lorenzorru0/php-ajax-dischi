<?php
require __DIR__ . '/../database.php';

header('Content-Type: application/json');

if (!empty($_GET['genres'])) {
    $genres = [];
    foreach($database as $album) {
        if (in_array($album['genre'], $genres) == false) {
            $genres[] = $album['genre'];
        }
    }
    echo json_encode($genres);
} elseif (!empty($_GET['genre'])) {
    $genre = $_GET['genre'];
    $albumFiltered = [];
    foreach($database as $album) {
        if ($genre == $album['genre']) {
            $albumFiltered[] = $album;
        }
    }
    echo json_encode($albumFiltered);
} else {
    echo json_encode($database);
}
