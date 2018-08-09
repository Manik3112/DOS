<?php
date_default_timezone_set("Asia/Kolkata");
 require("../dbase.php");
	if(isset($_GET['start']))
		  {
			  $sql="update op set status ='Out : ".date("H:i")."' where opid=".$_GET['start'];
			  $conn->query($sql);
			  $sql1="update oph set otime ='".date("H:i")."' where opid=".$_GET['start'];
			  $conn->query($sql1);
			  
		  }
	if(isset($_GET['stop']))
		  {
			  $sql="update oph set itime ='".date("H:i")."' where opid=".$_GET['stop'];
			$conn->query($sql);
			$sql1="delete from op where opid=".$_GET['stop'];
			$conn->query($sql1);
		  }
	if(isset($_GET['remove']))
		  {
			$sql1="delete from op where opid=".$_GET['stop'];
			$conn->query($sql1);
		  }
	if(isset($_GET['startn']))
		  {
			  $sql="update nop set status ='Out : ".date("y-m-d")."' where nid=".$_GET['startn'];
			  $conn->query($sql);
			  $sql1="update noph set odate ='".date("y-m-d")."' where nid=".$_GET['startn'];
			  $conn->query($sql1);
			  
		  }
	if(isset($_GET['stopn']))
		  {
			  $sql="update noph set idate ='".date("y-m-d")."' where nid=".$_GET['stopn'];
			$conn->query($sql);
			$sql1="delete from nop where nid=".$_GET['stopn'];
			$conn->query($sql1);
		  }
	if(isset($_GET['removen']))
		  {
			$sql1="delete from nop where nid=".$_GET['removen'];
			$conn->query($sql1);
		  }
	$sqlsd="select * from op";
	$resultsd = $conn->query($sqlsd);
	$sqlsn="select * from nop";
	$resultsn = $conn->query($sqlsn);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Security Portal</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body style="background:rgb(235,161,53);">
<?php include('menu.php'); ?>
    <div class="container" style="background:rgba(0,0,0,0.3);margin-top:5vh;">
	  <div class="section">
	    </div>
	  <div style="width:94%;margin-left:3%;">
	    <div class="row valign-wrapper" style="background:rgb(235,161,53);">
		  <img src="../images/sec.jpg" class="col s6 m2" />
		  <div class="col s0 m7"></div>
		  <div class="col s6 m3"><a href="../" class="btn">Log Out</a></div>
		</div>
		<div class="row">
		 <table class="white-text centered bordered">
		  <thead><tr>
		   <th>ID</th>
		   <th>Name</th>
		   <th>Room</th>
		   <th>Semester</th>
		   <th>Time</th>
		   <th>Allow</th>
		   <th>Out Time</th>
		  </tr></thead>
		  <tbody>
		  <?php
		   if ($resultsd->num_rows > 0)
			{
					while($rowsd = $resultsd->fetch_assoc()) 
					{
					  if($rowsd['status']!="Null")
					  {
						echo"<tr><td>".$rowsd['opid']."</td>";
						echo"<td>".$rowsd['name']."</td>";
						echo"<td>".$rowsd['room']."</td>";
						echo"<td>".$rowsd['sem']."</td>";
						echo"<td>".$rowsd['timeout']." : ".$rowsd['timein']."</td>";
						echo"<td>".$rowsd['status']."</td>";
						if($rowsd['status']=="Allowed"){?>
						<td>
						<a href='<?php echo"index.php?JSON=".$url;?>&start=<?php echo$rowsd['opid']; ?>' class="btn-floating">Start</a></td>
						</tr>
					  <?php
					  }
					  else if($rowsd['status'][0]=='O'&&$rowsd['status'][2]=='t'){?>
						<td>
						<a href='<?php echo"index.php?JSON=".$url;?>&stop=<?php echo$rowsd['opid']; ?>' class="btn-floating red">Stop</a></td>
						</tr>
					  <?php
					  }else if($rowsd['status']=="Not Allowed"){?>
						<td>
						<a href='<?php echo"index.php?JSON=".$url;?>&remove=<?php echo$rowsn['opid']; ?>' class="btn-floating grey">X</a></td>
						</tr>
					  <?php
					  }
					  }
					}
			}
			if ($resultsn->num_rows > 0)
			{
					while($rowsn = $resultsn->fetch_assoc()) 
					{
					  if($rowsn['status']!="Null")
					  {
						echo"<tr style='background:rgba(0,0,0,0.5);'><td>".$rowsn['nid']."</td>";
						echo"<td>".$rowsn['name']."</td>";
						echo"<td>".$rowsn['room']."</td>";
						echo"<td>".$rowsn['sem']."</td>";
						echo"<td>".$rowsn['dateout']." : ".$rowsn['datein']."</td>";
						echo"<td>".$rowsn['status']."</td>";
						if($rowsn['status']=="Allowed"){?>
						<td>
						<a href='<?php echo"index.php?JSON=".$url;?>&startn=<?php echo$rowsn['nid']; ?>' class="btn-floating">Start</a></td>
						</tr>
					  <?php
					  }
					  else if($rowsn['status'][0]=='O'&&$rowsn['status'][2]=='t'){?>
						<td>
						<a href='<?php echo"index.php?JSON=".$url;?>&stopn=<?php echo$rowsn['nid']; ?>' class="btn-floating red">Stop</a></td>
						</tr>
					  <?php
					  }else if($rowsn['status']=="Not Allowed"){?>
						<td>
						<a href='<?php echo"index.php?JSON=".$url;?>&removen=<?php echo$rowsn['nid']; ?>' class="btn-floating grey">X</a></td>
						</tr>
					  <?php
					  }
					  }
					}
			}
			?>
		  </tbody>
		 </table>
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