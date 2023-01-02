<?php 

 $host = "localhost";
 $user = "root";
 $password = "";
 $db = "mysql_test";
 $connect;

$connect = new mysqli($host, $user, $password, $db);

$registros = $connect->query('SELECT * FROM users');

 ?>

<table colspan="2"rowspan = "1" cellspacing="1" cellspacing="5" width="5%"> 
<thead>
	<tr>
	<th>id</th>
	<th>nombre</th>
    <th>apellido</th>
	<th>correo</th>
    <th>clave</th>
	<th>fecha de nacimiento</th>
	<th>direccion</th>
    <th>avatar</th>
    <th>active</th>
	</tr>
</thead>

<tbody>
    
    <tr>
	 <?php foreach ($registros as $users){ ?>
	 <td> <?php echo $users['id']; ?> </td>
	 <td> <?php echo $users['name']; ?> </td>
	 <td> <?php echo $users['lastname']; ?> </td>
	 <td> <?php echo $users['mail']; ?> </td>
	 <td> <?php echo $users['password']; ?> </td>
	 <td> <?php echo $users['birthdate']; ?> </td>
	 <td> <?php echo $users['address']; ?> </td>
	 <td> <img src="<?php echo $users['avatar']; ?>" alt="MDN" width="50" height ="50"> </td> 
     <td> <?php echo $users['active']; ?> </td> 
      </tr>
	<?php } ?>
</tbody>
</table>
