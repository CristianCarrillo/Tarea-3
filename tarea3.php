<?php
class Sumar{

private $numeros=array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
private $suma=0;

public function sumara($suma){
for($i=0;$i<20;$i++){
$suma=$suma+$numeros[$i];
}


echo$suma;
}

}
?>