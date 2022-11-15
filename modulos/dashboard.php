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


<strong>nombre: </strong><span><?php  echo  "$nombre" ; ?></span></br>

<strong>apellido: </strong><span><?php echo "$apellido" ; ?></span></br>

<strong>correo: </strong><span><?php echo "$correo" ; ?></span></br>

<strong>clave: </strong><span><?php echo "$clave" ; ?></span></br>
