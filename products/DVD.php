<?php

require_once __DIR__."/Product.php";

class DVD extends Product{
    private int $size;
    private static array $type_values = array(
        "size"
    );

    public function __construct($params)
    {
        if (array_key_exists("size", $params)) {
            $this->size = $params['size'];
            parent::__construct($params['SKU'], $params['name'], $params['price'], $params['product_type']);
        }
        else{
            // throw error key doesnot exist
        }
    }

    public static function getTypeValues(){
        return array_merge(DVD::$type_values, parent::getTypeValues());
    }

    public function getSize()
    {
        return $this->size;
    }
    public function setSize($size)
    {
        $this->size = $size;
    }
}