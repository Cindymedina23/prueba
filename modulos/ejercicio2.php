<form  method="post" action="test.php?modulo=ejercicio2">


<table  colspan="2"  cellspacing="2" cellspacing="10" width="10%">

    <tr>
        <td>nombre</td>
        <td><input type="text" name="nombre" value=""></td>
    </tr>
</br>
    <tr>
        <td>hijos</td>
        <td><input type="number" name="hijos" value=""></td>
    </tr>
</br>
    <tr>
        <td>sueldo</td>
        <td><input type="number" name="sueldo" value=""></td>
    </tr>
</br>
    <tr>
        <td><input type="submit" value="calcular" ></td>  
    </tr>

 
</table>


</form>

<?php

    $nombre = $_POST ['nombre'] ?? '';
    $hijos = $_POST ['hijos'] ??  0;
    $sueldo = $_POST ['sueldo'] ?? 0;
    
    $prima_por_hijo= ($hijos * 30);

    $bono_alimentacion= ($sueldo * 0.15);

    $asignaciones= ($bono_alimentacion + $prima_por_hijo);
    
    $caja_ahorro= ($sueldo * 0.10);

    $seguro_social= ($sueldo * 0.18);
    
    $deducciones= ($caja_ahorro + $seguro_social);
     
    $sueldo_cobrar= $sueldo + ($asignaciones - $deducciones);
    
    
?>

</br><strong>nombre </strong><span><?php  echo  "$nombre" ; ?> </span></br>

</br><strong>Total de Asignaciones </strong><span><?php  echo  "$asignaciones" ; ?> bs</span></br>

</br><strong>Total de Deducciones </strong><span><?php  echo  "$deducciones" ; ?> bs</span></br>

</br><strong>Sueldo a cobrar </strong><span><?php  echo  "$sueldo_cobrar" ; ?> bs</span></br>