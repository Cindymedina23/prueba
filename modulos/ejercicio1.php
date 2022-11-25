<form  method="post" action="test.php?modulo=ejercicio1">


<table  colspan="2"  cellspacing="2" cellspacing="10" width="10%">

    <tr>
        <td>medida_a</td>
        <td><input type="number" name="medida_a" value=""></td>
    </tr>
</br>
    <tr>
        <td>medida_b</td>
        <td><input type="number" name="medida_b" value=""></td>
    </tr>
</br>

    <tr>
        <td>medida_c</td>
        <td><input type="number" name="medida_c" value=""></td>
    </tr>

    <tr>
        <td><input type="submit" value="calcular" ></td>  
    </tr>


    </table>


</form>

    <?php

        $medida_a= $_POST ['medida_a'] ?? 0 ;
        $medida_b= $_POST ['medida_b'] ?? 0 ;
        $medida_c= $_POST ['medida_c'] ?? 0 ;

        $medida_d= ($medida_b-$medida_a);

        $elev_u= pow($medida_c,2);

        $elev_v= pow ($medida_d,2);

        $med_y= ($elev_u - $elev_v);

        $medida_x= sqrt ($med_y) ;

        $area_1= ($medida_a * $medida_x) ;

        $perimetro= ($medida_c + $medida_d + $medida_x) ;

        $semiperimetro= ($perimetro / 2) ;

        $area_2= sqrt ( $semiperimetro * ($semiperimetro-$medida_c) * ($semiperimetro-$medida_d) * ($semiperimetro-$medida_x)) ;
   

    ?> 
    <strong>el área del sembradío será </strong><span><?php  echo  "$area_1" ; ?> metros </span></br>


     <strong>imprimir el área libre del terreno es </strong><span><?php  echo  "$area_2" ; ?> metros cuadrados</span></br>    



