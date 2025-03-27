<?php

require './src/OperacionesWsdl.php';
$wsdl = "http://localhost/dwes06_server/servidorSoap/operaciones.wsdl";

try {
    $server = new SoapServer($wsdl);
    $server->setClass(OperacionesWsdl::class);
    $server->handle();
} catch (SoapFault $f) {
    die("error en server: " . $f->getMessage());
}

