<?php
    require_once __DIR__ . '/Product.php';

    class Food extends Product{
        public $ingredients;
        public $deadline;

        public function __construct($_name, $_price, $_id, $_image, $_brand,  $_category,$_ingredients, $_deadline){
            parent::__construct($_name, $_price, $_id, $_image, $_brand,  $_category);
            
            $this->setIngredients($_ingredients);
            $this->setDeadline($_deadline);
        }


        public function setIngredients($_ingredients){
            $this->ingredients = $_ingredients;
        }

        public function setDeadline($_deadline){
            $this->deadline = $_deadline;
        }

        public function getMaterial() : string{
            return $this->ingredients;
        }

        public function getDeadline() : string{
            return $this->deadline;
        }
    
    }