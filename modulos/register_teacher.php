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
    header("Location: test.php");
}
?>



<form  method="post" action="test.php?modulo=register_teacher" >

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
        <td>matter</td>
        <td><input type="int" name="matter" value=""></td>
    </tr>
    
    <tr>
        <td><input type="submit" value="enviar" ></td>  
    </tr>

 
</table>


</form>
