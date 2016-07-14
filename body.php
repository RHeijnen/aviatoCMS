
<?php 

	function writeContent($contentID){
		echo "<div id='Wrap'>";
		include('menu.php');
		echo "<div id='Container'>";
		switch ($contentID) {
			case "Java":
				include('typeContent.php');
				getTypeData('Java');
				break;
			case "PHP":
				include('typeContent.php');
				getTypeData('PHP');
				break;
			case "Ruby":
				include('typeContent.php');
				getTypeData('Ruby');
				break;
			case "Cpp":
				include('typeContent.php');
				getTypeData('C++');
				break;
			case "admin":
				include('adminpanel.php');
				break;
			default: 
				include('defaultcontent.php'); 
				break;
			}
			echo "</div></div>";
	}
?>
	

			
