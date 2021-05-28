<?php
include "connect.php";
$phone=$_POST['phone'];
$sql2 = "select * from  worker  WHERE `worker`.`phone` = $phone";
$res2 = $db->query($sql2);
$row1 = mysqli_fetch_array($res2);
$c=$row1['name'];
$m="لقد تمت ازالتك من صنايعي ";
$token=$row1['token'];
$sql1 = "DELETE FROM `worker` WHERE `worker`.`phone` = $phone";
$res1 = $db->query($sql1);
$massage=$c.$m;
//sendGCM("صنايعي" ,$massage , $token , "1", "W");
header("Location: allusers.php");
exit;