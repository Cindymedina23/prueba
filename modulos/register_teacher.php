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

if(isset($_POST['matter'])){
    $matter = $_POST['matter'];
} else {
    $matter = '';
}
   
if(isset($_POST['name'])){
    $objuser = new teacher();
    $objuser->insert($name, $lastname, $mail, $matter);
    echo '<script>alert("registered teacher")</script>';   
} 
?>



<form  method="post" action="test.php?modulo=register_teacher" >

<table  colspan="2"  cellspacing="2" cellspacing="10" width="10%">

    <tr>
        <td>nombre</td>
        <td><input type="text" name="name" value="" required></td>
    </tr>
</br>
    <tr>
        <td>apellido</td>
        <td><input type="text" name="lastname" value="" required></td>
    </tr>
</br>
    <tr>
        <td>correo</td>
        <td><input type="email" name="mail" value="" required></td>
    </tr>
</br>
    <tr>
        <td>materia</td>
        <td><input type="int" name="matter" value="" required></td>
    </tr>
    
    <tr>
        <td><input type="submit" name="registrarse" value="submit"> </td>  
    </tr>

 
</table>


</form>