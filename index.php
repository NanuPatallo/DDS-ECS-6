<?php

require_once 'modelo/proveedor.php';
require_once 'modelo/producto.php';

$prov1 = new Proveedor();
// $id $nombre $cuil $direccion $telefono
$prov1->setId(111);
$prov1->setNombre('Macro');
$prov1->setCuil('3030303030');
$prov1->setDireccion('Parana 885');
$prov1->setTelefono('34152687');

$prov2 = new Proveedor();
// $id $nombre $cuil $direccion $telefono
$prov2->setId(222);
$prov2->setNombre('Alem');
$prov2->setCuil('3040562835');
$prov2->setDireccion('Reconquista 500');
$prov2->setTelefono('3414587212');

$prov3 = new Proveedor();
// $id $nombre $cuil $direccion $telefono
$prov3->setId(333);
$prov3->setNombre('Don Tito');
$prov3->setCuil('3056784912');
$prov3->setDireccion('Bv.Rondeau 4622');
$prov3->setTelefono('341698547');


$prod = new Producto();
//  $id $nombre $codigo $precio $marca
$prod->setId(5648);
$prod->setNombre('Salsa de Tomates');
$prod->setCodigo('0002365');
$prod->setPrecio(200);
$prod->setMarca('Baggio');
$prod->setProveedor($prov1);
$prod->setProveedor($prov2);
$prod->setProveedor($prov3);



$prod->MostrarInformacion();
