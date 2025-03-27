<?php

require_once '../vendor/autoload.php';

use Soap\OperacionesClientFactory;
use Soap\Type\SumaRequest;
use Soap\Type\RestaRequest;
use Soap\Type\SaludoRequest;

// WSDL del servidor
$wsdl = 'http://localhost/servidorSoap/servidorSoap/operaciones.wsdl';

// Crear el cliente SOAP con la factory generada por soap-client
$cliente = OperacionesClientFactory::factory($wsdl = 'http://localhost/dwes06_server/servidorSoap/operaciones.wsdl');
// Crear objetos de entrada
$saludoRequest = new SaludoRequest('Manolo');
$sumaRequest = new SumaRequest(51, 29);
$restaRequest = new RestaRequest(51, 29);

// Llamar a los métodos
$saludoResponse = $cliente->saludo($saludoRequest);
$sumaResponse = $cliente->suma($sumaRequest);
$restaResponse = $cliente->resta($restaRequest);

// Mostrar resultados
echo "{$saludoResponse->getSaludo()}. La suma es: {$sumaResponse->getResultado()} y la resta es: {$restaResponse->getResultado()}";