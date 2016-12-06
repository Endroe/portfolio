<!DOCTYPE html>
<!--
-------------------------------
Andrew Geddes - Contact
-------------------------------
-->
<html lang="en">
  <head>
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:700,400' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
              <h3 class="masthead-brand"><b>Andrew Geddes</b></h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li><a href="http://andrewgeddes.me">Home</a></li>
                  <li><a href="http://andrewgeddes.me/portfolio.php">Portfolio</a></li>
                  <li class="active"><a href="http://andrewgeddes.me/contact.php">Contact</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div class="inner cover">
            <h1>Contact - Coming Soon</h1>
            
            
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