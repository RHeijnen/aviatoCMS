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
		<table id="menubar"><td>
		
		
		<tr><td>
		<button id="MatButton"  onclick="window.location.href='/index.php'" type="button"><span>Home</span></button>
		</td></tr>
		<tr><td>
		<button id="MatButton"  onclick="window.location.href='/login.php'" type="button"><span>Menu Item 1</span></button>
		</td></tr>
		<tr><td>
		<button id="MatButton"  onclick="window.location.href='/login.php'" type="button"><span>Menu Item 2</span></button>
		</td></tr>
		<tr><td>
		<button id="MatButton"  onclick="window.location.href='/login.php'" type="button"><span>Menu Item 3</span></button>
		</td></tr>
		<tr><td>
		<button id="MatButton"  onclick="window.location.href='/login.php'" type="button"><span>Menu Item 4</span></button>
		</td></tr>
		<tr><td>
		<button id="MatButton"  onclick="window.location.href='/login.php'" type="button"><span>Menu Item 5</span></button>
		</td></tr>
		</td></table>
		
		
		<br><br><br>
		<a class="adminbutton" href="/login.php"> Admin </a>
	</div>
    
	<div id="Container">	
	
	<div class = 'Box'> 
	<div class = 'Headline'>
	<p class = 'HeadlineText'> Sample Headline  </p></div>
	<div class = 'Line'></div>

	<div class = 'Summary'> Sample Content</div>
	</div>
	<?php
		$sql = "SELECT visible,summary,headline,content FROM cms.articles";
		$result = $conn ->query($sql);
		if($result -> num_rows > 0){
			while($row = $result ->fetch_assoc()){
				if($row['visible'] == 1){                   ?>
					<div class = 'Box'> 
					<div class = 'Headline'>
					<p class = 'HeadlineText'><?php echo $row['headline'] ?></p></div>
					<div class = 'Line'></div>
					<div class = 'Summary'><?php echo $row['summary'] ?></div>
					</div>
<?php	}
			}
				}
	?>


	</div>
</div>
</body>
</html>
	