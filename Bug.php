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

    $name = $_POST["name"];
    $bugtitle = $_POST["bugtitle"];
    $bugdesc = $_POST["bugdesc"];
    $mobile = $_POST["mobile"];
    $name = mysqli_real_escape_string($db, $name);
    $email = mysqli_real_escape_string($db, $email);
    $password = mysqli_real_escape_string($db, $password);
    $password = md5($password);
    $mobile = mysqli_real_escape_string($db, $mobile);


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
        $query = mysqli_query($db, "INSERT INTO users (username, email, password, phone)VALUES ('$name', '$email', '$password', '$mobile')")
        or die(mysqli_error($db));
        if($query)
        {
            $msg = "Thank You! you are now registered.";
            echo $msg;
        }

    }
}
?>

