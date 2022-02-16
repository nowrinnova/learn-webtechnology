<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <table border="2" style="border-collapse: collapse;" width="100%">
        <tr>
            <td style="border:none;">
                <img src="https://i.ibb.co/Sm8cSr0/image.png" alt="logo"></a>
            </td>
            <td style=" padding:12px; border:none; text-align: right">
                <a href="./public_home.php">Home</a> |
                <a href="./Login.php">Login</a> |
                <a href="./registration.php">Registration</a>
            </td>
        </tr>
        <tr style="border: 2px solid black;">
            <td colspan="2" align="center" valign="center" style="border:none; padding:10px;height: 300px;">
                <fieldset style="display: inline-block">
                    <legend>REGISTRATION</legend>
                    <form action="./regProcess.php" method="post">
                        <table>
                            <tr>
                                <td style="width: 220px; text-align: left; padding : 5px;">
                                    Name
                                </td>
                                <td>
                                    : <input type="text" name="name">
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
                                    : <input type="email" name="email">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 220px; text-align: left; padding : 5px;">
                                    User Name
                                </td>
                                <td>
                                    : <input type="text" name="username">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 220px; text-align: left; padding : 5px;">
                                    Password
                                </td>
                                <td>
                                    : <input type="password" name="password">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 220px; text-align: left; padding : 5px;">
                                    Confirm Password
                                </td>
                                <td>
                                    : <input type="password" name="password">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <fieldset>
                                        <legend>Gender</legend>
                                        <input type="radio" name="gender" value="Male"> Male
                                        <input type="radio" name="gender" value="Male"> Female
                                        <input type="radio" name="gender" value="Male"> Other
                                    </fieldset>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <fieldset>
                                        <legend>Date Of Birth</legend>
                                        <table>
                                            <tr>
                                                <td>
                                                    <input type="text" name="dd" value="" maxlength="2" size="3"> <b>/</b>
                                                </td>
                                                <td>
                                                    <input type="text" name="mm" value="" maxlength="2" size="3"> <b>/</b>
                                                </td>
                                                <td>
                                                    <input type="text" name="yyyy" value="" maxlength="4" size="3">
                                                </td>
                                                <td><i>(dd/mm/yyyy)</i></td>
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
                                    <input type="submit" name="submit" value="Submit">
                                    <input type="reset" name="reset" value="Reset">
                                </td>
                            </tr>
                        </table>
                    </form>
                </fieldset>
            </td>
        </tr>
        <tr style="border: 2px solid black;">
            <td colspan="2" style="border:none; text-align: center;padding: 20px;">
                Copyright &copy; 2017
            </td>
        </tr>
    </table>
</body>
</html>