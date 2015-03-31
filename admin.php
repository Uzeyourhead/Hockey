<?php
session_start();
include_once("config.php");
header('Content-type: text/html; charset=utf-8');


?>


<html>
<head>
	<meta charset="UTF-8">
	<script src="ckeditor/ckeditor.js"></script>
</head>
<body>

<h3>Lägg till spelare</h3>
<form method="post" action="insertplayers.php">
<input type="text" placeholder="Namn" name="surname">
<br>
<input type="text" placeholder="Efternamn" name="lastname">
<br>
<input type="text" placeholder="Födelsedatum" name="birthday">
<br>
<input type="text" placeholder="Stad" name="city">
<br>
<input type="text" placeholder="Land" name="country">
<br>
<input type="text" placeholder="Image" name="image">
<br>
<input type="text" placeholder="URL" name="URL">
<br>
<input type="text" placeholder="Info" name="info">
<br>
<input type="text" placeholder="Bildtext" name="imageText">
<br>
<br>
<input type="submit" value="skicka">
</form>

<h3>Lägg till liga</h3>
<form method="post" action="insertleagues.php">
<input type="text" placeholder="Namn" name="leaguename">
<br>
<input type="text" placeholder="url" name="url">
<br>
<input type="text" placeholder="PoängW" name="scoreW">
<br>
<input type="text" placeholder="PoängOW" name="scoreOW">
<br>
<input type="text" placeholder="PoängOL" name="scoreOL">
<br>
<input type="text" placeholder="CDP" name="CDP">
<br>
<input type="text" placeholder="CSPL" name="CSPL">
<br>
<input type="text" placeholder="Image" name="image">
<br>
<br>
<input type="submit" value="skicka">
</form>

<h3>Lägg till lag</h3>
<form method="post" action="insertteams.php">
<input type="text" placeholder="Lagnamn" name="teamname">
<br>
<input type="text" placeholder="kortnamn" name="Shortname">
<br>
<input type="text" placeholder="url" name="urlteam">
<br>
<input type="text" placeholder="text" name="infoteam">
<br>
<input type="text" placeholder="bild" name="imageteam">
<br>
<br>
<input type="submit" value="skicka">
</form>


<h3>Ny Artikel</h3>
<form method="post" action="insertarticle.php">
<input type="text" placeholder="image" name="image">
<br>
<input type="text" placeholder="thumbnail" name="thumbnail">
<br>
<input type="text" placeholder="imagetext" name="imagetext">
<br>
<input type="text" placeholder="text" name="heading">
<br>
<br>
<textarea name="editor1" id="editor1" rows="10" cols="80">
                This is my textarea to be replaced with CKEditor.
</textarea>
<br>
<br>
<input type="text" placeholder="sammanfattning" name="summary">
<br>
<input type="text" placeholder="prioritering" name="priority">
<br>
<br>
<input type="submit" value="skicka">
</form>

<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>

</body>
</html>