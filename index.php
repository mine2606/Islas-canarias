<?php 

require_once ("pasajero.php");
require_once ("ferry.php");
require_once ("ruta.php");
require_once ("agencia.php");
require_once ("TarifaPasajero.php");
require_once ("TarifaVehiculo.php");

$p1 = new Pasajero("Pedro", "A0000000", "26-06-1995", true);

$f1 = new Ferry(1, 300, 50);

$rutahp = new Rutas ("HIERRO", "PALMA", $f1, 20, 3);

$transmediterranea = new Agencia ();
$transmediterranea->inicializarRuta($rutahp);
echo $transmediterranea->venderBillete("HIERRO", "PALMA", $p1);



echo "</pre>";
print_r ($p1);
echo "<br>";
print_r ($f1);
echo "<br>";
print_r ($rutahp);
print_r ($transmediterranea);
echo "</pre>";

?>