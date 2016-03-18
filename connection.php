<?php
/**
 * Created by PhpStorm.
 * User: iliyaganama
 * Date: 18/03/2016
 * Time: 9:16 PM
 */
define('DB_SERVER', 'eu-cdbr-azure-west-d.cloudapp.net');
define('DB_USERNAME', 'b147602f41b7c0');
define('DB_PASSWORD', '21349eb1');
define('DB_DATABASE', 'Ganama');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

?>
