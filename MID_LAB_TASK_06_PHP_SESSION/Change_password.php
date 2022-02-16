<?php
session_start();
if (isset($_COOKIE['status'])) {
    if (isset($_REQUEST['changepass'])) {
        $password = $_REQUEST['password'];
        $newPassword = $_REQUEST['newPassword'];
        $rePassword = $_REQUEST['rePassword'];

        if (!is_null($password) && !is_null($newPassword) && !is_null($rePassword)) {
            $user = $_SESSION['user'];
            if ($user['password'] == $password) {
                if ($newPassword == $rePassword) {
                    $_SESSION['user']['password'] = $newPassword;
                    header('location: ./profile.php');
                } else {
                    echo "New Password does not match";
                }
            }else{
                echo "Wrong password";
            }
        }
    }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Change password</title>
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
                        <form action="" method="post">
                            <table>
                                <tr>
                                    <td>Current Password</td>
                                    <td>: <input type="password" name="password"></td>
                                </tr>
                                <tr>
                                    <td style="color: green;">New Password</td>
                                    <td>: <input type="password" name="newPassword"></td>
                                </tr>
                                <tr>
                                    <td style="color: red;">Retype Password</td>
                                    <td>: <input type="password" name="rePassword"></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <hr>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="submit" name="changepass" value="Submit"></td>
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
} else {
    echo "<center><h1>You are not logged in<h1></center>";
}
?>