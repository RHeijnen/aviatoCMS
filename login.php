<link href="stylesheet.css" rel="stylesheet" type="text/css">

		
	<div id = 'LoginBox'> 
	<div id = 'LoginBoxHeadline'>
	<p class = 'HeadlineText'> Log in  </p></div>
	<div id = 'LoginBoxLine'> </div>

	<div id	 = 'LoginBoxSummary'> 
			<form action="authenticate.php" method="post">
			<table align="center" >
				<tr>
					<td align="right"><b>Username</b></td>
					<td><input type="text" name="username" required="required"/></td>
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
	
	</div>
	</div>
