<?php
 require("../dbase.php");
	if(isset($_GET['allow']))
		  {
			  $sql="update op set status ='Allowed' where opid=".$_GET['allow'];
			$conn->query($sql);
		  }
	if(isset($_GET['disallow']))
		  {
			  $sql="update op set status ='Not Allowed' where opid=".$_GET['disallow'];
			$conn->query($sql);
		  }
	$sqlsd="select * from op";
	$resultsd = $conn->query($sqlsd);
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
		<div class="row"><div class="col s12">
		 <table class="white-text centered">
		  <thead><tr>
		   <th>ID</th>
		   <th>Name</th>
		   <th>Room</th>
		   <th>Semester</th>
		   <th>Time</th>
		   <th>Allow</th>
		  </tr></thead>
		  <tbody>
		   <?php
		   if ($resultsd->num_rows > 0)
			{
					while($rowsd = $resultsd->fetch_assoc()) 
					{
					  if($rowsd['status']=="Null")
					  {
						echo"<tr><td>".$rowsd['opid']."</td>";
						echo"<td>".$rowsd['name']."</td>";
						echo"<td>".$rowsd['room']."</td>";
						echo"<td>".$rowsd['sem']."</td>";
						echo"<td>".$rowsd['timeout']." : ".$rowsd['timein']."</td>";
						?>
						<td>
						<a href='<?php echo"viewday.php?JSON=".$url;?>&allow=<?php echo$rowsd['opid']; ?>' class="btn-floating">Yes</a>
						<a href='<?php echo"viewday.php?JSON=".$url;?>&disallow=<?php echo$rowsd['opid']; ?>' class="btn-floating red">No</a></td>
						</tr>
						<?php
					  }
					}
			}	
			?>
		  </tbody>
		 </table>
		</div></div>
	  </div>
	  <div class="section"></div>
	</div>
    
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../js/materialize.js"></script>
  <script src="../js/init.js"></script>

  </body>
</html>