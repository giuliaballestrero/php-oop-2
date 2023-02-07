<?php 
    require_once __DIR__ . '/Toy.php';
    require_once __DIR__ . '/Kennels.php';
    require_once __DIR__ . '/Food.php';

    class Product{
        protected $name;
        protected $price;
        protected $id;
        protected $image;
        protected $brand;
        protected $category;
        public $imgLink;

        public function __construct($_name, $_price, $_id, $_image, $_brand, $_category){
            $this->setName($_name);
            $this->setPrice($_price);
            $this->setId($_id);
            $this->setImage($_image);
            $this->setBrand($_brand);
            $this->setCategory($_category);
        }

        public function setName($_name){
            $this->name = $_name;
        }

        public function getName() : string{
            return $this->name;
        }

        public function setPrice($_price){
            $this->price = $_price;
        }

        public function getPrice() : float{
            return $this->price;
        }

        public function setId($_id){
            $this->id = $_id;
        }

        public function getId() : int{
            return $this->id;
        }

        public function getImage() : string{
            return $this->image;
        }

        public function setImage($_resistance){
            $this->image = $_resistance;
        }

        public function setBrand($_brand){
            $this->brand = $_brand;
        }

        public function getBrand() : string{
            return $this->brand;
        }

        public function getCategory(){
            return $this->category;
        }
        
        public function setCategory($_category) {
            $categoriesList = ['dog','cat'];
            if (in_array($_category,$categoriesList)) {
                $this->category = $_category;

                $this->imgLink = ($_category === 'cat') ? 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fst2.depositphotos.com%2F1052079%2F6817%2Fv%2F450%2Fdepositphotos_68179253-stock-illustration-silhouette-of-a-cat-icon.jpg&f=1&nofb=1&ipt=ecd3fd7b140d73b9ba42d26f22502932e20ca866656ae34d280dd2310c9abe65&ipo=images
                ' : 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fstatic8.depositphotos.com%2F1217087%2F974%2Fv%2F600%2Fdepositphotos_9748074-stock-illustration-german-pointer.jpg&f=1&nofb=1&ipt=a9ff34445efc8201d3157531cbc86fa6c77705c3d8668c6fcc94a701fd36ffe6&ipo=images
                ';
            } else {
                $this->category = null;
            }
        }
    }
?>