<form  method="post" action="test.php?modulo=ejercicio3">


<table  colspan="2"  cellspacing="2" cellspacing="10" width="10%">

    <tr>
        <td>largo</td>
        <td><input type="number" name="largo" value=""></td>
    </tr>
</br>
    <tr>
        <td>ancho</td>
        <td><input type="number" name="ancho" value=""></td>
    </tr>
</br>

</br>
    <tr>
        <td><input type="submit" value="calcular" ></td>  
    </tr>

 
</table>


</form>

<?php

    $largo = $_POST ['largo'] ?? 0 ;
    $ancho = $_POST ['ancho'] ?? 0 ;
    
    $metros_terreno=($largo * $ancho);

    $terreno_para_siembra= ($metros_terreno / 4);

    $plantas_sembrar= ($terreno_para_siembra * 3) ;

    $longitud= ( ($largo + $ancho) * 2) ;


?>

<strong>el total de plantas por sembrar es </strong><span><?php  echo  "$plantas_sembrar" ; ?> </span></br>

<strong>la longitud de malla  para cercar el terreno es </strong><span><?php  echo  "$longitud" ; ?> metros</span></br>

