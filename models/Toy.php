<?php
    require_once __DIR__ . '/Product.php';

    class Toy extends Product{
        protected $material;
        protected $resistance;

        public function __construct($_name, $_price, $_id, $_image, $_brand,  $_category,$_material, $_resistance){
            parent::__construct($_name, $_price, $_id, $_image, $_brand,  $_category);
            
            $this->setMaterial($_material);
            $this->setResistance($_resistance);
        }

        public function setMaterial($_material){
            $this->material = $_material;
        }

        public function setResistance($_resistance){
            $this->resistance = $_resistance;
        }

        public function getMaterial() : string{
            return $this->material;
        }

        public function getResistance() : string{
            return $this->resistance;
        }
    }