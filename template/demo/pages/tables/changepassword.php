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
        $cpassword=md5($_POST['currentpassword']);
        $newpassword=md5($_POST['newpassword']);
        $query=mysqli_query($con,"select ID from tbladmin where ID='$adminid' and   Password='$cpassword'");
        $row=mysqli_fetch_array($query);
        if($row>0){
            $ret=mysqli_query($con,"update tbladmin set Password='$newpassword' where ID='$adminid'");
            $msg= "Your password successully changed";
        } else {

            $msg="Your current password is wrong";
        }



    }


    ?>
    <!DOCTYPE HTML>
    <html>
    <head>
        <title>صنايعي | تغيير كلمة السر</title>

        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- Bootstrap Core CSS -->
        <link href="../../../../admin/css/bootstrap.css" rel='stylesheet' type='text/css' />
        <!-- Custom CSS -->
        <link href="../../../../admin/css/style.css" rel='stylesheet' type='text/css' />
        <!-- font CSS -->
        <!-- font-awesome icons -->
        <link href="../../../../admin/css/font-awesome.css" rel="stylesheet">
        <!-- //font-awesome icons -->
        <!-- js-->
        <script src="../../../../admin/js/jquery-1.11.1.min.js"></script>
        <script src="../../../../admin/js/modernizr.custom.js"></script>
        <!--webfonts-->
        <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
        <!--//webfonts-->
        <!--animate-->
        <link href="../../../../admin/css/animate.css" rel="stylesheet" type="text/css" media="all">
        <script src="../../../../admin/js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
        <!--//end-animate-->
        <!-- Metis Menu -->
        <script src="../../../../admin/js/metisMenu.min.js"></script>
        <script src="../../../../admin/js/custom.js"></script>
        <link href="../../../../admin/css/custom.css" rel="stylesheet">
        <!--//Metis Menu -->
        <script type="text/javascript">
            function checkpass()
            {
                if(document.changepassword.newpassword.value!=document.changepassword.confirmpassword.value)
                {
                    alert('New Password and Confirm Password field does not match');
                    document.changepassword.confirmpassword.focus();
                    return false;
                }
                return true;
            }

        </script>
    </head>
    <body class="cbp-spmenu-push">
    <div class="main-content">
        <!--left-fixed -navigation-->
        <?php include_once('../../../../admin/includes/sidebar.php');?>
        <!--left-fixed -navigation-->
        <!-- header-starts -->
        <?php include_once('../../../../admin/includes/header.php');?>
        <!-- //header-ends -->
        <!-- main content start-->
        <div id="page-wrapper">
            <div class="main-page">
                <div class="forms">
                    <h3 class="title1">تغيير كلمة السر</h3>
                    <div class="form-grids row widget-shadow" data-example-id="basic-forms">

                        <div class="form-body">
                            <form method="post" name="changepassword" onsubmit="return checkpass();" action="">
                                <p style="font-size:16px; color:red" align="center"> <?php if($msg){
                                        echo $msg;
                                    }  ?> </p>

                                <?php
                                $adminid=$_SESSION['bpmsaid'];
                                $ret=mysqli_query($con,"select * from tbladmin where ID='$adminid'");
                                $cnt=1;
                                while ($row=mysqli_fetch_array($ret)) {

                                ?>
                                <div class="form-group"> <label for="exampleInputEmail1">كلمة السر الحالية</label> <input type="password" name="currentpassword" class="form-control" required= "true" value=""> </div> <div class="form-group"> <label for="exampleInputPassword1">كلمة السر الجديدة</label> <input type="password" name="newpassword" class="form-control" value="" required="true"> </div>
                                <div class="form-group"> <label for="exampleInputPassword1">تأكيد كلمة السر</label> <input type="password" name="confirmpassword" class="form-control" value="" required="true"> </div>

                                <button type="submit" name="submit" class="btn btn-default">Change</button> </form>
                        </div>
                        <?php } ?>
                    </div>


                </div>
            </div>
            <?php include_once('../../../../admin/includes/footer.php');?>
        </div>
        <!-- Classie -->
        <script src="../../../../admin/js/classie.js"></script>
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
        <!--scrolling js-->
        <script src="../../../../admin/js/jquery.nicescroll.js"></script>
        <script src="../../../../admin/js/scripts.js"></script>
        <!--//scrolling js-->
        <!-- Bootstrap Core JavaScript -->
        <script src="../../../../admin/js/bootstrap.js"> </script>
    </body>
    </html>
<?php } ?>