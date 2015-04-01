<?php
session_start();
include_once("config.php");
header('Content-type: text/html; charset=utf-8');


?>


<html>
<head>

	<link href="js/croppic/assets/css/croppic.css" rel="stylesheet">
	<meta charset="UTF-8">
	<script src="ckeditor/ckeditor.js"></script>
	<script src="js/croppic/croppic.min.js"></script>
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

<div style="height:300px; width:500px;">
			<div class="col-lg-4 ">
				<h4 class="centered"> OUTPUT </h4>
				<p class="centered">( display url after cropping )</p>
				<div id="cropContaineroutput"></div>
				<input type="text" id="cropOutput" style="width:100%; padding:5px 4%; margin:20px auto; display:block; border: 1px solid #CCC;" />
			</div>
			</div>



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

<script src=" https://code.jquery.com/jquery-2.1.3.min.js"></script>
   
	
   	<script src="js/croppic/croppic.min.js"></script>
    <script src="js/croppic/croppictest.js"></script>
             


             <!-- <script>
		var croppicHeaderOptions = {
				//uploadUrl:'img_save_to_file.php',
				cropData:{
					"dummyData":1,
					"dummyData2":"asdas"
				},
				cropUrl:'js/croppic/img_crop_to_file.php',
				customUploadButtonId:'cropContainerHeaderButton',
				modal:false,
				processInline:true,
				loaderHtml:'<div class="loader bubblingG"><span id="bubblingG_1"></span><span id="bubblingG_2"></span><span id="bubblingG_3"></span></div> ',
				onBeforeImgUpload: function(){ console.log('onBeforeImgUpload') },
				onAfterImgUpload: function(){ console.log('onAfterImgUpload') },
				onImgDrag: function(){ console.log('onImgDrag') },
				onImgZoom: function(){ console.log('onImgZoom') },
				onBeforeImgCrop: function(){ console.log('onBeforeImgCrop') },
				onAfterImgCrop:function(){ console.log('onAfterImgCrop') },
				onError:function(errormessage){ console.log('onError:'+errormessage) }
		}	
		var croppic = new Croppic('croppic', croppicHeaderOptions);
		
		

		
		var croppicContaineroutputOptions = {
				uploadUrl:'js/croppic/img_save_to_file.php',
				cropUrl:'js/croppic/img_crop_to_file.php', 
				outputUrlId:'cropOutput',
				modal:false,
				loaderHtml:'<div class="loader bubblingG"><span id="bubblingG_1"></span><span id="bubblingG_2"></span><span id="bubblingG_3"></span></div> '
		}
		var cropContaineroutput = new Croppic('cropContaineroutput', croppicContaineroutputOptions);
		
		
		
		
	</script>-->

</body>
</html>