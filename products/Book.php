<?php
require_once __DIR__."/Product.php";

class Book extends Product{
    private float $weight;

    private static array $type_values = array(
        "weight"
    );

    public function __construct($params)
    {
        if (array_key_exists("weight", $params)) {
            $this->weight = $params['weight'];
            parent::__construct($params['SKU'], $params['name'], $params['price'], $params['product_type']);
        }
        else{
            // throw error key doesnot exist
        }
    }

    public static function getTypeValues(){
        return array_merge(Book::$type_values, parent::getTypeValues());
    }

    public function getWeight()
    {
        return $this->weight;
    }
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

}