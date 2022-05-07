<?php

# your database info >>
$host = "localhost";
$dbuser = "Database Username";
$dbpassword = "Database Password";
$dbname = "Database Name";

$mysql = mysqli_connect($host, $dbuser, $dbpassword, $dbname); #connect to db
if (!$mysql) {
exit();
}


# just create new table >
$sql1 = "CREATE TABLE IF NOT EXISTS data (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
text VARCHAR(500) NOT NULL,
date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($mysql->query($sql1) === TRUE) {
} else {
}

# insert data into db >>

$up = $mysql->prepare("INSERT INTO data (text) VALUES (?)"); # prepare data

$up->bind_param ("s",$name);

# $name variable is came from index.php page

$up->execute();
$up->close();
$mysql->close();
exit();

# powered by Encept Corporation
# https://encept.co
?>