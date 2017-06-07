<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form method="post" role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="on">
		<input type="email" name="user" placeholder="Enter your username">
		<input type="password" name="pass" placeholder="Enter your password">
		<button name="login">Login</button>
	</form>
</body>
</html>