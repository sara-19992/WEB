<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>صفحة الادمن</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

<form class="box" action="basic-tables.php" method="post">
  <h1>تسجيل الدخول لصنايعي</h1>
  <input type="text" name="UserName" placeholder="اسم المستخدم">
  <input type="password" name="Password" placeholder="كلمةالسر">

  <a href="http://www.tutorialspoint.com">    <input type="submit" name="login" value="تسجيل الدخول">
  </a>
</form>
<script>
  var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
          showLeftPush = document.getElementById( 'showLeftPush' ),
          body = document.body;

  showLeftPush.onclick = function() {
    classie.toggle( this, 'active' );
    classie.toggle( body, 'cbp-spmenu-push-toright' );
    classie.toggle( menuLeft, 'cbp-spmenu-open' );
    disableOther( 'showLeftPush' );
  };

  function disableOther( button ) {
    if( button !== 'showLeftPush' ) {
      classie.toggle( showLeftPush, 'disabled' );
    }
  }
</script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!--//scrolling js-->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.js"> </script>

  </body>
</html>
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
header("Location: http://www.tutorialspoint.com", TRUE);
}
else{
$msg="Invalid Details.";
}
}
?>