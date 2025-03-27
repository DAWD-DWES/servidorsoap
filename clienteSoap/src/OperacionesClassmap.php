<?php

namespace Soap;

use Soap\Type;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMap;

class OperacionesClassmap
{
    public static function getCollection() : \Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection(
            new ClassMap('RestaRequest', Type\RestaRequest::class),
            new ClassMap('RestaResponse', Type\RestaResponse::class),
            new ClassMap('SumaRequest', Type\SumaRequest::class),
            new ClassMap('SumaResponse', Type\SumaResponse::class),
            new ClassMap('SaludoRequest', Type\SaludoRequest::class),
            new ClassMap('SaludoResponse', Type\SaludoResponse::class),
        );
    }
}

