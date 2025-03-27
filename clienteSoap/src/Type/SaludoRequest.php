<?php

namespace Soap\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SaludoRequest implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $texto = null;

    /**
     * Constructor
     *
     * @param null | string $texto
     */
    public function __construct(?string $texto)
    {
        $this->texto = $texto;
    }

    /**
     * @return null | string
     */
    public function getTexto() : ?string
    {
        return $this->texto;
    }

    /**
     * @param null | string $texto
     * @return static
     */
    public function withTexto(?string $texto) : static
    {
        $new = clone $this;
        $new->texto = $texto;

        return $new;
    }
}

