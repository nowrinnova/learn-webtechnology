<?php 
	session_start();
	
	if(isset($_REQUEST['edit'])){
		$name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
		$gender = $_REQUEST['gender'];
        $dobStr = explode('/',$_REQUEST['dob']);
		$dob = [
            'dd'=> $dobStr[0],
            'mm'=> $dobStr[1],
            'yyyy'=> $dobStr[2]
        ];
		
		if(!is_null($name) && !is_null($email) && !is_null($gender) && !is_null($dob)){
			$user = ['name' => $name,'email'=>$email,'gender'=>$gender, 'dob'=>$dob];
			$_SESSION['user'] = $user;
			header('location: ./profile.php');
		}else{
			echo "null submission";
		}
	}
?>