<?php
require_once("autoload.php");

$objuser = new user();

//insertar usuario
$insert= $objuser->insertuser();
echo insert;

//extrae los registros
$users = $objuser->getUsers();
print_r("<pre>");
print_r($users);
print_r("</pre>");

//modificar registro
$updateUser = $objuser->updateUser();
echo $updateUser;

//llamar un registro
$users = $objuser->getUser();
print_r("<pre>");
print_r($users);
print_r("</pre>");

//eliminar 
$delete = $objuser->deluser();
echo $delete;
?>

<?php
require_once("autoload.php");

$objteacher = new teacher();

//insertar usuario
$insert= $objteacher->insertteacher();
echo insert;

//extrae registro
$teacherS = $objteacher->getuTeacher();
print_r("<pre>");
print_r($teacherS);
print_r("</pre>");

//modifica registro
$updateTeacher = $objteacher->updateTeacher();
echo $updateTeacher;

//llamar registro
$teachers = $objteacher->getTeacher();
print_r("<pre>");
print_r($teachers);
print_r("</pre>");

//eliminar registro
$delete = $objteacher->delteacher();
echo $delete;
?>