<?php
/**
 * Created by PhpStorm.
 * User: iliyaganama
 * Date: 18/03/2016
 * Time: 8:35 PM
 */

session_start();
$bugtitle = $_POST["bugtitle"];
echo $bugtitle;

include ("connection.php");
$msg = "";
echo "work";

if(isset($_POST["submit"])) {
    echo "now";

    $bugtitle = $_POST["bugtitle"];
    echo $bugtitle;
    $bugdesc = $_POST["bugdesc"];
    $file = $_POST["file"];
    $users = $_SESSION['usermail'];

    $bugtitle = mysqli_real_escape_string($db, $bugtitle);
    $bugdesc = mysqli_real_escape_string($db, $bugdesc);

    $sql = mysqli_query($db, "select * from users where email = '$users'") or die (mysqli_connect_error($db));

    while ($rows = mysqli_fetch_array($sql)) {
        $uname = $rows['username'];
        $id=$sql['userID'];
    }

    echo "Username ". $uname;
    echo "UID = $id";

        $query = mysqli_query($db, "INSERT INTO bugs (title, description, postDate, userID) VALUES ('$bugtitle', '$bugdesc', now(), '$id')")
        or die(mysqli_error($db));

        if($query)
        {
            echo  "Thank You!";
        }

    else
    {
        echo "Unsuccessful";
    }


}
?>

