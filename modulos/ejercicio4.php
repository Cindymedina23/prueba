<form  method="post" action="test.php?modulo=ejercicio4">


<table  colspan="2"  cellspacing="2" cellspacing="10" width="10%">

    <tr>
        <td>extension_acres</td>
        <td><input type="number" name="extension_acres" value=""></td>
    </tr>
</br>
    <tr>
        <td>precio_ hectarea</td>
        <td><input type="number" name="precio_hectarea" value=""></td>
    </tr>
</br>

</br>
    <tr>
        <td><input type="submit" value="calcular" ></td>  
    </tr>

 
</table>


</form>



<?php

    $extension_acres = $_POST ['extension_acres'] ?? 0 ;
    $precio_hectarea = $_POST ['precio_hectarea'] ?? 0 ;
    
    $acres= ((4047 * 1)/ 10000);

    $hectareas = ($extension_acres * $acres) ;

    $precio = ($hectareas * $precio_hectarea);


?>

<strong>la extension son </strong><span><?php  echo  "$hectareas" ; ?> hectareas</span></br>

<strong>precio por hectarea</strong><span><?php  echo  "$precio" ; ?> bs</span></br>
