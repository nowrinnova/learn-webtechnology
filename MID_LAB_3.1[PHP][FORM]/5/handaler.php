<?php 
	$unameError = "";
	$name = "";
	if(isset($_REQUEST['submit'])){
		if($_REQUEST['checkbox'] == null){
			$unameError = "degree is empty....";
		}else{
			$name = $_REQUEST['checkbox'];
			echo "degree = ".$name;
		}
	}
?>