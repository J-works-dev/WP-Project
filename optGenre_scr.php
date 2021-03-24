<?php
    require("connect.php");
    $sql = "SELECT Genre
            FROM movies";
    $result = $pdo->query($sql);

    if ($result->rowcount() > 0) {
        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $genre = $row["Genre"];
            echo "<option value=\"$genre\"></option>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
?>