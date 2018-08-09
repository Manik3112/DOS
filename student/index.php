<?php
 require("../dbase.php");
 $sqln="select * from notice";
 $resultn = $conn->query($sqln);
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
		 <div class="col s12 m5 white center">
		 <h4>Notice Board</h3>
		 <div class="row grey lighten-2" style="margin:3%;padding:3%;">
		  <?php
		    if ($resultn->num_rows > 0)
			{
				while($row = $resultn->fetch_assoc())
				{
					
					echo'<h4>'.$row['heading'].'</h4>'.$row['body'];
				}
			}
		  ?>
		  </div>
		 </div>
		 <div class="col s12 m7">
		   <a href='<?php echo"DOP.php?JSON=".$url;?>' class="btn btn-large col m10 offset-m1 l4">Day Out Pass</a>
		   <a href='<?php echo"NOP.php?JSON=".$url;?>' class="btn btn-large col m10 offset-m1 l4 red">Night Out Pass</a>
		   <a href='<?php echo"OPH.php?JSON=".$url;?>' class="btn btn-large col m10 offset-m1 l4 cyan">Out Pass History</a>
		 </div>
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