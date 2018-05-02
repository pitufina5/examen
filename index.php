<?php
require_once( "persona.php");
require_once("pedidos.php");

$a = new Cliente("Pedro",25,100 );
$b = new Cliente ("Luis", 31,250);
$c = new Cliente ("Arturo",29,17.10);



$p1a = new Pedido("05-02-2018",40);
$p2a = new Pedido("10-02-2018",28);

$p1b = new Pedido("15-02-2018",55);
$p2b = new Pedido("20-02-2018",25);

$p1c = new Pedido("21-02-2018",41);
$p2c = new Pedido("25-02-2018",26);

$alp->altaPedido($p1a);
$alp->altaPedido($p2a);

$alp->altaPedido($p1b);
$alp->altaPedido($p2b);

$alp->altaPedido($p1c);
$alp->altaPedido($p2c);

//esto aki no se pone//
echo '<pre>';
print_r($persona);
print_r($pedido);
print_r($fecha);
print_r($importe);
echo '</pre>';