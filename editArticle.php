<?php 
 // put session data in number for easier access for sql 
session_start();
 

if (!isset($_SESSION['articleCount'])) {
	$_SESSION['articleCount'] = 1;	
	$NUMBER = $_SESSION['articleCount']; 
}else{
	$NUMBER = $_SESSION['articleCount'];
}

function checkOverflow($increment){
	include_once('conf.php');
	$sql = "SELECT ID from cms.articles";
	$result = DBi::$conn ->query($sql);
	$getRowCount = mysqli_num_rows($result);
	if($increment == 'up'){
		if($_SESSION['articleCount'] >= $getRowCount){
			$_SESSION['articleCount'] == 1;	
		}else {
			$_SESSION['articleCount']++;
		}
	}else if($increment =='down'){
		if($_SESSION['articleCount'] == 1){
			$_SESSION['articleCount'] == $getRowCount;
		}else{
			$_SESSION['articleCount']--;
		}
	}	
}
//$_SESSION['articleCount'] = 1;// reset session >_>
if(isset($_POST['next'])){
	
	checkOverflow('up');
	$NUMBER = $_SESSION['articleCount'];

}else if(isset($_POST['prev'])){
	checkOverflow('down');
	$NUMBER = $_SESSION['articleCount'];

}else if(isset($_POST['save'])){
	$ID = $_POST['id'];
	$Headline = $_POST['headline'];
	$Visible = $_POST['visible'];
	$Summary = $_POST['summary'];
	$Content = $_POST['content'];
	$Type = $_POST['type'];

	//echo $ID;
	alterArticle($ID,$Visible,$Headline,$Summary,$Content,$Type);
	//echo "updated";
}
function alterArticle($ID,$VISIBLE,$HEADLINE,$SUMMARY,$CONTENT,$TYPE){
	include_once('conf.php');
	$sql = "UPDATE cms.articles SET visible = '$VISIBLE',headline = '$HEADLINE',summary = '$SUMMARY',content = '$CONTENT',type = '$TYPE' WHERE ID = '$ID'";
	$update = DBi::$conn ->query($sql);
	//echo print_r ($conn);
	}
function displayRowData($NUMBER){
    include_once('conf.php');

	$sql = "SELECT ID,visible,summary,headline,content,type FROM cms.articles WHERE ID = '$NUMBER'";
	$result = DBi::$conn ->query($sql);
		if($result -> num_rows > 0){
			while($row = $result ->fetch_assoc()){
				?>
					<link href="stylesheet.css" rel="stylesheet" type="text/css">
					
					<form id="editarticle" name="editarticle" action="editArticle.php" method="POST">

						ID: <textarea readonly name="id" id="inputTextAreaID" cols="10" rows="1"><?php echo $row['ID'] ?></textarea>  
						Headline: <textarea name="headline" id="inputTextAreaHeadline" cols="10" rows="1"><?php echo $row['headline'] ?></textarea>   
						Visible: 
						<select name="visible">
							<option selected="selected">
								<?php echo $row['visible'] ?>			
							</option>
							<option value="1" > Visible </option>
							<option value="0"  > Not Visible </option>
						</select> 
						
						
						<br>Summary:<br> <textarea name="summary" id="inputTextAreaSummary"><?php echo $row['summary'] ?></textarea>
						<br>Content:<br> <textarea name="content" id="inputTextAreaContent" ><?php echo $row['content'] ?></textarea>
						<br>Type:<br> 
						<select name="type">
							<option selected="selected">
								<?php echo $row['type'] ?>
							</option>
					
							<option value="Java" > Java </option>
							<option value="PHP"  > PHP </option>
							<option value="Ruby" > Ruby </option>
							<option value="C++"  > C++ </option>
					
						</select>                            
						<button id="MatButton" name="prev" value="Prev"  type="submit"><span>prev</span></button>
						<button id="MatButton" name="next" value="Next"  type="submit"><span>next</span></button>
						<button id="MatButton" name="save" value="Save"  type="submit"><span>save</span></button>

					</form>
					
					<?php	
				
			}
		}


}	
displayRowData($NUMBER);
?>