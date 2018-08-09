<?php
  require("../dbase.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Student Portal</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body style="background:rgb(0,147,221);">
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
	    <div class="row valign-wrapper" style="background:rgb(0,147,221);">
		  <img src="../images/stu.jpg" class="col s6 m2" />
		  <div class="col s0 m7"></div>
		  <div class="col s6 m3"><a href="../" class="btn">Log Out</a></div>
		</div>
		<div class="row">
		<?php
		   if(isset($_POST['submit']))
		  {
			  $sql="insert into stu_reg values('".$_POST['uid']."','".$_POST['pass']."','".$_POST['name']."','".$_POST['sem']."','".$_POST['branch']."','".$_POST['room']."','".$_POST['hostel']."','".$_POST['address']."','".$_POST['phone']."','".$_POST['email']."','".$_POST['gender']."','".$_POST['gname']."','".$_POST['gphone']."','".$_POST['gemail']."','".$_POST['gaadhar']."')";
			if ($conn->query($sql) === TRUE)
			{
			  echo '<p class="row col s12 green white-text center">Submitted</p>';
			}
			else
			{
			  echo '<p class="row col s12 red white-text center">Not Submitted</p>';
			}
			
		  }
		?>
		  <form action="#" method="POST" class="col offset-m2 m8 s12	">
		    <h4 class="white-text">Student's Details</h4>
		    <p class="col s6 white-text">University Roll no</p><input class="col s6 white-text" name="uid" required />
		    <p class="col s6 white-text">Password</p><input type="password" min="6" class="col s6 white-text" name="pass" required />
		    <p class="col s6 white-text">Name of Student</p><input class="col s6 white-text" name="name" required />
		    <p class="col s6 white-text">Semester</p><input type="number" class="col s6 white-text" name="sem" required />
		    <p class="col s6 white-text">Branch</p><input class="col s6 white-text" name="branch" required />
		    <p class="col s6 white-text">Room No</p><input class="col s6 white-text" name="room" required />
		    <p class="col s6 white-text">Hostel</p><input class="col s6 white-text" name="hostel" required />
		    <p class="col s6 white-text">Address</p><input class="col s6 white-text" name="address" required />
		    <p class="col s6 white-text">Contact Number</p><input type="number" class="col s6 white-text" name="phone" min="7000000000" max="9999999999" required />
		    <p class="col s6 white-text">Emaid ID</p><input class="col s6 white-text" name="email" type="email" required />
		    <p class="col s6 white-text">Gender</p><div class="col s6"><p><input type="radio" value="male" name="gender" id="male" /><label class="white-text" for="male">Male</label><input type="radio" value="female"name="gender" id="female" /><label class="white-text" for="female">Female</label></div>
		    <h4 class="white-text">Gaurdian's Details</h4>
		    <p class="col s6 white-text">Gaurdian's Name</p><input class="col s6 white-text" name="gname" required />
		    <p class="col s6 white-text">Gaurdian's Phone</p><input class="col s6 white-text" name="gphone" min="7000000000" max="9999999999" required />
		    <p class="col s6 white-text">Gaurdian's Emaid ID</p><input type="email" class="col s6 white-text" name="gemail" required />
		    <p class="col s6 white-text">Gaurdian's Aadhar No</p><input class="col s6 white-text" name="gaadhar" required />
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