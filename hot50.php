<?php
    require("connect.php");
    $sql = "SELECT * FROM movies
            ORDER BY Search DESC
            LIMIT 50;";
    $pdo->query($sql);
?>