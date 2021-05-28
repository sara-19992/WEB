<?php
session_start();
include('connect.php');
error_reporting(0);
if (strlen($_SESSION['bpmsaid']==0)) {
    header('location:logout.php');
} else{
    if(isset($_POST['submit']))
    {
        $adminid=$_SESSION['bpmsaid'];
        $cpassword=($_POST['currentpassword']);
        $newpassword=($_POST['newpassword']);
        $query=mysqli_query($con,"SELECT * FROM `tbladmin`  where `tbladmin`.ID='$adminid' and `tbladmin`.Password='$cpassword'");
        $row=mysqli_fetch_array($query);
        if($row>0){
            $ret=mysqli_query($con,"update `tbladmin` set Password='$newpassword' where `tbladmin`.ID='$adminid'");
            $msg= "Your password successully changed";
        } else {

            $msg="Your current password is wrong";
        }



    }}


?>