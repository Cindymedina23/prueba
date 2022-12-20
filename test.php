<!DOCTYPE html>
<html lang="en">

<head>
    <title>test</title></br>
    <link rel="stylesheet" href="estilo.css" type="text/css">
    <meta charset="utf-8">
</head>


<body>

<table>
    <caption><strong><h2>register user</h2></strong></caption>
    <tr>
        <th  colspan="2" > menu 
<!-- inicio de menu -->

        <table >     
            <tr>  
             <td><a href="test.php">homepage </a> </td>
             </tr>
            <tr> 
             <td><a href="test.php?modulo=register_user" method="&_POST"> register user</a></td>         
            </tr>
            <tr> 
             <td><a href="test.php?modulo=register_teacher" method="&_POST"> register teacher</a></td>         
            </tr>
            <tr> 
             <td><a href="test.php?modulo=registrar_tarea" method="&_POST"> registrar tarea</a></td>         
            </tr>
             <tr> 
             <td><a href="test.php?modulo=ingresar" method="&_POST">ingresar</a></td>
            </tr>  
            <tr>  
             <td><a href="test.php?modulo=dashboard" method="$_POST">dashboard</a> </td>
             </tr>     
             <tr>  
             <td><a href="test.php?modulo=ejercicio1" method="$_POST">exercise1</a> </td>
             </tr> 
             <tr>  
             <td><a href="test.php?modulo=ejercicio2" method="$_POST">exercise2</a> </td>
             </tr>
             <tr>  
             <td><a href="test.php?modulo=ejercicio3" method="$_POST">exercise3</a> </td>
             </tr>
             <td><a href="test.php?modulo=ejercicio4" method="$_POST">exercise4</a> </td>
             </tr>
             </tr>
             <td><a href="test.php?modulo=ejercicio5" method="$_POST">exercise5</a> </td>
             </tr>
             </tr>
             <td><a href="test.php?modulo=ejercicio6" method="$_POST">exercise6</a> </td>
             </tr>
        </table>           
<!-- fin de menu-->

        <th colspan="2"> datos </br>

 <!-- inicio de datos -->
 
 <?php
 
     $modulo = $_GET['modulo'] ?? '';
     
        if ($modulo=='register_user') { 
            include ("modulos/register_user.php");
        } else  if ($modulo=='register_teacher') {
            include ("modulos/register_teacher.php");
        }else  if ($modulo=='registrar_tarea') {
            include ("modulos/registrar_tarea.php");
        }else  if ($modulo=='dashboard') {   
            include ("modulos/dashboard.php");
        } else  if ($modulo=='ejercicio1') {   
             include ("modulos/ejercicio1.php");
        } else  if ($modulo=='ejercicio2') {  
            include ("modulos/ejercicio2.php");
        }  else  if ($modulo=='ejercicio3') {  
            include ("modulos/ejercicio3.php");
        }   else  if ($modulo=='ejercicio4') {  
            include ("modulos/ejercicio4.php");
        } else  if ($modulo=='ejercicio5') {  
            include ("modulos/ejercicio5.php");
        } else  if ($modulo=='ejercicio6') {  
            include ("modulos/ejercicio6.php");
        }

?>


</th>

</table >
<!-- fin de datos -->
  
</body>

</html>