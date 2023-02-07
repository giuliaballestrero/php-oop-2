<?php
    require_once __DIR__ . '/Product.php';

    class Kennels extends Product{
        public $material;
        public $size;

        public function __construct($_name, $_price, $_id, $_image, $_brand,  $_category,$_material, $_size){
            parent::__construct($_name, $_price, $_id, $_image, $_brand,  $_category);
            
            $this->setMaterial($_material);
            $this->setSize($_size);
        }


        public function setMaterial($_material){
            $this->material = $_material;
        }

        public function setSize($_size){
            $this->size = $_size;
        }

        public function getMaterial() : string{
            return $this->material;
        }

        public function getsize() : string{
            return $this->size;
        }
    }