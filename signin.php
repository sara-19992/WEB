


<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['login']))
{
    $adminuser=$_POST['username'];
    $password=($_POST['password']);
    $query=mysqli_query($con,"select * from tbladmin where  UserName='$adminuser' && Password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
        $_SESSION['bpmsaid']=$ret['ID'];
        header('');
    }
    else{
        $msg="Invalid Details.";
    }
}
?>