<?php

if(isset($_POST['add'])){
	include_once('conf.php');	
    $headline = mysqli_real_escape_string($conn,$_POST['headline']);
	$visible = mysqli_real_escape_string($conn,$_POST['visible']);
	$summary = mysqli_real_escape_string($conn,$_POST['summary']);
	$content = mysqli_real_escape_string($conn,$_POST['content']);
	$type = mysqli_real_escape_string($conn,$_POST['type']);

	$sql = "INSERT INTO cms.articles (ID,visible,headline,summary,content,type) VALUES(NULL,'$visible','$headline','$summary','$content','$type')";

	
	$query = mysqli_query($conn, $sql);
	echo $query;
	$conn->close();
	?>
						<form name="menu" action="index.php" method="POST">
						<tr><td>
							<button class="MatButton" name="admin" value="redirect"  type="submit"><span>Return now</span></button>
							<script>document.getElementsByClassName("MatButton")[0].click();</script>

						</td></tr>
					</form>
					<?php


}



?>