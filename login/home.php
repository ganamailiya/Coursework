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
	<link type="text/css" rel="../stylesheet" href="style.css"/>
</head>
<body>
<img class="img1" src="../images/%20logo.png ">
<div class="links">
	<a href="../index.html">Home Page</a> &nbsp;&nbsp;
	<a href="../login.html">Login</a> &nbsp;&nbsp;
	<a href="logout.php">Logout</a>
</div>
<body>
<h1 class="hello">Hello, <em><?php echo $_SESSION ["username"];?>!</em></h1>
<div class="link">
	<a href="../BugInfo.php?bid=<?php echo $bid; ?>">Upload Bugs</a> &nbsp;&nbsp;
	<a href="../buglist.php">BugList</a> &nbsp;&nbsp;
</div>
<br><br><br>
<a href="logout.php" style="font-size:18px">Logout?</a>
</body>
</html>
