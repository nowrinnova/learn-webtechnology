<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in </title>
</head>
<body>
    <table border="2" style="border-collapse: collapse;" width="100%">
        <tr style="border: 2px solid black;">
            <td style="border:none;">
                <img src="https://i.ibb.co/Sm8cSr0/image.png" alt="logo"></a>
            </td>
            <td style=" padding:12px; border:none; text-align: right">
                <a href="./public_home.php">Home</a> |
                <a href="./Login.php">Login</a> |
                <a href="./registration.php">Registration</a>
            </td>
        </tr>
        <td colspan="2" align="center" valign="center" style="border:none; padding:10px;height: 300px;">
            <fieldset style="display: inline-block">
                <legend>LOGIN</legend>
                <form action="./LoginCheck.php" method="post">
                    <table>
                        <tr>
                            <td>
                                User Name
                            </td>
                            <td>
                                : <input type="text" name="username"><br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Password
                            </td>
                            <td>
                                : <input type="password" name="password"><br>
                            </td>
                        </tr>
                    </table>
                    <hr>
                    <div align=left>
                        <input type="checkbox" name="remember"> Remember me <br> <br>
                        <input type="submit" name="login" value="Submit"> <a href="./Forgot_password.php">Forgot Password?</a>
                    </div>
                </form>
            </fieldset>
        </td>
        </td>
        </tr>
        <tr style="border: 2px solid black;">
            <td colspan="2" style="border:none; text-align: center; padding: 20px;">
                Copyright &copy; 2017
            </td>
        </tr>
    </table>
</body>
</html>