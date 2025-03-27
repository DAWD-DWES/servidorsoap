<?php

namespace Soap;

use Phpro\SoapClient\Caller\Caller;
use Soap\Type;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;

class OperacionesClient
{
    /**
     * @var Caller
     */
    private $caller;

    public function __construct(\Phpro\SoapClient\Caller\Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * resta
     *
     * @param RequestInterface & Type\RestaRequest $request
     * @return ResultInterface & Type\RestaResponse
     * @throws SoapException
     */
    public function resta(\Soap\Type\RestaRequest $request) : \Soap\Type\RestaResponse
    {
        $response = ($this->caller)('resta', $request);

        \Psl\Type\instance_of(\Soap\Type\RestaResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * suma
     *
     * @param RequestInterface & Type\SumaRequest $request
     * @return ResultInterface & Type\SumaResponse
     * @throws SoapException
     */
    public function suma(\Soap\Type\SumaRequest $request) : \Soap\Type\SumaResponse
    {
        $response = ($this->caller)('suma', $request);

        \Psl\Type\instance_of(\Soap\Type\SumaResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * saludo
     *
     * @param RequestInterface & Type\SaludoRequest $request
     * @return ResultInterface & Type\SaludoResponse
     * @throws SoapException
     */
    public function saludo(\Soap\Type\SaludoRequest $request) : \Soap\Type\SaludoResponse
    {
        $response = ($this->caller)('saludo', $request);

        \Psl\Type\instance_of(\Soap\Type\SaludoResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }
}

