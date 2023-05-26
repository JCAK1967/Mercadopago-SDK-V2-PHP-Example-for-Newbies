<?php
// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';

// Configurar las credenciales de Mercado Pago
MercadoPago\SDK::setAccessToken('TEST-65432342-COMLPETAR-CON-EL-TOKEN-b1b6f08cd5647f71');

// Crear la preferencia
$preference = new MercadoPago\Preference();

$item = new MercadoPago\Item();
$item->title = 'Mi producto';
$item->quantity = 1;
$item->unit_price = 1999.56;

// Cargo en preferencias "items" el array con los datos de mi producto.
$preference->items = array($item);

// Limita el uso de MercadoPago a usuarios registrados. Sin esta linea pueden pagar también invitados.
//$preference->purpose = 'wallet_purchase';

// Cargo en preferencias "back_urls", el array con las url a las paginas de mensajes.
$preference->back_urls = array(
    "success" => "https://dominio.com/mercadopago/success/success.php",
    "failure" => "https://dominio.com/mercadopago/failure/failure.php",
    "pending" => "https://dominio.com/mercadopago/pending/pending.php"
);
$preference->auto_return = "approved";

// Guardo las preferencias
$preference->save();

// Obtener el ID de la preferencia
$preferenceId = $preference->id;

// Devolver el ID de la preferencia como respuesta JSON
header('Content-Type: application/json');
echo json_encode(['preferenceId' => $preferenceId]);
?>
