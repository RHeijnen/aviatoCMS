<?php

include('conf.php'); 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo DIR;?>style/style.css" rel="stylesheet" type="text/css" />
<link href="stylesheet.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="Wrap">
		<div id="Menu"> 

	</div>
    
	<div id="Container">	
	<?php
		$sql = "SELECT visible,summary,headline,content FROM cms.articles";
		$result = $conn ->query($sql);
		if($result -> num_rows > 0){
			while($row = $result ->fetch_assoc()){
				if($row['visible'] == 1){
				
					echo "<div class = 'Box'>";
					echo $row['headline']."<br>";
					echo $row['summary']."<br>";
					echo $row['content']."<br>";
					echo $row['content']."<br>";								
					echo "</div>";
				}
			}
		}
	?>


	</div>
</div>
</body>
</html>
	