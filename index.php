

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo DIR;?>style/style.css" rel="stylesheet" type="text/css" />
<link href="stylesheet.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include('body.php'); 
if(isset($_POST['test'])){
  writeContent('item1');
}else if(isset($_POST['home'])){
  writeContent('null');
}else if(isset($_POST['Java'])){
  writeContent('Java');	
}else if(isset($_POST['PHP'])){
  writeContent('PHP');
}else if(isset($_POST['Ruby'])){
  writeContent('Ruby');
}else if(isset($_POST['Cpp'])){
  writeContent('Cpp');
}else if(isset($_POST['admin'])){
  writeContent('admin');
}else {
  writeContent('null'); // starts here 
}
 ?>
 
</body>
</html>
	