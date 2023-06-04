<!DOCTYPE html>
<html>
<head>
<meta charset = "utf-8">
  <title>Create MySQL DB on Azure</title>
  </head>
  <body>
    <?php
    // replace user and password
    $host = "server00100.database.windows.net";
    $user = "jbchurch1@ccis.edu";
    $password = "CloudSAb695c0ef";
    // connect
    $conn = mysqli_connect($host, $user, $password);
    if($conn)
      echo "<p>Connection is good</p>";
    // drop database
    $query = "DROP DATABASE IF EXISTS visitorDB";
    mysqli_query($conn, $query);
    // create sql query
    $query = "CREATE DATABASE visitorDB";
    // execute
    if(mysqli_query($conn, $query))
      echo "<p>Database created</p>";
    // database created, need tables
    mysqli_select_db($conn, "visitorDB");
    $query = "CREATE TABLE visitor
    (
    visitorid INTEGER AUTO_INCREMENT,
    visitorName VARCHAR(100) NOT NULL,
    visitTime TIMESTAMP DEFAULT NOW(),
    PRIMARY KEY(visitorid)
    )";
    if(mysqli_query($conn, $query))
      echo "<p> Table created </p>";
    // close
    mysqli_close($conn);
    ?>
  </body>
</html>
