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

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
<h1 class="hello">Hello, <em><?php echo $_SESSION ["username"];?>!</em></h1>
<div class="link">
	<a href="../BugInfo.php?bid=<?php echo $bid; ?>">Upload Bugs</a> &nbsp;&nbsp;
	<a href="../buglist.php">Home Page</a> &nbsp;&nbsp;
</div>
<br><br><br>
<a href="logout.php" style="font-size:18px">Logout?</a>
</body>
</html>
