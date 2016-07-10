
			<form action="" method="post">
			<table width="150px" align="center" bgcolor="skyblue">
				<tr align="center">
					<td colspan="3"><h2>User Login</h2></td>
				</tr>
				<tr>
					<td align="right"><b>Email</b></td>
					<td><input type="text" name="email" required="required "/></td>
				</tr>
				<tr>
					<td align="right"><b>Password:</b></td>
					<td><input type="password" name="pass" required="required"></td>
				</tr>
				<tr align="center">
					<td colspan="3">
					<input type="submit" name="login" value="Login"/>
					</td>
				</tr>
		</table>
		</form>
		
	<?php 
		if(isset($_POST['action'])){

			$email = mysqli_real_escape_string($conn,$_POST['email']);
			$pass = mysqli_real_escape_string($conn,$_POST['pass']);

			$sel_user = "select username,password from cms.users where username = '$email' AND password = '$pass'";
			$run_user = mysqli_query($con, $sel_user);

			$check_user = mysqli_num_rows($run_user);

				if($check_user>0){
					$_SESSION['user_email']=$email;
					echo "<script>window.open('index.php','_self')</script>";
				}else {
					echo "<script>alert('Email or password is not correct, try again!')</script>";
					echo "fail";
				}

		}
	?>