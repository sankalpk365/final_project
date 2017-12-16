<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>WSD Project</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="robots" content="all,follow">

<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="css/fontastic.css">
<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
<link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
<link rel="stylesheet" href="css/custom.css">
<link rel="shortcut icon" href="favicon.png">

 </head>
   <body>
       <div class="page login-page">
       <div class="container d-flex align-items-center">
       <div class="form-holder has-shadow">
       <div class="row">
       <!-- Logo & Information Panel-->
       <div class="col-lg-6">
       <div class="info d-flex align-items-center">
       <div class="content">
       <div class="logo">
       <h1>The Final Project </h1>
       </div>
 
       <p>An easy way to elicit your task!</p>
       <p>Designed By:Sankalp Karkera</p>
       </div>
     </div>
  </div>

<div class="col-lg-6 bg-white">
       <div class="form d-flex align-items-center">
       <div class="content">
       <form id="login-form" action="index.php?page=accounts&action=login" method="post">
       <div class="form-group">
       <input id="login-username" type="text" name="login" required="" class="input-material">
       <label for="login-username" class="label-material">Email</label>
       </div>

       <div class="form-group">
       <input id="login-password" type="password" name="psw" required="" class="input-material">
       <label for="login-password" class="label-material">Password</label>
       </div>
       <p id="login" class="login"><input type="submit" name="commit" value="Login"></p>
    </form>

    <form id="login-form" action="index.php?page=accounts&action=signup" method="post">
    <div><p class="forgot-pass">Forgot Password?</a><br><small>Do not have an account? </small><p id="login" class="signup"><input type="submit" name="commit" value="Signup"></p></div>

    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <div class="copyrights text-center">
            <p>Design by <a href="" class="external"></a></p>

	 </div>
	     </div>

   <button type="button" data-toggle="collapse" data-target="#style-switch" id="style-switch-button" class="btn btn-primary
   btn-sm hidden-xs hidden-sm"><i class="fa fa-cog fa-2x"></i></button>
   <div id="style-switch" class="collapse">
   <h4 class="mb-3">Select theme colour</h4>
   <form class="mb-3">

  <select name="colour" id="colour" class="form-control">
  <option value="">select colour variant</option>
  <option value="default">violet</option>
  <option value="pink">pink</option>
  <option value="red">red</option>
  <option value="green">green</option>
  <option value="sea">sea</option>
  <option value="blue">blue</option>
  </select>
  </form>
</div>
   <!-- Javascript files-->
   <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   <script src="vendor/popper.js/umd/popper.min.js"> </script>
   <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
   <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
   <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
   <script src="js/front.js"></script>
 </body>
</html>
