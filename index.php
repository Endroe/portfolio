<!DOCTYPE html>
<!--
-------------------------------
Andrew Geddes - Home
-------------------------------
-->
<html lang="en">
  <head>
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:700,400' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Andrew Geddes' personal portfolio website.">
    <meta name="keywords" content="Andrew Geddes, Andrew, Geddes, Portfolio">
    <meta name="author" content="Andrew Geddes">
    <title>Andrew Geddes - Home</title>
    
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="css/animate.css">
    <link href="css/custom.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/530da5eef7.js"></script>
<?php
  $birthDate = "03/21/2002";
  $birthDate = explode("/", $birthDate);
  $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]));
?>
  </head>
<body class="animated fadeIn">
    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <nav>
                <ul class="nav masthead-nav">
                  <li class="active"><a href="http://andrewgeddes.me">Home</a></li>
                  <li><a href="http://andrewgeddes.me/portfolio.php">Portfolio</a></li>
                  <!-- <li><a href="http://andrewgeddes.me/contact.php">Contact</a></li> -->
                </ul>
              </nav>
            </div>
          </div>

          <div class="inner cover shadow-text">
            <h1 class="cover-heading animated zoomIn">Andrew Geddes</h1>
            <p class="lead">Hello, my name is Andrew. I am a <?php echo $age; ?> year old designer & developer from The Netherlands. Currently available for freelance work.</p>
            <p class="lead">
<div class="container">
  <a href="http://facebook.com/editandrew">
  <button class="ribbon facebook">
    <span class="entypo-facebook fa fa-facebook fa-5x"></span>
  </button>
  </a>
  <a href="mailto:hello@andrewgeddes.me">
  <button class="ribbon googleplus">
    <span class="entypo-gplus fa fa-envelope-o fa-5x"></span>
  </button>
  </a>
  <a href="http://twitter.com/editandrew">
  <button class="ribbon twitter">
    <span class="entypo-twitter fa fa-twitter fa-5x"></span>
  </button>
  </a>
</div>
            </p>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>&copy;2016 | Made with <i class="fa fa-heart animated pulse infinite pink-color"></i> by Andrew Geddes</p>
            </div>
          </div>
	
        </div>
      
      </div>

    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>