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
    $bugtitle = mysqli_real_escape_string($db, $bugtitle);
    $bugdesc = mysqli_real_escape_string($db, $bugdesc);



    $sql="SELECT email FROM users WHERE email='$email'";
    $result=mysqli_query($db,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result) == 1)
    {
        $msg = "Sorry...This email already exists...";
    }
    else
    {
        //echo $name." ".$email." ".$password;
        $query = mysqli_query($db, "INSERT INTO bugs (title, desc) VALUES ('$bugtitle', '$bugdesc')")
        or die(mysqli_error($db));
        if($query)
        {
            $msg = "Thank You! you are now registered.";
            echo $msg;
        }

    }
}
?>

