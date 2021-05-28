<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>صفحة الادمن</title>
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Vibes&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Changa:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

<form class="box" action="login.php" method="post">
    <img src="s.png" alt="logo" width="70" height="70">
  <p style="font-family: 'Vibes';color:white;font-size:40px;margin-top:-10px;">صنايعي</p>
  <input type="text" name="UserName" placeholder="اسم المستخدم" required="true">
  <input type="password" name="Password" placeholder="كلمةالسر" required="true">

  <input type="submit" name="login" value="تسجيل الدخول">

<!--    <div class="forgot-grid">-->
<!---->
<!--        <div class="forgot">-->
<!---->
<!--        </div>-->
<!--        <div class="clearfix"> </div>-->
<!--    </div>-->
<!--    <div class="forgot-grid">-->
<!---->
<!--        <div class="forgot">-->
<!--            <a href="forgot-password.php">forgot password?</a>-->
<!--        </div>-->
<!--        <div class="clearfix"> </div>-->
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
    $db = new mysqli('localhost', 'root', '', 'sanaye');
    if (mysqli_connect_errno()) {
        echo "could not connect with database";
        exit();
    }
    $adminuser=$_POST['UserName'];
    $password=($_POST['Password']);
    $query=mysqli_query($db,"select * from tbladmin where  tbladmin.UserName='$adminuser' && tbladmin.Password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
//$_SESSION['bpmsaid']=$ret['ID'];
header("Location: index.php", TRUE);
}
else{
$msg="Invalid Details.";
}
}
?>