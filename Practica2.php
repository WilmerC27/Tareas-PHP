<head>
<title> PHP Intento 1</title>
<head>
<body>
<?php
$salto="<BR>";
    //Practica 2 en php Operadores
echo "Operadores en php<BR>";
echo $salto;
$a = 23;
$b = 3;
$c = $a - $b;
echo "La operacion que se realizó es una resta entre $a - $b<BR>";
echo $salto;
$x = 5;
echo "$x<BR>";
echo "Ahora a $x se le hara un suma de 5<BR>";
$x += 5; //$x valdrá 10
echo "El nuevo valor obtenido es $x<BR>";
echo $salto;
$cadena = "Hola ";
echo "Tenemos variable a la que le asignamos el valor $cadena<BR>";
$cadena .= "mundo"; //$cadena ahora vale "hola mundo"
echo "Ahora hemos echo una concatenacion para imprimir $cadena<BR>";
echo $salto;
$w = 20;
$p = 30;
if($w < $p) {
    echo "$w es menor que $p<BR>";}
echo "Se ha realizado una operacion de condicion < <BR>";
echo $salto;
$q = 20;
$z = "20";

if($q == $z) {
    echo "$q es igual que $z<BR>"; /*(sin tener en cuenta los tipos)*/}
echo "Se realizo una operacion ==<BR>";
?>
</body>
</html>
