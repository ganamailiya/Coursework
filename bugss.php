<?php
/**
 * Created by PhpStorm.
 * User: iliyaganama
 * Date: 22/03/2016
 * Time: 9:33 PM
 */
session_start();

?>

    <?php
    // est DB connect
    include ("connection.php");

    $sql = "select * from bugs WHERE bugID = ".$_GET["id"];

    $result = mysqli_query($db,$sql);

    $row = mysqli_fetch_assoc($result);

    $bugtitle = $row['title'];
    $bugID = $row['bugID'];
    $bugdesc = $row['description'];


    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bug Comments</title>
    <link type="text/css" rel="stylesheet" href="style.css"/>
</head>
<body>

<img class="img1" src="images/%20logo.png ">
<div class="links">
    <a href="login/home.php">Home Page</a> &nbsp;&nbsp;
    <a href="login/logout.php">Logout</a> &nbsp;&nbsp;
</div>
<nav class = "format">
    <?php
    echo "<h2>".$bugtitle."</h2>";
    echo "<p>".$bugdesc."</p>";
    ?>
    <h3>Add Comment</h3>
    <form method="POST" action="bugss.php">
        <table cellpadding="10" align="center" id = "signup">
            <tbody>
            <tr>
                <td>
                    Comment
                    <br>
                    <br>
                    <br>
                </td>
                <td>
                    <textarea cols="30" rows="4" name="comment" style="width: 330px; height: 88px;"></textarea>
                </td>
            </tr>
            <tr>
                <td align="center" colspan="2">
                    <input type="submit" value="Add Comment" name="submit">

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

<?php
include ("connection.php");
include ("buglist.php");

$comment = $_POST["comment"];
$username = $_SESSION['username'];
$submit = $_POST["submit"];

if ($submit){
    $query = mysqli_query($db, "INSERT INTO comments (comment, postDate, bugID) VALUES ('$comment', now(), '$bugID')")
    or die(mysqli_error($db));
}
else{
    echo "Please add a comment";
}


?>