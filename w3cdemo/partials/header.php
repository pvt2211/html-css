<!DOCTYPE html>
<html>
<head>
	<title>JavaScript Tutorial</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="./assets/style.css">
  <link rel="stylesheet" type="text/css" href="./assets/media.css">
</head>
<body>
<div class="top-header clearfix mt-4 text-sm-center">
	<a class="float-lg-left ml-lg-4  float-sm-none" href="#">w3schools<span class="text-success">.com</span></a>
	<div class="float-lg-right mr-lg-4 float-sm-none d-none-11">THE WORLD'S LARGEST WEB DEVELOPER SITE</div>
</div>
<nav class="navbar navbar-expand-sm header-menu sticky-top">
  <div class="left-father">
    <div class="left-items">
      <?php include "./left-item.php"; ?>
    </div>
    <div class="collapse navbar-collapse justify-content-sm-between d-flex" id="navbarSupportedContent">
      <ul class="navbar-nav">
      	<li class="nav-item ">
  			<a class="nav-link" href="#"><i class="fa fa-home text-white fa-lg"></i></a>
  		</li>
  		<li class="nav-item">
  			<a class="nav-link" href="#">HTML</a>
  		</li>
  		<li class="nav-item">
  			<a class="nav-link" href="#">CSS</a>
  		</li>
  		<li class="nav-item d-none-10">
  			<a class="nav-link bg-success" href="#">JAVASCRIPT</a>
  		</li>
  		<li class="nav-item d-none-7">
  			<a class="nav-link" href="#">SQL</a>
  		</li>
  		<li class="nav-item d-none-6">
  			<a class="nav-link" href="#">PHP</a>
  		</li>
  		<li class="nav-item d-none-5">
  			<a class="nav-link" href="#">BOOTSTRAP</a>
  		</li>
  		<li class="nav-item d-none-4">
  			<a class="nav-link" href="#">HOWTO</a>
  		</li>
  		<li class="nav-item d-none-3">
  			<a class="nav-link" href="#">PYTHON</a>
  		</li>
  		<li class="nav-item d-none-2">
  			<a class="nav-link" href="#">W3.CSS</a>
  		</li>
  		<li class="nav-item d-none-1">
  			<a class="nav-link" href="#">JQUERY</a>
  		</li>
  		<li class="nav-item d-none-1">
  			<a class="nav-link" href="#">XML</a>
  		</li>
        <li class="nav-item dropdown position-static">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            MORE
          </a>
          <div class="dropdown-menu w-100 shadow-lg dropdown-menu--bg" aria-labelledby="navbarDropdown">
            <div class="col-sm-12 col-md-6 col-lg-3">
            	<h4 style="color: white;">HTML and CSS</h4>
            	<a class="dropdown-item" href="#">Learn CSS</a>
            	<a class="dropdown-item" href="#">Learn Bootstrap</a>
            	<a class="dropdown-item" href="#">Learn W3.CSS</a>
            	<a class="dropdown-item" href="#">Learn Colors</a>
            	<a class="dropdown-item" href="#">Learn Icons</a>
            	<a class="dropdown-item" href="#">Learn Graphics</a>
            	<a class="dropdown-item" href="#">Learn SVG</a>
            	<a class="dropdown-item" href="#">Learn Canvas</a>
            	<a class="dropdown-item" href="#">Learn How To</a>
            	<a class="dropdown-item" href="#">Learn SASS</a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
            	<h4 style="color: white;">JavaScript</h4>
            	<a class="dropdown-item" href="#">Learn JavaScript</a>
            	<a class="dropdown-item" href="#">Learn Jquery</a>
            	<a class="dropdown-item" href="#">Learn React</a>
            	<a class="dropdown-item" href="#">Learn AngularJS</a>
            	<a class="dropdown-item" href="#">Learn JSON</a>
            	<a class="dropdown-item" href="#">Learn AJAX</a>
            	<a class="dropdown-item" href="#">Learn W3.JS</a>
              <h4 style="color: white;">Programing</h4>
            	<a class="dropdown-item" href="#">Learn Python</a>
            	<a class="dropdown-item" href="#">Learn Java</a>
            	<a class="dropdown-item" href="#">Learn C++</a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
            	<h4 style="color: white;">Server Side</h4>
            	<a class="dropdown-item" href="#">Learn SQL</a>
            	<a class="dropdown-item" href="#">Learn PHP5</a>
            	<a class="dropdown-item" href="#">Learn PHP7</a>
            	<a class="dropdown-item" href="#">Learn ASP</a>
            	<a class="dropdown-item" href="#">Learn Node.js</a>
            	<a class="dropdown-item" href="#">Learn Raspberry Pi</a>
              <h4 style="color: white;">Web Building</h4>
            	<a class="dropdown-item" href="#">Web Templates</a>
            	<a class="dropdown-item" href="#">Web Statistics</a>
            	<a class="dropdown-item" href="#">Web Certificates</a>
              <a class="dropdown-item" href="#">Web Editor</a>
            	<a class="dropdown-item" href="#">Web Development</a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
            	<h4 style="color: white;">XML</h4>
            	<a class="dropdown-item" href="#">Learn XML</a>
            	<a class="dropdown-item" href="#">Learn XML AJAX</a>
            	<a class="dropdown-item" href="#">Learn XML DOM</a>
            	<a class="dropdown-item" href="#">Learn XML DTD</a>
            	<a class="dropdown-item" href="#">Learn XML Schema</a>
            	<a class="dropdown-item" href="#">Learn XSLT</a>
            	<a class="dropdown-item" href="#">Learn XPath</a>
            	<a class="dropdown-item" href="#">Learn XQuery</a>
            </div>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item dropdown position-static d-none-9">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            REFERENCES
          </a>
          <div class="dropdown-menu w-100 shadow-lg dropdown-menu--bg" aria-labelledby="navbarDropdown">
            <div class="col-sm-12 col-md-6 col-lg-3">
              <h4 style="color: white;">HTML and CSS</h4>
              <a class="dropdown-item" href="#">Learn CSS</a>
              <a class="dropdown-item" href="#">Learn Bootstrap</a>
              <a class="dropdown-item" href="#">Learn W3.CSS</a>
              <a class="dropdown-item" href="#">Learn Colors</a>
              <a class="dropdown-item" href="#">Learn Icons</a>
              <a class="dropdown-item" href="#">Learn Graphics</a>
              <a class="dropdown-item" href="#">Learn SVG</a>
              <a class="dropdown-item" href="#">Learn Canvas</a>
              <a class="dropdown-item" href="#">Learn How To</a>
              <a class="dropdown-item" href="#">Learn SASS</a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
              <h4 style="color: white;">HTML and CSS</h4>
              <a class="dropdown-item" href="#">Learn CSS</a>
              <a class="dropdown-item" href="#">Learn Bootstrap</a>
              <a class="dropdown-item" href="#">Learn W3.CSS</a>
              <a class="dropdown-item" href="#">Learn Colors</a>
              <a class="dropdown-item" href="#">Learn Icons</a>
              <a class="dropdown-item" href="#">Learn Graphics</a>
              <a class="dropdown-item" href="#">Learn SVG</a>
              <a class="dropdown-item" href="#">Learn Canvas</a>
              <a class="dropdown-item" href="#">Learn How To</a>
              <a class="dropdown-item" href="#">Learn SASS</a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
              <h4 style="color: white;">HTML and CSS</h4>
              <a class="dropdown-item" href="#">Learn CSS</a>
              <a class="dropdown-item" href="#">Learn Bootstrap</a>
              <a class="dropdown-item" href="#">Learn W3.CSS</a>
              <a class="dropdown-item" href="#">Learn Colors</a>
              <a class="dropdown-item" href="#">Learn Icons</a>
              <a class="dropdown-item" href="#">Learn Graphics</a>
              <a class="dropdown-item" href="#">Learn SVG</a>
              <a class="dropdown-item" href="#">Learn Canvas</a>
              <a class="dropdown-item" href="#">Learn How To</a>
              <a class="dropdown-item" href="#">Learn SASS</a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
              <h4 style="color: white;">HTML and CSS</h4>
              <a class="dropdown-item" href="#">Learn CSS</a>
              <a class="dropdown-item" href="#">Learn Bootstrap</a>
              <a class="dropdown-item" href="#">Learn W3.CSS</a>
              <a class="dropdown-item" href="#">Learn Colors</a>
              <a class="dropdown-item" href="#">Learn Icons</a>
              <a class="dropdown-item" href="#">Learn Graphics</a>
              <a class="dropdown-item" href="#">Learn SVG</a>
              <a class="dropdown-item" href="#">Learn Canvas</a>
              <a class="dropdown-item" href="#">Learn How To</a>
              <a class="dropdown-item" href="#">Learn SASS</a>
            </div>
        </li>
        <li class="nav-item dropdown position-static d-none-8">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            EXERCISES
          </a>
          <div class="dropdown-menu w-100 shadow-lg dropdown-menu--bg" aria-labelledby="navbarDropdown">
            <div class="col-sm-12 col-md-6 col-lg-3">
              <h4 style="color: white;">HTML and CSS</h4>
              <a class="dropdown-item" href="#">Learn CSS</a>
              <a class="dropdown-item" href="#">Learn Bootstrap</a>
              <a class="dropdown-item" href="#">Learn W3.CSS</a>
              <a class="dropdown-item" href="#">Learn Colors</a>
              <a class="dropdown-item" href="#">Learn Icons</a>
              <a class="dropdown-item" href="#">Learn Graphics</a>
              <a class="dropdown-item" href="#">Learn SVG</a>
              <a class="dropdown-item" href="#">Learn Canvas</a>
              <a class="dropdown-item" href="#">Learn How To</a>
              <a class="dropdown-item" href="#">Learn SASS</a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
              <h4 style="color: white;">HTML and CSS</h4>
              <a class="dropdown-item" href="#">Learn CSS</a>
              <a class="dropdown-item" href="#">Learn Bootstrap</a>
              <a class="dropdown-item" href="#">Learn W3.CSS</a>
              <a class="dropdown-item" href="#">Learn Colors</a>
              <a class="dropdown-item" href="#">Learn Icons</a>
              <a class="dropdown-item" href="#">Learn Graphics</a>
              <a class="dropdown-item" href="#">Learn SVG</a>
              <a class="dropdown-item" href="#">Learn Canvas</a>
              <a class="dropdown-item" href="#">Learn How To</a>
              <a class="dropdown-item" href="#">Learn SASS</a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
              <h4 style="color: white;">HTML and CSS</h4>
              <a class="dropdown-item" href="#">Learn CSS</a>
              <a class="dropdown-item" href="#">Learn Bootstrap</a>
              <a class="dropdown-item" href="#">Learn W3.CSS</a>
              <a class="dropdown-item" href="#">Learn Colors</a>
              <a class="dropdown-item" href="#">Learn Icons</a>
              <a class="dropdown-item" href="#">Learn Graphics</a>
              <a class="dropdown-item" href="#">Learn SVG</a>
              <a class="dropdown-item" href="#">Learn Canvas</a>
              <a class="dropdown-item" href="#">Learn How To</a>
              <a class="dropdown-item" href="#">Learn SASS</a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
              <h4 style="color: white;">HTML and CSS</h4>
              <a class="dropdown-item" href="#">Learn CSS</a>
              <a class="dropdown-item" href="#">Learn Bootstrap</a>
              <a class="dropdown-item" href="#">Learn W3.CSS</a>
              <a class="dropdown-item" href="#">Learn Colors</a>
              <a class="dropdown-item" href="#">Learn Icons</a>
              <a class="dropdown-item" href="#">Learn Graphics</a>
              <a class="dropdown-item" href="#">Learn SVG</a>
              <a class="dropdown-item" href="#">Learn Canvas</a>
              <a class="dropdown-item" href="#">Learn How To</a>
              <a class="dropdown-item" href="#">Learn SASS</a>
            </div>
        </li>
        <li class="nav-item d-none-1">
          <a class="nav-link" href="#">FORUM</a>
        </li>
        <li class="nav-item d-none-10">
          <a class="nav-link" href="#"><i class="fa fa-globe fa-lg" aria-hidden="true"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa fa-search fa-lg" aria-hidden="true"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
