<?php 

 $host = "localhost";
 $user = "root";
 $password = "";
 $db = "mysql_test";
 $connect;

$connect = new mysqli($host, $user, $password, $db);

$id= $_GET['id'];

$seleccion= "SELECT * FROM users WHERE id= '$id' ";
$edita= $connect->query($seleccion);
$dato= $edita->fetch_array();

if (isset($_POST['editar'])) {
    $id= $_POST['id'];
    $name= $connect->real_escape_string($_POST['name']);
    $lastname= $connect->real_escape_string($_POST['lastname']);
    $mail= $connect->real_escape_string($_POST['mail']);
    $password= $connect->real_escape_string($_POST['password']);
    $birthdate= $connect->real_escape_string($_POST['birthdate']);
    $address= $connect->real_escape_string($_POST['address']);
   
    $avatar = '';

        if (isset($_FILES['avatar'])) {
            $nombreImg = $_FILES['avatar']['name'];
            $ruta      = $_FILES['avatar']['tmp_name'];
            $avatar   = "images/" . $nombreImg;
        
        move_uploaded_file($ruta, $avatar);
        } 

    $active= $connect->real_escape_string($_POST['active']);

    $actualiza= "UPDATE users SET `name`='$name', `lastname`='$lastname', `mail`='$mail', `password`='$password', `birthdate`='$birthdate', `address`='$address', `avatar`='$avatar', `active`='$active' WHERE id=$id ";
    $actualizar= $connect->query($actualiza);   
    //aqui redirige a la otra vista
}
?>

<html>
<form  method="post"  enctype="multipart/form-data">
<table  colspan="2"  cellspacing="2" cellspacing="10" width="10%">
<body>
    <tr><td>id</td><td><input type="text" name="id" value="<?php echo $dato['id']; ?> " required></td></tr></br><td> </td>
    <tr><td>nombre</td><td><input type="text" name="name" value="<?php echo $dato['name']; ?>" required></td></tr></br>
    <tr><td>apellido</td> <td><input  type="text" name="lastname" value="<?php echo $dato['lastname']; ?>" required>  </td></tr></br>
    <tr><td>correo</td><td><input type="email" name="mail" value="<?php echo $dato['mail']; ?>" required>  </td></tr></br><tr>
    <td>clave</td><td><input type="password" name="password" value="<?php echo $dato['password']; ?> " required> </td></tr>
    <tr><td>fecha de nacimiento</td><td><input type="date" name="birthdate" value="<?php echo $dato['birthdate']; ?>" required> </td></tr>
    <tr><td>direccion</td><td><input type="text" name="address" value="<?php echo $dato['address']; ?>" required>  </td></tr>
    <tr><td>avatar</td><td><input type="file" id="avatar" name="avatar" accept="image/png, .jpeg, .jpg, image/gif, .PNG, .gif, .png" value="<?php echo $dato['avatar']; ?>"  required>  </td></tr>
    <tr><td>active</td><td><input type="checkbox" name="active" value="<?php echo $dato['active']; ?>">  </td></tr>
    <tr><td><a href="prueba.test/test.php?modulo=usuarios"><input type="submit"  name="editar" value="editar"  > </a></td></tr>
</body>
</table>
</form>
</html>