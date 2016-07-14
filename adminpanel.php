<?php 
 if (!defined('included')){
    //die('You cannot access this file directly!');
 }
 //require('conf.php');
?>
<script language="javascript" type="text/javascript">
  function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.body.scrollHeight *1.01 + 'px';
  }
</script>

	<div class = 'Box'> 
	<div class = 'Headline'>
	<p class = 'HeadlineText'> Admin Panel  </p></div>
	<div class = 'Line'><br></div>
	<div class = 'Summary'>
	<!-- abusing box css for Admin Panel -->
	<?php include('addArticle.php'); ?>
		<div class = 'subBox'>
			<form action="addArticle.php" style="height:250px" method="post">
			
				Headline: <input class="HeadlineTextInput" type="text" name="headline"> 
				Visible: <select name="visible">
					<option value="1"> visible</option>
					<option value="0"> not visible</option>
						</select>  
				Type: <select name="type">
					<option value="Java" > Java </option>
					<option value="PHP"  > PHP </option>
					<option value="Ruby" > Ruby </option>
					<option value="C++"  > C++ </option>
						</select><br>
				Summary:<br><textarea name="summary" id="inputTextAreaSummary"></textarea>

			<br>Content:<br> <textarea name="content" id="inputTextAreaContent"></textarea>
			
			<br>
		<button id="AdminButtons" name="add" value="Add"  type="submit"><span>Add</span></button>


			</form>
			
			<br><br>
			<iframe class = "dataReviewIFrame" src="/editArticle.php" frameborder="0" scrolling="no" onload="resizeIframe(this)">
							<?php 
							include('editArticle.php'); 
							
							?>

			</iframe>

		</div>
	</div>
	</div>