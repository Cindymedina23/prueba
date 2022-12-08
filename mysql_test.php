<?php
require_once("autoload.php");

$objuser = new user();

//insertar usuario
$insert= $objuser->insertuser();
echo insert;

$users = $objuser->getuUser();
print_r("<pre>");
print_r($users);
print_r("</pre>");

$updateUser = $objuser->updateUser();
echo $updateUser;

$users = $objuser->getUser();
print_r("<pre>");
print_r($users);
print_r("</pre>");

$delete = $objuser->deluser();
echo $delete;
?>

<?php
require_once("autoload.php");

$objteacher = new teacher();

//insertar usuario
$insert= $objteacher->insertteacher();
echo insert;

$teacherS = $objteacher->getuTeacher();
print_r("<pre>");
print_r($teacherS);
print_r("</pre>");

$updateTeacher = $objteacher->updateTeacher();
echo $updateTeacher;

$teachers = $objteacher->getTeacher();
print_r("<pre>");
print_r($teachers);
print_r("</pre>");

$delete = $objteacher->delteacher();
echo $delete;
?>