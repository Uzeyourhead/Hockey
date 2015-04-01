<?php
session_start();
include_once("config.php");
header('Content-type: text/html; charset=utf-8');

@$image = $_POST['image'];
@$thumbnail = $_POST['thumbnail'];
@$imageText = $_POST['imagetext'];
@$heading = $_POST['heading'];
@$articletext = $_POST['editor1'];
@$summary = $_POST['summary'];
@$priority = $_POST['priority'];

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 



$sql = "INSERT INTO `article` (`imageName`, `thumbnail`, `imageText`, `heading`, `articleText`, `summary`, `priority`) VALUES
('$image', '$thumbnail', '$imageText', '$heading', '$articletext','$summary','$priority')";


if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: admin.php');
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}
$mysqli->close();
?>




