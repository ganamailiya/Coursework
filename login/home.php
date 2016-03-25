<?php
session_start();
$username= $_SESSION['username'];


	include("check.php");
	include("connection.php");

    $sql = "SELECT MAX(bugID) FROM bugs";
	$r = mysqli_query($db, $sql);

	while ($fetch = $r -> fetch_array()){
		$bid = $fetch[0];
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome</title>
	<link type="text/css" rel="stylesheet" href="../style.css"/>
</head>
<body>
<img class="img1" src="../images/%20logo.png ">
<div class="links">
	<a href="../index.html">Home</a> &nbsp;&nbsp;
	<a href="logout.php">Logout</a>

</div>
<body>
<br><br>
<h1 class="hello">Welcome <?php echo $_SESSION ["username"];?>!</h1>
<div class="link">
	<img src="../images/white.jpg" style{width="200" height="150"}>
	<img src="../images/white2.jpg" style{width="200" height="150"}>
	<a href="../BugInfo.php?bid=<?php echo $bid; ?>"> <input type = "button" value = "REPORT A BUG" > </a> &nbsp;&nbsp;
	<a href="../buglist.php"> <input type = "button" value = "BUG LIST" ></a> &nbsp;&nbsp;
</div>
<br><br><br>

</body>
</html>
