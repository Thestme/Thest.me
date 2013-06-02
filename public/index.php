<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Wellcome to Thest</title>
	<link rel="stylesheet"  type="text/css" href="../css/master-page.css">
	<link rel="stylesheet" type="text/css" href="../css/metro-bootstrap.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="css/bootstrap-overrides.css" rel="stylesheet">
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
            <a class="brand" href="index.php">
                <img src="img/logo_menu.png" alt="">
            </a>
            <div class="nav-collapse collapse">
                <ul class="nav pull-right">
                   <li><a href="index.php" class="active">Home</a></li>
                    <li><a class="btn-header" href="login.php">Sign in</a></li>
                    <li><a class="btn-header" href="enterprise.php">Enterprise</a></li>
                 
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
                <h2>don't miss the opportunity to innovate</h2>
            </div>
            <img class="asset left-480 sp600 t260 z1" src="img/left.png" style="left: -841px; top: 260px; z-index: 1; display: inline;">
            <img class="asset left-210 sp600 t213 z2" src="img/middle.png" style="left: -854px; top: 213px; z-index: 2; display: inline;">
            <img class="asset left60 sp600 t260 z1" src="img/right.png" style="left: -849px; top: 260px; z-index: 1; display: inline;">
        </article>
        <article class="slide" id="tour" style="background-image: url(img/foto3D.jpg); display: none; background-position: 50% 0%; background-repeat: repeat no-repeat;">
            <img class="asset left-472 sp650 t210 z3" src="img/ipad.png" style="left: -558px; top: 210px; z-index: 3; display: inline;">
            <img class="asset left-365 sp600 t270 z4" src="img/iphone.png" style="left: -485px; top: 270px; z-index: 4; display: inline;">
            <img class="asset left-350 sp450 t135 z2" src="img/desktop.png" style="left: -742px; top: 135px; z-index: 2; display: inline;">
            <img class="asset left-185 sp550 t220 z1" src="img/macbook(1).png" style="left: -746px; top: 220px; z-index: 1; display: inline;">
            <div class="info" style="display: none;">
                <h2> Focus on the results</h2>
                <a href="http://cleancanvas.herokuapp.com/features.html">TOUR THE PRODUCT</a>
            </div>
        </article>
        <article class="slide" id="responsive" style="background-image: url(img/foto6D.jpg); display: none; background-position: 50% 0%; background-repeat: repeat no-repeat;">
            <img class="asset left-472 sp600 t120 z3" src="img/html5.png" style="left: -732px; top: 120px; z-index: 3; display: inline;">
            <img class="asset left-190 sp500 t120 z2" src="img/css3.png" style="left: -732px; top: 120px; z-index: 2; display: inline;">
            <div class="info" style="display: none;">
                <h2>
                   Connect your reseach idea with the right developer
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
                	<div class="btn-group">
                		 <form class="form-search">
                      		<input type="text" class="input-xxlarge search-query" style="height:30px;font-size: 20px"  placeholder="what would you like to develop?">
                      		<button type="submit" class="btn btn-warning" style="height:40px; font-size: 20px;">Search</button>
                		</form>
                	</div>
                    
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
				    <div class="thumbnail efecto3" style="border: 1px solid rgb(48, 43, 43);background: white; padding: 10px;">
				      <img src="img/service2.png" class="img-rounded" >
				      <fieldset style="border-bottom: 1px solid #e5e5e5; ">
				      	<legend>Strategic management of diversity and inclusion</legend>
				      	<p><strong>Category:</strong> Human resources</p>
				      	<p><strong>Type:</strong> thesis</p>
				      	<p><strong>Grade:</strong> Master of Science</p>

				      </fieldset>
				      <a href="project.php" class="btn btn-warning" style="margin-top:10px">Lean more...</a>
				    </div>
				  </li>

				 
				 <!-- Aqui se debe terminar el for-->
				</ul>
            	</div>
            	
				
        	</div>
    	</div>
	</section>
	 <!-- starts footer -->
    <footer id="footer">
        <div class="container">
            <div class="row sections">
                <div class="span4 recent_posts">
                    <h3 class="footer_header">
                        Recent Posts
                    </h3>
                    <div class="post">
                        <a href="http://cleancanvas.herokuapp.com/blogpost.html">
                            <img src="./Business Template_files/recent_post1.png" class="img-circle">
                        </a>
                        <div class="date">
                            Wed, 12 Dec
                        </div>
                        <a href="http://cleancanvas.herokuapp.com/blogpost.html" class="title">
                            Randomised words which don't look embarrasing hidden.
                        </a>
                    </div>
                    <div class="post">
                        <a href="http://cleancanvas.herokuapp.com/blogpost.html">
                            <img src="./Business Template_files/recent_post2.png" class="img-circle">
                        </a>
                        <div class="date">
                            Mon, 12 Dec
                        </div>
                        <a href="http://cleancanvas.herokuapp.com/blogpost.html" class="title">
                            Randomised words which don't look embarrasing hidden.
                        </a>
                    </div>
                </div>
                <div class="span4 testimonials">
                    <h3 class="footer_header">
                        Testimonials
                    </h3>
                    <div class="wrapper">
                        <div class="quote">
                            <span>“</span>
                            There are many variations of passages of randomised words which don't look even slightly believable. You need to be sure there isn't anything embarrassing of text.
                            <span></span>
                        </div>
                        <div class="author">
                            <img src="./Business Template_files/user-display.png">
                            <div class="name">Alejandra Galvan Castillo</div>
                            <div class="info">
                                Details Canvas
                            </div>
                        </div>
                    </div>
                </div>
                <div class="span4 contact">
                    <h3 class="footer_header">
                        Contact
                    </h3>
                    <form action="http://cleancanvas.herokuapp.com/#" method="post">
                        <input type="text" placeholder="Your name">
                        <input type="text" placeholder="Your email">
                        <textarea rows="3" placeholder="Message"></textarea>
                        <input type="submit" value="Send">
                    </form>
                </div>
            </div>
            <div class="row credits">
                <div class="span12">
                    <div class="row social">
                        <div class="span12">
                            <a href="http://cleancanvas.herokuapp.com/#" class="facebook">
                                <span class="socialicons ico1"></span>
                                <span class="socialicons_h ico1h"></span>
                            </a>
                            <a href="http://cleancanvas.herokuapp.com/#" class="twitter">
                                <span class="socialicons ico2"></span>
                                <span class="socialicons_h ico2h"></span>
                            </a>
                            <a href="http://cleancanvas.herokuapp.com/#" class="gplus">
                                <span class="socialicons ico3"></span>
                                <span class="socialicons_h ico3h"></span>
                            </a>
                            <a href="http://cleancanvas.herokuapp.com/#" class="flickr">
                                <span class="socialicons ico4"></span>
                                <span class="socialicons_h ico4h"></span>
                            </a>
                            <a href="http://cleancanvas.herokuapp.com/#" class="pinterest">
                                <span class="socialicons ico5"></span>
                                <span class="socialicons_h ico5h"></span>
                            </a>
                            <a href="http://cleancanvas.herokuapp.com/#" class="dribble">
                                <span class="socialicons ico6"></span>
                                <span class="socialicons_h ico6h"></span>
                            </a>
                            <a href="http://cleancanvas.herokuapp.com/#" class="behance">
                                <span class="socialicons ico7"></span>
                                <span class="socialicons_h ico7h"></span>
                            </a>
                        </div>
                    </div>
                    <div class="row copyright">
                        <div class="span12">
                            © 2013 Clean Canvas. All rights reserved. Theme by Detail Canvas.
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </footer>

   
 <script src="js/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/theme.js"></script>

    <script type="text/javascript" src="js/index-slider.js"></script>	

</body>
</html>