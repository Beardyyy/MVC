<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>CSS from scratch</title>
  <meta name="description" content="">
  <meta name="author" content="SitePoint">

  <link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
  <style>
      .container-fluid{

          font-family: "Teko";
      }

      body {
          background: url('img/image.jpg') no-repeat center center fixed;
          -webkit-background-size: cover;
          -moz-background-size: cover;
          background-size: cover;
          -o-background-size: cover;

      }

      .color{

          background-color: #E0E0E0;
      }


  </style>
  
</head>

<body>

<div class="container-fluid">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
  <!-- Brand -->
  <a class="navbar-brand" href="/MVC-new">HOME</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="/MVC-new/about-us">ABOUT</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/MVC-new/blog">PROJECTS</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="/MVC-new/contact-us">CONTACT</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        login/register
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="/MVC-new/login">login</a>
        <a class="dropdown-item" href="/MVC-new/register">register</a>
      </div>
    </li>
  </ul>
  
   
  
  <form class="form-inline my-2 my-lg-0 ml-auto">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  
</nav>

<div class=" m-5 p-5"></div>

<div class="row justify-content-center">
    <div class="mt-5 mb-5 p-3 col-5 text-center">
	    <img class="img-fluid max-width: 100%" src="img/portfolio1.png" alt="Cinque Terre">
	</div>
</div>

<div class=" m-5 p-5"></div>

<div class="color shadow-lg">
<div class="row m-5 p-5 justify-content-center">
    
	<?php
    require_once "Contents/" . $viewName . ".php";
    ?>
	
</div>
</div>

<div class="row p-5 justify-content-center">
    <div class="col-3 p-5 content-center text-center bg-light shadow-lg  rounded-circle">
	    <div>
	    <img class="img-fluid rounded" src="img/git.png" alt="Cinque Terre">
		</div>
		    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sit amet nunc ac ante pellentesque mollis. Quisque gravida tortor neque, a convallis eros iaculis in.</p>
	</div>
	    <div class="col-3 p-5 content-center text-center bg-light shadow-lg rounded-circle">
		    <div>
	        <img class="img-fluid rounded" src="img/git.png" alt="Cinque Terre">
		    </div>
			    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sit amet nunc ac ante pellentesque mollis. Quisque gravida tortor neque, a convallis eros iaculis in.</p>
		</div>
		    <div class="col-3 p-5 content-center text-center bg-light shadow-lg rounded-circle">
			    <div>
	            <img class="img-fluid rounded" src="img/git.png" alt="Cinque Terre">
		        </div>
				    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sit amet nunc ac ante pellentesque mollis. Quisque gravida tortor neque, a convallis eros iaculis in.</p>
			</div>
			    
</div>
<div class="color">
<div class="row content-center">
    <div class="col-12 text-center p-3">
	    <p class="m-auto">Copyright 2019@fox</p>
	</div>
  </div>	
</div>
</div>

  <script></script>
</body>
</html>