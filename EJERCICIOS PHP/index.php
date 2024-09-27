
<?php
$edad = (int)readline("Por favor, ingresa tu edad: ");
if ($edad >= 18) {
    echo "Eres mayor de edad.\n";
} else {
    echo "Eres menor de edad.\n";
}
?>

<?php



$numero = (float)readline("Por favor, ingresa un número: ");
if ($numero > 0) {
    echo "El número es positivo.\n";
} elseif ($numero < 0) {
    echo "El número es negativo.\n";
} else {
    echo "El número es cero.\n";
}
?>


<?php
$rol = readline("Por favor, ingresa tu rol (admin/usuario): ");
if (strtolower($rol) === 'admin') {
    echo "Tienes permisos de administrador.\n";
} else {
    echo "No tienes permisos de administrador.\n";
}
?>


<?php

$nivel_membresia = readline("Por favor, ingresa tu nivel de membresía (básico, premium, vip): ");
switch (strtolower($nivel_membresia)) {
    case 'vip':
        echo "Tienes acceso a todo el contenido.\n";
        break;
    case 'premium':
        echo "Tienes acceso a contenido premium.\n";
        break;
    case 'básico':
        echo "Tienes acceso a contenido básico.\n";
        break;
    default:
        echo "Nivel de membresía no reconocido. No tienes acceso al contenido.\n";
        break;
}
?>

<?php
$calificacion = (int)readline("Por favor, ingresa una calificación del 1 al 5: ");
switch ($calificacion) {
    case 5:
        echo "Excelente\n";
        break;
    case 4:
        echo "Muy bien\n";
        break;
    case 3:
        echo "Bien\n";
        break;
    case 2:
        echo "Satisfactorio\n";
        break;
    case 1:
        echo "Insuficiente\n";
        break;
    default:
        echo "Calificación no válida. Debe estar entre 1 y 5.\n";
        break;
}
?>


<?php
$numero = (int)readline("Por favor, ingresa un número del 1 al 7: ");
switch ($numero) {
    case 1:
        echo "Lunes\n";
        break;
    case 2:
        echo "Martes\n";
        break;
    case 3:
        echo "Miércoles\n";
        break;
    case 4:
        echo "Jueves\n";
        break;
    case 5:
        echo "Viernes\n";
        break;
    case 6:
        echo "Sábado\n";
        break;
    case 7:
        echo "Domingo\n";
        break;
    default:
        echo "Número no válido. Debe estar entre 1 y 7.\n";
        break;
}
?>


<?php
$numero = (int)readline("Por favor, ingresa un número del 1 al 12: ");
switch ($numero) {
    case 1:
        echo "Enero\n";
        break;
    case 2:
        echo "Febrero\n";
        break;
    case 3:
        echo "Marzo\n";
        break;
    case 4:
        echo "Abril\n";
        break;
    case 5:
        echo "Mayo\n";
        break;
    case 6:
        echo "Junio\n";
        break;
    case 7:
        echo "Julio\n";
        break;
    case 8:
        echo "Agosto\n";
        break;
    case 9:
        echo "Septiembre\n";
        break;
    case 10:
        echo "Octubre\n";
        break;
    case 11:
        echo "Noviembre\n";
        break;
    case 12:
        echo "Diciembre\n";
        break;
    default:
        echo "Número no válido. Debe estar entre 1 y 12.\n";
        break;
}
?>


<?php

$codigo = readline("Por favor, ingresa un código de vehículo (1: Coche, 2: Motocicleta, 3: Camión, 4: Autobús): ");
switch ($codigo) {
    case 1:
        echo "Tipo de vehículo: Coche\n";
        break;
    case 2:
        echo "Tipo de vehículo: Motocicleta\n";
        break;
    case 3:
        echo "Tipo de vehículo: Camión\n";
        break;
    case 4:
        echo "Tipo de vehículo: Autobús\n";
        break;
    default:
        echo "Código no válido. Debe ser 1, 2, 3 o 4.\n";
        break;
}
?>



<?php
$numero = (int)readline("Por favor, ingresa un número: ");
if ($numero % 2 === 0) {
    echo "El número $numero es par.\n";
} else {
    echo "El número $numero es impar.\n";
}
?>


<?php

$numero = 1;
while ($numero <= 10) {
    echo $numero . "\n"; 
    $numero++; 
}
?>




<?php
$numero = 10;
while ($numero >= 1) {
    echo $numero . "\n"; 
    $numero--; 
}
?>



<?php

$contador = 1;

while ($contador <= 10) {
    $resultado = 5 * $contador; 
    echo "5 x $contador = $resultado\n"; 
    $contador++; 
}
?>


<?php

$contador = 1; 
$suma = 0; 

while ($contador <= 10) 
    $numero_par = $contador * 2; 
    $suma += $numero_par; 
    $contador++; 

echo "La suma de los primeros 10 números pares es: $suma\n";
?>



<?php

$numero = (int)readline("Por favor, ingresa un número para calcular su factorial: ");


$factorial = 1;


if ($numero < 0) {
    echo "El factorial no está definido para números negativos.\n";
} else {
    $contador = 1; 
    while ($contador <= $numero) {
        $factorial *= $contador; 
        $contador++; 
    }
    
    
    echo "El factorial de $numero es: $factorial\n";
}
?>



<?php

for ($numero = 1; $numero <= 10; $numero++) {
    echo $numero . "\n"; 
}
?>


<?php

for ($numero = 10; $numero >= 1; $numero--) {
    echo $numero . "\n"; 
}
?>



<?php

for ($contador = 1; $contador <= 10; $contador++) {
    $resultado = 5 * $contador; 
    echo "5 x $contador = $resultado\n"; 
}
?>


<?php

$suma = 0;

for ($contador = 1; $contador <= 10; $contador++) {
    $numero_par = $contador * 2; 
    $suma += $numero_par; 
}
echo "La suma de los primeros 10 números pares es: $suma\n";
?>




<?php

$numero = (int)readline("Por favor, ingresa un número para calcular su factorial: ");

$factorial = 1;
if ($numero < 0) {
    echo "El factorial no está definido para números negativos.\n";
} else {
    for ($i = 1; $i <= $numero; $i++) {
        $factorial *= $i; 
    }
    echo "El factorial de $numero es: $factorial\n";
}
?>



<?php
$frutas = array("Manzana", "Plátano", "Naranja", "Fresa", "Kiwi");

foreach ($frutas as $fruta) 
    echo $fruta . "\n"; 
?>




<?php

$numeros = array(10, 20, 30, 40, 50);

$suma = 0;
foreach ($numeros as $numero) {
    $suma += $numero; 
}

echo "La suma de los elementos del arreglo es: $suma\n";
?>



<?php

$nombres = array("Ana", "Luis", "María", "Juan", "Pedro");
$nombre_a_buscar = readline("Por favor, ingresa el nombre a buscar: ");

if (in_array($nombre_a_buscar, $nombres)) {
    echo "El nombre '$nombre_a_buscar' se encuentra en el arreglo.\n";
} else {
    echo "El nombre '$nombre_a_buscar' NO se encuentra en el arreglo.\n";
}
?>


<?php

$colores = array("Rojo", "Verde", "Azul", "Amarillo", "Naranja");
$cantidad_colores = count($colores);
echo "La cantidad de colores en el arreglo es: $cantidad_colores\n";
?>


<?php
$nombres = array("Juan", "Ana", "Pedro", "María", "Luis");

sort($nombres);
echo "Nombres ordenados alfabéticamente:\n";
foreach ($nombres as $nombre) {
    echo $nombre . "\n"; 
}
?>













