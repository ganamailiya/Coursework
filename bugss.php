<?php
/**
 * Created by PhpStorm.
 * User: iliyaganama
 * Date: 22/03/2016
 * Time: 9:33 PM
 */
?>

<body>
<div id="content">
    <?php
    // est DB connect
    include ("connection.php");

    $sql = "select * from bugs WHERE bugID = ".$_GET["bugID"];

    $result = mysqli_query($db,$sql);

    $row = mysqli_fetch_assoc($result);

    $bugtitle = $row['title'];
    $bugID = $row['bugID'];
    $bugdesc = $row['description'];

    echo "<h2>".$bugtitle."</h2>";
    echo "<p>".$bugtitle."</p>";

    ?>
</div>
</body>
