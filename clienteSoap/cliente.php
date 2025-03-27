<?php

$url = 'http://localhost/dwes06_server/servidorSoap/servidor.php';
$uri = 'http://localhost/dwes06_server/servidorSoap';

try {
    $cliente = new SoapClient(null, ['location' => $url, 'uri' => $uri,
        'trace' => true
    ]);
} catch (SoapFault $ex) {
    die("Error al crear cliente SOAP: " . $ex->getMessage());
}

// Llamar a los métodos
$saludoResponse = $cliente->saludo("Manolo");
$sumaResponse = $cliente->suma(51, 29);
$restaResponse = $cliente->resta(51, 29);

// Mostrar resultados
echo "$saludoResponse. La suma es: $sumaResponse y la resta es: $restaResponse";

