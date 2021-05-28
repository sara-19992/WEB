<?php
$db = new mysqli('localhost', 'root', '', 'sanaye');
if (mysqli_connect_errno()) {
echo "could not connect with database";
exit();
}
echo "could connect with database";