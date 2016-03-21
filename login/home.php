<?php
session_start();
$usermail= $_SESSION['usermail'];


	include("check.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
<h1 class="hello">Hello, <em><?php echo $_SESSION ["usermail"];?>!</em></h1>
<div class="link">
	<a href="../BugInfo.php">Upload Bugs</a> &nbsp;&nbsp;
</div>
<br><br><br>
<a href="logout.php" style="font-size:18px">Logout?</a>
</body>
</html>