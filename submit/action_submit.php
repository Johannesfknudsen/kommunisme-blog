<?php
    require '../php/connect.php';
    require '../php/upload.php';
    $author = $_POST["InputName"];
    $email = $_POST["InputEmail"];
    $category = $_POST["SelectCategory"];
    $heading = $_POST["InputHeading"];
    $content = $_POST["Textarea"];
    $NSFW = $_POST["SelectNSFW"];
    $agree = $_POST["SelectAgree"];

        //Inserts lines into table
    $sql = "INSERT INTO jemm_post (author, email, category, heading, content, NSFW, imgid)
    VALUES ('$author', '$email', '$category', '$heading', '$content', '$NSFW', '$imgid')";


        if (mysqli_query($conn, $sql)) {
        echo "Hej "<?php echo $author; ?>", du har indsendt et indlæg til bloggen under emailadressen " <?php echo $email; ?>".\n Overskriften er " <?php echo $heading; ?> "Kategorien er " <?php echo $category; ?> "Og indholdet er " <?php echo $content; ?>;
        }
        else{
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

        //Close connection to DB
    mysqli_close($conn);

?>
