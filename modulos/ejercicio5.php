<form  method="post" action="test.php?modulo=ejercicio5">


<table  colspan="2"  cellspacing="2" cellspacing="10" width="10%">

    <tr>
        <td>distancia en metros</td>
        <td><input type="number" name="distancia" value=""></td>
    </tr>
</br>

</br>
    <tr>
        <td><input type="submit" value="calcular" ></td>  
    </tr>

 
</table>


</form>

<?php

    $distancia = $_POST ['distancia'] ?? 0 ;
    
    $metros_kilometros = ((1 * $distancia )/ 1000) ;

    $hora= ((2 * 60) / 1) ;
    
    $minutos = ($hora + 25);

    $velocidad= ($metros_kilometros / $minutos ) ;

?>
<strong>la velocidad es  </strong><span><?php  echo  "$velocidad" ; ?> </span></br>

<strong>la distancia recorrida </strong><span><?php  echo  "$metros_kilometros" ; ?> kilometros</span></br>

<strong>el tiempo de carrera es </strong><span><?php  echo  "$minutos" ; ?> minutos</span></br>


