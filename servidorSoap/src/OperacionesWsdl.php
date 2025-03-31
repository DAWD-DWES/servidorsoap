<?php

namespace ServSOAP;

use ServSOAP\Dto\{
    SumaRequest,
    SumaResponse,
    RestaRequest,
    RestaResponse,
    SaludoRequest,
    SaludoResponse
};

class OperacionesWsdl
{
    /** Realiza la operación de resta
     * 
     * @param ServSOAP\Dto\RestaRequest $request
     * @return ServSOAP\Dto\RestaResponse
     */
    public function resta($request)
    {
        $response = new RestaResponse();
        $response->resultado = $request->a - $request->b;
        return $response;
    }

    /** Realiza la operación de suma
     * 
     * @param ServSOAP\Dto\SumaRequest $request
     * @return ServSOAP\Dto\SumaResponse
     */
    public function suma($request)
    {
        $response = new SumaResponse();
        $response->resultado = $request->a + $request->b;
        return $response;
    }

    /** Realiza la operación de saludo
     * 
     * @param ServSOAP\Dto\SaludoRequest $request
     * @return ServSOAP\Dto\SaludoResponse
     */
    public function saludo($request)
    {
        $response = new SaludoResponse();
        $response->saludo = "Hola " . $request->texto;
        return $response;
    }
}
