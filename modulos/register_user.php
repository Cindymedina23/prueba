<?php
//header ("Location:test.php");
require_once("autoload.php");

if(isset($_POST['name'])){
    $name = $_POST['name'];    
} else {
    $name = '';
}

if(isset($_POST['lastname'])){
    $lastname = $_POST['lastname'];
} else {
    $lastname = '';
}

if(isset($_POST['mail'])){
    $mail = $_POST['mail'];
} else {
    $mail = '';
}

if(isset($_POST['password'])){
    $password = $_POST['password'];
} else {
    $password = '';
}

if(isset($_POST['birthdate'])){
    $birthdate = $_POST['birthdate'];
} else {
    $birthdate = '';
}

if(isset($_POST['address'])){
    $address = $_POST['address'];
} else {
    $address = '';
}

if(isset($_POST['avatar'])){
    $avatar = $_POST['avatar'];
} else {
    $avatar = '';
}

if(isset($_POST['active'])){
    $active = $_POST['active'];
} else {
    $active = '';
}

if (isset($_REQUEST['registrarse'])) {
    if (isset($_FILES['avatar'])) {
        $nombreImg = $_FILES['avatar']['name'];
        $ruta      = $_FILES['avatar']['tmp_name'];
        $avatar   = "images/" . $nombreImg;
    
    move_uploaded_file($ruta, $avatar);
    }  
}

if (isset($_REQUEST['active'])) {
    $active = ($_POST['active'] == 'on') ? 1 : 0 ;
}else $active = 0 ;

if(isset($_POST['name'])){
    $objuser = new user();
    $objuser->insert($name, $lastname, $mail, $password, $birthdate, $address, $avatar, $active); 
    echo '<script>alert("usuario registrado")</script>';
}
?>


<form  method="post" action="test.php?modulo=register_user"  enctype="multipart/form-data">
<table  colspan="2"  cellspacing="2" cellspacing="10" width="10%">
    <tr><td>nombre</td> <td><input type="text" name="name" value="" required></td></tr></br>
    <tr><td>apellido</td> <td><input type="text" name="lastname" value="" required></td></tr></br>
    <tr><td>correo</td><td><input type="email" name="mail" value="" required></td></tr></br><tr>
    <td>clave</td><td><input type="password" name="password" value="" required></td></tr>
    <tr><td>fecha de nacimiento</td><td><input type="date" name="birthdate" value="" required></td></tr>
    <tr><td>direccion</td><td><input type="text" name="address" value="" required></td></tr>
    <tr><td>avatar</td><td><input type="file" id="avatar" name="avatar" accept="image/png, .jpeg, .jpg, image/gif, .PNG, .gif, .png" required></td></tr>
    <tr><td>active</td><td><input type="checkbox" name="active"></td></tr>
    <tr><td><input type="submit" name="registrarse" value="register"  > </td></tr>   
</table>
</form>
