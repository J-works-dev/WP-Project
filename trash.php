<?php
    $reader = Reader::createFromPath(public_path().'/Movies.xlsx', 'r');
    $reader->setHeaderOffset(0);
    $records = $reader->getRecords();
    foreach ($records as $offset => $record) {
        $qs = Question::first();
        $qs->question =  $record['Question'];
        $qs->save();
    }

    $file = fopen($filename, "r");
    $tmpData = fgetcsv($file);
    echo sizeof($tmpData) . "<br>";
    print_r($tmpData[0]);
    $tmpData = array_map("utf8_encode", $tmpData);
    echo "<br>" . $tmpData[0] . "<br>";

    while (($tmpData = fgetcsv($file)) !== FALSE)
    {
        if ($getTitle)
        {
            for ($i = 0; sizeof($tmpData); $i++) {
                $title[$i] = $tmpData[$i];
            }
            $getTitle = false;
        }
        else
        {
            for ($i = 0; sizeof($tmpData); $i++) {
                $sql = "INSERT into movies($title[$i]) value ($tmpData[$i]);";
            }
        }
    }
    fclose($file);
    echo 'CSV File has been successfully Imported';
    header('Location: index.php');

    str_replace("'", "''", $row[1]);
    str_replace('"', '""', $row[1]);
    echo $row[1];

    if (is_int($row[$i]))
    {
        $sql = "INSERT into movies ('$title[$i]') value ($row[$i]);";
        $pdo->query($sql);
    }
    else if (is_float($row[$i]))
    {
        $sql = "INSERT into movies ('$title[$i]') value ($row[$i]);";
        $pdo->query($sql);
    }
    else
    {
        $sql = "INSERT into movies ('$title[$i]') value ('$row[$i]');";
        $pdo->query($sql);
    }


    $sql = "INSERT into movies ($title)
        value ($row[0], '$row[1]', '$row[2]', '$row[3]', '$row[4]', '$row[5]', $row[6], '$row[7]', $row[8], '$row[9]', '$row[10]', $row[11]);";
    $pdo->query($sql);

    // index.php upload form
    <h3>Member List</h3>
    <!-- <?php include 'hot50.php'; ?> -->
    <form action="getCSV.php" enctype="multipart/form-data" method="post" role="form">
        <div class="form-group">
            <label for="exampleInputFile">File Upload</label>
            <input type="file" name="file" id="file" size="200000">
            <p class="help-block">Only Excel/CSV File Import.</p>
        </div>
        <button type="submit" class="btn btn-default" name="submit" value="submit">Upload</button>
    </form>
    <!-- <?php include 'getCSV.php'; ?> -->
?>