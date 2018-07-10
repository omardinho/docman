
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<style type="text/css">
		html,body{
			height: 100%;
			width:100%;
			display: flex;

		}
		form{
			display: flex;
			align-items: center;
			justify-content: center;
			height: 100%;
			width:100%;
		}

	</style>
</head>
<body>
<form method="POST" action="reg.php">
	<table>
		<tr>
			<td>Full Name:</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>User Name:</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>E-mail:</td>
			<td><input type="text" name="email"></td>
		</tr>

		<tr>
			<td>Password:</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit"></td>
		</tr>

	</table>
	
	
	
	
	
</form>
</body>
</html>
