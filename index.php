<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="./assets/content/images/favicon.ico">
  <meta name="author" content="Johannes Knudsen, Mikkel Olsen, Mathias Due Larsen & Elias Christensen @ HTX 1Z">
  <meta name="description:" content="VERDEN SKAL HAVE MERE KOMMUNISME!">
  <meta name="theme-color" content="#d20000" />
  <link rel="alternate" hreflang="da-dk" href="http://eksempel.com/da" />
  <link rel="alternate" hreflang="en-us" href="http://eksempel.com/en" />

  <title>BLYATten</title>

  <link type="text/css" rel="stylesheet" href="css/main.css" />
</head>

<header>
  <div class="Topbanner">
    <h1>Your mom gay</h1>
  </div>
</header>

<body>
  <div>
    <h2>Siderne her på siden</h2>
    <a href="./login/">Login siden</a>
    <br>
    <a href="./submit/">Indsend post siden</a>
    <br>
  </div>
  <div class="posts">
    <h1>Indlæg</h1>
    <?php
    require 'php/connect.php';

    $sql = "SELECT * FROM cst_blog ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row["id"];
            $author = $row["author"];
            $heading = $row["heading"];
            $content = $row["content"];
            $imgid = $row["imgid"];
            //  echo "Id: " .  $row["id"]."Forfatter: " .  $row["forfatter"]. "Overskrift: ".$row["overskrift"]. "Indlæg: " .  $row["indlæg"]. "Image: " .  $row["billede"]."<br><hr>";
    ?>
      <h2>Forfatter: </h2>
      <p>
        <?php echo $author; ?>
      </p>
      <h2>ForfatterID: </h2>
      <p>
        <?php echo $id; ?>
      </p>
      <h2>Overskriften er: </h2>
      <p>
        <?php echo $heading; ?>
      </p>
      <h2>Indlæg: </h2>
      <p>
        <?php echo $content; ?>
      </p>
      <h2>Billede: </h2>
      <p>
        <?php echo $imgid?>
      </p>
      <img src="uploads/img/<?php echo $imgid; ?>" height="250" width="250" />

      <img src="uploads/img/<?php echo $imgid; ?>" height="250" width="250" alt="Indlægets billede.">
      <br>
      <hr>
      <?php
        }
    } else {
        echo "0 results";
    }

    mysqli_close($conn);
    ?>
  </div>

</body>


</html>
