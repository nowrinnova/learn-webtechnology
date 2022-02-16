<?php 
	session_start();
	
	if(isset($_REQUEST['submit'])){
		$name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$gender = $_REQUEST['gender'];
		$dob = [
            'dd' => $_REQUEST['dd'],
            'mm' => $_REQUEST['mm'],
            'yyyy' => $_REQUEST['yyyy']
        ];
		

		if(!is_null($name) && !is_null($email) && !is_null($username) && !is_null($password) && !is_null($gender) && !is_null($dob)){
			$user = ['name' => $name,'email'=>$email,'username'=> $username, 'password'=> $password,'gender'=>$gender, 'dob'=>$dob];
			$_SESSION['user'] = $user;
			header('location: login.php');
		}else{
			echo "null submission";
		}

		//print_r($_REQUEST);
	}
?>