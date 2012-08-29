<?php
	session_start();
	
	if (!isset($_SESSION['is_logged_in'])) {
		header("Location:login.php"); // redirect to the login page if not logged in
		die();
	}
?>
<html>
<head>
</head>
<body>

	<p>You should only be seeing this is you're logged in!</p>
	
</body>
</html>