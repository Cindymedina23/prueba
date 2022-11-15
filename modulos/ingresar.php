<?php

if(isset($_POST['nombre'])){
    $nombre = $_POST['nombre'];
} else {
    $nombre = '';
}

if(isset($_POST['apellido'])){
    $apellido = $_POST['apellido'];
} else {
    $apellido = '';
}


if(isset($_POST['correo'])){
    $correo = $_POST['correo'];
} else {
    $correo = '';
}

if(isset($_POST['clave'])){
    $clave = $_POST['clave'];
} else {
    $clave = '';
}

?>

<form method="post" action="test.php?modulo=dashboard">

<table colspan="2"  cellspacing="2" cellspacing="10" width="10%">

<tr>
        
        <td><input type="hidden" name="nombre" value="<?php echo "$nombre" ; ?>"></td>
    </tr>
</br>
    <tr>
        
        <td><input type="hidden" name="apellido" value="<?php echo "$apellido" ; ?>"></td>
    </tr>
</br>



    <tr>
        <td>correo</td>
        <td><input type="email" name="correo" value="<?php echo "$correo" ; ?>" ></td>
    </tr>
</br>
    <tr>
        <td>clave</td>
        <td><input type="password" name="clave" value="<?php echo "$clave" ; ?>" ></td>
    </tr>

    <tr>
        
        <td><input type="submit"  value="entrar" ></td>
    </tr>

</table>

</form>