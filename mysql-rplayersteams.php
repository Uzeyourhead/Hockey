<?php
include_once("config.php");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 

// sql to create table
$sql = "
CREATE TABLE rPlayerTeams
(
ID int  NOT NULL AUTO_INCREMENT,
player varchar(255),
team varchar(255),
start varchar(255),
end varchar(255),
PRIMARY KEY (ID)
)";

if ($mysqli->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $mysqli->error;
}

$mysqli->close();
?>



