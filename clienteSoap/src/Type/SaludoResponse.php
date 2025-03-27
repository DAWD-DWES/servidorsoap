<?php

namespace Soap\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SaludoResponse implements ResultInterface
{
    /**
     * @var null | string
     */
    private ?string $saludo = null;

    /**
     * @return null | string
     */
    public function getSaludo() : ?string
    {
        return $this->saludo;
    }

    /**
     * @param null | string $saludo
     * @return static
     */
    public function withSaludo(?string $saludo) : static
    {
        $new = clone $this;
        $new->saludo = $saludo;

        return $new;
    }
}

