<?php
            // $reader = Reader::createFromPath(public_path().'/Movies.xlsx', 'r');
            // $reader->setHeaderOffset(0);
            // $records = $reader->getRecords();
            // foreach ($records as $offset => $record) {
            //     $qs = Question::first();
            //     $qs->question =  $record['Question'];
            //     $qs->save();
            // }

            // $file = fopen($filename, "r");
            // $tmpData = fgetcsv($file);
            // echo sizeof($tmpData) . "<br>";
            // print_r($tmpData[0]);
            // $tmpData = array_map("utf8_encode", $tmpData);
            // echo "<br>" . $tmpData[0] . "<br>";

            // // while (($tmpData = fgetcsv($file)) !== FALSE)
            // // {
            // //     if ($getTitle)
            // //     {
            // //         for ($i = 0; sizeof($tmpData); $i++) {
            // //             $title[$i] = $tmpData[$i];
            // //         }
            // //         $getTitle = false;
            // //     }
            // //     else
            // //     {
            // //         for ($i = 0; sizeof($tmpData); $i++) {
            // //             $sql = "INSERT into movies($title[$i]) value ($tmpData[$i]);";
            // //         }
            // //     }
            // // }
            // fclose($file);
            echo 'CSV File has been successfully Imported';
            // header('Location: index.php');

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

?>