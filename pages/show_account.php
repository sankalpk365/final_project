<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>WSD Project - FALL2017</title>
	    <meta name="description" content="">
	        <meta name="viewport" content="width=device-width, initial-scale=1">
		    <meta name="robots" content="all,follow">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontastic.css">
        <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
	    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
	        <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
		    <link rel="stylesheet" href="css/custom.css">
		        <link rel="shortcut icon" href="favicon.png">
</head>
<body>
<div class="page home-page">
    <!-- Main Navbar-->
        <header class="header">
	        <nav class="navbar">

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
<a href="https://www.njit.edu/graduatestudies/degree-programs/graduatecertificates/web-systems-development-cert/"
class="navbar-brand">
                            <div class="brand-text brand-big"><span>Web System Development </span></div>
<!-- Navbar Menu -->
                    <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
		                            <!-- Search-->
              <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>
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
<div class="content-inner">
            <!-- Page Header-->
	                <header class="page-header">
			                <div class="container-fluid">
					                    <h2 class="no-margin-bottom">My Account</h2>
							                    </div>
									                </header>
<div class="breadcrumb-holder container-fluid">
                <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php?page=tasks&action=allOneUser&id=<?php echo $_SESSION["userID"] ?>">Home</a></li>
				                        <li class="breadcrumb-item active">My Account</li>
							                </ul>
									            </div>
<!-- Forms Section-->
            <section class="forms">
	                    <div class="container-fluid">
			                        <div class="row">
<!-- Form Elements -->
                        <div class="col-lg-12">
                           <div class="card">
                               <div class="card-close">
                              <div class="dropdown">
     <button type="button" id="closeCard5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
 
<div aria-labelledby="closeCard5" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove">
<i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                                    </div>
				                                    </div>
<div class="card-header d-flex align-items-center">
                                    <h3 class="h4">My Profile Details</h3>
				                                    </div>
								                                    <div class="card-body">

<form action="index.php?page=accounts&action=update&id=<?php echo $_SESSION['userID']; ?> " method="post" id="form1">
                                    <?php
print utility\htmlTable::generateTableForOneAccount($data);
                                    ?>

<div class="col-lg-3"><button class="btn-primary" type="submit" form="form1" value="save">Update</button></div>
                                    </form>
<form action="index.php?page=accounts&action=editPass&id=<?php echo $_SESSION['userID']; ?> " method="post" id="form2" style="float:left;">				    
<div ><button class="btn-primary" type="submit" form="form2" value="edit">Change Password</button><a href="index.php?page=tasks&action=allOneUser&id=<?php echo $_SESSION["userID"] ?>">Cancel</a></div>
</form>
                                </div>
				                            </div>
							                            </div>
										                        </div>
													                </div>
															            </section>
																    <!-- Javascript
																	 files-->
																	 <script
																	 src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
																	 integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"  crossorigin="anonymous"></script>
																	 <script
																	 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
																	 integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
																	 crossorigin="anonymous"></script>
																	 <script
																	 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
																	 integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
																	 crossorigin="anonymous"></script>
																	 <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
																	 <script src="https://d19m59y37dris4.cloudfront.net/admin/1-1/vendor/popper.js/umd/popper.min.js">
																	 </script>
																	 <script src="https://d19m59y37dris4.cloudfront.net/admin/1-1/vendor/bootstrap/js/bootstrap.min.js"></script>
																	 <script src="https://d19m59y37dris4.cloudfront.net/admin/1-1/vendor/jquery.cookie/jquery.cookie.js">
																	 </script>
																	 <script src="https://d19m59y37dris4.cloudfront.net/admin/1-1/vendor/jquery-validation/jquery.validate.min.js"></script>
																	 <script src="https://d19m59y37dris4.cloudfront.net/admin/1-1/js/front.js"></script>
																	 </body>
																	 </html>
