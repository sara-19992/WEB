<?php
$i=0;
?>
<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Material Dash</title>
    <!-- plugins:css -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css'>
    <link rel="stylesheet" href="cv.css">

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../../assets/css/demo/style.css">
    <link rel="stylesheet" href="../../../assets/css/demo/Mine.css">
    <link href="https://fonts.googleapis.com/css2?family=Vibes&display=swap" rel="stylesheet">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../../assets/images/favicon.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<style>
    article, aside, figure, footer, header, hgroup,
    menu, nav, section { display: block; }
</style>
<style>
    /* The container */
    .container {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 22px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* Hide the browser's default radio button */
    .container input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
    }

    /* Create a custom radio button */
    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: #eee;
        border-radius: 50%;
    }

    /* On mouse-over, add a grey background color */
    .container:hover input ~ .checkmark {
        background-color: #ccc;
    }

    /* When the radio button is checked, add a blue background */
    .container input:checked ~ .checkmark {
        background-color: red;
    }

    /* Create the indicator (the dot/circle - hidden when not checked) */
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the indicator (dot/circle) when checked */
    .container input:checked ~ .checkmark:after {
        display: block;
    }

    /* Style the indicator (dot/circle) */
    .container .checkmark:after {
        top: 9px;
        left: 9px;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: white;
    }
</style>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }
    body{
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        background: #5256ad;
    }
    .drag-area{
        border: 2px dashed #fff;
        height: 500px;
        width: 700px;
        border-radius: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }
    .drag-area.active{
        border: 2px solid #fff;
    }
    .drag-area .icon{
        font-size: 100px;
        color: #fff;
    }
    .drag-area header{
        font-size: 30px;
        font-weight: 500;
        color: #fff;
    }
    .drag-area span{
        font-size: 25px;
        font-weight: 500;
        color: #fff;
        margin: 10px 0 15px 0;
    }
    .drag-area button{
        padding: 10px 25px;
        font-size: 20px;
        font-weight: 500;
        border: none;
        outline: none;
        background: #fff;
        color: #5256ad;
        border-radius: 5px;
        cursor: pointer;
    }
    .drag-area img{
        height: 100%;
        width: 100%;
        object-fit: cover;
        border-radius: 5px;
    }
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
    <aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open"style="opacity:40%;">
        <!--      <div class="mdc-drawer__header">-->
        <!--        <a href="../../index.html" class="brand-logo">-->
        <!--          <img src="../../../assets/images/logo.svg" alt="logo">-->
        <!--        </a>-->
        <!--      </div>-->
        <img src="s.png" alt="logo" width="60" height="60" style="margin-top:10px;margin-right:90px;">
        <p style="font-family: 'Vibes';color:white;font-size:35px;margin-left:90px;margin-bottom:50px;margin-top:12px;">صنايعي</p>
        <div class="mdc-drawer__content">
            <div class="user-info">
                <!--          <p class="name">ADMIN</p>-->
                <!--          <p class="email">ADMIN@gmail.com</p>-->
            </div>
            <div class="mdc-list-group">
                <nav class="mdc-list mdc-drawer-menu">
                    <div class="mdc-list-item mdc-drawer-item">
                        <a class="mdc-drawer-link" href="index.php"style="font-family:'Changa';font-size: 15px;">
                            <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">home</i>
                            الصفحة الرئيسية
                        </a>
                    </div>

                    <div class="mdc-list-item mdc-drawer-item">
                        <a class="mdc-drawer-link" href="basic-tables.php"style="font-family:'Changa';font-size: 15px;">
                            <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">notifications</i>
                            طلبات الانضمام
                        </a>
                    </div>
                    <div class="mdc-list-group">
                        <nav class="mdc-list mdc-drawer-menu">
                            <div class="mdc-list-item mdc-drawer-item">
                                <a class="mdc-drawer-link" href="allusers.php"style="font-family:'Changa';font-size: 15px;">
                                    <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">group</i>
                                    عرض الحرفيين/ازالة
                                </a>
                            </div>
                            <div class="mdc-list-group">
                                <nav class="mdc-list mdc-drawer-menu">
                                    <div class="mdc-list-item mdc-drawer-item">
                                        <a class="mdc-drawer-link" href="vieworders.php"style="font-family:'Changa';font-size: 15px;">
                                            <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">assignment</i>
                                            عرض الطلبات
                                        </a>
                                    </div>
                                    <div class="mdc-list-group">
                                        <nav class="mdc-list mdc-drawer-menu">
                                            <div class="mdc-list-item mdc-drawer-item">
                                                <a class="mdc-drawer-link" href="add_admin.php"style="font-family:'Changa';font-size: 15px;">
                                                    <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">library_add</i>
                                                    اضافة حرفة جديدة
                                                </a>
                                            </div>

                                            <!--            <div class="mdc-list-item mdc-drawer-item">-->
                                            <!--              <a class="mdc-drawer-link" href="../../pages/charts/chartjs.html">-->
                                            <!--                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">pie_chart_outlined</i>-->
                                            <!--                Charts-->
                                            <!--              </a>-->
                                            <!--            </div>-->
                                            <!--            <div class="mdc-list-item mdc-drawer-item">-->
                                            <!--              <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="sample-page-submenu">-->
                                            <!--                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">pages</i>-->
                                            <!--                Sample Pages-->
                                            <!--                <i class="mdc-drawer-arrow material-icons">chevron_right</i>-->
                                            <!--              </a>-->
                                            <!--              <div class="mdc-expansion-panel" id="sample-page-submenu">-->
                                            <!--                <nav class="mdc-list mdc-drawer-submenu">-->
                                            <!--                  <div class="mdc-list-item mdc-drawer-item">-->
                                            <!--                    <a class="mdc-drawer-link" href="../../pages/samples/blank-page.html">-->
                                            <!--                      Blank Page-->
                                            <!--                    </a>-->
                                            <!--                  </div>-->
                                            <!--                  <div class="mdc-list-item mdc-drawer-item">-->
                                            <!--                    <a class="mdc-drawer-link" href="../../pages/samples/403.html">-->
                                            <!--                      403-->
                                            <!--                    </a>-->
                                            <!--                  </div>-->
                                            <!--                  <div class="mdc-list-item mdc-drawer-item">-->
                                            <!--                    <a class="mdc-drawer-link" href="../../pages/samples/404.html">-->
                                            <!--                      404-->
                                            <!--                    </a>-->
                                            <!--                  </div>-->
                                            <!--                  <div class="mdc-list-item mdc-drawer-item">-->
                                            <!--                    <a class="mdc-drawer-link" href="../../pages/samples/500.html">-->
                                            <!--                      500-->
                                            <!--                    </a>-->
                                            <!--                  </div>-->
                                            <!--                  <div class="mdc-list-item mdc-drawer-item">-->
                                            <!--                    <a class="mdc-drawer-link" href="../../pages/samples/505.html">-->
                                            <!--                      505-->
                                            <!--                    </a>-->
                                            <!--                  </div>-->
                                            <!--                  <div class="mdc-list-item mdc-drawer-item">-->
                                            <!--                    <a class="mdc-drawer-link" href="../../pages/samples/login.html">-->
                                            <!--                      Login-->
                                            <!--                    </a>-->
                                            <!--                  </div>-->
                                            <!--                  <div class="mdc-list-item mdc-drawer-item">-->
                                            <!--                    <a class="mdc-drawer-link" href="../../pages/samples/register.html">-->
                                            <!--                      Register-->
                                            <!--                    </a>-->
                                            <!--                  </div>-->
                                            <!--                </nav>-->
                                            <!--              </div>-->
                                            <!--            </div>-->
                                            <!--            <div class="mdc-list-item mdc-drawer-item">-->
                                            <!--              <a class="mdc-drawer-link" href="https://www.bootstrapdash.com/demo/material-admin-free/jquery/documentation/documentation.html" target="_blank">-->
                                            <!--                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">description</i>-->
                                            <!--                Documentation-->
                                            <!--              </a>-->
                                            <!--            </div>-->
                                        </nav>
                                        <div class="mdc-list-item mdc-drawer-item">
                                            <a class="mdc-drawer-link" href="login.php"style="font-family:'Changa';font-size: 15px;">
                                                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">exit_to_app</i>
                                                تسجيل الخروج
                                            </a>
                                        </div>
                                    </div>
                                    <!--        <div class="profile-actions">-->
                                    <!--          <a href="javascript:;">Settings</a>-->
                                    <!--          <span class="divider"></span>-->
                                    <!--          <a href="javascript:;">Logout</a>-->
                                    <!--        </div>-->
                                    <!--        <div class="mdc-card premium-card">-->
                                    <!--          <div class="d-flex align-items-center">-->
                                    <!--            <div class="mdc-card icon-card box-shadow-0">-->
                                    <!--              <i class="mdi mdi-shield-outline"></i>-->
                                    <!--            </div>-->
                                    <!--            <div>-->
                                    <!--              <p class="mt-0 mb-1 ml-2 font-weight-bold tx-12">Material Dash</p>-->
                                    <!--              <p class="mt-0 mb-0 ml-2 tx-10">Pro available</p>-->
                                    <!--            </div>-->
                                    <!--          </div>-->
                                    <!--          <p class="tx-8 mt-3 mb-1">More elements. More Pages.</p>-->
                                    <!--          <p class="tx-8 mb-3">Starting from $25.</p>-->
                                    <!--          <a href="https://www.bootstrapdash.com/product/material-design-admin-template/" target="_blank">-->
                                    <!--						<span class="mdc-button mdc-button--raised mdc-button--white">Upgrade to Pro</span>-->
                                    <!--					</a>-->
                                    <!--        </div>-->
                            </div>
    </aside>
    <!-- partial -->
    <div class="main-wrapper mdc-drawer-app-content">
        <!-- partial:../../partials/_navbar.html -->
        <header class="mdc-top-app-bar">
            <div class="mdc-top-app-bar__row">

                <div>
                    <button class="material-icons mdc-top-app-bar__navigation-icon mdc-icon-button sidebar-toggler"></button>
                    <!--            <span class="mdc-top-app-bar__title"></span>-->
                    <!--            <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon search-text-field d-none d-md-flex">-->

                    <!--              <input class="mdc-text-field__input" id="text-field-hero-input">-->
                    <!--              <div class="mdc-notched-outline">-->
                    <!--                <div class="mdc-notched-outline__leading"></div>-->
                    <!--               <div class="mdc-notched-outline__notch">-->
                    <!--                  <label for="text-field-hero-input" class="mdc-floating-label">ابحث..</label>-->
                    <!--                    <i class="material-icons mdc-text-field__icon" style="">search</i>-->
                    <!--              </div>-->
                    <!--                <div class="mdc-notched-outline__trailing"></div>-->
                    <!--              </div>-->
                    <!--            </div>-->
                </div>
                <!--                  <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end mdc-top-app-bar__section-right">-->
                <!--                      <div class="menu-button-container menu-profile d-none d-md-block">-->
                <!---->
                <!---->
                <!--                          <div class="mdc-menu mdc-menu-surface" tabindex="-1">-->
                <!--                              <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">-->
                <!--                                  <li class="mdc-list-item" role="menuitem">-->
                <!--                                      <div class="item-thumbnail item-thumbnail-icon-only">-->
                <!--                                          <i class="mdi mdi-account-edit-outline text-primary"></i>-->
                <!--                                      </div>-->
                <!--                                      <div class="item-content d-flex align-items-start flex-column justify-content-center">-->
                <!--                                          <h6 class="item-subject font-weight-normal">تعدبل الصفحة الشحصية</h6>-->
                <!--                                      </div>-->
                <!--                                  </li>-->
                <!--                                  <li class="mdc-list-item" role="menuitem">-->
                <!--                                      <div class="item-thumbnail item-thumbnail-icon-only">-->
                <!--                                          <i class="mdi mdi-settings-outline text-primary"></i>-->
                <!--                                      </div>-->
                <!--                                      <div class="item-content d-flex align-items-start flex-column justify-content-center">-->
                <!--                                          <h6 class="item-subject font-weight-normal">تسجيل الخروج</h6>-->
                <!--                                      </div>-->
                <!--                                  </li>-->
                <!--                              </ul>-->
                <!--                          </div>-->
                <!--                      </div>-->
                <!--                      <div class="divider d-none d-md-block"></div>-->
                <!--                      <div class="menu-button-container d-none d-md-block">-->
                <!--                          <button class="mdc-button mdc-menu-button">-->
                <!--                              <i class="mdi mdi-settings"></i>-->
                <!--                          </button>-->
                <!--                          <div class="mdc-menu mdc-menu-surface" tabindex="-1">-->
                <!--                              <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">-->
                <!--                                  <li class="mdc-list-item" role="menuitem">-->
                <!--                                      <div class="item-thumbnail item-thumbnail-icon-only">-->
                <!--                                          <i class="mdi mdi-alert-circle-outline text-primary"></i>-->
                <!--                                      </div>-->
                <!--                                      <div class="item-content d-flex align-items-start flex-column justify-content-center">-->
                <!--                                          <h6 class="item-subject font-weight-normal">الإعدادات</h6>-->
                <!--                                      </div>-->
                <!--                                  </li>-->
                <!--                                  <li class="mdc-list-item" role="menuitem">-->
                <!--                                      <div class="item-thumbnail item-thumbnail-icon-only">-->
                <!--                                          <i class="mdi mdi-progress-download text-primary"></i>-->
                <!--                                      </div>-->
                <!--                                      <div class="item-content d-flex align-items-start flex-column justify-content-center">-->
                <!--                                          <h6 class="item-subject font-weight-normal">التحديثات</h6>-->
                <!--                                      </div>-->
                <!--                                  </li>-->
                <!--                              </ul>-->
                <!--                          </div>-->
                <!--                      </div>-->
                <!---->
                <!---->
                <!--                      <div class="menu-button-container">-->
                <!---->
                <!---->
                <!---->
                <!--                      </div>-->
                <!--                      <div class="menu-button-container d-none d-md-block">-->
                <!--                          <button class="mdc-button mdc-menu-button">-->
                <!--                              <i class="mdi mdi-arrow-down-bold-box"></i>-->
                <!--                          </button>-->
                <!--                          <div class="mdc-menu mdc-menu-surface" tabindex="-1">-->
                <!--                              <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">-->
                <!--                                  <li class="mdc-list-item" role="menuitem">-->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!--                                      <div class="item-thumbnail item-thumbnail-icon-only">-->
                <!--                                          <i class="mdi mdi-logout-variant text-primary"></i>-->
                <!--                                      </div>-->
                <!--                                      <div class="item-content d-flex align-items-start flex-column justify-content-center">-->
                <!--                                          <h6 class="item-subject font-weight-normal">Logout</h6>-->
                <!--                                      </div>-->
                <!--                                  </li>-->
                <!--                              </ul>-->
                <!--                          </div>-->
                <!--                      </div>-->
                <!--                  </div>-->
            </div>

        </header>
        <!-- partial -->
        <!--        <button class="Accept_Not">cvcd</button>>-->
        <div class="page-wrapper mdc-toolbar-fixed-adjust">
            <main class="content-wrapper">
                <div class="mdc-layout-grid">
                    <div class="mdc-layout-grid__inner">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">

                                <div style="width:1210px;height:500px;background-color:white;margin-right:250px;margin-left:10px;margin-top:-180px;">

                                    <form action="add_jop.php" method="post">

                                        <div style="margin-top: 0px;margin-right: 25px;">
                                            <div style="margin-top: -150px;width: 1170px;background-color:white;border:solid 2 px ;border-color:black;height: 200px;">
                                                <label class="container">
                                                    <input type="radio" style="margin-top: 10px" checked="checked" name="radio">
                                                    <p style="font-weight:bold;width:150px;margin-right:-60px;padding-top:5px;font-family:'Changa';font-size: 15px;">إضافة ورشة لحرفة</p>
                                                </label>
                                                <p style="font-weight:bold;width:80px;margin-right:-20px;padding-top:5px;font-family:'Changa';font-size: 15px;">اختيار حرفة</p>
                                                <div style="margin-top:-35px;margin-left:950px">
                                                    <select style="padding: 4px;width: 150px;padding-left:10px;font-family:'Changa';font-size: 13px;">
                                                        <?php
                                                         $db = new mysqli('localhost', 'root', '', 'sanaye');
                                                         if (mysqli_connect_errno()) {
                                                             //echo "could not connect with database";
                                                             exit();
                                                         }
                                                         //echo "could connect with database";
                                                         $sql1 = "select * from  professions";
                                                         $res1 = $db->query($sql1);
                                                         $i=0;
                                                         $j=0;
                                                         $stack = array();
                                                         while( $row1 = mysqli_fetch_array($res1)) {
                                                         ?>
                                                        <option value="0"><?php echo $row1['name']?></option>
                                                         <?php } ?>
                                                    </select>
                                                </div>
                                                <input id="nameof" onchange="something(this.value)"style="border:black 1px solid;margin-top:20px;margin-right:10px;margin-left:840px;width: 800px;height:35px;padding:10px;font-family:'Changa';font-size: 13px;" type="text" placeholder="اسم الورشة / تفاصيل الورشة" name="uname" required>

                                                <div>
                                                    <div class="custom-file">
                                                        <input type="file" onchange="something1(this.value)" id="inputGroupFile01" class="img Inp custom-file-input" aria-describedby="inputGroupFileAddon01">

                                                        <label class="custom-file-label" for="inputGroupFile01" style="margin-top:-35px;margin-right:820px;width: 260px;height:80;padding:10px;font-family:'Changa';font-size: 13px;">Choose File</label>
                                                    </div>
                                                    <div class="container " style="margin-right:1075px;width: 70px;height:70px;margin-top:-95px;background-color:transparent">

                                                        <input type="text" name="name" value="$idfg" style="visibility: hidden">
                                                        <input type="text" name="filename" style="visibility: hidden">
                                                        <div id='img_container'><img id="preview" style="width: 70px;height: 60px" src="https://webdevtrick.com/wp-content/uploads/preview-img.jpg" alt="your image" title=''/></div>
                                                    </div>
                                                    <button type="submit"id="button2"style="margin-top:20px;border:none;background-color: #D7D5D5;margin-left:12px;font-family:'Changa';font-size: 13px;height:35px;width:1145px;text-align:center">إضافة</button>
                                                </div>
                                            </div>


                                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
                                            <script  src="function.js"></script>
                                        </div>
                                </div>
                                <!--                                        <div class="container">-->
                                <!--                                            <input type="text" placeholder="Enter Username" name="uname" required>-->
                                <!---->
                                <!--                                            <button type="submit">Login</button>-->
                                <!---->
                                <!--                                        </div>-->

                                </form>
                            </div>
                        </div>
                        <!--                            <div class="mdc-card p-0">-->
                        <!--                                <p class="table-responsive">-->
                        <!--                                <table class="" style="font-family:'Changa';font-size: 16px;">-->
                        <!--                                    <thead>-->
                        <!--                                    <thead>-->
                        <!--                                    <tr>-->
                        <!--                                        <th>    </th>-->
                        <!--                                        <th>    </th>-->
                        <!--                                        <th style="width: 200px;">    </th>-->
                        <!--                                        <th style="width: 100px;">الاسم</th>-->
                        <!--                                        <th style="width: 100px;">رقم الهاتف</th>-->
                        <!--                                        <th style="width: 100px;">العمل</th>-->
                        <!--                                        <th style="width: 250px;">معلومات عامة</th>-->
                        <!--                                        <th style="width: 250px;">خبرات سابقة</th>-->
                        <!--                                    </tr>-->
                        <!--                                    </thead>-->
                        <!---->
                        <!--                                    --><?php
                        //                                    $db = new mysqli('localhost', 'root', '', 'sanaye');
                        //                                    if (mysqli_connect_errno()) {
                        //                                        //echo "could not connect with database";
                        //                                        exit();
                        //                                    }
                        //                                    //echo "could connect with database";
                        //                                    $sql1 = "select * from  request";
                        //                                    $res1 = $db->query($sql1);
                        //                                    $i=0;
                        //                                    $j=0;
                        //                                    while( $row1 = mysqli_fetch_array($res1)) {
                        //                                    $i++;
                        //                                    ?>
                        <!---->
                        <!--                                    <td>-->
                        <!--                                    <td>-->
                        <!--                                    <td><img src="../../../../../../testlocalhost/upload/--><?php //echo $row1['image']?><!--"style="margin-right: 10px;margin-left:30px;margin-top: 10px;border-radius: 50%;" alt="Avatar" width="80" height="80" ></td>-->
                        <!--                                    <td style="padding-top: 40px;vertical-align: top">--><?php //echo $row1['name']?><!--</td>-->
                        <!--                                    <td style="padding-top: 40px;vertical-align: top">--><?php //echo $row1['phone']?><!--</td>-->
                        <!--                                    <td style="padding-top: 40px;vertical-align: top">--><?php //echo $row1['Work']?><!--</td>-->
                        <!--                                    <td style="padding-top: 40px;vertical-align: top">--><?php //echo $row1['Information']?><!--</td>-->
                        <!--                                    <td style="padding-top: 40px;vertical-align: top">--><?php //echo $row1['Experiance']?><!--</td>-->
                        <!--                                    <td></td>-->
                        <!--                                    <td>-->
                        <!--                                        <form action="add.php" method="post" onsubmit="return confirm('هل أنت متأكد من أنك تربد قبول الطلب ؟');" style="margin-top: -20px">-->
                        <!--                                            <input type="text" name="phone" value="--><?php //echo $row1['phone'];?><!--"style="visibility: hidden">-->
                        <!--                                            <button class="Accept_Not" type="submit" style="border:none;background-color:white;margin-bottom:-30px;font-family: Changa"id="button1">قبول الطلب</button><i class="fa fa-check"style="color: green"></i>-->
                        <!--                                        </form >-->
                        <!--                                        <form action="delete.php" method="post"onsubmit="return confirm('هل أنت متأكد من أنك تربد رفض هذا الطلب ؟');"style="margin-top: -5px">-->
                        <!--                                            <input type="text" name="phone" value="--><?php //echo $row1['phone'];?><!--"style="visibility: hidden">-->
                        <!--                                            <button class="Accept_Not" style="border:none;background-color:white;margin-top:-30px;font-family: Changa"type="submit"id="button2">  رفض الطلب</button><i class="fa fa-trash"></i>-->
                        <!--                                        </form >-->
                        <!---->
                        <!--                                    </td>-->
                        <!--                                    </tr>-->
                        <!--                                    <tr>-->
                        <!--                                        --><?php
                        //                                        } ?>
                        <!--                                                       <tr>-->
                        <!--                                    </tr>-->
                        <!--                                    </tbody>-->
                        <!--                                </table>-->
                        <!--                            </div>-->
                    </div>
                </div>
                <!--              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">-->
                <!--                <div class="mdc-card p-0">-->
                <!--                  <h6 class="card-title card-padding pb-0">Hoverable Table</h6>-->
                <!--                  <div class="table-responsive">-->
                <!--                  </div>-->
                <!--                </div>-->
                <!--              </div>-->
                <!--              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">-->
                <!--                <div class="mdc-card p-0">-->
                <!--                  <h6 class="card-title card-padding pb-0">Striped Table</h6>-->
                <!--                  <div class="table-responsive">-->
                <!--                  </div>-->
                <!--                </div>-->
                <!--              </div>-->
        </div>
    </div>
    </main>
    <!--        <footer>-->
    <!--          <div class="mdc-layout-grid">-->
    <!--            <div class="mdc-layout-grid__inner">-->
    <!--              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">-->
    <!--                <span class="text-center text-sm-left d-block d-sm-inline-block tx-14">Copyright © <a href="https://www.bootstrapdash.com/" target="_blank">bootstrapdash.com </a>2020</span>-->
    <!--              </div>-->
    <!--              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop d-flex justify-content-end">-->
    <!--                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center tx-14">Free <a href="https://www.bootstrapdash.com/material-design-dashboard/" target="_blank"> material admin </a> dashboards from Bootstrapdash.com</span>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </footer>-->
</div>
</div>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script language="javascript" type="text/javascript">
    $(function () {
        $("#fileupload").change(function () {
            $("#dvPreview").html("");
            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
            if (regex.test($(this).val().toLowerCase())) {
                if ($.browser.msie && parseFloat(jQuery.browser.version) <= 9.0) {
                    $("#dvPreview").show();
                    $("#dvPreview")[0].filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = $(this).val();
                }
                else {
                    if (typeof (FileReader) != "undefined") {
                        $("#dvPreview").show();
                        $("#dvPreview").append("<img />");
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            $("#dvPreview img").attr("src", e.target.result);
                        }
                        reader.readAsDataURL($(this)[0].files[0]);
                    } else {
                        alert("This browser does not support FileReader.");
                    }
                }
            } else {
                alert("Please upload a valid image file.");
            }
        });
    });
    // $("input").change(function(e) {
    //
    //     for (var i = 0; i < e.originalEvent.srcElement.files.length; i++) {
    //
    //         var file = e.originalEvent.srcElement.files[i];
    //
    //         var img = document.createElement("img");
    //         var reader = new FileReader();
    //         reader.onloadend = function() {
    //             img.src = reader.result;
    //         }
    //         reader.readAsDataURL(file);
    //         $("input").after(img);
    //     }
    // });
    //selecting all required elements
    const dropArea = document.querySelector(".drag-area"),
        dragText = dropArea.querySelector("header"),
        button = dropArea.querySelector("button"),
        input = dropArea.querySelector("input");
    let file; //this is a global variable and we'll use it inside multiple functions

    button.onclick = ()=>{
        input.click(); //if user click on the button then the input also clicked
    }

    input.addEventListener("change", function(){
        //getting user select file and [0] this means if user select multiple files then we'll select only the first one
        file = this.files[0];
        dropArea.classList.add("active");
        showFile(); //calling function
    });


    //If user Drag File Over DropArea
    dropArea.addEventListener("dragover", (event)=>{
        event.preventDefault(); //preventing from default behaviour
        dropArea.classList.add("active");
        dragText.textContent = "Release to Upload File";
    });

    //If user leave dragged File from DropArea
    dropArea.addEventListener("dragleave", ()=>{
        dropArea.classList.remove("active");
        dragText.textContent = "Drag & Drop to Upload File";
    });

    //If user drop File on DropArea
    dropArea.addEventListener("drop", (event)=>{
        event.preventDefault(); //preventing from default behaviour
        //getting user select file and [0] this means if user select multiple files then we'll select only the first one
        file = event.dataTransfer.files[0];
        showFile(); //calling function
    });

    function showFile(){
        let fileType = file.type; //getting selected file type
        let validExtensions = ["image/jpeg", "image/jpg", "image/png"]; //adding some valid image extensions in array
        if(validExtensions.includes(fileType)){ //if user selected file is an image file
            let fileReader = new FileReader(); //creating new FileReader object
            fileReader.onload = ()=>{
                let fileURL = fileReader.result; //passing user file source in fileURL variable
                // UNCOMMENT THIS BELOW LINE. I GOT AN ERROR WHILE UPLOADING THIS POST SO I COMMENTED IT
                // let imgTag = `<img src="${fileURL}" alt="image">`; //creating an img tag and passing user selected file source inside src attribute
                dropArea.innerHTML = imgTag; //adding that created img tag inside dropArea container
            }
            fileReader.readAsDataURL(file);
        }else{
            alert("This is not an Image File!");
            dropArea.classList.remove("active");
            dragText.textContent = "Drag & Drop to Upload File";
        }
    }
    // Code By Webdevtrick ( https://webdevtrick.com )
</script>
<!-- plugins:js -->
<script src="../../../assets/vendors/js/vendor.bundle.base.js">

    function something(val) {
        document.getElementById('somethinghere').value = val;
    }
    function something1(val) {
        document.getElementById('somethinghere1').value = val;
    }

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="../../../assets/js/material.js"></script>
<script src="../../../assets/js/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<!-- End custom js for this page-->
</body>
</html>