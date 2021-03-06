<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <title>WSD Project - FALL2017</title>
	        <meta name="description" content="">
		    <meta name="viewport" content="width=device-width, initial-scale=1">
		        <meta name="robots" content="all,follow">
<!-- Bootstrap CSS-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
        <!-- Fontastic Custom icon font-->
	    <link rel="stylesheet" href="css/fontastic.css">
	        <!-- Font Awesome CSS-->
		    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
		        <!-- Google fonts - Poppins -->
			    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
			        <!-- theme stylesheet-->
				    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
				        <!-- Custom stylesheet - for your changes-->
					    <link rel="stylesheet" href="css/custom.css">
					        <!-- Favicon-->
						    <link rel="shortcut icon" href="favicon.png">

</head>
  <body>
      <div class="page home-page">
            <!-- Main Navbar-->
	        <header class="header">
		        <nav class="navbar">
			          <!-- Search Box-->
				            <div class="search-box">
	                <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
                  <input type="search" placeholder="What are you looking for..." class="form-control">
										              </form>
											                </div>
<div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
	                  <!-- Navbar Header-->
			                <div class="navbar-header">
	               <!-- Navbar Brand --><a href="https://www.njit.edu/graduatestudies/degree-programs/graduatecertificates/web-systems-development-cert/" class="navbar-brand">
        <div class="brand-text brand-big"><span>Web System Development </span></div>
            <div class="brand-text brand-small"><strong>TD</strong></div></a>
	    <a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
	                  </div>
			                <!-- Navbar Menu -->
          <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
	  <li class="nav-item">

           <form action="index.php?page=accounts&action=logout" method="post" id="form3" style="float:right;">
           <li><button class="btn btn-link navbar-btn" type="submit">Logout</button></li>
					                     </form>
<form action="index.php?page=accounts&action=myProf" method="post" id="form4" style="float:right;">
                 <li><span class="glyphicon glyphicon-user"></span><button class="btn btn-link navbar-btn" type="submit">My Profile</button>
		                  </li>
				                   </form>                            
						                 </ul>
								             </div>
									               </div>
										               </nav>
											             </header>
<div class="page-content d-flex align-items-stretch">
        <!-- Side Navbar -->
	        <nav class="side-navbar">
		<span class="heading">Main</span>
	          <div>
           <ul class="list-unstyled">
           <form action="index.php?page=tasks&action=create" method="POST" style="float:left;">
           <button class="btn btn-link navbar-btn" class="icon-interface-windows" type="submit"></i>Create Task</button>
							                 </form></ul>
									           </div>

</nav>
        <div class="content-inner">
	          <!-- Page Header-->
		            <header class="page-header">
			                <div class="container-fluid">
					              <h2 class="no-margin-bottom">Dashboard</h2>
						                  </div>
								            </header>
<section class="dashboard-header">
            <div class="container-fluid">
	                  <div class="row">
			                           
						            <?php
							    print utility\htmlTable::genarateTableFromMultiArray($data);
							    ?>


</div>
      </div>
          </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
	        <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
		    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
		        <script src="js/charts-home.js"></script>
			    <script src="js/front.js"></script>
			      </body>
			      </html>



			      <script src="js/scripts.js"></script>
			      </body>
			      </html>
