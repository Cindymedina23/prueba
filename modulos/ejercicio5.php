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
    
    $metros_kilometros= ($distancia / 1000) ;

    $minutos = (2.25 * 60);

?>


<strong>la distancia recorrida </strong><span><?php  echo  "$metros_kilometros" ; ?>kilometros</span></br>

<strong>el tiempo de carrera es </strong><span><?php  echo  "$minutos" ; ?>minutos</span></br>


