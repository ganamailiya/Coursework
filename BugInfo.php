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
    <title>Bug Info</title>
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
    <form method="POST" action="form.php" enctype="multipart/form-data">
        <table cellpadding="10" align="center" id = "signup">
            <tbody>
            <tr>
                <td>Bug Tiltle</td>
                <td>
                    <input type="text" maxlength="10" name="bugtitle">
                </td>
            </tr>
            <tr>
                <td>
                    Bug Description
                    <br>
                    <br>
                    <br>
                </td>
                <td>
                    <textarea cols="30" rows="4" name="bugdesc" style="width: 330px; height: 88px;"></textarea>
                </td>
            </tr>
            <tr>
                <td>Attachments</td>
                <td>
                    <input type="text" maxlength="30" name="attach">
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
