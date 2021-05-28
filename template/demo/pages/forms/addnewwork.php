<?php
$nameofwork_err = $warshaat_err = $towhom_err = $moredetails_err="";
try{
    $connection = new PDO('mysql:host=localhost;dbname=sanaye','root','');
    $connection ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $exc){
    echo $exc ->getMassage();
    echo "NO connection";
};
if(empty(trim($_POST["nameofwork"]))){
   echo $nameofwork_err = "ادخل اسم الحرفة التي تريد اضافتها !";
} else{
    $nameofwork = trim($_POST["nameofwork"]);
}
if(empty(trim($_POST["warshaat"]))){
    $warshaat_err = "ادخل الورشات الخاصة بالحرفة !";
} else{
    $warshaat = trim($_POST["warshaat"]);
}
if(empty(trim($_POST["towhom"]))){
    $towhom_err = "ادخل الورشات الخاصة بالحرفة !";
} else{
    $towhom = trim($_POST["towhom"]);
}
if(empty(trim($_POST["moredetails"]))){
    $moredetails_err = "ادخل الورشات الخاصة بالحرفة !";
} else{
    $moredetails = trim($_POST["moredetails"]);
}
$id =rand(0,2000000);

    $moredetails = trim($_POST["moredetails"]);

if(empty($nameofwork_err)){
$statment=$connection->query("insert into  `nameofwork`(nameof,warshaat,towhom,moredetails,id) values ('$nameofwork','$warshaat','$towhom','$moredetails','$id')");

$count=$statment -> rowCount();
if($count>0){

    echo json_encode("sucsses add");
    header('location:  basic-forms.php');
}
else{

    header('location:  basic-forms.php');
}
}
else{

    header('location:  basic-forms.php');
}
?>



