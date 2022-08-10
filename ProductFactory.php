<?php

class ProductFactory{
    private array $productsList;

    public function __construct(array $productsList) {
        $this->productsList = $productsList;
    }

    public function formateByType($params) {
        if (array_key_exists("type", $params)) {
            return $this->productsList[$params["type"]]::getTypeValues();
        }

        return false;
    }

    public function createProduct($params)
    {
        if (array_key_exists("product_type", $params)) {
            return $this->productsList[$params["product_type"]]($params);
        }

        return false;
    }
}