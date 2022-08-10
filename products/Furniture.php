<?php
require_once __DIR__."/Product.php";

class Furniture extends Product{
    private string $dimensions ;

    private static array $type_values = array(
        "dimensions"
    );

    public function __construct($params)
    {
        if (array_key_exists("dimensions", $params)) {
            $this->dimensions = $params['dimensions'];
            parent::__construct($params['SKU'], $params['name'], $params['price'], $params['product_type']);
        }
        else{
            // throw error key doesnot exist
        }
    }

    public static function getTypeValues(){
        return array_merge(Furniture::$type_values, parent::getTypeValues());
    }

    public function getDimensions()
    {
        return $this->dimensions;
    }
    public function setDimensions($dimensions)
    {
        $this->dimensions = $dimensions;
    }

}