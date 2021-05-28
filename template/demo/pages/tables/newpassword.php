
<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Material Dash</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../../assets/vendors/css/vendor.bundle.base.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Changa:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/animate.css">

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style5.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../../assets/css/demo/style.css">
    <link rel="stylesheet" href="../../../assets/css/demo/Mine.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../../assets/images/favicon.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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
    <!-- partial -->
    <div class="main-wrapper mdc-drawer-app-content">
        <!-- partial:../../partials/_navbar.html -->
        <header class="mdc-top-app-bar">




                        <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                            <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                                <li class="mdc-list-item" role="menuitem">
                                    <div class="item-thumbnail item-thumbnail-icon-only">
                                        <i class="mdi mdi-account-edit-outline text-primary"></i>
                                    </div>
                                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="item-subject font-weight-normal">تعدبل الصفحة الشحصية</h6>
                                    </div>
                                </li>
                                <li class="mdc-list-item" role="menuitem">
                                    <div class="item-thumbnail item-thumbnail-icon-only">
                                        <i class="mdi mdi-settings-outline text-primary"></i>
                                    </div>
                                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="item-subject font-weight-normal">تسجيل الخروج</h6>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="divider d-none d-md-block"></div>
                    <div class="menu-button-container d-none d-md-block">
                        <button class="mdc-button mdc-menu-button">
                            <i class="mdi mdi-settings"></i>
                        </button>
                        <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                            <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                                <li class="mdc-list-item" role="menuitem">
                                    <div class="item-thumbnail item-thumbnail-icon-only">
                                        <i class="mdi mdi-alert-circle-outline text-primary"></i>
                                    </div>
                                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="item-subject font-weight-normal">الإعدادات</h6>
                                    </div>
                                </li>
                                <li class="mdc-list-item" role="menuitem">
                                    <div class="item-thumbnail item-thumbnail-icon-only">
                                        <i class="mdi mdi-progress-download text-primary"></i>
                                    </div>
                                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="item-subject font-weight-normal">التحديثات</h6>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="menu-button-container">
                        <button class="mdc-button mdc-menu-button">
                            <i class="mdi mdi-bell"></i>
                        </button>

                    <div class="menu-button-container">
                        <button class="mdc-button mdc-menu-button">
                            <i class="mdi mdi-email"></i>
                            <span class="count-indicator">
                  <span class="count">3</span>
                </span>
                        </button>

                    <div class="menu-button-container d-none d-md-block">
                        <button class="mdc-button mdc-menu-button">
                            <i class="mdi mdi-arrow-down-bold-box"></i>
                        </button>
                        <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                            <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                                <li class="mdc-list-item" role="menuitem">
                                    <div class="item-thumbnail item-thumbnail-icon-only">
                                        <i class="mdi mdi-lock-outline text-primary"></i>
                                    </div>
                                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="item-subject font-weight-normal">Lock screen</h6>
                                    </div>
                                </li>
                                <li class="mdc-list-item" role="menuitem">
                                    <div class="item-thumbnail item-thumbnail-icon-only">
                                        <i class="mdi mdi-logout-variant text-primary"></i>
                                    </div>
                                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="item-subject font-weight-normal">Logout</h6>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <form class="box" action="newpassphp.php" method="post">
            <h1>تغيير كلمة السر</h1>
            <input type="text" name="currentpassword" placeholder="كلمة السر القديمة" required="true">
            <input type="password" name="newpassword" placeholder="كلمة السر الجديدة" required="true">
            <input type="password" name="confirmpassword" placeholder="تأكيد كلمة السر الجديىدة " required="true">

            <a href="http://www.tutorialspoint.com">    <input type="submit" name="submit" value="تغيير">
            </a>


      </div>
    </div>
  </div>

  <script src="../../../assets/vendors/js/vendor.bundle.base.js"></script>

  <script src="../../../assets/js/material.js"></script>
  <script src="../../../assets/js/misc.js"></script>

</body>
</html>