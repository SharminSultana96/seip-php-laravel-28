<?php


namespace App\classes;


class Product
{
    public $products = [];

    public function __construct()
    {
        $this->products = [
            0 => [
                'id'            => 1,
                'name'          => "T Shirt",
                'price'         => 2500,
                'description'   => "T shirt description",
                'image'         => 'assets/img/p2.jpg',
            ],

            1 => [
                'id'            => 2,
                'name'          => "Sony Mobile",
                'price'         => 55000,
                'description'   => "Sony Mobile Description",
                'image'         => 'assets/img/p1.jpg',
            ],

            2 => [
                'id'            => 3,
                'name'          => "Ladies Watch",
                'price'         => 25000,
                'description'   => "ladies watch description",
                'image'         => 'assets/img/p3.jpg',
            ],

            3 => [
                'id'            => 4,
                'name'          => "Gents Watch",
                'price'         => 25000,
                'description'   => "Watch description",
                'image'         => 'assets/img/p4.jpg',
            ],

            4 => [
                'id'            => 5,
                'name'          => "Bag",
                'price'         => 2500,
                'description'   => "Bag description",
                'image'         => 'assets/img/p5.jpg',
            ],
        ];
    }

    public function getAllProducts()
    {
        return $this->products;
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

