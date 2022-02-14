<?php 
	$unameError = "";
	$name = "";
	if(isset($_REQUEST['submit'])){
		if($_REQUEST['email'] == null){
			$unameError = "name is empty....";
		}else{
			$name = $_REQUEST['email'];
			echo "Name = ".$name;
		}
	}
?>