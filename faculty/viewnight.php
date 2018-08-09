<?php
 require("../dbase.php");
	if(isset($_GET['allow']))
		  {
			  $sql="update nop set status ='Allowed' where nid=".$_GET['allow'];
			$conn->query($sql);
		  }
	if(isset($_GET['disallow']))
		  {
			  $sql="update nop set status ='Not Allowed' where nid=".$_GET['disallow'];
			$conn->query($sql);
		  }
	$sqlsn="select * from nop";
	$resultsn = $conn->query($sqlsn);
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
		   <th>Date</th>
		   <th>Allow</th>
		  </tr>
		  <tr>
		   <th></th>
		   <th>Parents Review</th>
		   <th>Allowed</th>
		   <th colspan=3>Comments</th>
		   </tr></thead>
		  <tbody>
			<?php
		   if ($resultsn->num_rows > 0)
			{
					while($rowsn = $resultsn->fetch_assoc()) 
					{
					  if($rowsn['status']=="Null")
					  {
						echo"<tr style='background:rgba(0,0,0,0.4);'><td>".$rowsn['nid']."</td>";
						echo"<td>".$rowsn['name']."</td>";
						echo"<td>".$rowsn['room']."</td>";
						echo"<td>".$rowsn['sem']."</td>";
						echo"<td>".$rowsn['dateout']." : ".$rowsn['datein']."</td>";
						?>
						<td>
						<a href='<?php echo"viewnight.php?JSON=".$url;?>&allow=<?php echo$rowsn['nid']; ?>' class="btn-floating">Yes</a>
						<a href='<?php echo"viewnight.php?JSON=".$url;?>&disallow=<?php echo$rowsn['nid']; ?>' class="btn-floating red">No</a></td>
						</tr>
						<tr style="border-bottom:solid 1px; background:rgba(0,0,0,0.3);">
						 <td></td>
						 <td><b>Parents Review</b></td>
						 <td><?php echo$rowsn['parents']; ?></td>
						 <td colspan=3><?php echo$rowsn['parentsr']; ?></td>
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