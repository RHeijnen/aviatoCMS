<?php

include_once('conf.php');	
 
		if(isset($_POST['login'])){
			
			$username = mysqli_real_escape_string($conn,$_POST['username']);
			$pass = mysqli_real_escape_string($conn,$_POST['pass']);

			$sel_user = "select username,password from cms.users where username = '$username' AND password = '$pass'";
			$run_user = mysqli_query($conn, $sel_user);
			
			$check_user = mysqli_num_rows($run_user);

				if($check_user>0){
					$_SESSION['username']=$username;
					echo "<script>alert('Correct')</script>";
					echo "<script>window.open('adminpanel.php','_self')</script>";
				}else {
					echo "<script>alert('username or password is not correct, try again!')</script>";
					echo "fail";
				}
		}
		