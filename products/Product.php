<?php
    class Product {
        private $SKU;
        private $name;
        private $price;
        private $product_type;
        private static array $type_values = array(
            "SKU",
            "name",
            "price",
            "product_type"
        );

        public function __construct($SKU, $name, $price, $product_type) {
            $this->SKU = $SKU;
            $this->name = $name;
            $this->price = $price;
            $this->product_type = $product_type;
        }

        public static function getTypeValues(){
            return Product::$type_values;
        }
    }
