<?php 
	$unameError = "";
	$name = "";
	if(isset($_REQUEST['submit'])){
		if($_REQUEST[''] == null){
			$unameError = "name is empty....";
		}else{
			$name = $_REQUEST[''];
			echo "date = ".$name;
		}
	}
?>