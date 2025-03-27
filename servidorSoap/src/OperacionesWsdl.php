<?php

class OperacionesWsdl
{
    /** Realiza la operación de resta
     * 
     * @param RestaRequest $request
     * @return RestaResponse
     */
    public function resta($request)
    {
        $response = new RestaResponse();
        $response->resultado = $request->a - $request->b;
        return $response;
    }

    /** Realiza la operación de suma
     * 
     * @param SumaRequest $request
     * @return SumaResponse
     */
    public function suma($request)
    {
        $response = new SumaResponse();
        $response->resultado = $request->a + $request->b;
        return $response;
    }

    /** Realiza la operación de saludo
     * 
     * @param SaludoRequest $request
     * @return SaludoResponse
     */
    public function saludo($request)
    {
        $response = new SaludoResponse();
        $response->saludo = "Hola " . $request->texto;
        return $response;
    }
}

class SumaRequest
{
    /**
     * @var float
     */
    public $a;

    /**
     * @var float
     */
    public $b;
}

class SumaResponse
{
    /**
     * @var float
     */
    public $resultado;
}

class RestaRequest
{
    /**
     * @var float
     */
    public $a;

    /**
     * @var float
     */
    public $b;
}

class RestaResponse
{
    /**
     * @var float
     */
    public $resultado;
}

class SaludoRequest
{
    /**
     * @var string
     */
    public $texto;
}

class SaludoResponse
{
    /**
     * @var string
     */
    public $saludo;
}

