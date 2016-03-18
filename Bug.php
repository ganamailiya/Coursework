<?php
/**
 * Created by PhpStorm.
 * User: iliyaganama
 * Date: 18/03/2016
 * Time: 8:35 PM
 */
include ("connection.php");
$msg = "";

if(isset($_POST["submit"])) {

    $bugtitle = $_POST["bugtitle"];
    $bugdesc = $_POST["bugdesc"];
    $attach = $_POST["attach"];
    $users = $_SESSION['usermail'];
    echo "jj";

    $bugtitle = mysqli_real_escape_string($db, $bugtitle);
    $bugdesc = mysqli_real_escape_string($db, $bugdesc);

    $sql= mysqli_fetch_array(mysqli_query($db, "select * from users where email= '$users'"));
    $id=$sql['userID'];
    echo "jk";

        $query = mysqli_query($db, "INSERT INTO bugs (title, desc, fixDate, userID) VALUES ('$bugtitle', '$bugdesc', 'now', '$id')")
        or die(mysqli_error($db));
        if($query)
        {
            $msg = "Thank You!";
            echo $msg;
        }
    else {
        echo "Unsuccessful";
    }


}
?>

