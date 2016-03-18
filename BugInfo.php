<?php
/**
 * Created by PhpStorm.
 * User: iliyaganama
 * Date: 18/03/2016
 * Time: 3:57 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SignUp Page</title>
    <link type="text/css" rel="stylesheet" href="style.css"/>
</head>
<body>
<img class="img1" src="images/%20logo.png ">
<div class="links">
    <a href="index.html">Home Page</a> &nbsp;&nbsp;
    <a href="login.html">Login</a> &nbsp;&nbsp;
    <a href="signup.html">Signup</a>
</div>
<nav class = "format">
    <h3>Report Bug's</h3>
    <form method="POST" action="form.php">
        <table cellpadding="10" align="center" id = "signup">
            <tbody>
            <tr>
                <td>UserName</td>
                <td>
                    <input type="text" maxlength="30" name="Name">
                    (max 30 characters a-z and A-Z)
                </td>
            </tr>
            <tr>
                <td>User ID</td>
                <td>
                    <input type="text" maxlength="30" name="UserID">
                    (max 30 characters a-z and A-Z)
                </td>
            </tr>
            <tr>
                <td>Bug ID</td>
                <td>
                    <input type="text" maxlength="100" name="BugId">
                </td>
            </tr>
            <tr>
                <td>Bug Tiltle</td>
                <td>
                    <input type="text" maxlength="10" name="BugTitle">
                    (10 digit number)
                </td>
            </tr>
            <tr>
                <td>
                    Bug Information
                    <br>
                    <br>
                    <br>
                </td>
                <td>
                    <textarea cols="30" rows="4" name="BugInfo" style="width: 330px; height: 88px;"></textarea>
                </td>
            </tr>
            <tr>
                <td>CITY</td>
                <td>
                    <input type="text" maxlength="30" name="City">
                    (max 30 characters a-z and A-Z)
                </td>
            </tr>
            <tr>
                <td>Attachments</td>
                <td>
                    <input type="text" maxlength="30" name="State">
                    (max 30 characters a-z and A-Z)
                </td>
            </tr>
            <tr>
                <td align="center" colspan="2">
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </td>
            </tr>
            </tbody>
        </table>
    </form>
</nav>
<footer>
    <p>(c) 2016 Ganama's Design</p>
</footer>

</body>
</html>
