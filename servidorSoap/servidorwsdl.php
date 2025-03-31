<?php

use ServSOAP\OperacionesWsdl;
$wsdl = "http://localhost/servidorsoap/servidorSoap/operaciones.wsdl";

try {
// pointing to the current file here
    $soap = new Laminas\Soap\Server($wsdl);
    $soap->setClass(OperacionesWsdl::class);
    $soap->handle();
} catch (SoapFault $f) {
    die("error en server: " . $f->getMessage());
}
