<?php
$db = new PDO('mysql:host=localhost;dbname=sanaye','root','');
if (mysqli_connect_errno()) {
echo "could not connect with database";
exit();
}
echo "could connect with database";