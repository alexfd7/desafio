<?php

namespace App\Repositories;

use App\Models\Document;
use Illuminate\Support\Facades\Crypt;
use App\Helpers\RestApi;
use App\Helpers\XmlNfe;
use GuzzleHttp\Client;


class DocumentRepository implements DocumentInterface
{
        protected $document;

        
        public function __construct(Document $document)
        {
                $this->document = $document;
             
        }
        
        public function listAll()
        {
                return $this->document->all();
                
        }

        
        public function getDocumentByKey($key)
        {
        
            return $this->document->where('key_nf',$key)->take(1)->get();
                
        }        
        
        public function truncate()
        {
                return $this->document->truncate();
        }


        public function sincronizeAll()
        {

                Document::truncate();
                
                $url = env('URL_REST_API');        
                $client= new Client();
                $headers = [
                    'Content-Type' => 'application/json',
                    'x-api-id' =>  env('X_API_ID'),
                    'x-api-key' =>  env('X_API_KEY')
                ];

                $restApi = new RestApi($url,$client,$headers);
                
                foreach ($restApi->getRequest()->data as $nfe){ 

                    $xml_decode = base64_decode($nfe->xml);
                    $xmlFormat = new XmlNfe($xml_decode); 


                    Document::create([ 'access_key'=>$nfe->access_key,'xml_base64'=>$nfe->xml, 'xml_decode'=>$xml_decode,'num_nf'=>$xmlFormat->getNumNfe(),'val_nf'=>$xmlFormat->getValNfe(),'key_nf'=> $xmlFormat ->getKeyNfe() ]);                                       
                                    
                }




        }    
}
?>