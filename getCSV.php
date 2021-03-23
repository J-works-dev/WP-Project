<?php
    include('SimpleCSV.php');
    if (isset($_POST["submit"]))
    {
        require("connect.php");
        $filename = $_FILES["file"]["tmp_name"];
        $getTitle = true;

        if ( $csv = SimpleCSV::import('Movies.csv') ) {
            // print_r( $csv );
            foreach ($csv as $row)
            {
                if ($getTitle)
                {
                    $title = $row;
                    array_push($title, "Search");
                    $getTitle = false;
                }
                else
                {
                    $rnd = rand(0, 1000);
                    array_push($row, $rnd);
                    // str_replace("'", "\\\'", $row[1]);
                    echo addslashes($row[1]);
                    $sql = "INSERT into movies (ID, Title, Studio, Status, Sound, Versions, Price, Rating, Year, Genre, Aspect, Search)
                            value ($row[0], '$row[1]', '$row[2]', '$row[3]', '$row[4]', '$row[5]', $row[6], '$row[7]', $row[8], '$row[9]', '$row[10]', $row[11]);";
                    $pdo->query($sql);

                    //     for ($i = 0; $i < (sizeof($row) + 1); $i++) {
                    //     $rnd = rand(0, 1000);
                    //     array_push($row, $rnd);
                    //     // echo $title[$i];
                    //     // echo $row[0];
                    //     // $sql = "INSERT into movies ($title[$i]) value ($row[0]);";
                    //     // $pdo->query($sql);
                    //     if (is_int($row[$i]))
                    //     {
                    //         $sql = "INSERT into movies ('$title[$i]') value ($row[$i]);";
                    //         $pdo->query($sql);
                    //     }
                    //     else if (is_float($row[$i]))
                    //     {
                    //         $sql = "INSERT into movies ('$title[$i]') value ($row[$i]);";
                    //         $pdo->query($sql);
                    //     }
                    //     else
                    //     {
                    //         $sql = "INSERT into movies ('$title[$i]') value ('$row[$i]');";
                    //         $pdo->query($sql);
                    //     }
                    // }
                }
            }
            echo 'CSV File has been successfully Imported';
            // header('Location: index.php');
        } else {
            echo SimpleCSV::importError();
        }
    }
    $pdo = null;
?>