<?php 
	session_start();
	if(isset($_REQUEST['login'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		if(!is_null($username) && !is_null($password)){
			$user = $_SESSION['user'];
			if($user['username'] == $username && $user['password'] == $password){
				$_SESSION['status'] = true;
				setcookie('status', 'true', time()+3600, '/');
				header('location: ./Dashboard.php');
			}else{
				echo "invalid user..";
			}
		}else{
			echo "null submission";
		}
	}
?>