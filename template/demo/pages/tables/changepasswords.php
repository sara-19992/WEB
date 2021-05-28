<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: ../basic-tables.php");
    exit;
}

// Include config file

$db = new mysqli('localhost', 'root', '', 'sanaye');
if (mysqli_connect_errno()) {
    echo "could not connect with database";
    exit();
}
echo "could connect with database";
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $query=mysqli_query($db,"select * from tbladmin where  tbladmin.UserName='$username' && tbladmin.Password='$password'");

        $ret=mysqli_fetch_array($query);
        if($ret>0){


            // Attempt to execute the prepared statement

            session_start();

            // Store data in session variables
            $_SESSION["loggedin"] = true;
            //  $_SESSION["id"] = $id;
            $_SESSION["username"] = $username;

            // Redirect user to welcome page
            header("location: basic-tables.php");
        }
        else{
            // Password is not valid, display a generic error message
            $login_err = "Invalid username or password.";
        }
    }

    else{
        echo "Oops! Something went wrong. Please try again later.";
    }

    // Close statement



}
?>
<!DOCTYPE html>

<html dir="rtl" lang="ar">
<head>
    <meta charset="utf-8">
    <title>صفحة الادمن</title>
    <link rel="stylesheet" href="style.css">
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
<style>
    th{
        padding-top:-400px;
        padding-right: 1px;
        margin-top: 10px;
        font-size: 17px;
        font-weight: normal;
        text-align: right;
    }
    td {
        padding-top:-400px;
        padding-right: 1px;
        padding-left: 20px;
        margin-bottom: -50px;
        margin-top: -10px;
        font-size: 16px;
        text-align: right;
        border-bottom: 2px solid gainsboro;
        font-weight: 400;

    }

</style>
<body>
<script src="../assets/js/preloader.js"></script>
<div class="body-wrapper">
    <!-- partial:../../partials/_sidebar.html -->
    <aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
        <div class="mdc-drawer__header">
            <a href="../../index.html" class="brand-logo">
                <img src="../../../assets/images/logo.svg" alt="logo">
            </a>
        </div>
        <div class="mdc-drawer__content">
            <div class="user-info">
                <p class="name">ADMIN</p>
                <p class="email">ADMIN@gmail.com</p>
            </div>
            <div class="mdc-list-group">
                <nav class="mdc-list mdc-drawer-menu">
                    <div class="mdc-list-item mdc-drawer-item">
                        <a class="mdc-drawer-link" href="../../index.html"style="font-family:'Changa';font-size: 17px;">
                            <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">home</i>
                            الصفحة الرئيسية
                        </a>
                    </div>

                    <div class="mdc-list-item mdc-drawer-item">
                        <a class="mdc-drawer-link" href="basic-tables.php"style="font-family:'Changa';font-size: 17px;">
                            <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">grid_on</i>
                            طلبات الانضمام
                        </a>
                    </div>
                    <div class="mdc-list-group">
                        <nav class="mdc-list mdc-drawer-menu">
                            <div class="mdc-list-item mdc-drawer-item">
                                <a class="mdc-drawer-link" href="allusers.php"style="font-family:'Changa';font-size: 17px;">
                                    <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">grid_on</i>
                                    عرض الحرفيين/ازالة
                                </a>
                            </div>
                            <div class="mdc-list-group">
                                <nav class="mdc-list mdc-drawer-menu">
                                    <div class="mdc-list-item mdc-drawer-item">
                                        <a class="mdc-drawer-link" href="vieworders.php"style="font-family:'Changa';font-size: 17px;">
                                            <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">grid_on</i>
                                            عرض الطلبات
                                        </a>
                                    </div>



                                </nav>
                            </div>
                            <div class="mdc-list-group">
                                <nav class="mdc-list mdc-drawer-menu">
                                    <div class="mdc-list-item mdc-drawer-item">
                                        <a class="mdc-drawer-link" href="newpassword.php"style="font-family:'Changa';font-size: 17px;">
                                            <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true"></i>
                                            تغيير كلمة السر
                                        </a>
                                    </div>



                                </nav>
                            </div>

                    </div>
    </aside>
    +
    +
<form class="box" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">


    <h1>تغيير كلمة السر</h1>
    <?php
    if(!empty($login_err)){
        echo '<div class="alert alert-danger">' . $login_err . '</div>';
    }
    ?>
    <input type="password" name="username" class="form-control placeholder="كلمة السر الحالية" required="true"<?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
        <span class="invalid-feedback"><?php echo $username_err; ?></span>
    <input type="password" name="username" class="form-control placeholder="تكيد كلمة السر" required="true"<?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
    <span class="invalid-feedback"><?php echo $username_err; ?></span>

        <input type="password" name="password" placeholder="كلمة السر الجديدة" required="true" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">

    <input type="submit" name="login" value="تغيير كلمة السر" class="btn btn-primary">
    <span class="invalid-feedback"><?php echo $password_err; ?></span>


</form>

<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!--//scrolling js-->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.js"> </script>

</body>
</html>
