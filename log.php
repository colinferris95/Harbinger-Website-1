<?
session_name("MyLogin");
session_start();

if($_GET['action'] == "login") {
	$conn = mysql_connect("127.0.0.1","root","laFr0scia");
	$db = mysql_select_db("users");
	$name = $_POST['user'];
	$q_user = mysql_query("SELECT * FROM USERS WHERE login='$name'");
	
	if(mysql_num_rows($q_user) == 1) {
		
	$query = mysql_query("SELECT * FROM USERS WHERE login='$name'");
	$data = mysql_fetch_array($query);
	if($_POST['pwd'] == $data['password']) {
		session_register("name");
		header("Location: index.php"); // success page
		exit;	
	} else {
	header("Location: login.php?login=failed&cause=".urlencode('Wrong Password'));
	exit;
	}
	} else {
		header("Location: login.php?login=faied&cause=".urlencode("Invalid User"));
		exit;
	}
}

// if the session is not registered
if(session_is_registered("name") == false) {
	header("Location: login.php");
}
?>