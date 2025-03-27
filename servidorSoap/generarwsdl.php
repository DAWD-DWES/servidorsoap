<?php

require '../vendor/autoload.php';
require_once './src/OperacionesWsdl.php';

use Laminas\Soap\AutoDiscover;

$autodiscover = new AutoDiscover();
$autodiscover->setClass(OperacionesWsdl::class)
        ->setUri('http://localhost/dwes06_server/servidorSoap/servidorwsdl.php');

// Obtener el XML del WSDL
$wsdlXml = $autodiscover->toXml();

// Guardarlo en un fichero
file_put_contents('operaciones.wsdl', $wsdlXml);
