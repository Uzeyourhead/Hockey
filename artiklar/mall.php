<!DOCTYPE html>
<?php

session_start();
include_once("../config.php");
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../hockey.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
<link rel="stylesheet" href="../css/flexslider.css" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="../js/jquery.flexslider.js"></script>



  </head>
  <body>

  	<div class="header">

      <img class="logo" src="../images/logo.png">

        <div style="width:728px; height:150px; display:block; margin-left:auto; margin-right:auto;">
          <img class="topbanner" src="../images/banner.gif">
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
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
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
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<a class="undermeny" href="#">Nyheter</a>
<a class="undermeny" href="#">Nyheter</a>
<a class="undermeny" href="#">Nyheter</a>
<a class="undermeny" href="#">Nyheter</a>
<a class="undermeny" href="#">Nyheter</a>

<!--<ul class="undermeny">

  <li class="undermli"><a href="#">Nyheter</a></li>
    <li class="undermli"><a href="#">Nyheter</a></li>
    <li class="undermli"><a href="#">Nyheter</a></li>
    <li class="undermli"><a href="#">Nyheter</a></li>
  <li class="undermli"><a href="#">Nyheter</a></li>
</ul>-->

  	</div>


<div class="senasteslide">
</div>

  	<div class="content">
  	<div class="news"> <!--News1 start-->

<div class="slidecontainer">

  <?php
   $test = basename($_SERVER['PHP_SELF']);


    $test1 = str_replace(".php","","$test");

    //current URL of the Page. cart_update.php redirects back to this URL
        $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

        
        
        $results = $mysqli->query("SELECT * FROM `article` WHERE articleUrl = '$test1'");
        if ($results) { 
        $number = "0";
              //fetch results set as object and output HTML
              while($obj = $results->fetch_object())
        {

     echo '<img src="../images/'.$obj->imageName.'" />';

echo '</div>

        <div class="newscontainer">';

         echo '<h3>'.$obj->heading.'</h3>';
          echo '<p>Skrivet av Martin Ericsson inom Hockey, NHL, Ottawa Senators, Daniel Alfredsson den 5 Dec 2014 kl 08:18</p>
          <hr></hr>';

          /*echo '<div class="subarticle">
          <strong><p>Daniel Alfredsson tackades av i Ottawa i natt, och det blev känslosamt för många. Han spenderade 17 säsonger i klubben och jublet visste inga gränser när han återigen beträdde isen i arenan.
          – Tack så enormt mycket, sa Alfredsson under sitt tal.</p></strong>
          </div>';*/

         echo' <div class="taggzon">
            <ul class="tagglist">
              <li>Bobrovsky satte klubbrekord</li>
              <li>Bobrovsky satte klubbrekord</li>
              <li>Bobrovsky satte klubbrekord</li>
              <li>Bobrovsky satte klubbrekord</li>
            </ul>
          </div>';

          echo '
          <p class="articletext" >'.$obj->articleText.'</p>
   
<p>Dela med dig av "'.$obj->heading.'" till dina vänner:</p>';
}
}

?>

<h4>Like knappar</h4>

<div class="skribent">

  <img class="profilbild" src="../images/martin.jpg">

  <div class="skribentinfo">
    <p class="namn">Martin Eriksson</p>
    <p class="titel">Chefsredaktör</p>
    <hr class="line">
    <p class="mer">Läs mer av Martin Ericsson     Maila Martin Ericsson     mareri85</p>
  </div>

</div><!-- End skribent -->

<div class="comments"></div>

</div><!-- End newscontainer 1 -->

<br>


<div class="news"> <!--News2 start-->
<div class="newscontainer">
    <h2>NHL-nyheter</h2>

<?php

    //current URL of the Page. cart_update.php redirects back to this URL
        $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
          
        $results = $mysqli->query("SELECT `thumbnail`,`heading`,`summary`,`articleUrl` FROM `article` ORDER BY id ASC");
        if ($results) { 
        $number = "0";
              //fetch results set as object and output HTML
              while($obj = $results->fetch_object())
        {
          //Article thumbnails


      echo '<a style="color:black;" href="'.$obj->articleUrl.'.php">'; 
        //echo '<a style="color:black;" href="artikel.php">'; 
        echo '<div class="rows">';
         echo '<img src="../images/'.$obj->thumbnail.'">';
          echo '<div style="width:240px;">';
           echo ' <h3>'.$obj->heading.'</h3> ';
          echo '  <p>'.$obj->summary.'</p>';
         echo ' </div>';
       echo ' </div>';
       echo '</a>';

        $number++;

        if ($number == "3") {
        $number = "0";
          echo '<div style="height:5px; width:100%; background:; float:left;"></div>';
        }

      } 

    }
      ?>

       

        <img class="newsbanner" src="../images/banner.gif">

  

      </div><!--/end newscontainer 2-->
      </div><!--/end news2  not needed?-->
  		</div><!--/end news1 -->

<!-- START SIDEBAR-->
<div class="sidebar">

<center>
        <div class="senaste">
          <h3>senaste match</h3>
          <div class="sidebar-row">
          <img class="teamlogo" src="../images/ny.png">
          <span>VS</span>
          <img class="teamlogo" src="../images/ny.png">
      </div>
</center>

<center>
        <div class="senaste">
          <h3>senaste match</h3>
          <div class="sidebar-row">
            <img class="teamlogo" src="../images/ny.png">
            <span>VS</span>
            <img class="teamlogo" src="../images/ny.png">
          </div>
          <div class="sidebar-row1">
            <img class="teamlogo" src="../images/ny.png">
            <span>VS</span>
            <img class="teamlogo" src="../images/ny.png">
        </div>
        <div class="sidebar-row">
            <img class="teamlogo" src="../images/ny.png">
            <span>VS</span>
            <img class="teamlogo" src="../images/ny.png">
          </div>
      </div>
</center>

<div class="sidebanner"><img src="../images/banner.jpg"></div>


<center>
        <div class="senaste">
          <h3>senaste match</h3>
          <div class="sidebar-row">
          <img class="teamlogo" src="../images/ny.png">
          <span>VS</span>
          <img class="teamlogo" src="../images/ny.png">
        </div>
      </div>
</center>

<center>
        <div class="senaste">
          <h3>senaste match</h3>
          <div class="sidebar-row">
          <img class="teamlogo" src="../images/ny.png">
          <span>VS</span>
          <img class="teamlogo" src="../images/ny.png">
        </div>
      </div>
</center>

<div class="sidebanner"><img src="../images/banner.jpg"></div>

<center>
        <div class="senaste">
          <h3>senaste match</h3>
          <div class="sidebar-row">
          <img class="teamlogo" src="../images/ny.png">
          <span>VS</span>
          <img class="teamlogo" src="../images/ny.png">
        </div>
      </div>
</center>

<center>
        <div class="senaste">
          <h3>senaste match</h3>
          <div class="sidebar-row">
          <img class="teamlogo" src="../images/ny.png">
          <span>VS</span>
          <img class="teamlogo" src="../images/ny.png">
        </div>
      </div>
</center>

</div> 
<!-- END SIDEBAR-->
</div>
<!-- END CONTENT-CONTAINER-->


<!-- START FOOTER-->
<div class="footer">

<ul class="footerlinks">
 <li class="undermli"><a style="text-decoration:none; color:lightgrey;" href="#">Nyheter</a></li>
    <li class="undermli"><a style="text-decoration:none; color:lightgrey;" href="#">Nyheter</a></li>
    <li class="undermli"><a style="text-decoration:none; color:lightgrey;" href="#">Nyheter</a></li>
    <li class="undermli"><a style="text-decoration:none; color:lightgrey;" href="#">Nyheter</a></li>
  <li class="undermli"><a style="text-decoration:none; color:lightgrey;" href="#">Nyheter</a></li>
</ul>

<ul class="footerlinks">
 <li class="undermli"><a style="text-decoration:none; color:lightgrey;" href="#">Nyheter</a></li>
    <li class="undermli"><a style="text-decoration:none; color:lightgrey;" href="#">Nyheter</a></li>
    <li class="undermli"><a style="text-decoration:none; color:lightgrey;" href="#">Nyheter</a></li>
    <li class="undermli"><a style="text-decoration:none; color:lightgrey;" href="#">Nyheter</a></li>
  <li class="undermli"><a style="text-decoration:none; color:lightgrey;" href="#">Nyheter</a></li>
</ul>

<ul class="footerlinks">
 <li class="undermli"><a style="text-decoration:none; color:lightgrey;" href="#">Nyheter</a></li>
    <li class="undermli"><a style="text-decoration:none; color:lightgrey;" href="#">Nyheter</a></li>
    <li class="undermli"><a style="text-decoration:none; color:lightgrey;" href="#">Nyheter</a></li>
    <li class="undermli"><a style="text-decoration:none; color:lightgrey;" href="#">Nyheter</a></li>
  <li class="undermli"><a style="text-decoration:none; color:lightgrey;" href="#">Nyheter</a></li>
</ul>


<ul class="footerlinks">
 <li class="undermli"><a style="text-decoration:none; color:lightgrey;" href="#">Nyheter</a></li>
    <li class="undermli"><a style="text-decoration:none; color:lightgrey;" href="#">Nyheter</a></li>
    <li class="undermli"><a style="text-decoration:none; color:lightgrey;" href="#">Nyheter</a></li>
    <li class="undermli"><a style="text-decoration:none; color:lightgrey;" href="#">Nyheter</a></li>
  <li class="undermli"><a style="text-decoration:none; color:lightgrey;" href="#">Nyheter</a></li>
</ul>

</div>

<!-- END FOOTER -->


    <script type="text/javascript" charset="utf-8">
    $(window).load(function() {
      $('.flexslider').flexslider();
    });
    </script>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>