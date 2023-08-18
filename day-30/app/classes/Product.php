<?php


namespace App\classes;


class Product
{
    public $products = [], $result = [];

    public function __construct()
    {
        $this->products = [
            0 => [
               'id' => 1,
               'category_id' => 3,
               'name' => 'Formal Shirt',
               'price' => '3500',
               'description' => 'Formal Shirt',
               'image' => 'assets/img/p2.jpg',
            ],
            1 => [
                'id' => 2,
                'category_id' => 1,
                'name' => 'Formal Pant',
                'price' => '3500',
                'description' => 'Formal Shirt',
                'image' => 'assets/img/p6.jpg',
            ],
            2 => [
                'id' => 3,
                'category_id' => 3,
                'name' => 'Formal Shoe',
                'price' => '3500',
                'description' => 'Formal Shoe',
                'image' => 'assets/img/p7.jpg',
            ],
            3 => [
                'id' => 4,
                'category_id' => 1,
                'name' => 'Gents Watch',
                'price' => '3500',
                'description' => 'Formal Shirt',
                'image' => 'assets/img/p4.jpg',
            ],
            4 => [
                'id' => 4,
                'category_id' => 2,
                'name' => 'Ladies Watch',
                'price' => '3500',
                'description' => 'Formal Shirt',
                'image' => 'assets/img/p3.jpg',
            ],
            5 => [
                'id' => 5,
                'category_id' => 4,
                'name' => 'Sports Item',
                'price' => '3500',
                'description' => 'Formal Shoes',
                'image' => 'assets/img/p5.jpg',
            ],

        ];
    }

    public function getAllProduct()
    {
        return $this->products;
    }

    public function getProductByCategoryId($id)
    {
        foreach ($this->products as $product)
        {
            if ($product['category_id'] == $id)
            {
                array_push($this->result, $product);
            }
        }

        return $this->result;
    }

    public function getProductById($id)
    {
        foreach ($this->products as $product)
        {
            if ($product['id'] == $id)
            {
                return $product;
            }
        }
    }
}