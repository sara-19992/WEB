
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
    <link href="https://fonts.googleapis.com/css2?family=Vibes&display=swap" rel="stylesheet">
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
  <!-- End layout styles -->
  <link rel="shortcut icon" href="../../../assets/images/favicon.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<style>
    body {font-family: Arial, Helvetica, sans-serif;}

    /* Full-width input fields */
    input[type=text], input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    /* Set a style for all buttons */
    button {
        color: #FFD136;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        font-weight: bold;
        font-size: 13px;
    }

    button:hover {
        opacity: 0.8;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
        width: auto;
        margin-top: 10;
        padding: 0px 54px 0px 0px;
        color: #FFD136;
        opacity: 0.8;
        background-color:white;
    }
    .aceptbtn {
        width: auto;
        margin-top: 10;
        padding: 0px 150px 0px 0px;
        color: #FFD136;
        opacity: 0.8;
        background-color:white;
    }

    /* Center the image and position the close button */
    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
        position: relative;
    }

    img.avatar {
        width: 40%;
        border-radius: 50%;
    }

    .container {
        padding: 16px;
    }

    span.psw {
        float: right;
        padding-top: 16px;
    }

    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        padding-top: 60px;
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 12% auto 10% auto; /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 20%; /* Could be more or less, depending on screen size */
    }

    /* The Close Button (x) */
    .close {
        position: absolute;
        right: 25px;
        top: 0;
        color: #000;
        font-size: 35px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        cursor: pointer;
    }

    /* Add Zoom Animation */
    .animate {
        -webkit-animation: animatezoom 0.6s;
        animation: animatezoom 0.6s
    }

    @-webkit-keyframes animatezoom {
        from {-webkit-transform: scale(0)}
        to {-webkit-transform: scale(1)}
    }

    @keyframes animatezoom {
        from {transform: scale(0)}
        to {transform: scale(1)}
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }
        .cancelbtn {
            width: 20%;
        }
    }
</style>
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
    .doton {
        height: 20px;
        width: 20px;
        background-color: #45DE45;
        border-radius: 50%;
        display: inline-block;
        padding-left: 50;
    }
    .dotoff {
        height: 20px;
        width: 20px;
        background-color: #EC3131;
        border-radius: 50%;
        display: inline-block;
        margin-right: 50;
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
      </aside>      <div class="main-wrapper mdc-drawer-app-content">
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

                          <th style="width: 100px;">الاسم</th>
                          <th style="width: 130px;">الحالة</th>
                          <th style="width: 130px;">المنطقة</th>
                          <th style="width: 130px;">رقم الهاتف</th>
                          <th style="width: 120px;">العمل</th>
                          <th style="width: 330px;">معلومات عامة</th>
                          <th style="width: 350px;">خبرات سابقة</th>
                          <th style="width: 50px;"></th>
                      </tr>
                      <?php
                      $db = new mysqli('localhost', 'root', '', 'sanaye');
                      if (mysqli_connect_errno()) {
                          //echo "could not connect with database";
                          exit();
                      }
                      //echo "could connect with database";
                      $sql1 = "select * from  worker";
                      $res1 = $db->query($sql1);
                      $i=0;
                      $j=0;
                      while( $row1 = mysqli_fetch_array($res1)) {
                      $i++;
                      ?>

                      <td style="vertical-align: top">
                          <div>
<!--                               <img src="../../../../../../testlocalhost/upload/--><?php //echo $row1['image']?><!--"style="margin-right: 20px;margin-left:30px;border-radius: 100%;background-size: 100% 100%" alt="Avatar" width="50" height="50" >-->
                                <p> <?php echo $row1['namefirst']." ".$row1['namelast']?></p>
                         </div>

                      </td>
                      <td style="vertical-align: top;alignment: center;margin-top: 50"><?php  if($row1['avalibel']=='true'){?><span class="doton"style=""></span><?php } else {?><span class="dotoff"></span><?php }?></td>
                      <td style="vertical-align: top"><?php echo $row1['country']?></td>
                      <td style="vertical-align: top"><?php echo $row1['phone']?></td>
                      <td style="vertical-align: top"><?php echo $row1['Work']?></td>
                      <td style="vertical-align: top"><?php echo $row1['Information']?></td>
                      <td style="vertical-align: top"><?php echo $row1['Experiance']?></td>
                      <td>

                          <button class="Accept_Not" onclick="document.getElementById('id01').style.display='block'"style="width:130px;height:30px;border:none;background-color:transparent;color:black;font-family: Changa;font-size:13px;font-weight:bold;margin-top:-30px;text-align:right;padding-left:20">  حذف صنايعي      <i class="fa fa-trash"style="word-spacing: 10px;padding-left: 0;alignment: left"></i></button>
                          <div id="id01" class="modal">

                              <form class="modal-content animate"action="deletewroker.php"method="post">


                                  <div class="container" style="background-color:white;alignment: left;margin-right: 100">
                                      <p style="margin-top: 15;padding-top: 100; white-space:pre-line;"> هل أنت متأكد من حذف الصنايعي ؟</p>
                                      <input type="text" name="phone" value="<?php echo $row1['phone'];?>"style="visibility: hidden">
                                      <button type="submit"class="aceptbtn"id="button2">حسنا</button>
                                      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">إلغاء</button>
                                  </div>
                              </form>
                          </div>
<!--                          <form action="deletewroker.php" method="post"onsubmit="return confirm('هل أنت متأكد من أنك تربد ازالة هذا الحرفي من التطبيق ؟');"style="margin-top: -5px">-->
<!--                              <input type="text" name="phone" value="--><?php //echo $row1['phone'];?><!--"style="visibility: hidden">-->
<!--                              <button class="Accept_Not" style="border:none;background-color:transparent;font-size:13px;font-weight:bold;margin-top:-30px;font-family: Changa"type="submit"id="button2">حذف صنايعي </button><i class="fa fa-trash"></i>-->
<!--                          </form >-->

                      </td>
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
<script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
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