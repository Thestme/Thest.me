<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Wellcome to Thest</title>
	<link rel="stylesheet"  type="text/css" href="../css/master-page.css">
	<link rel="stylesheet" type="text/css" href="../css/metro-bootstrap.css">
	<link href="http://cleancanvas.herokuapp.com/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://cleancanvas.herokuapp.com/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="http://cleancanvas.herokuapp.com/css/bootstrap-overrides.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/theme.css">
    <link rel="stylesheet" href="css/index.css" type="text/css" media="screen">

    <link href="css/css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/animate.css" media="screen, projection">  

	<style type="text/css"></style>
</head>
<body class="pull_top" style="" cz-shortcut-listen="true">
	<!--inicio menu -->
    <div class="navbar transparent navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="http://cleancanvas.herokuapp.com/index.html">
                <strong>THEST</strong>
            </a>
            <div class="nav-collapse collapse">
                <ul class="nav pull-right">
                    <li><a href="http://cleancanvas.herokuapp.com/index.html" class="active">HOME</a></li>
                    <li><a href="http://cleancanvas.herokuapp.com/about-us.html">ABOUT US</a></li>
                    
                 
                    <li><a class="btn-header" href="http://cleancanvas.herokuapp.com/sign-up.html">Sign up</a></li>
                    <li><a class="btn-header" href="http://cleancanvas.herokuapp.com/sign-in.html">Sign in</a></li>
                </ul>
            </div>
        </div>
      </div>
    </div>
	<!--término menu -->

	<!--inicio Slider -->
    <section id="feature_slider" class="">
       
        <article class="slide active" id="showcasing" style="background-image: url('img/foto2D.jpg'); display: block; background-position: 50% 0%; background-repeat: repeat no-repeat;">
            <img class="asset left-30 sp600 t120 z1" src="img/macbook.png" style="left: 610px; top: 120px; z-index: 1; display: inline;">
            <div class="info" style="display: block;">
                <h2>We connect people developing</h2>
            </div>
        </article>
        <article class="slide" id="ideas" style="background-image: url(http://cleancanvas.herokuapp.com/img/backgrounds/aqua.jpg); display: none; background-position: 50% 0%; background-repeat: repeat no-repeat;">
            <div class="info" style="display: none;">
                <h2></h2>
            </div>
            <img class="asset left-480 sp600 t260 z1" src="img/left.png" style="left: -841px; top: 260px; z-index: 1; display: inline;">
            <img class="asset left-210 sp600 t213 z2" src="img/middle.png" style="left: -854px; top: 213px; z-index: 2; display: inline;">
            <img class="asset left60 sp600 t260 z1" src="img/right.png" style="left: -849px; top: 260px; z-index: 1; display: inline;">
        </article>
        <article class="slide" id="tour" style="background-image: url(http://cleancanvas.herokuapp.com/img/backgrounds/color-splash.jpg); display: none; background-position: 50% 0%; background-repeat: repeat no-repeat;">
            <img class="asset left-472 sp650 t210 z3" src="img/ipad.png" style="left: -558px; top: 210px; z-index: 3; display: inline;">
            <img class="asset left-365 sp600 t270 z4" src="img/iphone.png" style="left: -485px; top: 270px; z-index: 4; display: inline;">
            <img class="asset left-350 sp450 t135 z2" src="img/desktop.png" style="left: -742px; top: 135px; z-index: 2; display: inline;">
            <img class="asset left-185 sp550 t220 z1" src="img/macbook(1).png" style="left: -746px; top: 220px; z-index: 1; display: inline;">
            <div class="info" style="display: none;">
                <h2> Focus on the results</h2>
                <a href="http://cleancanvas.herokuapp.com/features.html">TOUR THE PRODUCT</a>
            </div>
        </article>
        <article class="slide" id="responsive" style="background-image: url(http://cleancanvas.herokuapp.com/img/backgrounds/indigo.jpg); display: none; background-position: 50% 0%; background-repeat: repeat no-repeat;">
            <img class="asset left-472 sp600 t120 z3" src="img/html5.png" style="left: -732px; top: 120px; z-index: 3; display: inline;">
            <img class="asset left-190 sp500 t120 z2" src="img/css3.png" style="left: -732px; top: 120px; z-index: 2; display: inline;">
            <div class="info" style="display: none;">
                <h2>
                   Connect your reseach idea with the right develop
                </h2>                
            </div>
        </article> 
	</section>
	<!--término slider -->
	<!-- Inicio Buscador-->
	<section id="search" style="margin-bottom: 50px;">
		<div id="showcase">
        <div class="container">
            <div class="section_header">
                <h3>Search Project</h3>
            </div>            
            <div class="span12">
                <div class="span10 offset1">
                     <form class="form-search">
                      <input type="text" class="input-xxlarge search-query" style="height:30px"  placeholder="what would you like to develop?">
                      <button type="submit" class="btn-primary" style="height:40px">Search</button>
                </form>
                </div>
              
            </div>
            
        </div>
    </div>
	</section>
	<!-- Termino buscador-->

	<!-- Inicio contenido-->
	<section id="contenido" >
		<div id="showcase">
        	<div class="container">
          		<div class="section_header">
                	<h3>Recent Projects</h3>
            	</div>
            	<div class="row">
            		<ul class="thumbnails">
            	<!-- Aqui se debe generar un for para que se repita los proyectos de la base de datos-->
				  <li class="span4" >
				    <div class="thumbnail" style="border: 1px solid rgb(48, 43, 43);background: white; box-shadow: 10px 10px 5px #888888;">
				      <img src="http://www.prosar.com/Portals/138067/images/food_pyramid.gif" class="img-rounded" >
				      <h3>Thumbnail label</h3>
				      <p>Thumbnail caption...</p>
				    </div>
				  </li>

				  <li class="span4">
				    <div class="thumbnail" style="border: 1px solid rgb(48, 43, 43);background: white">
				      <img src="https://www.knchr-projects.org/images/projects_Img.jpg" class="img-rounded" >
				      <h3>Thumbnail label</h3>
				      <p>Thumbnail caption...</p>
				    </div>
				  </li>

				  <li class="span4">
				    <div class="thumbnail" style="border: 1px solid rgb(48, 43, 43);background: white">
				      <img src="http://2.bp.blogspot.com/-r45eWGBG0hk/Tksg5ktG06I/AAAAAAAAAcI/ZI9unlSL89E/s1600/Alert2.png" class="img-rounded">
				      <div class="form-actions">
						Hola hola
				      </div>
				    </div>
				  </li>
				  <!-- Aqui se debe terminar el for-->
				</ul>
            	</div>
            	
				
        	</div>
    	</div>
	</section>


   
 <script src="js/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/theme.js"></script>

    <script type="text/javascript" src="js/index-slider.js"></script>	

</body>
</html>