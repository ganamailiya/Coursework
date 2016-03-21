<?php

SESSION_START();


include ("connection.php");
$msg = "";
if(isset($_POST["submit"])) {

    $Bugtitle = $_POST["bugtitle"];
    $BugDesc = $_POST["bugdescription"];
    $Attachment = $_POST["file"];
    $PresentUser = $_SESSION['usermail'] ;


    $Bugtitle= mysqli_real_escape_string($db, $Bugtitle);
    $BugDesc = mysqli_real_escape_string($db, $BugDesc);
    $Attachment = mysqli_real_escape_string($db, $Attachment);



    $query2 = mysqli_query($db, "SELECT * FROM users WHERE username = '$PresentUser'") or die (mysqli_error($db));

    while ($rows = mysqli_fetch_array($query2)) {
        $xname = $rows['username'];
        $xid = $rows['userID'];

        echo "The username selected is = $xname<br>";
        echo "The userID is = $xid<br>";
    }


    $query = mysqli_query($db, "INSERT INTO bugs (title, description, postDate, userID) VALUES ('$Bugtitle', '$BugDesc', now(), '$xid')")
    or die(mysqli_error($db));



    if($query)
    {
        $msg = "Bug successfully submitted..";
        echo "<br>$msg<br>";
    }
    else
    {
        echo "submission error";
    }
}
?>