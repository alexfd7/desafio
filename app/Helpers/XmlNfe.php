<?php

namespace App\Helpers;

use Laravie\Parser\Xml\Reader;
use Laravie\Parser\Xml\Document;

class XmlNfe
{
    
    
    protected $xmlString;        
    protected $xml; 


    public function __construct($xmlString)
    {

        $this->xmlString = $xmlString;        

    }

    public function getJson(){
  
        $this->xml = str_replace('@attributes','attributes',$this->getJsonString());
        $json = json_decode($this->xml);
        return $json;
    
    } 


    public function getJsonString(){
        
        $this->xml = simplexml_load_string($this->xmlString);
        $json = json_encode($this->xml);
        return $json;
    
    }     

    public function getNumNfe(){
        
        $xmlJsonFormat = $this->getJson();

        if( isset ( $xmlJsonFormat->NFe) ) {
            return (int) $xmlJsonFormat->NFe->infNFe->ide->nNF;
        }
        if(isset ( $xmlJsonFormat->infNFe)){
            return (int) $xmlJsonFormat->infNFe->ide->nNF;
        }
        
        return  0;
    
    } 

    public function getValNfe(){
        
        $xmlJsonFormat = $this->getJson();

        if( isset ( $xmlJsonFormat->NFe) ) {
            return (float) $xmlJsonFormat->NFe->infNFe->total->ICMSTot->vNF;
        }
        if(isset ( $xmlJsonFormat->infNFe)){
            return (float) $xmlJsonFormat->infNFe->ide->nNF;
        }
        
        return  0;
    
    }     

    public function getKeyNfe(){
        
        $xmlJsonFormat = $this->getJson();

        if( isset ( $xmlJsonFormat->NFe) ) {
            return  $xmlJsonFormat->NFe->infNFe->attributes->Id;
        }
        if(isset ( $xmlJsonFormat->infNFe)){
            return $xmlJsonFormat->infNFe->attributes->Id;
        }
        
        return  0;
    
    }         

   

}
?>