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
                'image'         => 'assets/img/project-7.jpg',
            ],

            1 => [
                'id'            => 2,
                'name'          => "Sony Mobile",
                'price'         => 55000,
                'description'   => "Sony Mobile Description",
                'image'         => 'assets/img/project-6.jpg',
            ],

            2 => [
                'id'            => 3,
                'name'          => "Samsung",
                'price'         => 25000,
                'description'   => "samsung mobile description",
                'image'         => 'assets/img/project-5.jpg',
            ],
        ];
    }

    public function getAllProducts()
    {
        return $this->products;
    }
}
