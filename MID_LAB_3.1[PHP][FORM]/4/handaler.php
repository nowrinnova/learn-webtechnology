<?php 
	$unameError = "";
	$name = "";
	if(isset($_REQUEST['submit'])){
		if($_REQUEST['radio'] == null){
			$unameError = "name is empty....";
		}else{
			$name = $_REQUEST['radio'];
			echo "Name = ".$name;
		}
	}
?>