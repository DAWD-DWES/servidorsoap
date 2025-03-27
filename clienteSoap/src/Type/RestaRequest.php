<?php

namespace Soap\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RestaRequest implements RequestInterface
{
    /**
     * @var null | float
     */
    private ?float $a = null;

    /**
     * @var null | float
     */
    private ?float $b = null;

    /**
     * Constructor
     *
     * @param null | float $a
     * @param null | float $b
     */
    public function __construct(?float $a, ?float $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    /**
     * @return null | float
     */
    public function getA() : ?float
    {
        return $this->a;
    }

    /**
     * @param null | float $a
     * @return static
     */
    public function withA(?float $a) : static
    {
        $new = clone $this;
        $new->a = $a;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getB() : ?float
    {
        return $this->b;
    }

    /**
     * @param null | float $b
     * @return static
     */
    public function withB(?float $b) : static
    {
        $new = clone $this;
        $new->b = $b;

        return $new;
    }
}

