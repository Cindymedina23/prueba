<?php
 include("conexion.php");



if (isset($_POST['eliminar'])){ $id =$_POST['id'];
    $del = "DELETE FROM users WHERE id= '$id'";
    
} 

?>
