	<?php 
	function getTypeData($type){
	include_once('conf.php');
		$sql = "SELECT visible,summary,headline,content,datetime FROM cms.articles WHERE type = '$type'";
		$result = $conn ->query($sql);
		if($result -> num_rows > 0){
			while($row = $result ->fetch_assoc()){
				if($row['visible'] == 1){?>
					<div class = 'Box'> 
					<div class = 'Headline'>
					<p class = 'HeadlineText'><?php echo $row['headline'] ?></p><p class = 'HeadlineText'> date: <?php echo $row['datetime'] ?></p> </div>
					<div class = 'Line'></div>
					<div class = 'Summary'><?php echo $row['summary'] ?></div>
					</div>
<?php			}
			}
		}
	}
	?>	
	
	
