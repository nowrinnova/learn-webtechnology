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
    <title>Edit Profile</title>
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
                    <legend>EDIT PROFILE</legend>
                    <form action="./edituser.php" method="post">
                        <table>
                            <tr>
                                <td style="width: 220px; text-align: left; padding : 5px;">
                                    Name
                                </td>
                                <td>
                                    : <input type="text" name="name" value="<?=$_SESSION['user']['name']?>">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 220px; text-align: left; padding : 5px;">
                                    Email
                                </td>
                                <td>
                                    : <input type="email" name="email" value="<?=$_SESSION['user']['email']?>">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                Gender
                                </td>
                                <td colspan="2">
                                        :
                                        <input type="radio" name="gender" <?php if ($_SESSION['user']['gender'] == 'Male')  echo ' checked="checked"';?> value="Male"> Male
                                        <input type="radio" name="gender" <?php if ($_SESSION['user']['gender'] == 'Female')  echo ' checked="checked"';?> value="Female"> Female
                                        <input type="radio" name="gender" <?php if ($_SESSION['user']['gender'] == 'Other')  echo ' checked="checked"';?> value="Other"> Other
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td>Date Of Birth</td>
                                <td colspan="2">
                                        <table>
                                            <tr>
                                                <td>
                                                    : <input type="text" name="dob" value="<?=$_SESSION['user']['dob']['dd']?>/<?=$_SESSION['user']['dob']['mm']?>/<?=$_SESSION['user']['dob']['yyyy']?>"><br>
                                                    <i>(dd/mm/yyyy)</i>
                                                </td>
                                            </tr>
                                        </table>
                                    </fieldset>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" name="edit" value="Submit">
                                </td>
                            </tr>
                        </table>
                    </form>
                </fieldset>
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
?>