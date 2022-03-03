<?php
    namespace App\Repository\Bio;

    interface BioInterface 
    {
        public function getAllBios();

        public function getBioById($id);

        public function createOrUpdate( $id = null, $collection = [] );

        public function deleteBio($id);
    }
