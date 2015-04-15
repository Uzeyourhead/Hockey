<!DOCTYPE html>
<?php

session_start();
include_once("config.php");
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hockeysporten.se</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="hockey.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
<link rel="stylesheet" href="css/flexslider.css" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="js/jquery.flexslider.js"></script>



  </head>
  <body>

    <!-- START HEADER-->
  	<div class="header">

      <img class="logo" src="images/logo.png">

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

<a class="undermeny" href="artikel.php">Nyheter</a>
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
    <!-- END HEADER-->


<div class="senasteslide">
</div>
      
      <!-- START CONTENT-CONTAINER)-->
  	<div class="content"> 
      <!-- START NEWS-->
      <div class="news"> 

<div class="slidecontainer">
<div class="flexslider">
  <ul class="slides">
    <?php
    $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    
  $results = $mysqli->query("SELECT `imageName`,`articleUrl` FROM `article` WHERE `priority`<= '3' ORDER BY `priority`");
    if ($results) { 

      
        while($obj = $results->fetch_object())
  {

    echo '<li>';
    echo '<a href="artiklar/'.$obj->articleUrl.'.php">';
      echo '<img src="images/'.$obj->imageName.'" />';
    echo '</a>'; 
    echo '</li>';

  }

   

}
    ?>
  </ul>
</div> 
</div>

        <!-- START NEWSAREA (THUMBNAILS...)-->
        <div class="newscontainer">

        
          <img class="newsbanner" src="images/banner.gif"> <!-- REKLAMBANNER-->

      <?php

    //current URL of the Page. cart_update.php redirects back to this URL
        $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
          
        $results = $mysqli->query("SELECT `thumbnail`,`heading`,`summary`,`articleUrl` FROM `article` ORDER BY `priority`");
        if ($results) { 
        $number = "0";
              //fetch results set as object and output HTML
              while($obj = $results->fetch_object())
        {
          //Article thumbnails


      echo '<a style="color:black;" href="artiklar/'.$obj->articleUrl.'.php">'; 
        //echo '<a style="color:black;" href="artikel.php">'; 
        echo '<div class="rows">';
         echo '<img src="images/'.$obj->thumbnail.'">';
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

        <img class="newsbanner" src="images/banner.gif">



      </div>
      <!-- END NEWSCONTIANER-->
  		</div>
      <!-- END NEWS-->


<!-- START SIDEBAR-->
<div class="sidebar">

  <center>
        <div class="senaste">
          <h3 class="sidebar-heading">Mest lästa</h3>

        <a href="">
          <div class="mostread1">
        <div class="float-left">
           <h4 class="mostreadtitle">Bobrovsky satte klubbrekord</h4>
        </div>

        <div class="float-right">
            <img class="mostreadimg" src="images/thumbnail.jpg">
        </div>
     

      </div>
    </a>

    <a href="">
        <div class="mostread">
        <div class="float-left">
           <h4 class="mostreadtitle">Brodeur föll i debuten</h4>
        </div>
    

        <div class="float-right">
            <img class="mostreadimg" src="images/thumbnail1.jpg">
        </div>

      </div>
    </a>

         <a href="">
          <div class="mostread1">
        <div class="float-left">
           <h4 class="mostreadtitle">Läck bommade igen kassen</h4>
        </div>

        <div class="float-right">
            <img class="mostreadimg" src="images/thumbnail.jpg">
        </div>

      </div>
     </a>

    
       <a href=""> 
        <div class="mostread">
        <div class="float-left">
           <h4 class="mostreadtitle">Philadelphia Flyers</h4>
        </div>

        <div class="float-right">
            <img class="mostreadimg" src="images/thumbnail1.jpg">
        </div>

        </div>
      </a>

      
              



    </div>
</center>




<div class="sidebanner"><img src="images/banner.jpg"></div>


<center>
        <div class="senaste">
          <h3 class="sidebar-heading">Spelschema</h3>
        <div class="containter-spelschema1">
        <div class="float-left">
          <a href="">
            <img class="teamlogo1" src="images/ny.png">
            <p class="p-spelschema">Philadelphia Flyers</p>
          </a>
        </div>

        <div class="spelschema-info">
            <p class="spelschema-vs">VS.</p><p class="spelschema-date">Om 2 timmar</p>
        </div>

        <div class="float-left">
          <a href="">
            <img class="teamlogo1" src="images/calgary.png">
             <p class="p-spelschema">Winnipeg</p>
          </a>
        </div>
      </div>

          <div class="containter-spelschema">
        <div class="float-left">
          <a href="">
            <img class="teamlogo1" src="images/colorado.png">
            <p class="p-spelschema">Philadelphia flyers</p>
          </a>
        </div>

        <div class="spelschema-info">
            <p class="spelschema-vs">VS.</p><p class="spelschema-date">Om 43 minuter</p>
        </div>

        <div class="float-left">
          <a href="">
            <img class="teamlogo1" src="images/colorado.png">
             <p class="p-spelschema">New York Rangers</p>
          </a>
        </div>
      </div>

              <div class="containter-spelschema1">
        <div class="float-left">
          <a href="">
            <img class="teamlogo1" src="images/ny.png">
            <p class="p-spelschema">Philadelphia Flyers</p>
          </a>
        </div>

        <div class="spelschema-info">
            <p class="spelschema-vs">VS.</p><p class="spelschema-date">Om 2 timmar</p>
        </div>

        <div class="float-left">
          <a href="">
            <img class="teamlogo1" src="images/calgary.png">
             <p class="p-spelschema">Winnipeg Jets</p>
            </a>
        </div>
      </div>

          <div class="containter-spelschema">
        <div class="float-left">
          <a href="">
            <img class="teamlogo1" src="images/colorado.png">
            <p class="p-spelschema">Philadelphia Flyers</p>
          </a>
        </div>

        <div class="spelschema-info">
            <p class="spelschema-vs">VS.</p><p class="spelschema-date">18 April 2015</p>
        </div>

        <div class="float-left">
          <a href="">
            <img class="teamlogo1" src="images/colorado.png">
             <p class="p-spelschema">New York Rangers</p>
            </a>
        </div>
      </div>




    </div>
</center>

<center>
        <div class="senaste">
          <h3 class="sidebar-heading">Resultat</h3>
        <div class="containter-spelschema1">
        <div class="float-left">
          <a href="">
            <img class="teamlogo1" src="images/ny.png">
            <p class="p-resultat">Philadelphia Flyers</p>
          </a>
        </div>

        <div class="resultat-score">
            <p>5 - 1</p>
        </div>

        <div class="float-left">
          <a href="">
            <img class="teamlogo1" src="images/calgary.png">
             <p class="p-resultat">Winnipeg Jets</p>
          </a>
        </div>
      </div>

          <div class="containter-spelschema">
        <div class="float-left">
          <a href="">
            <img class="teamlogo1" src="images/colorado.png">
            <p class="p-resultat">Philadelphia Flyers</p>
          </a>
        </div>

        <div class="resultat-score">
            <p>5 - 2</p>
        </div>

        <div class="float-left">
          <a href="">
            <img class="teamlogo1" src="images/colorado.png">
             <p class="p-resultat">New York Rangers</p>
          </a>
        </div>
      </div>

              <div class="containter-spelschema1">
        <div class="float-left">
          <a href="">
            <img class="teamlogo1" src="images/ny.png">
            <p class="p-resultat">Philadelphia Flyers</p>
          </a>
        </div>

        <div class="resultat-score">
            <p>5 - 3</p>
        </div>

        <div class="float-left">
          <a href="">
            <img class="teamlogo1" src="images/calgary.png">
             <p class="p-resultat">Winnipeg Jets</p>
          </a>
        </div>
      </div>

          <div class="containter-spelschema">
        <div class="float-left">
          <a href="">
            <img class="teamlogo1" src="images/colorado.png">
            <p class="p-resultat">Philadelphia Flyers</p>
          </a>
        </div>

        <div class="resultat-score">
            <p>5 - 4</p>
        </div>

        <div class="float-left">
          <a href="">
            <img class="teamlogo1" src="images/colorado.png">
             <p class="p-resultat">New York Rangers</p>
          </a>
        </div>
      </div>




    </div>
</center>




<div class="sidebanner"><img src="images/banner.jpg"></div>

<center>
        <div class="senaste">
          <h3>senaste match</h3>
          <div class="sidebar-row">
          <img class="teamlogo" src="images/ny.png">
          <span>VS</span>
          <img class="teamlogo" src="images/ny.png">
        </div>
      </div>
</center>

<center>
        <div class="senaste">
          <h3>senaste match</h3>
          <div class="sidebar-row">
          <img class="teamlogo" src="images/ny.png">
          <span>VS</span>
          <img class="teamlogo" src="images/ny.png">
        </div>
      </div>
</center>

</div> 
<!-- END SIDEBAR-->


</div> 
<!-- END CONTENTCONTAINER-->

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
<!-- END FOOTER-->
  


    <script type="text/javascript" charset="utf-8">
    $(window).load(function() {
      $('.flexslider').flexslider();
    });
    </script>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>