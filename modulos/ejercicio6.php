<form  method="post" action="test.php?modulo=ejercicio6">


<table  colspan="2"  cellspacing="2" cellspacing="10" width="10%">

    <tr>
        <td>dolares</td>
        <td><input type="number" name="dolares" value=""></td>
    </tr>
</br>
    <tr>
        <td>euros</td>
        <td><input type="number" name="euros" value=""></td>
    </tr>
</br>

    <tr>
        <td>pesos</td>
        <td><input type="number" name="pesos" value=""></td>
    </tr>

    <tr>
        <td><input type="submit" value="calcular" ></td>  
    </tr>


    </table>


</form>

<?php

    $dolares = $_POST ['dolares'] ?? 0 ;
    $euros = $_POST ['euros'] ?? 0 ;
    $pesos = $_POST ['pesos'] ?? 0 ;

    
	$bolivar_dolar= ($dolares * 10); 

	$bolivar_euro=($euros * 12);

   $bolivar_peso=( $pesos * 0.0020);

   $Total_Bolivares = ($bolivar_dolar + $bolivar_euro+ $bolivar_peso) ;

   $Comedor= (($Total_Bolivares * 40) / 100 );
  
   $Gastos_administrativo= (($Total_Bolivares * 60) / 100 );

?>
<strong>el total de donaciones es </strong><span><?php  echo  "$Total_Bolivares" ; ?> bolivares</span></br>

<strong>para el comedor corresponden  </strong><span><?php  echo  " $Comedor" ; ?> bolivares</span></br>

<strong>para gastos administrativos corresponden </strong><span><?php  echo  "$Gastos_administrativo" ; ?> bolivares</span></br>