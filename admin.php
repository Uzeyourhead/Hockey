<?php
session_start();
include_once("config.php");
header('Content-type: text/html; charset=utf-8');


?>


<html>
<head>
	<link href="assets/css/croppic.css" rel="stylesheet">
	<meta charset="UTF-8">
	<script src="ckeditor/ckeditor.js"></script>
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="hockey.css" rel="stylesheet">

	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Mrs+Sheppards&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

<html>
<head>
	<meta charset="UTF-8">
	<script src="ckeditor/ckeditor.js"></script>
</head>
<body>

<div class="header">
      <img class="logo" src="finlogo.png">
        <div style="width:728px; height:150px; display:block; margin-left:auto; margin-right:auto;">
          <img class="topbanner" src="images/banner.gif">
        </div>
        <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="hockeysporten.html">Hockeysporten</a>
    </div> 

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Nyheter <span class="sr-only">(current)</span></a></li>
        <li><a href="admin.php">Resultat</a></li>
        <li><a href="#">Spelschema</a></li>
        <li><a href="#">Tabeller</a></li>
        <li><a href="#">Statestik</a></li>
        <li><a href="#">Ligor</a></li>


      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Logga in <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

	<div class="senasteslide">
	</div>

	<a class="undermeny" href="artikel.php">Nyheter</a>
	<a class="undermeny" href="lag.php">Lag</a>
	<a class="undermemy" href="spelschema.php">Spelschema</a>
	<a class="undermeny" href="#">Nyheter</a>
	<a class="undermeny" href="#">Nyheter</a>

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
	
	<div id="cropContaineroutput"></div>
	<input type="hidden" name="image" id="cropOutput" style="width:100%; padding:5px 4%; margin:20px auto; display:block; border: 1px solid #CCC;" />

	<div id="cropContaineroutput"></div>
	<input type="hidden" name="image" id="cropOutput" style="width:100%; padding:5px 4%; margin:20px auto; display:block; border: 1px solid #CCC;" />
	


	<input type="text" placeholder="image" value="">
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
	   

	    <!-- Bootstrap core JavaScript
	    ================================================== -->
	    <!-- Placed at the end of the document so the pages load faster -->
	    <!-- <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script> -->
		<script src=" https://code.jquery.com/jquery-2.1.3.min.js"></script>
	   
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery.mousewheel.min.js"></script>
	   	<script src="croppic.min.js"></script>
	    <script src="assets/js/main.js"></script>
	    <script>
			var croppicHeaderOptions = {
					//uploadUrl:'img_save_to_file.php',
					cropData:{
						"dummyData":1,
						"dummyData2":"asdas"
					},
					cropUrl:'img_crop_to_file.php',
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
					uploadUrl:'img_save_to_file.php',
					cropUrl:'img_crop_to_file.php', 
					outputUrlId:'cropOutput',
					modal:true,
					imgEyecandyOpacity:0.4,
					loaderHtml:'<div class="loader bubblingG"><span id="bubblingG_1"></span><span id="bubblingG_2"></span><span id="bubblingG_3"></span></div> '
			}
			var cropContaineroutput = new Croppic('cropContaineroutput', croppicContaineroutputOptions);
			
			
			
			
	</script>
</body>
</html>