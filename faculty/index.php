<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Faculty Portal</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<style>
.col{
margin-top:2px;
}
</style>
  </head>
<body style="background:rgb(222,52,131);">
<?php include('menu.php'); ?>
    <div class="container" style="background:rgba(0,0,0,0.3);margin-top:5vh;">
	  <div class="section">
	  </div>
	  <div style="width:94%;margin-left:3%;">
	    <div class="row valign-wrapper" style="background:rgb(222,52,131);">
		  <img src="../images/fac.jpg" class="col s6 m2" />
		  <div class="col m7"></div>
		  <div class="col s6 m3"><a href="../" class="btn">Log Out</a></div>
		</div>
		<div class="row">
		   <a href='<?php echo"viewday.php?JSON=".$url;?>' class="btn hoverable btn-large col m10 offset-m1 l3">View Application</a>
		   <a href='<?php echo"viewnight.php?JSON=".$url;?>'class="btn hoverable btn-large col m10 offset-m1 l3 offset-l1 red">View Night Application</a>
		   <a href='<?php echo"addnotice.php?JSON=".$url;?>' class="btn hoverable btn-large col m10 offset-m1 l3 offset-l1 cyan">Create Notice</a>
		</div>
		<div class="row">
		   <a href='<?php echo"viewfault.php?JSON=".$url;?>' class="btn hoverable btn-large col m10 offset-m1 l3">View Faulties</a>
		   <a href='<?php echo"viewpast.php?JSON=".$url;?>' class="btn hoverable btn-large col m10 offset-m1 l3 offset-l1 red">View Past Application</a>
		   <a href='<?php echo"delnotice.php?JSON=".$url;?>' class="btn hoverable btn-large col m10 offset-m1 l3 offset-l1 cyan">Delete Notice</a>
		</div>
	  </div>
	  <div class="section"></div>
	</div>
    
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../js/materialize.js"></script>
  <script src="../js/init.js"></script>

  </body>
</html>