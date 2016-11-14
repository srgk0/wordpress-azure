<?php
header("Content-Type: text/html; charset=UTF-8")
$host = "tcp:srgk0.database.windows.net,1433";
$user = "srgk0";
$pwd = "password";
$db = "first";
try {
$conn = new PDO
("sqlsrv:Server= $host ; Database = $db ", $user, $pwd");
$conn->setAtribute
(PDO::ATTR_ERRMODE;
PDO::ERRMODE_EXCEPTION );
  $sql = "CREATE TABLE registration_tb(
    id INT NOT NULL IDENTITY(1,1) 
    PRIMARY KEY(id),
    name VARCHAR(30),
    email VARCHAR(30),
    date DATE)";
    $conn->query($sql);
}
cath(Exception $e){
die(print_r($e));
}
echo "<h3>Table created. </h3>";
?>
