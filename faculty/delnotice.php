<?php
  require("../dbase.php");
   if(isset($_GET['del']))
		  {
			  $sql="delete from notice where id=".$_GET['del'];
			$conn->query($sql);
		  }
   $sqln="select * from notice";
   $resultn = $conn->query($sqln);
	  
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
		   <th>Heading</th>
		   <th>Notice</th>
		   <th>Faculty</th>
		   <th>Status</th>
		  </tr></thead>
		  <tbody>
		  <?php
			if ($resultn->num_rows > 0)
			{
				while($row = $resultn->fetch_assoc()) {
					echo"<tr><td>".$row['id']."</td>";
					echo"<td><b>".$row['heading']."</b></td>";
					echo"<td>".$row['body']."</td>";
					echo"<td>".$row['faculty']."</td>";
					?>
					<td><a href='<?php echo"delnotice.php?JSON=".$url;?>&del=<?php echo$row['id']; ?>' class="btn red">Delete</a></td></tr>
				<?php }
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