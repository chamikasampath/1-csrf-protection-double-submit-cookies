<!doctype html>
<html>
	 <head>

        <title>CSRF Protection!</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      

        <link rel="stylesheet" href="public/css/bootstrap.min.css">
        <script src="public/js/jquery.min.js"></script>
        <script src="public/js/bootstrap.min.js"></script>


    </head>

     <body style="background-image: url('/1-csrf-protection-double-submit-cookies/background1.jpg');color: white;">

      <!-- nav bar start -->
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="index.php">CSRF Protection!</a>
          </div>
          <ul class="nav navbar-nav">

            <?php
              if(isset($_COOKIE['session_cookie'])) {
                echo "<li><a href='profile.php'></t>Profile</t></a></li>";
              }
            ?>

          </ul>
          <ul class="nav navbar-nav navbar-right">

          <?php
            if(!isset($_COOKIE['session_cookie'])) {
              echo "<li><a href='login.php'> Log In </a></li>";
            }
          ?>

          <?php
            if(!isset($_COOKIE['session_cookie'])) {
              echo "<li><a href='logout.php'> Log Out </a></li>";
            }
          ?>

          </ul>
        </div>
      </nav>
      <!-- navbar end -->
       
    <!-- body content start -->
    <h1 align='center'> - Double Submit Cookies - </h1>
    <!-- body content end -->

    </body>

</html>