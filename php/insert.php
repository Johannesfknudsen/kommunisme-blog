<?php
        //connect-file necessary
    require 'connect.php';

        //initialize variables
    $user = $_POST["user"];
    $psw =$_POST["psw"];
    $psw =$_POST["overskrift"];
    $indlæg =$_POST["indlæg"];


        // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }

        //Inserts lines into table
    $sql = "INSERT INTO cst_blog (forfatter, keywords, overskrift, indlæg)
   VALUES ('$forfatter', '$keywords', '$overskrift', '$indlæg')";

        if (mysqli_query($conn, $sql)) {
        echo "Du har logget ind på bloggen.\n";
        }
        else{
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

        //Close connection to DB
    mysqli_close($conn);

?>
