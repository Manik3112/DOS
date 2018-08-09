<?php
$url = $_GET['JSON'];
$JSON = json_decode($url);
?>
 <nav class="teal" role="navigation">
    <div class="nav-wrapper container">
	  <ul class="hide-on-med-and-down">
        <li><a href='<?php echo"index.php?JSON=".$url;?>'>Home</a></li>
      </ul>
	  <div class="right-align white-text" style="margin-right:5%;font-weight:bold;"><?php echo$JSON->name." | ".$JSON->uid ?></div>
    </div>
 </nav>