<?php
 require("dbase.php");
 if(isset($_POST['submit']))
 {
	$sql="select * from sec_reg";
	$result = $conn->query($sql);
	if ($result->num_rows > 0)
	{
			while($row = $result->fetch_assoc()) {
				if($row['sid']==$_POST['sid']&&$row['pass']==$_POST['pass'])
				{
					$row['pass'] = "******"; 
					$JSON = json_encode($row);
					$a=1;
				}
			}
	}
	if($a==1)
	{
	 header('Location:gaurd/index.php?JSON='.$JSON);
	}
	if($a!=1)
	{
	 echo '<p class="row col s12 red white-text center">Wrong Credentials</p>';
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
<body style="background:rgb(235,161,53);">
    <div class="container" style="background:rgba(0,0,0,0.3);margin-top:5vh;">
	  <div class="row">
	   <div class="col s1"></div>
	   <div class="col s10 center white-text">
	    <h1>Security Login Page</h1>
		<img class="col s4 offset-s4" src="images/sec.jpg" class="col s12" />
	   </div>
	   <div class="col s1"></div>
	  </div>
	  <form action="" method="POST">
	  <div class="row input-field">
	   <div class="container">
	    <p class="col s3 white-text">ID</p><input required name="sid" class="col s9 white-text" />
	    <p class="col s3 white-text">Password</p><input required name="pass" type="password" class="col s9" />
	   </div>
	  </div>
	  <div class="section"></div>
	  <div class="row">
	   <div class="col s12 center white-text">
	    <input type="submit" name="submit" class="btn" value="Login" />
	   </div>
	  </div>
	  </form>
	  <div class="section"></div>
	</div>
    
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>