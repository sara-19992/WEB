<?php
include "send_Notify.php";
$db = new mysqli('localhost', 'root', '', 'sanaye');
if (mysqli_connect_errno()) {
    echo "could not connect with database";
    exit();
}
echo "could connect with database";
$name=$_POST['name'];

$sql1 = "DELETE FROM `professions` WHERE `professions`.`name` = '".$name."'";
$res1 = $db->query($sql1);

header("Location: add_admin.php");
exit;
?>