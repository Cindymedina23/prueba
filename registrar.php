<?php

$nombre=["nombre"];
$apellido=["apellido"];
$correo=["correo"];
$clave=["clave"];

?>

<form  method="&_POST">

<table  colspan="2"  cellspacing="2" cellspacing="10" width="10%">

    <tr>
        <td>nombre</td>
        <td><input type="text" name="nombre"></td>
    </tr>
</br>
    <tr>
        <td>apellido</td>
        <td><input type="text" name="apellido" ></td>
    </tr>
</br>
    <tr>
        <td>correo</td>
        <td><input type="email" name="correo" ></td>
    </tr>
</br>
    <tr>
        <td>clave</td>
        <td><input type="password" name="clave" ></td>
    </tr>

    <tr>
        
        <td><a href="ingresar.php"><input type="submit"  value="enviar"></td></a>
    </tr>


</table>


</form>
