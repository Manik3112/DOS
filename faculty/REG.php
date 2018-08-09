<?php
  require("../dbase.php");
?>
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
</head>
<body style="background:rgb(222,52,131);">
<nav class="teal" role="navigation">
    <div class="nav-wrapper container">
	  <ul class="hide-on-med-and-down">
        <li><a href="../">Home</a></li>
      </ul>
    </div>
 </nav>
    <div class="container" style="background:rgba(0,0,0,0.3);margin-top:5vh;">
	  <div class="section">
	  </div>
	  <div style="width:94%;margin-left:3%;">
	    <div class="row valign-wrapper" style="background:rgb(222,52,131);">
		  <img src="../images/fac.jpg" class="col s6 m2" />
		  <div class="col s0 m7"></div>
		  <div class="col s6 m3"><a href="../" class="btn">Log Out</a></div>
		</div>
		<div class="row">
		<?php
		   if(isset($_POST['submit']))
		  {
			  $sql="insert into fac_reg values('".$_POST['fid']."','".$_POST['pass']."','".$_POST['name']."','".$_POST['hostel']."','".$_POST['phone']."','".$_POST['address']."','".$_POST['email']."','".$_POST['gender']."')";
			if ($conn->query($sql) === TRUE)
			{
			  echo '<p class="row col s12 green white-text center">Submitted</p>';
			}
			
		  }
		?>
		  <form action="" method="POST" class="col offset-m2 m8 s12	">
		    <h4 class="white-text">Faculty's Details</h4>
		    <p class="col s6 white-text">Faculty ID</p><input type="number" class="col s6 white-text" name="fid" required />
		    <p class="col s6 white-text">Password</p><input type="password" min="6" class="col s6 white-text" name="pass" required />
		    <p class="col s6 white-text">Name of Faculty</p><input class="col s6 white-text" name="name" required />
		    <p class="col s6 white-text">Hostel</p><input class="col s6 white-text" name="hostel" required />
		    <p class="col s6 white-text">Contact Number</p><input type="number" class="col s6 white-text" name="phone" min="7000000000" max="9999999999" required />
		    <p class="col s6 white-text">Address</p><input class="col s6 white-text" name="address" required />
		    <p class="col s6 white-text">Email ID</p><input class="col s6 white-text" name="email" type="email" required />
		    <p class="col s6 white-text">Gender</p><div class="col s6"><p><input type="radio" value="male" name="gender" id="male" /><label class="white-text" for="male">Male</label><input type="radio" value="female"name="gender" id="female" /><label class="white-text" for="female">Female</label></div>
			<input type="submit" class="btn col s4 offset-s4" value="Submit" name="submit" />
		  </form>
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