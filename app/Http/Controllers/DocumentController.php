<?php

namespace App\Http\Controllers;

use App\Repositories\DocumentInterface;


class DocumentController extends Controller
{

    protected $document;
    
    public function __construct(DocumentInterface $document )
    {

        $this->document = $document;
        
    }

    public function listAll()
    {


         $documents = $this->document->listAll();
         return view('pages.home',['text'=>'Lista de Notas Fiscais','documents'=>$documents]);

    }


    public function sincronizeAll()
    {
        

        $documents = $this->document->sincronizeAll();
        return redirect()->route('listAll');
        

    } 


    public function getDocumentByKey($key)
    {
        
        $nfe = $this->document->getDocumentByKey($key);
        return response()->json($nfe);
        
    }  





    public function getValueByKey($key)
    {
        
        $nfe = $this->document->getDocumentByKey($key);
        return response()->json($nfe[0]->val_nf);
        
    }               


}
