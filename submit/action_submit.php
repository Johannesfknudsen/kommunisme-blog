<?php
    require '../php/connect.php';
    require '../php/upload.php';

        //Inserts lines into table
    $sql = "INSERT INTO jemm_post (author, heading, content)
    VALUES ('$author', '$heading', '$content')";

        if (mysqli_query($conn, $sql)) {
        echo "Du har logget ind på bloggen.\n";
        }
        else{
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

        //Close connection to DB
    mysqli_close($conn);


 ?>
