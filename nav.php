<!DOCTYPE HTML>
<?php
  spl_autoload_register(function($class){
    require 'classes/'.$class.'.php';
  });
  session::sessionStart();
  $user_id     = session::get_session('id');
?>
<html>
  <head>
  	<meta charset="utf-8">
  	<meta name="veiwPo rt" content="width=device-width, initial-scale=1">
  	<link href="../css/bootstrap.min.css" rel="stylesheet">
  	<link href="style/publicDesign.css" rel="stylesheet">
  	<link href="../fontawesome-free-5.14.0-web/fontawesome-free-5.14.0-web/css/all.min.css" rel="stylesheet">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <style type="text/css">
      nav{
        background-color:#ffc37140;
      }
      nav ul li .nav-link{
        color:#ffc371;
        font-size:27px;
        text-transform:capitalize;
      }
    </style>
  </head>

  <body>
	  	<nav class="navbar navbar-expand-md bg-light  fixed-top  ">

        <div>
          <button data-bs-toggle="collapse" class="navbar-toggler navbar-light" data-bs-target='#links'>
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>

	  		<div class="collapse navbar-collapse justify-content-center mx-5" id="links">

			  	<ul class="navbar-nav">
			  		<li class="nav-item h4 mx-3">
			  			<a href="home.php" class="nav-link">home</a>
			  		</li>
            <li class="nav-item h4 mx-3">
              <a href="home.php #sections" class="nav-link">sections</a>
            </li>
			  		<li class="nav-item h4 mx-3">
			  			<a href="#" class="nav-link">setting</a>
			  		</li>
			  	</ul>

		    </div>
        
	  	</nav>
  </body>
</html>