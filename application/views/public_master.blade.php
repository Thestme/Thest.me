<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thest</title>
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
                	@yield('navbar')
                </ul>
            </div>
        </div>
      </div>
    </div>
	<!--término menu -->