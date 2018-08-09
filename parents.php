<?php
require("dbase.php");
$sqlsn ="select * from nop";
$resultsn = $conn->query($sqlsn);
  if(isset($_POST['submit']))
  {
	  $sql="update nop set parents ='".$_POST['parents']."', parentsr ='".$_POST['parentsr']."' where nid=".$_POST['nid'];
	  if($conn->query($sql)=== TRUE)
	  {
		 $sql1="update noph set parents ='".$_POST['parents']."' where nid=".$_POST['nid'];
	  if($conn->query($sql1)=== TRUE)
	  {
		  echo '<p class="row col s12 green white-text center">Submitted</p>';
	  }
	  }
	  
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>DOS - Digitizing DIT</title>

  <!-- CSS  -->
<style>
.student{}
.teacher{}
.security{}
</style>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body style="background:rgb(7,171,140);">
    <div class="container" style="background:rgba(0,0,0,0.3);margin-top:5vh;">
	  <div class="row">
	   <div class="col s1"></div>
	   <div class="col s10 center white-text">
	    <h1>Digital Outpass System</h1>
	   </div>
	   <div class="col s1"></div>
	  </div>
	  <div class="section"></div>
	  <div class="row">
	   <form action="" method="POST">
	   <?php
	   if ($resultsn->num_rows > 0)
			{
					while($rowsn = $resultsn->fetch_assoc()) 
					{
						if($rowsn['name']==$_GET['name']&&$rowsn['sem']==$_GET['sem'])
						{
						echo'<div class="col s10 center offset-s1" style="background:rgba(0,0,0,0.3);margin-bottom:2em;padding:1em;">
						<h5 class="col s4 white-text">Name</h5>
						<h5 class="col s2 white-text">:</h5>
						<h5 class="col s6 white-text">'.$rowsn['name'].'</h5>';
						echo'<h5 class="col s4 white-text">Date</h5>
						<h5 class="col s2 white-text">:</h5>
						<h5 class="col s6 white-text">'.$rowsn['dateout']." : ".$rowsn['datein'].'</h5>';
						echo'<div class="row">
						<h5>
						<input name="parents" type="radio" id="NotAllowed" value="Not Allowed" required/>
						<label for="NotAllowed">Not Allowed</label>
						<input name="parents" type="radio" id="Allowed" value="Allow" required/>
						<label for="Allowed">Allowed</label>
						<input type="hidden" value="'.$rowsn['nid'].'" name="nid" />
						</h5>
						
						</div>
						<h5 class="col s3 white-text">Review</h5>
						<input class="col s9 white-text" name="parentsr" /><br>
						<input type="submit" class="btn" name="submit" Value="Submit" />
						</div>';
						}
					}
			}	   
	   ?>
	   </form>
	  </div>
	  <div class="section"></div>
	</div>
    
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>