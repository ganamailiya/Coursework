<?php
/**
 * Created by PhpStorm.
 * User: iliyaganama
 * Date: 25/03/2016
 * Time: 11:37 PM
 */
include ("connection.php");
$deleteid = $_GET['id'];
$query =  "delete from comments where commentID= ".$_GET["id"];
header("location: comment.php");
?>