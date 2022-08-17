<?php
require 'vendor/autoload.php';
require 'src/clase-producto.php';
require 'src/clase-usuario.php';
require 'src/clase-cliente.php';
// lA CLASE SE DEFINE CON LA PRIMERA LINEA EN MAYUSCULA
use Leodev\Poo\Producto;

$producto1 = new Producto ('taladro','dewalt','esto es un taladro',150000,30);
echo  $producto1 ->get_name();
echo "<br>";
echo  $producto1 ->get_branch();
echo "<br>";
echo  $producto1 ->get_description();
echo "<br>";
echo  $producto1 ->get_price();
echo "<br>";
echo  $producto1 ->get_stock();
echo "<br>";

$user = new Usuario ("12132132132","leonardo","tamayo","leleeoenfn@dflsjfks",1,"qwerty");
echo  $user ->get_documentu();
echo "<br>";
echo  $user ->get_nameu();
echo "<br>";
echo  $user ->get_surnameu();
echo "<br>";
echo  $user ->get_emailu();
echo "<br>";
echo  $user ->get_rolu();
echo "<br>";
echo  $user ->get_passwordu();
echo "<br>";

    
?>
