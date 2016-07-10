<?php

include('conf.php'); 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo define;?></title>
<link href="<?php echo DIR;?>style/style.css" rel="stylesheet" type="text/css" />
<link href="stylesheet.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="MainContainer">
<div class="menu">
<div class="container">
	
	<!-- NAV -->
	
	<?php
//
		$sql = "SELECT visible,summary,headline,content FROM cms.articles";
		$result = $conn ->query($sql);
		if($result -> num_rows > 0){
			while($row = $result ->fetch_assoc()){
				if($row['visible'] == 1){
				
					echo "<div class= 'box'>";
					echo $row['visible'];
					echo $row['headline'];
					echo $row['summary'];
					echo $row['content'];
					echo "</div>";
				}
			}
		}
		
		
	?>


	</div></div></div>
	<!-- END NAV -->
	<!--
<div id="content">
	
	
/*
		$sql = "SELECT username from cms.users";
		$result = $conn ->query($sql);
		if($result -> num_rows > 0){
			while($row = $result ->fetch_assoc()){
				echo $row['username'];
			}
		}
	?>

	
	</div><!-- close content div 

	<div id="footer">	
			<div class="copy">&copy;</div> 
	</div><!-- close footer --> 


</body>
</html>
	