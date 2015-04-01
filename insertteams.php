<?php
session_start();
include_once("config.php");
header('Content-type: text/html; charset=utf-8');

@$teamname = $_POST['teamname'];
@$Shortname = $_POST['Shortname'];
@$urlteam = $_POST['urlteam'];
@$infoteam = $_POST['infoteam'];
@$imageteam = $_POST['imageteam'];

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 



$sql = "INSERT INTO `teams` (`name`, `ShortName`, `URL`, `text`, `image`) VALUES
('$teamname', '$Shortname', '$urlteam', '$infoteam', '$imageteam')";


if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: admin.php');
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}
$mysqli->close();
?>

