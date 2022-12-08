<?php

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
    $active = 0;
}

if(isset($_POST['name'])){
    $objuser = new user();
    $objuser->insert($name, $lastname, $mail, $password, $birthdate, $address, $avatar, $active);
    header("Location: test.php");
}
?>



<form  method="post" action="test.php?modulo=register_user" >

<table  colspan="2"  cellspacing="2" cellspacing="10" width="10%">

    <tr>
        <td>name</td>
        <td><input type="text" name="name" value=""></td>
    </tr>
</br>
    <tr>
        <td>lastname</td>
        <td><input type="text" name="lastname" value=""></td>
    </tr>
</br>
    <tr>
        <td>mail</td>
        <td><input type="email" name="mail" value=""></td>
    </tr>
</br>
<tr>
    <td>password</td>
        <td><input type="password" name="password" value=""></td>
    </tr>
    <tr>
        <td>birthdate</td>
        <td><input type="date" name="birthdate" value=""></td>
    </tr>
    <tr>
        <td>address</td>
        <td><input type="text" name="address" value=""></td>
    </tr>
    <tr>
        <td>avatar</td>
        <td><input type="text" name="avatar" value=""></td>
    </tr>
    <tr>
        <td>active</td>
        <td><input type="int" name="active" value=""></td>
    </tr>


    <tr>
    
        <td><input type="submit" value="enviar" ></td>
      
    </tr>

 
</table>


</form>
