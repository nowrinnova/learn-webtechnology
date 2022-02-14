<?php 
	$unameError = "";
	$name = "";
	if(isset($_REQUEST['submit'])){
		if($_REQUEST['checkbox'] == null){
			$unameError = "name is empty....";
		}else{
			$name = $_REQUEST['checkbox'];
		}
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task_1</title>
</head>

<body>
    <fieldset style="display: inline-block">
        <legend>degree</legend>
        <form action="" method="POST">
            degree<br>
            <input type="checkbox" name="degree" value=""> <br>
            <hr>
            <input type="submit" name="submit" value="submit">
            <b> degree = </b><?=$name?>
        </form>
    </fieldset>
</body>

</html>