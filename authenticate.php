<?php

include_once('conf.php');	

 
		if(isset($_POST['login'])){
			
			$username = mysqli_real_escape_string($conn,$_POST['username']);
			$pass = mysqli_real_escape_string($conn,$_POST['pass']);

			$sql = "select username,password from cms.users where username = '$username' AND password = '$pass'";
			$query = mysqli_query($conn, $sql);
			
			$checkValidUser = mysqli_num_rows($query);

				if($checkValidUser>0){
					$_SESSION['username']=$username;
					//
					?>
					
					<form name="menu" action="index.php" method="POST">
						<tr><td>
							<button class="MatButton" name="admin" value="A"  type="submit"><span>Return Now</span></button>
						</td></tr>
					</form>
					<script>document.getElementsByClassName("MatButton")[0].click();</script>
		<?php 
					//echo "<script>window.open('adminpanel.php','_self')</script>";
				}else {
					echo "<script>alert('username or password is not correct, try again!')</script>";
				}
		}
		