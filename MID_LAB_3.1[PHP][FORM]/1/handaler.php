<?php 
	$unameError = "";
	$name = "";
	if(isset($_REQUEST['submit'])){
		if($_REQUEST['name'] == null){
			$unameError = "name is empty....";
		}else{
			$name = $_REQUEST['name'];
			echo "Name = ".$name;
		}
	}
?>