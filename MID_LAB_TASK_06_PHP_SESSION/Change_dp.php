<?php 
	session_start();
	if(isset($_COOKIE['status'])){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Profile picture</title>
</head>

<body>
    <table border="2" style="border-collapse: collapse;" width="100%">
        <tr style="border: 2px solid black;">
            <td style="border-right: 0px solid">
                <img src="https://i.ibb.co/Sm8cSr0/image.png" alt="logo"></a>
            </td>
            <td style="padding:12px; border-bottom: 5px single black collapse; border-left: 0px solid; text-align: right">
                Logged in as
                <a href="./profile.php"><?=$_SESSION['user']['name']?></a> |
                <a href="./logout.php">Logout</a>
            </td>
        </tr>
        <tr style="border: 2px solid black;">
            <td style="border: 2px solid black; width: 30%;">
                <b>Account</b> <br>
                <hr>
                <ul>
                    <li><a href="Dashboard.php">Dashboard</a></li>
                    <li><a href="profile.php">View Profile</a></li>
                    <li><a href="edit_profile.php">Edit Profile</a></li>
                    <li><a href="change_dp.php">Change Profile Picture</a></li>
                    <li><a href="change_password.php">Change Password</a></li>
                    <li><a href="logout.php">Log out</a></li>
                </ul>
            </td>
            <td colspan="2" style="vertical-align: middle; text-align: left;padding: 5px;">
                <fieldset>
                    <legend>PROFILE PICTURE</legend>
                    <form action="" method="post" enctype='multipart/form-data'>
                        <img src="image.png" alt="dp"> <br>
                        <input type="file" name="img_upload">
                        <hr>
                        <input type="submit" name="upload" value="upload">
                </fieldset>
                </form>
            </td>
        </tr>
        </tr>
        <tr style="border: 2px solid black;">
            <td colspan="2" style="border:none; text-align: center; padding: 15px;">
                Copyright &copy; 2017
            </td>
        </tr>
    </table>
</body>

</html>

<?php
}else{
    echo "<center><h1>You are not logged in<h1></center>";
}
if (isset($_POST['upload'])) {
    $path_parts = pathinfo($_FILES["img_upload"]["name"]);
    $extension = $path_parts['extension'];
    if($extension == "jpg" || $extension == "jpeg" || $extension == "png" || $extension =="gif"){
        $img_name = $_FILES['img_upload']['name'];
        $tmp_img_name = $_FILES['img_upload']['tmp_name'];
        move_uploaded_file($tmp_img_name, $img_name);
        rename($img_name, "image.png");
    }else{
        echo "Invalid file format";
    }
}
?>