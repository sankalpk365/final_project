<?php include 'headerPage.php' ?>

<?php
session_start();
?>
<div class="content-inner">
<div class="content-inner">
<header class="page-header">
            <div class="container-fluid">
	                    <h2 class="no-margin-bottom">Edit Task</h2>
			                </div>

</header>
<div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
	                    <li class="breadcrumb-item"><a href="index.php?page=tasks&action=allOneUser&id=<?php echo
			    $_SESSION["userID"] ?>">Home</a></li>
			                    <li class="breadcrumb-item active">Forms</li>
					                </ul>
							        </div>

<section class="dashboard-header">
            <div class="container-fluid">
	                    <div class="row">
			   
<?php
                    print utility\htmlTable::generateTableForOneTodo($data);
		                        ?>

<form action="index.php?page=tasks&action=edit&id=<?php echo $data->id; ?> " method="post" id="form1" style="float:left;">
<div class="col-lg-10"><button class="btn btn-primary text-center" type="submit" form="form1" value="edit">Edit</button></div>
			                    </form>

<form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form2" style="float:right;">
 <div class="" ><button class="btn btn-primary" type="submit" form="form2" value="delete">Delete</button><a href="index.php?page=tasks&action=allOneUser&id=<?php echo $_SESSION["userID"] ?>">Cancel</a></div>
			                    </form>

</div>
            </div>
	        </div>

<footer class="main-footer">
        <div class="container-fluid">
	            <div class="row">
		                    <div class="col-sm-6">
				                        <p>Your company &copy; 2017-2019</p>
							                </div>
 <div class="col-sm-6 text-right">	
 </div>
             </div>
	             </div>
		         </footer>
			 </div>
			 </div>
			 </div>
<script src="js/scripts.js"></script>
</body>
</html>

