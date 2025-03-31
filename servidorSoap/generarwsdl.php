<?php

require './vendor/autoload.php';

use Laminas\Soap\AutoDiscover;
use ServSOAP\OperacionesWsdl;

$autodiscover = new AutoDiscover();
$autodiscover->setClass(OperacionesWsdl::class)
        ->setUri('http://localhost/servidorsoap/servidorSoap/servidorwsdl.php');

// Obtener el XML del WSDL
$wsdlXml = $autodiscover->toXml();

// Guardarlo en un fichero
file_put_contents('operaciones.wsdl', $wsdlXml);
