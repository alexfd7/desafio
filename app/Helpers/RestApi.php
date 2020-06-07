<?php

namespace App\Helpers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class RestApi
{
    
    protected $url;    
    protected $client;
    protected $headers;

    public function __construct($url,$client,$headers)
    {

        $this->url = $url;        
        $this->client= $client;
        $this->headers = $headers;
    }

    public function getRequest(){



         try {
                $request = $this->client->get($this->url, [
                    'headers'         => $this->headers,
                    'timeout'         => 5000,
                    'connect_timeout' => true,
                    'http_errors'     => true,            
                ]);


            $response = $request ? $request->getBody()->getContents() : null;
            $status = $request ? $request->getStatusCode() : abort(500,'Tente Novamente');

            if ($response && $status === 200 && $response !== 'null') {
                return $retorno = (object) json_decode($response);
            }

            return null;   

        } catch (ClientErrorResponseException $exception) {
            abort(500,'Tente Novamente');
        }

        

    } 
}
?>