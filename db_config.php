<?php
$servername = "localhost";
$dbname = "dbms_project";
define("USER", "root");
define("PASS", "");


try {
   $conn = new PDO("mysql:host=$servername;dbname=$dbname", constant("USER"), constant("PASS"));
   // set the PDO error mode to exception
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
   echo "<h3>Sorry 404</h3>";
   echo "<h4>The problem is on our side.</h4></br></br>";
   echo "Error Code: Connection failed: " . $e->getMessage();
}
