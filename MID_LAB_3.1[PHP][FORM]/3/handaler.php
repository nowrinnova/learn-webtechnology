<?php 
	$unameError = "";
	$name = "";
	if(isset($_REQUEST['submit'])){
		if($_REQUEST['date'] == null){
			$unameError = "name is empty....";
		}else{
			$name = $_REQUEST['date'];
			echo "Name = ".$name;
		}
	}
?>