<?php
//
//try{
//    $connection = new PDO('mysql:host=localhost;dbname=sanaye','root','');
//    $connection ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//
//}
//catch(PDOException $exc){
//    echo $exc ->getMassage();
//    echo "NO connection";
//}
//$name=$_POST('name');
//
//
//
//
//
////if(empty(trim($_POST["name"]))){
////
////
////} else{
////    $name = trim($_POST["name"]);
////
////}
//
//
//
//?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sanaye</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../../assets/css/demo/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../../assets/images/favicon.png" />
    <style>
        .box input[type = "submit"]:hover{
            background: #2ecc71;
        }
    </style>
</head>
<body>
<script src="../tables/../assets/js/preloader.js"></script>

<div class="body-wrapper">
    <!-- partial:../../partials/_sidebar.html -->
    <aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
        <div class="mdc-drawer__header">
            <a href="../../index.html" class="brand-logo">
                <img src="../tables/../../../assets/images/logo.svg" alt="logo">
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
                        <a class="mdc-drawer-link" href="../tables/../../index.html"style="font-family:'Changa';font-size: 17px;">
                            <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">home</i>
                            الصفحة الرئيسية
                        </a>
                    </div>

                    <div class="mdc-list-item mdc-drawer-item">
                        <a class="mdc-drawer-link" href="../tables/basic-tables.php"style="font-family:'Changa';font-size: 17px;">
                            <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">grid_on</i>
                            طلبات الانضمام
                        </a>
                    </div>
                    <div class="mdc-list-group">
                        <nav class="mdc-list mdc-drawer-menu">
                            <div class="mdc-list-item mdc-drawer-item">
                                <a class="mdc-drawer-link" href=../tables/allusers.php"style="font-family:'Changa';font-size: 17px;">
                                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">grid_on</i>
                                عرض الحرفيين/ازالة
                                </a>
                            </div>
                            <div class="mdc-list-group">
                                <nav class="mdc-list mdc-drawer-menu">
                                    <div class="mdc-list-item mdc-drawer-item">
                                        <a class="mdc-drawer-link" href="../tables/vieworders.php"style="font-family:'Changa';font-size: 17px;">
                                            <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">grid_on</i>
                                            عرض الطلبات
                                        </a>
                                    </div>
                                    <div class="mdc-list-group">
                                        <nav class="mdc-list mdc-drawer-menu">
                                            <div class="mdc-list-item mdc-drawer-item">
                                                <a class="mdc-drawer-link" href="basic-forms.php"style="font-family:'Changa';font-size: 17px;">
                                                    <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true"></i>
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
            <form name="form" action="search.php" method="post">
            <div class="mdc-top-app-bar__row">
                <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
                    <button class="material-icons mdc-top-app-bar__navigation-icon mdc-icon-button sidebar-toggler">menu</button>

                    <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon search-text-field d-none d-md-flex">

                        <input class="mdc-text-field__input" id="text-field-hero-input" type="search" name="search">

                       </form>
            <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                                <label for="text-field-hero-input" class="mdc-floating-label">ابحث..</label>
                                <i class="material-icons mdc-text-field__icon" style="">search</i>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                        </div>
                    </div>
                </div>
                <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end mdc-top-app-bar__section-right">
                    <div class="menu-button-container menu-profile d-none d-md-block">
                        <button class="mdc-button mdc-menu-button">
                <span class="d-flex align-items-center">
                  <span class="figure">
                    <img src="../../../assets/images/faces/face1.jpg" alt="user" class="user">
                  </span>
                  <span class="user-name">ADMIN</span>
                </span>
                        </button>
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
                        <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                            <h6 class="title"> <i class="mdi mdi-bell-outline mr-2 tx-16"></i> الإشعارات</h6>
                            <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                                <li class="mdc-list-item" role="menuitem">
                                    <div class="item-thumbnail item-thumbnail-icon">
                                        <i class="mdi mdi-email-outline"></i>
                                    </div>
                                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="item-subject font-weight-normal">You received a new message</h6>
                                        <small class="text-muted"> 6 min ago </small>
                                    </div>
                                </li>
                                <li class="mdc-list-item" role="menuitem">
                                    <div class="item-thumbnail item-thumbnail-icon">
                                        <i class="mdi mdi-account-outline"></i>
                                    </div>
                                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="item-subject font-weight-normal">New user registered</h6>
                                        <small class="text-muted"> 15 min ago </small>
                                    </div>
                                </li>
                                <li class="mdc-list-item" role="menuitem">
                                    <div class="item-thumbnail item-thumbnail-icon">
                                        <i class="mdi mdi-alert-circle-outline"></i>
                                    </div>
                                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="item-subject font-weight-normal">System Alert</h6>
                                        <small class="text-muted"> 2 days ago </small>
                                    </div>
                                </li>
                                <li class="mdc-list-item" role="menuitem">
                                    <div class="item-thumbnail item-thumbnail-icon">
                                        <i class="mdi mdi-update"></i>
                                    </div>
                                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="item-subject font-weight-normal">You have a new update</h6>
                                        <small class="text-muted"> 3 days ago </small>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="menu-button-container">
                        <button class="mdc-button mdc-menu-button">
                            <i class="mdi mdi-email"></i>
                            <span class="count-indicator">
                  <span class="count">3</span>
                </span>
                        </button>
                        <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                            <h6 class="title"><i class="mdi mdi-email-outline mr-2 tx-16"></i> Messages</h6>
                            <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                                <li class="mdc-list-item" role="menuitem">
                                    <div class="item-thumbnail">
                                        <img src="../../../assets/images/faces/face4.jpg" alt="user">
                                    </div>
                                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="item-subject font-weight-normal">Mark send you a message</h6>
                                        <small class="text-muted"> 1 Minutes ago </small>
                                    </div>
                                </li>
                                <li class="mdc-list-item" role="menuitem">
                                    <div class="item-thumbnail">
                                        <img src="../../../assets/images/faces/face2.jpg" alt="user">
                                    </div>
                                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="item-subject font-weight-normal">Cregh send you a message</h6>
                                        <small class="text-muted"> 15 Minutes ago </small>
                                    </div>
                                </li>
                                <li class="mdc-list-item" role="menuitem">
                                    <div class="item-thumbnail">
                                        <img src="../../../assets/images/faces/face3.jpg" alt="user">
                                    </div>
                                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="item-subject font-weight-normal">Profile picture updated</h6>
                                        <small class="text-muted"> 18 Minutes ago </small>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
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
                                        <a href="logout.php"> <h6 class="item-subject font-weight-normal">Logout</h6></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
                </form>
        </header>


<form action="search.php" method="post">


                  <div class="mdc-layout-grid">
                    <div class="mdc-layout-grid__inner">
                      <div class="mdc-layout-grid__cell&#45;&#45;span-12">
                        <div class="mdc-card">
                          <h6 class="card-title"></h6>
                          <div class="template-demo">
                            <div class="mdc-form-field">
                              <div class="mdc-checkbox">
                                <input type="checkbox" name="name"
                                        class="mdc-checkbox__native-control"
                                        id="checkbox-1"/>
                                <div class="mdc-checkbox__background">
                                  <svg class="mdc-checkbox__checkmark"
                                        viewBox="0 0 24 24">
                                    <path class="mdc-checkbox__checkmark-path"
                                          fill="none"
                                          d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                  </svg>
                                  <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                              </div>
                              <label for="checkbox-1">الاسم</label>
                            </div>
                            <div class="mdc-form-field">
                              <div class="mdc-checkbox mdc-checkbox&#45;&#45;disabled">
                                <input type="checkbox"
                                        id="basic-disabled-checkbox"
                                        class="mdc-checkbox__native-control"
                                        disabled />
                                <div class="mdc-checkbox__background">
                                  <svg class="mdc-checkbox__checkmark"
                                        viewBox="0 0 24 24">
                                    <path class="mdc-checkbox__checkmark-path"
                                          fill="none"
                                          d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                  </svg>
                                  <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                              </div>
                              <label for="basic-disabled-checkbox" id="basic-disabled-checkbox-label">العمل</label>
                            </div>
                            <div class="mdc-form-field">
                              <div class="mdc-checkbox">
                                <input type="checkbox"
                                        id="basic-disabled-checkbox"
                                        class="mdc-checkbox__native-control"
                                        checked />
                                <div class="mdc-checkbox__background">
                                  <svg class="mdc-checkbox__checkmark"
                                        viewBox="0 0 24 24">
                                    <path class="mdc-checkbox__checkmark-path"
                                          fill="none"
                                          d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                  </svg>
                                  <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                              </div>
                              <label for="basic-disabled-checkbox" id="basic-disabled-checkbox-label">المدينة</label>
                            </div>
                            <div class="mdc-form-field">
                              <div class="mdc-checkbox mdc-checkbox&#45;&#45;secondary">
                                <input type="checkbox"
                                        id="basic-disabled-checkbox"
                                        class="mdc-checkbox__native-control"
                                        checked />
                                <div class="mdc-checkbox__background">
                                  <svg class="mdc-checkbox__checkmark"
                                        viewBox="0 0 24 24">
                                    <path class="mdc-checkbox__checkmark-path"
                                          fill="none"
                                          d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                  </svg>
                                  <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                              </div>
                              <label for="basic-disabled-checkbox" id="basic-disabled-checkbox-label">المتاحين</label>
                            </div>

</form>










    </div>
</div>
</div>
</div>
</div>
</main>
<!-- partial:../../partials/_footer.html -->
<footer>
    <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                <span class="text-center text-sm-left d-block d-sm-inline-block tx-14">Copyright © <a href="https://www.bootstrapdash.com/" target="_blank">bootstrapdash.com </a>2020</span>
            </div>
            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop d-flex justify-content-end">
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center tx-14">Free <a href="https://www.bootstrapdash.com/material-design-dashboard/" target="_blank"> material admin </a> dashboards from Bootstrapdash.com</span>
            </div>
        </div>
    </div>
</footer>
<!-- partial -->
</div>
</div>
</div>
<!-- plugins:js -->
<script src="../../../assets/vendors/js/vendor.bundle.base.js"></script>
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
