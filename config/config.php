<?php

define("CLIENT_ID", "AXIK3bKM7RlH7GEPYcvOeWMksRHWC0WE_5WrKyksE7B1dhqKZXrK-9f7q5BivKE3AS08wiKBl8OaChxd");
define("CURRENCY", "USD");
define("KEY_TOKEN", "ABC.wqc-354*");
define("MONEDA", "$");

session_start();

$num_cart = 0;
if(isset($_SESSION['carrito']['productos'])){
    $num_cart = count($_SESSION['carrito']['productos']); 
}

?>