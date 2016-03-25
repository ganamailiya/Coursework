<?php
/**
 * Created by PhpStorm.
 * User: iliyaganama
 * Date: 25/03/2016
 * Time: 1:44 AM
 */

session_start();
// est DB connect
include ("buglist.php");

$sql = "select * from bugs WHERE bugID = ".$_GET["id"];

$result = mysqli_query($db,$sql);

$row = mysqli_fetch_assoc($result);

$bugtitle = $row['title'];
$bugID = $row['bugID'];
$bugdesc = $row['description'];
$userID = $row['userID'];
echo $userID;
// echo $bugID;

$comment = $_POST["comment"];
$username = $_SESSION['username'];
$bid = $bugID;

echo $comment;
echo $username;

if(isset($_GET["submit"])) {

    $query = mysqli_query($db, "INSERT INTO comments (comment, postDate, userID, bugID) VALUES ('$comment', now(), '$userID', '$bid')")
    or die(mysqli_error($db));
}
else{
    echo "Please add a comment";
}

?>
