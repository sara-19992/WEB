<?php
$i=0;

?>
<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SANAY3EE</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Vibes&display=swap" rel="stylesheet">
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
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../../assets/images/favicon.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<style>
    #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        height: 500;
        font-family: 'Changa';
        font-size: 5;
        background-color:white;
    }

    #customers td, #customers th {
        border: 1px solid #ddd;
        padding-right: 10px;
        padding-top: 10px;
        font-family: 'Changa';
        font-size: 13px;
    }

    #customers tr:nth-child(even){background-color: #D7D5D5;}

    /*#customers tr:hover {background-color: #D7D5D5;}*/

    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: right;
        background-color: white;
        background-color: white;
        color: black;
        font-family: 'Changa';
        font-size: 13px;
        font-weight: bold;
    }
    .wait {
        height: 20px;
        width: 20px;
        background-color: #f8f811;
        border-radius: 50%;
        display: inline-block;
        padding-left: 50;
    }
    .accept {
        height: 20px;
        width: 20px;
        background-color: #ec842a;
        border-radius: 50%;
        display: inline-block;
        padding-left: 50;
    }
    .finish {
        height: 20px;
        width: 20px;
        background-color: #45DE45;
        border-radius: 50%;
        display: inline-block;
        padding-left: 50;
    }
    .cancel {
        height: 20px;
        width: 20px;
        background-color: #EC3131;
        border-radius: 50%;
        display: inline-block;
        padding-left: 50;
    }
    /*th{*/
    /*    padding-top:-400px;*/
    /*    padding-right: 1px;*/
    /*    margin-top: 10px;*/
    /*    font-weight: normal;*/
    /*    text-align: right;*/
    /*    font-family: 'Changa';*/
    /*    font-size: 13;*/
    /*}*/
    /*td {*/
    /*    padding-top:-400px;*/
    /*    padding-right: 1px;*/
    /*    padding-left: 20px;*/
    /*    margin-bottom: -50px;*/
    /*    margin-top: -10px;*/
    /*    font-size: 16px;*/
    /*    text-align: right;*/
    /*    border-bottom: 2px solid gainsboro;*/
    /*    font-weight: 400;*/

    /*}*/

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
        <p style="font-family: 'Vibes';color:white;font-size:35px;margin-right:80px;margin-bottom:50px;margin-top:12px;">صنايعي</p>
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
                                    عرض الحرفيين/إزالة
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
                                    <div class="mdc-list-item mdc-drawer-item">
                                        <a class="mdc-drawer-link" href="showwarahatt.php"style="font-family:'Changa';font-size: 15px;">
                                            <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">assignment</i>
                                            عرض الورشات
                                        </a>
                                    </div>
                                    <div class="mdc-list-group">
                                        <nav class="mdc-list mdc-drawer-menu">
                                            <div class="mdc-list-item mdc-drawer-item">
                                                <a class="mdc-drawer-link" href="add_admin.php"style="font-family:'Changa';font-size: 15px;">
                                                    <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">library_add</i>
                                                    إضافة حرفة / إزالة
                                                </a>
                                            </div>
                                            <!--                                            <div class="mdc-list-item mdc-drawer-item">-->
                                            <!--                                                <a class="mdc-drawer-link" href="basic-tables.php"style="font-family:'Changa';font-size: 15px;">-->
                                            <!--                                                    <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">library_add</i>-->
                                            <!--                                                     إضافة ورشات لحرف-->
                                            <!--                                                </a>-->
                                            <!--                                            </div>-->

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
                <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
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
                <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end mdc-top-app-bar__section-right">
                    <div class="menu-button-container menu-profile d-none d-md-block">

                    </div>


                    <div class="menu-button-container">



                    </div>
                </div>
            </div>
        </header>
        <!-- partial -->
        <!--        <button class="Accept_Not">cvcd</button>>-->
        <div class="page-wrapper mdc-toolbar-fixed-adjust">
            <main class="content-wrapper">
                <div class="mdc-layout-grid">
                    <div class="mdc-layout-grid__inner">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                            <table id="customers"style="margin-top: -180px;margin-right:250px">
                                <tr>

                                    <th style="width: 100px;"> العميل</th>
                                    <th style="width: 130px;">العامل</th>
                                    <th style="width: 130px;">حالة الطلب</th>
                                    <th style="width: 130px;">تاريخ الورشة</th>
                                    <th style="width: 120px;">نوع الورشة</th>
                                    <th style="width: 330px;">التفاصيل</th>
                                </tr>
                                <?php
                                $db = new mysqli('localhost', 'root', '', 'sanaye');
                                if (mysqli_connect_errno()) {
                                    //echo "could not connect with database";
                                    exit();
                                }
                                //echo "could connect with database";
                                $sql1 = "select reservations.*,users.*,worker.namefirst as name1,worker.namelast as name2 from  worker,reservations,users where reservations.phoneuser=users.phone and reservations.workerphone=worker.phone";
                                $res1 = $db->query($sql1);
                                $i=0;
                                $j=0;
                                while( $row1 = mysqli_fetch_array($res1)) {
                                $i++;
                                ?>

                                <td style="vertical-align: top"><?php echo $row1['namefirst']." ".$row1['namelast']?></td>
                                <td style="vertical-align: top"><?php echo $row1['name1']." ".$row1['name2']?></td>
                                <td style="vertical-align: top"><?php if($row1['state']=='notfinished' && $row1['accept']=='no' && $row1['deleteornot']=='no'){?><span class="wait"style=""></span><?php } else if($row1['state']=='notfinished' && $row1['accept']=='yes' && $row1['deleteornot']=='no'){

                                        ?><span class="accept"style=""></span><?php }
                                    else if($row1['state']=='finished'&& $row1['deleteornot']=='no'){?>
                                        <span class="finish"style=""></span><?php }
                                    else if($row1['deleteornot']=='yes'){?>
                                        <span class="cancel"style=""></span><?php }
                                    ?>
                                </td>
                                <td style="vertical-align: top"><?php $am_pm='';echo $row1['Fromdate']."  إلى  ".$row1['Todate']."  "." ".$am_pm?></td>
                                <td style="vertical-align: top"><?php echo $row1['type']?></td>
                                <td style="vertical-align: top"><?php echo $row1['describes']?></td>
                                </tr>
                                <tr>
                                    <?php
                                    } ?>
                                    <!--              <tr>-->
                                    <!--                  <td>Alfreds Futterkiste</td>-->
                                    <!--                  <td>Maria Anders</td>-->
                                    <!--                  <td>Germany</td>-->
                                    <!--              </tr>-->
                                    <!--              <tr>-->
                                    <!--                  <td>Berglunds snabbköp</td>-->
                                    <!--                  <td>Christina Berglund</td>-->
                                    <!--                  <td>Sweden</td>-->
                                    <!--              </tr>-->
                                    <!--              <tr>-->
                                    <!--                  <td>Centro comercial Moctezuma</td>-->
                                    <!--                  <td>Francisco Chang</td>-->
                                    <!--                  <td>Mexico</td>-->
                                    <!--              </tr>-->
                                    <!--              <tr>-->
                                    <!--                  <td>Ernst Handel</td>-->
                                    <!--                  <td>Roland Mendel</td>-->
                                    <!--                  <td>Austria</td>-->
                                    <!--              </tr>-->
                                    <!--              <tr>-->
                                    <!--                  <td>Island Trading</td>-->
                                    <!--                  <td>Helen Bennett</td>-->
                                    <!--                  <td>UK</td>-->
                                    <!--              </tr>-->
                                    <!--              <tr>-->
                                    <!--                  <td>Alfreds Futterkiste</td>-->
                                    <!--                  <td>Maria Anders</td>-->
                                    <!--                  <td>Germany</td>-->
                                    <!--              </tr>-->
                                    <!--              <tr>-->
                                    <!--                  <td>Berglunds snabbköp</td>-->
                                    <!--                  <td>Christina Berglund</td>-->
                                    <!--                  <td>Sweden</td>-->
                                    <!--              </tr>-->
                                    <!--              <tr>-->
                                    <!--                  <td>Centro comercial Moctezuma</td>-->
                                    <!--                  <td>Francisco Chang</td>-->
                                    <!--                  <td>Mexico</td>-->
                                    <!--              </tr>-->
                                    <!--              <tr>-->
                                    <!--                  <td>Ernst Handel</td>-->
                                    <!--                  <td>Roland Mendel</td>-->
                                    <!--                  <td>Austria</td>-->
                                    <!--              </tr>-->
                                    <!--              <tr>-->
                                    <!--                  <td>Island Trading</td>-->
                                    <!--                  <td>Helen Bennett</td>-->
                                    <!--                  <td>UK</td>-->
                                    <!--              </tr>-->
                                    <!--              <tr>-->
                                    <!--                  <td>Königlich Essen</td>-->
                                    <!--                  <td>Philip Cramer</td>-->
                                    <!--                  <td>Germany</td>-->
                                    <!--              </tr>-->
                                    <!--              <tr>-->
                                    <!--                  <td>Laughing Bacchus Winecellars</td>-->
                                    <!--                  <td>Yoshi Tannamuri</td>-->
                                    <!--                  <td>Canada</td>-->
                                    <!--              </tr>-->
                                    <!--              <tr>-->
                                    <!--                  <td>Magazzini Alimentari Riuniti</td>-->
                                    <!--                  <td>Giovanni Rovelli</td>-->
                                    <!--                  <td>Italy</td>-->
                                    <!--              </tr>-->
                                    <!--              <tr>-->
                                    <!--                  <td>North/South</td>-->
                                    <!--                  <td>Simon Crowther</td>-->
                                    <!--                  <td>UK</td>-->
                                    <!--              </tr>-->
                                    <!--              <tr>-->
                                    <!--                  <td>Paris spécialités</td>-->
                                    <!--                  <td>Marie Bertrand</td>-->
                                    <!--                  <td>France</td>-->
                                    <!--              </tr>-->
                            </table>
                            <!--                <div class="mdc-card p-0">-->
                            <!--                    <p class="table-responsive">-->
                            <!--                        <table class="" style="font-family:'Changa';font-size: 16px;">-->
                            <!--                            <thead>-->
                            <!--                            <thead>-->
                            <!--                            <tr>-->
                            <!--                                <th>    </th>-->
                            <!--                                <th>    </th>-->
                            <!--                                <th style="width: 200px;"> حالة الطلب   </th>-->
                            <!--                                <th style="width: 100px;">الاسم</th>-->
                            <!---->
                            <!--                                <th style="width: 100px;">ساعة الارسال</th>-->
                            <!--                                <th style="width: 100px;">تاريخ ارسال الطلب</th>-->
                            <!--                                <th style="width: 250px;">ساعة قبوله</th>-->
                            <!--                                <th style="width: 250px;">تاريخ قبوله</th>-->
                            <!--                                <th style="width: 250px;">وصف الطلب</th>-->
                            <!--                            </tr>-->
                            <!--                            </thead>-->
                            <!---->
                            <!--                      --><?php
                            //                      $db = new mysqli('localhost', 'root', '', 'sanaye');
                            //                      if (mysqli_connect_errno()) {
                            //                        //echo "could not connect with database";
                            //                          exit();
                            //                      }
                            //                      //echo "could connect with database";
                            //                      $sql1 = "select * from  orders";
                            //                      $res1 = $db->query($sql1);
                            //                      $i=0;
                            //                      $j=0;
                            //                      while( $row1 = mysqli_fetch_array($res1)) {
                            //                      $i++;
                            //                      if($row1['states']=="current"){
                            //                          echo"<td>";
                            //                       echo "<td>";
                            //                         echo " <td style=\"padding-top: 40px;vertical-align: top\">";
                            //                     echo"<span class='dot' style='height: 25px; width: 25px;background-color: greenyellow;border-radius: 50%;display:inline-block;' >";
                            //                      echo"</span>";
                            //                      }
                            //                      else if($row1['states']=="complete") {
                            //                          echo"<td>";
                            //                          echo "<td>";
                            //                          echo " <td style=\"padding-top: 40px;vertical-align: top\">";
                            //                          echo"<span class='dot' style='height: 25px; width: 25px;background-color: red;border-radius: 50%;display:inline-block;' >";
                            //                          echo"</span>";
                            //                      }
                            //                      else{
                            //                          echo"<td>";
                            //                          echo "<td>";
                            //                          echo " <td style=\"padding-top: 40px;vertical-align: top\">";
                            //                          echo"<span class='dot' style='height: 25px; width: 25px;background-color: black;border-radius: 50%;display:inline-block;' >";
                            //                          echo"</span>";
                            //                      }
                            //
                            //                      ?>
                            <!---->
                            <!---->
                            <!--                      <td style="padding-top: 40px;vertical-align: top">--><?php ////echo $row1['states']?><!--</td>-->
                            <!--                         <td style="padding-top: 40px;vertical-align: top">--><?php //echo $row1['username']?><!--</td>-->
                            <!--                            <td style="padding-top: 40px;vertical-align: top">--><?php //echo $row1['timesend']?><!--</td>-->
                            <!--                            <td style="padding-top: 40px;vertical-align: top">--><?php //echo $row1['datesend']?><!--</td>-->
                            <!--                            <td style="padding-top: 40px;vertical-align: top">--><?php //echo $row1['timeaccept']?><!--</td>-->
                            <!--                            <td style="padding-top: 40px;vertical-align: top">--><?php //echo $row1['dateaccept']?><!--</td>-->
                            <!--                            <td style="padding-top: 40px;vertical-align: top">--><?php //echo $row1['description']?><!--</td>-->
                            <!--                        <td></td>-->
                            <!--                            <td>-->
                            <!--                                <form action="add.php" method="post" onsubmit="return confirm('هل أنت متأكد من أنك تربد قبول الطلب ؟');" style="margin-top: -10px">-->
                            <!--                                    <input type="text" name="phone" value="--><?php ////echo $row1['phone'];?><!--"style="visibility: hidden">-->
                            <!--                                    <button class="Accept_Not" type="submit" style="border:none;background-color:white;margin-bottom:-30px;font-family: Changa"id="button1">قبول الطلب</button><i class="fa fa-check"style="color: green"></i>-->
                            <!--                                </form >-->
                            <!--                                <form action="delete.php" method="post"onsubmit="return confirm('هل أنت متأكد من أنك تربد رفض هذا الطلب ؟');"style="margin-top: -5px">-->
                            <!--                                    <input type="text" name="phone" value="--><?php ////echo $row1['phone'];?><!--"style="visibility: hidden">-->
                            <!--                                    <button class="Accept_Not" style="border:none;background-color:white;margin-top:-30px;font-family: Changa"type="submit"id="button2">  رفض الطلب</button><i class="fa fa-trash"></i>-->
                            <!--                                </form >-->
                            <!---->
                            <!--                            </td>-->
                            <!--                        </tr>-->
                            <!--                        <tr>-->
                            <!--                            --><?php
                            //                          } ?>
                            <!--                        <tr>-->
                            <!--                        </tr>-->
                            <!--                        <tr>-->
                            <!--                        </tr>-->
                            <!--                        <tr>-->
                            <!--                        </tr>-->
                            <!--                        <tr>-->
                            <!--                        </tr>-->
                            <!--                        <tr>-->
                            <!--                        </tr>-->
                            <!--                      </tbody>-->
                            <!--                    </table>-->
                            <!--                  </div>-->
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