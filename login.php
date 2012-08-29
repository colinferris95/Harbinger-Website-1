<html>
<head>

	<?
	session_name("MyLogin");
	session_start();
	session_destroy();
	
	if($_GET['login']=="failed") {
		print $_GET['cause'];
	}
	?>

</head>
<body>

	<form name="login_form" method="post" action="log.php?action=login">
		Login: <input type="text" name="user"><br />
		Password: <input type="password" name="pwd"><br />
		<input type="submit"><input type="reset" name="Clear">
	</form>

</body>
</html>