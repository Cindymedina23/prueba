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
        }
        
         
?>


 
</th>

</table >
<!-- fin de datos -->
  
</body>

</html>