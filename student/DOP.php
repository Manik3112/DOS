<?php
 require("../dbase.php");
date_default_timezone_set("Asia/Kolkata");
$date = new DateTime();
if(isset($_POST['submit']))
		  {
			  $sqls="insert into op values('','".$_POST['name']."','".$_POST['room']."','".$_POST['branch']."','".$_POST['sem']."','".$_POST['timeout']."','".$_POST['timein']."','Null')";
			if ($conn->query($sqls) === TRUE)
			{
			  echo '<p class="row col s12 green white-text center">Submitted</p>';
			  $sqlsh="insert into oph values('','".$_POST['name']."','".$_POST['room']."','".$_POST['branch']."','".$_POST['sem']."','".$_POST['timeout']."','".$_POST['timein']."','--','--')";
			  $conn->query($sqlsh);
			}
			else
			{
			  echo '<p class="row col s12 red white-text center">Not Submitted</p>';
			}
			
		  }
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
<?php include('menu.php'); ?>
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
		  <form action='<?php echo"DOP.php?JSON=".$url;?>' method="POST">
		    <div class="row input-field">
			   <div class="container col s12 m6 offset-m3 center">
				<p class="col s3 white-text">Name</p><input readonly name="name" value="<?php echo$JSON->name; ?>" class="col s9 white-text" />
				<p class="col s3 white-text">Room No.</p><input readonly name="room" value="<?php echo$JSON->hostel." : ".$JSON->room; ?>" class="col s9 white-text" />
				<p class="col s3 white-text">Branch</p><input readonly name="branch" value="<?php echo$JSON->branch; ?>" class="col s9 white-text" />
				<p class="col s3 white-text">Semester</p><input readonly name="sem" value="<?php echo$JSON->sem; ?>" class="col s9 white-text" />
				 <p class="col s3 white-text">Time</p><input type="time" name="timeout" class="col s4 white-text" min="10:00" max="18:00" required /><p class="col s1 white-text">To</p><input type="time" min="10:00" max="18:00" name="timein" class="col s4 white-text" />
				 <input type="submit" name="submit" Value="Submit" class="btn" />
			   </div>
			  </div>
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