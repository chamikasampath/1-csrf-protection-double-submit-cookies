<!doctype html>
<html>
  <head>

        <title>CSRF Protection!</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
-->

        <link rel="stylesheet" href="public/css/bootstrap.min.css">
        <script src="public/js/jquery.min.js"></script>
        <script src="public/js/bootstrap.min.js"></script>


    </head>

    <body style="background-image: url('/1-csrf-protection-double-submit-cookies/background1.jpg');color: white;">

      <!-- navbar start -->
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="index.php">CSRF Protection!</a>
          </div>
          <ul class="nav navbar-nav">

            <?php
              if(!isset($_COOKIE['session_cookie'])) {
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
            if(isset($_COOKIE['session_cookie'])) {
              echo "<li><a href='logout.php'> Log Out </a></li>";
            }
          ?>

          </ul>
        </div>
      </nav>
      <!-- navbar end -->

      <!-- body content start -->
      <div class="container">
        <div class="row" align="center" style="padding-top: 90px;">
        <div class="col-12">

            <div class="card">
              <h3 class="card-header">-Update Your Profile-</h3>
              <div class="card-body">
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">

                            <script>

                            function getCookie(cname) {
                                var name = cname + "=";
                                var decodedCookie = decodeURIComponent(document.cookie);
                                var ca = decodedCookie.split(';');
                                for(var i = 0; i <ca.length; i++) {
                                    var c = ca[i];
                                    while (c.charAt(0) == ' ') {
                                        c = c.substring(1);
                                    }
                                    if (c.indexOf(name) == 0) {
                                        return c.substring(name.length, c.length);
                                    }
                                }
                                return "";
                            }


                            function submitForm(oFormElement)
                            {
                                document.getElementById("csrf_Token").value=getCookie("csrf_token");

                            }
                            </script>



                <?php if(isset($_COOKIE['session_cookie'])) {
                echo "
						                <form method='post' action='validate.php' onsubmit='submitForm(this);'>

                            <!-- csrf token creation -->
                              <input type='hidden' name='csrf_Token' id='csrf_Token' value=''>
                            <!-- csrf token end  -->

                            <!-- detail form content start -->
                            <div class='form-group row'>
                            	<label for='name' class='col-sm-2 col-form-label'>Full Name</label>
                              <div class='col-sm-10'>
                                <input type='text' class='form-control' id='name' name='name' placeholder='Full Name' required>
                              </div>
                            </div>

                          	<div class='form-group row'>
                              <label for='nic' class='col-sm-2 col-form-label'>NIC</label>
                              <div class='col-sm-10'>
                                <input type='text' class='form-control' id='nic' name='nic' placeholder='NIC' required>
                              </div>
                          	</div>

							              <div class='form-group row'>
                              <label for='address' class='col-sm-2 col-form-label'>Address</label>
                              <div class='col-sm-10'>
                                <input type='text' class='form-control' id='address' name='address' placeholder='Address' required>
                              </div>
                          	</div>

                          	<div class='form-group row'>
                                <label for='email' class='col-sm-2 col-form-label'>Email</label>
                            <div class='col-sm-10'>
                                <input type='text' class='form-control' id='email' name='email' placeholder='Email' required>
                            </div>
                          	</div>

                            <button type='submit' class='btn btn-primary' >Submit</button>
                            <!-- form content end-->

                       </form>";
                }
                ?>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
              </div>
            </div>
        </div>
    </div>
</div>
<!-- body content start -->


</body>
</html>