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
		<?php
		   if(isset($_POST['Submit']))
		  {
			  $sql="insert into notice values('','".$_POST['heading']."','".$_POST['body']."','".$JSON->name."')";
			if ($conn->query($sql) === TRUE)
			{
			  echo '<p class="row col s12 green white-text center">Submitted</p>';
			}
			
		  }
		?>
		<form action="" method="POST">
		  <div class="row input-field">
		   <div class="container">
			<p class="col s3 white-text">Heading</p><input name="heading" class="col s9 white-text" />
			<p class="col s3 white-text">Notice</p><textarea name="body" style="height:100px;" class="col s9"></textarea>
		   </div>
		  </div>
		  <div class="section"></div>
		  <div class="row">
		   <div class="col s12 center white-text">
			<input type="submit" class="btn" name="Submit" Value="Submit" />
		   </div>
		  </div>
	  </form>
	  </div>
	  <div class="section"></div>
	</div>
    
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../js/materialize.js"></script>
  <script src="../js/init.js"></script>

  </body>
</html>