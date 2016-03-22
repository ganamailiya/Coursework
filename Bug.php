<?php

SESSION_START();


require_once ("connection.php");
$msg = "";
if(isset($_POST["submit"])) {
    if (getimagesize($_FILES['image']['tmp_name'])== FALSE)
    {
        echo "Please select an image.";
    }
    else
    {
        $image= addslashes($_FILES['image']['tmp_name']);
        $name= addslashes($_FILES['image']['name']);
        $image= file_get_contents($image);
        $image= base64_encode($image);
        saveimages($image);
    }

    $Bugtitle = $_POST["bugtitle"];
    $BugDesc = $_POST["bugdescription"];
    $PresentUser = $_SESSION['username'] ;
echo $PresentUser;

    $Bugtitle= mysqli_real_escape_string($db, $Bugtitle);
    $BugDesc = mysqli_real_escape_string($db, $BugDesc);



    $query2 = mysqli_query($db, "SELECT * FROM users WHERE username = '$PresentUser'") or die (mysqli_error($db));

    while ($rows = mysqli_fetch_array($query2)) {
        $xname = $rows['username'];
        $xid = $rows['userID'];

        echo "The username selected is = $xname<br>";
        echo "The userID is = $xid<br>";
    }


    $query = mysqli_query($db, "INSERT INTO bugs (title, description, postDate, userID) VALUES ('$Bugtitle', '$BugDesc', now(), '$xid')")
    or die(mysqli_error($db));

    $queryDb = mysqli_query($db, "URL, userID, bugID) VALUES ('$image', '$xid', NULL)")
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


/*
function saveimages($image)
{
    $qry = mysqli_query($db, "insert into attachments (URL, userID, bugID) VALUES ('$image', '$xid', NULL)");
    $result = mysqli_query($qry);
    if($result)
    {
        echo "<br/>Image Uploaded.";
    }
    else
    {
        echo "<br/>Image Not Uploaded.";
    }
}
*/
?>