<?php

namespace Soap\Type;

use Phpro\SoapClient\Type\ResultInterface;

class RestaResponse implements ResultInterface
{
    /**
     * @var null | float
     */
    private ?float $resultado = null;

    /**
     * @return null | float
     */
    public function getResultado() : ?float
    {
        return $this->resultado;
    }

    /**
     * @param null | float $resultado
     * @return static
     */
    public function withResultado(?float $resultado) : static
    {
        $new = clone $this;
        $new->resultado = $resultado;

        return $new;
    }
}

