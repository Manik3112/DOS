<?php
date_default_timezone_set("Asia/Kolkata");
$date = new DateTime();
$date1 = new DateTime();
$date2 = new DateTime();
$date3 = new DateTime();
$date1->modify('+7 days');
$date2->modify('+1 days');
$date3->modify('+14 days');


 require("../dbase.php");
if(isset($_POST['submit']))
		  {
			  $sqls="insert into nop values('','".$_POST['name']."','".$_POST['room']."','".$_POST['branch']."','".$_POST['sem']."','".$_POST['dateout']."','".$_POST['datein']."','--','--','Null')";
			if ($conn->query($sqls) === TRUE)
			{
			  ?>
			  <script type="text/javascript" language="Javascript">window.open('../parents.php?name=<?php echo$_POST['name']; ?>&sem=<?php echo$_POST['sem']; ?>');</script>
			  <?php
			  echo '<p class="row col s12 green white-text center">Submitted</p>';
			  $sqlsh="insert into noph values('','".$_POST['name']."','".$_POST['room']."','".$_POST['branch']."','".$_POST['sem']."','".$_POST['dateout']."','".$_POST['datein']."','--','--','--')";
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
		  <form action='<?php echo"NOP.php?JSON=".$url;?>' method="POST">
		    <div class="row center input-field">
			   <div class="container col s12 m6 offset-m3">
				<p class="col s3 white-text">Name</p><input readonly name="name" value="<?php echo$JSON->name; ?>" class="col s9 white-text" />
				<p class="col s3 white-text">Room No.</p><input readonly name="room" value="<?php echo$JSON->hostel." : ".$JSON->room; ?>" class="col s9 white-text" />
				<p class="col s3 white-text">Branch</p><input readonly name="branch" value="<?php echo$JSON->branch; ?>" class="col s9 white-text" />
				<p class="col s3 white-text">Semester</p><input readonly name="sem" value="<?php echo$JSON->sem; ?>" class="col s9 white-text" />
				 <p class="col s3 white-text">Date</p><input type="date" name="dateout" min="<?php echo $date->format('Y-m-d'); ?>" max="<?php echo $date1->format('Y-m-d'); ?>" class="col s4 white-text" required /><p class="col s1 white-text">To</p><input type="date" min="<?php echo $date2->format('Y-m-d'); ?>" max="<?php echo $date3->format('Y-m-d'); ?>" name="datein" class="col s4 white-text" required />
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