<?php
$pdo = new PDO('mysql:host=localhost;dbname=rightcapital', 'root', '$OPlx19911010');
$query = "INSERT INTO song (artist, track, link) VALUES (:artist, :track, :link)";
$stmt = $pdo->prepare($query);
$params = array(
    "artist" => $artist,
    "track" => $track,
    "link" => $link,
);
$data = $stmt->execute($params);
$insert_id = $pdo->lastInsertId();