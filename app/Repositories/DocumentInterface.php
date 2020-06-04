<?php

namespace App\Repositories;


interface  DocumentInterface
{
        
        public function listAll();
        
        public function truncate();

        public function sincronizeAll();
}
?>