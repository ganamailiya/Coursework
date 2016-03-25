<?php
/**
 * Created by PhpStorm.
 * User: iliyaganama
 * Date: 25/03/2016
 * Time: 11:37 PM
 */
include ("connection.php");
$deleteid = $_GET['id'];
$query = mysqli_query($db, "delete from comments where commentID='Sdeleteid'");
header("location: comment.php");
?>