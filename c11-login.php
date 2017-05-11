<?php
session_start();

$config = 'mysql:host=127.0.0.1;dbname=login';
$username = 'root';
$password = 'root';
$db = new PDO($config, $username, $password);


if (isset($_POST['email']) && $_POST['password']) {
	$post_mail = trim(strip_tags($_POST['email']));
	$vemail = filter_var($post_mail, FILTER_VALIDATE_EMAIL);
	$post_password = trim(strip_tags($_POST['password']));

	if(strlen($post_password) > 0 && $vemail){
		$sql = 'select * from users where email = :email and password = :password'; 
		$table_query = $db->prepare($sql);
		$table_query->bindValue(':email', $vemail);
		$table_query->bindValue(':password', $post_password);
		$table_query->execute();
		$table_res = $table_query->fetchAll(PDO::FETCH_ASSOC);	

		if (count($table_res) > 0) {
			echo "Successful Log in";
			$_SESSION['logged in'] = true;
			$_SESSION['user_email'] = $table_res[0]['email'];
			$_SESSION['user_id'] = $table_res[0]['id'];

			header('location: admin.php');
		} else {
			header('location: c11-login.php');
		//echo "Unsuccessful Log in";
		}	
	}
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Log In</title>
</head>
<body>

	<form action='c11-login.php' method="post">
		<input type="email" name="email">
		<input type="password" name="password">
		<button type="submit">log in</button>
	</form>

</body>
</html>