<?php

$producto1='arroz';
$producto2='huevos';
$producto3='panela';
$producto4='cafe';
$producto5='cerveza';
$producto6='pastas';
$producto7='aceite';
$producto8='sal';
$producto9='carne';
$producto10='papas';

$precio1=5600;
$precio2=10000;
$precio3=5000;
$precio4=3800;
$precio5=20000;
$precio6=4000;
$precio7=6500;
$precio8=2300;
$precio9=15000;
$precio10=4000;

$total=$precio1+$precio2+$precio3+$precio4+$precio5+$precio6+$precio7+$precio8+$precio9+$precio10;

//echo('El total es de: '.$total);

if($total <= 80000){
    echo('Gracias por su compra :D');
} else {
    echo('Usted debe de pedir un fiado');
}
?>