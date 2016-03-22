<?php

SESSION_START();


include ("login/login.php");
$msg = "";

if(isset($_POST["submit"])) {

    if (getimagesize($_FILES['image']['tmp_name'])== FALSE)
    {
        echo "Please select an image.";
    }
    else {

        $file_name = $_FILES['image']['name'];
        $dir = $_FILES['image']['tmp_name'];
        $location = "uploads/";
        $fp = fopen($dir, 'r');
        $content = fread($fp, filesize($dir));
        $content = addslashes($content);
        fclose($fp);
        move_uploaded_file($dir, $location.$file_name);
        }

    $Bugtitle = $_POST["bugtitle"];
    $BugDesc = $_POST["bugdescription"];
    $PresentUser = $_POST['bug'] ;
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
    $sql1 = mysqli_query($db, "select * from bugs where title = '$Bugtitle'");

    while ($runsql = mysqli_fetch_array($sql1)){
        $newbugid = $runsql ['bugID'];
    }

    $query1 = mysqli_query($db, "insert into attachments (URL, userID, bugID) VALUES ('$content', '$xid', '$newbugid')");
    //$result = mysqli_query($query1);
    if($query1) {
        echo "<br/>Image Uploaded.";
    }
    else
    {
        echo "<br/>Image Not Uploaded.";
    }


   // $queryDb = mysqli_query($db, "URL, userID, bugID) VALUES ('$image', '$xid', NULL)")
   // or die(mysqli_error($db));



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