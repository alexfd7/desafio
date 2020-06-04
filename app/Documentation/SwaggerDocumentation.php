<?php

namespace App\Documentation;

/**
* @OA\Info(title="Documentação API", 
*   contact={
*     "email": "alexfd7@gmail.com"
*   },
*   version="0.1")
*/


    /**
     * @OA\SecurityScheme(
     *     securityScheme="ApiKeyAuth",
     *     in="header",
     *     type="apiKey",
     *     description="AUTH-TOKEN",
     *     name="AUTH-TOKEN",
     *     scheme="http",     
     * )
     */    


/**
 * @OA\Tag(
 *     name="Documents", 
 * )
*/

    /**
     * @OA\Get(path="/api/getDocumentByKey/{key}",  tags={"Documents"},
     *   operationId="getDocumentByKey", summary="Return a Nfe by key",
     *   @OA\Parameter(
     *     name="key",
     *     in="path",
     *     required=true,  description="Key Access of Nfe",
     *     @OA\Schema(type="string")
     *   ),
     *   @OA\Response(response=200,
     *     description="Successful!",         
     *   ),
     *   @OA\Response(response=401,
     *     description="Token incorrect or not found!",         
     *   ),     
     *     security={
     *         {"ApiKeyAuth": {}}
     *     }     
     * )
     */

    /**
     * @OA\Get(path="/api/getValueByKey/{key}",  tags={"Documents"},
     *   operationId="getValueByKey", summary="Return value of Nfe by key",  
     *   @OA\Parameter(
     *     name="key",
     *     in="path",
     *     required=true, description="Key Access of Nfe",
     *     @OA\Schema(type="string")
     *   ),
     *   @OA\Response(response=200,
     *     description="Successful!",         
     *   ),
     *   @OA\Response(response=401,
     *     description="Token incorrect or not found!",         
     *   ),     
     *     security={
     *         {"ApiKeyAuth": {}}
     *     }     
     * )
     */



?>