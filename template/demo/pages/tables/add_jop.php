<?php
include "send_Notify.php";
//$phone = $_GET['phone'];
$db = new mysqli('localhost', 'root', '', 'sanaye');
if (mysqli_connect_errno()) {
    echo "could not connect with database";
    exit();
}
//Put this POST block right at the top of the page.
echo "could connect with database";
$name=$_POST['name'];
$filename=$_POST['filename'];
$id=rand(0,200000);
echo $id;
$res2t=$db->query("INSERT INTO `professions` (`name`,`id`, `image`) VALUES ('$name','$id','$filename')");
//
header("Location: add_admin.php");
exit;
?>