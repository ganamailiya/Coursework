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
    $file = $_POST["file"];
    $users = $_SESSION['usermail'];
    echo "jj";

    $bugtitle = mysqli_real_escape_string($db, $bugtitle);
    $bugdesc = mysqli_real_escape_string($db, $bugdesc);

    $sql = mysqli_query($db, "select * from users where username = '$users'") or die (mysqli_connect_error($db));

    while ($rows = mysqli_fetch_array($sql)) {
        $uname = $rows['usermail'];
        $id=$sql['userID'];
    }

    echo "Username = $uname";
    echo "UID = $id";

        $query = mysqli_query($db, "INSERT INTO bugs (title, description, postDate, userID) VALUES ('$bugtitle', '$bugdesc', now(), '$id')")
        or die(mysqli_error($db));

        if($query)
        {
            $msg = "Thank You!";
            echo $msg;
        }

    else
    {
        echo "Unsuccessful";
    }


}
?>

