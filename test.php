<!DOCTYPE html>
<html lang="en">

<head>
    <title>test</title></br>
    <link rel="stylesheet" href="estilo.css" type="text/css">
    <meta charset="utf-8">
</head>

<body>
<table>
    <caption><strong><h2>registro de usuario</h2></strong></caption>
    <tr>
        <th  colspan="2" > menu 
<!-- inicio de menu -->

        <table >     
            <tr>  
             <td><a href="test.php">pagina principal </a> </td>
             </tr>
            <tr> 
             <td><a href="test.php?modulo=registrar" method="&_POST"> registrar</a></td>         
            </tr>
             <tr> 
             <td><a href="test.php?modulo=ingresar" method="&_POST">ingresar</a></td>
            </tr>  
            <tr>  
             <td><a href="test.php?modulo=dashboard" method="$_POST">dashboard</a> </td>
             </tr>     
             <tr>  
             <td><a href="test.php?modulo=ejercicio1" method="$_POST">ejercicio1</a> </td>
             </tr> 
             <tr>  
             <td><a href="test.php?modulo=ejercicio2" method="$_POST">ejercicio2</a> </td>
             </tr>
             <tr>  
             <td><a href="test.php?modulo=ejercicio3" method="$_POST">ejercicio3</a> </td>
             </tr>
             <td><a href="test.php?modulo=ejercicio4" method="$_POST">ejercicio4</a> </td>
             </tr>
             </tr>
             <td><a href="test.php?modulo=ejercicio5" method="$_POST">ejercicio5</a> </td>
             </tr>
             </tr>
             <td><a href="test.php?modulo=ejercicio6" method="$_POST">ejercicio6</a> </td>
             </tr>

        </table>           
<!-- fin de menu-->

        <th colspan="2"> datos </br>

 <!-- inicio de datos -->
 
 <?php
 
     $modulo = $_GET['modulo'] ?? '';
     
        if ($modulo=='registrar') { 
            include ("modulos/registrar.php");  
        } else  if ($modulo=='ingresar') {
            include ("modulos/ingresar.php");
        } else  if ($modulo=='dashboard') {   
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